<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\AboutTranslate;
use App\Models\News;
use App\Models\NewsTranslate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function index()
    {
        $data = News::select('news_translate.*',DB::raw("(GROUP_CONCAT(lang SEPARATOR ',')) as language"),'news_item.status','news_item.created_at')
            ->leftJoin('news_translate','news_translate.item_id','=','news_item.id')
            ->groupBy('item_id')
            ->where('news_translate.id' ,'!=','')
            ->get();

        foreach ($data as $key => $val)
        {

            $data[$key]['language'] = explode(',',$val->language);
        }

        return view('admin.pages.news',['data'=>$data]);
    }

    public function addNews($id,$key,$lang = '')
    {
        if ($key == 'new')
        {
            $data = new \stdClass();
        }elseif ($key == 'edit'){
            $data = $this->getAboutData($id,$lang);
        }else{
            $data = new \stdClass();
            $data->lang = $lang;
            $data->item_id = $id;
        }

        return view('admin.pages.addNews',['newsData'=>$data]);
    }

    public function getAboutData($id,$lang)
    {
        $data = News::select('news_translate.*','news_item.status','news_item.img','news_item.created_at')
            ->leftJoin('news_translate','news_translate.item_id','=','news_item.id')
            ->groupBy('item_id')
            ->where('item_id' ,'=',$id)
            ->where('news_translate.lang' ,'=',$lang)
            ->first();

        return $data;
    }

    public function saveNews()
    {
        $validator = validator(request()->all(),[
            'status' => 'nullable|string',
            'language' => 'required|string',
            'name' => 'required|string',
            'newsImage' => 'required|string',
            'catagory' => 'required|integer',
            'info' => 'required|string'
        ]);

        if (request()->get('item_id') > 0)
        {
            $id = request()->get('item_id');
            $translate = NewsTranslate::where('item_id',$id)->where('lang',request()->get('lang'))->first();

            DB::table('news_item')->where('id','=',$id)->update([
                'status' => request()->get('status'),
                'catagory' => request()->get('catagory'),
                'img' => request()->get('newsImage'),
            ]);

            if ($translate == null){
                $newsTranslate = new NewsTranslate();
                $newsTranslate->item_id = $id;
                $newsTranslate->info = request()->get('info');
                $newsTranslate->name = request()->get('name');
                $newsTranslate->lang = request()->get('lang');
                $newsTranslate->save();
            }else{
                DB::table('news_translate')->where('item_id','=',$id)->where('lang','=',request()->get('lang'))->update([
                    'name' => request()->get('name'),
                    'info' => request()->get('info')
                ]);
            }
        }else{
            if ($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInput();
            }else {
                $news = new News();
                $news->status = request()->get('status');
                $news->catagory = request()->get('catagory');
                $news->img = request()->get('newsImage');
                $news->save();

                $newsTranslate = new NewsTranslate();
                $newsTranslate->item_id = $news->id;
                $newsTranslate->info = request()->get('info');
                $newsTranslate->lang = request()->get('language');
                $newsTranslate->name = request()->get('name');
                $newsTranslate->save();
            }
        }

        return redirect('admin/news');
    }

    public function trashNewsInfo($id)
    {
        if (isset($id) && $id > 0){
            $about = News::where('id',$id)->delete();
            $aboutT = NewsTranslate::where('item_id',$id)->delete();
            if ($about && $aboutT)
            {
                return redirect('admin/news');
            }
        }else{
            return redirect('admin/news');
        }
    }

    public function trashNewsOnlyTranslate($id)
    {
        if (isset($id) && $id > 0){
            $news = NewsTranslate::where('id',$id)->delete();
            if ($news)
            {
                return redirect('admin/news');
            }
        }else{
            return redirect('admin/news');
        }
    }
}

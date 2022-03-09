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

    public function addNews()
    {
        return view('admin.pages.addNews');
    }

    public function saveNews()
    {

        $validator = validator(request()->all(),[
            'status' => 'nullable|string',
            'language' => 'required|string',
            'catagory' => 'required|integer',
            'info' => 'required|string'
        ]);

        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }else {
            $news = new News();
            $news->status = request()->get('status');
            $news->catagory = request()->get('catagory');
            $news->save();

            $newsTranslate = new NewsTranslate();
            $newsTranslate->item_id = $news->id;
            $newsTranslate->info = request()->get('info');
            $newsTranslate->lang = request()->get('language');
            $newsTranslate->save();
        }

        return redirect('admin/add-news');
    }

}

<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use App\Models\PostTranslate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\AboutTranslate;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{
    public function index()
    {
        $data = About::select('about_us_translate.*',DB::raw("(GROUP_CONCAT(lang SEPARATOR ',')) as language"),'about_us_item.status','about_us_item.img','about_us_item.created_at')
            ->leftJoin('about_us_translate','about_us_translate.item_id','=','about_us_item.id')
            ->groupBy('item_id')
            ->where('about_us_translate.id' ,'!=','')
            ->get();

        foreach ($data as $key => $val)
        {

            $data[$key]['language'] = explode(',',$val->language);
        }

        return view('admin.pages.aboutUs',['data'=>$data]);
    }

    public function addNewAboutInfo($id,$key,$lang = '')
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

        return view('admin.pages.addNewAboutInfo',['aboutData'=>$data]);
    }

    public function saveAboutInfo()
    {
        $validator = validator(request()->all(),[
            'status' => 'nullable|string',
            'language' => 'required|string',
            'info_name' => 'required|string',
            'info' => 'required|string'
        ]);
        $input = $this->fileUpload(\request());
        if (request()->get('item_id') > 0)
        {
            $id = request()->get('item_id');
            $translate = AboutTranslate::where('item_id',$id)->where('lang',request()->get('lang'))->first();

            if (!request()->hasFile('image')) {
                DB::table('about_us_item')->where('id','=',$id)->update([
                    'status' => request()->get('status')
                ]);
            }else{
                DB::table('about_us_item')->where('id','=',$id)->update([
                    'status' => request()->get('status'),
                    'img' => $input['image']
                ]);
            }

            if ($translate == null){
                $aboutTranslate = new AboutTranslate();
                $aboutTranslate->item_id = $id;
                $aboutTranslate->info = request()->get('info');
                $aboutTranslate->name = request()->get('info_name');
                $aboutTranslate->lang = request()->get('lang');
                $aboutTranslate->save();
            }else{
                DB::table('about_us_translate')->where('item_id','=',$id)->where('lang','=',request()->get('lang'))->update([
                    'name' => request()->get('info_name'),
                    'info' => request()->get('info')
                ]);
            }
        }else{
            if ($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInput();
            }else {


                $about = new About();
                $about->status = request()->get('status');
                $about->img = $input['image'];
                $about->save();

                $aboutTranslate = new AboutTranslate();
                $aboutTranslate->item_id = $about->id;
                $aboutTranslate->info = request()->get('info');
                $aboutTranslate->name = request()->get('info_name');
                $aboutTranslate->lang = request()->get('language');
                $aboutTranslate->save();


            }
        }

        return redirect('admin/about');
    }

    public function trashAboutInfo($id)
    {
        if (isset($id) && $id > 0){
            $about = About::where('id',$id)->delete();
            $aboutT = AboutTranslate::where('item_id',$id)->delete();
            if ($about && $aboutT)
            {
                return redirect('admin/about');
            }
        }else{
            return redirect('admin/about');
        }
    }

    public function trashAboutOnlyTranslate($id)
    {
        if (isset($id) && $id > 0){
            $about = AboutTranslate::where('id',$id)->delete();
            if ($about)
            {
                return redirect('admin/about');
            }
        }else{
            return redirect('admin/about');
        }
    }

    public function fileUpload($request)
    {
        $input = $request->all();

        if ($request->hasFile('image')) {
            $destination_path = 'public/img';
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('image')->storeAs($destination_path, $image_name);
            $input['image'] = $image_name;
        }
        return $input;
    }

    public function getAboutData($id,$lang)
    {
        $data = About::select('about_us_translate.*','about_us_item.status','about_us_item.img','about_us_item.created_at')
            ->leftJoin('about_us_translate','about_us_translate.item_id','=','about_us_item.id')
            ->groupBy('item_id')
            ->where('item_id' ,'=',$id)
            ->where('about_us_translate.lang' ,'=',$lang)
            ->first();

        return $data;
    }
}

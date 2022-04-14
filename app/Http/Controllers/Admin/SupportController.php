<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\FaqTranslate;
use App\Models\TutorialVideo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SupportController extends Controller
{
    public function index()
    {
        $tutorialVideo = TutorialVideo::first();
        $data = Faq::select('faq_translate.*',DB::raw("(GROUP_CONCAT(lang SEPARATOR ',')) as language"),'faq_item.status')
            ->leftJoin('faq_translate','faq_translate.item_id','=','faq_item.id')
            ->groupBy('item_id')
            ->where('faq_translate.id' ,'!=','')
            ->get();

        foreach ($data as $key => $val)
        {

            $data[$key]['language'] = explode(',',$val->language);
        }

        return view('admin.pages.support',['tutorialVideo'=>$tutorialVideo,'data'=>$data]);
    }

    public function saveTutorialVideo()
    {
        if (isset($_POST['data'])){
            $videoIsset = TutorialVideo::first();
            if (!isset($videoIsset->id))
            {
                $video = new TutorialVideo();
                $video->url = $_POST['data'];
                $video->save();

                if (isset($video->id)){
                    return response()->json(array(
                        'success' => true
                    ));
                }else{
                    return response()->json(array(
                        'success' => false
                    ));
                }
            }else{
                TutorialVideo::where('id','=',$videoIsset->id)->update([
                    'url' => $_POST['data']
                ]);

                return response()->json(array(
                    'success' => true
                ));
            }

        }else{
            return response()->json(array(
                'success' => false
            ));
        }

    }

    public function addNewFaq($id,$key,$lang = '')
    {
        if ($key == 'new')
        {
            $data = new \stdClass();
        }elseif ($key == 'edit'){
            $data = $this->getFaqData($id,$lang);
        }else{
            $data = new \stdClass();
            $data->lang = $lang;
            $data->item_id = $id;
        }

        return view('admin.pages.addNewFaq',['faqData'=>$data]);
    }

    public function saveFaq()
    {
        $validator = validator(request()->all(),[
            'status' => 'nullable|string',
            'language' => 'required|string',
            'question' => 'required|string',
            'answer' => 'required|string'
        ]);

        if (request()->get('item_id') > 0)
        {

            $id = request()->get('item_id');
            $translate = FaqTranslate::where('item_id',$id)->where('lang',request()->get('lang'))->first();

            DB::table('faq_item')->where('id','=',$id)->update([
                'status' => request()->get('status')
            ]);


            if ($translate == null){
                $aboutTranslate = new FaqTranslate();
                $aboutTranslate->item_id = $id;
                $aboutTranslate->question = request()->get('question');
                $aboutTranslate->answer = request()->get('answer');
                $aboutTranslate->lang = request()->get('lang');
                $aboutTranslate->save();
            }else{
                DB::table('faq_translate')->where('item_id','=',$id)->where('lang','=',request()->get('lang'))->update([
                    'question' => request()->get('question'),
                    'answer' => request()->get('answer'),
                    'lang' => request()->get('lang')
                ]);
            }
        }else{
            if ($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInput();
            }else {


                $faq = new Faq();
                $faq->status = request()->get('status');
                $faq->save();

                $faqTranslate = new FaqTranslate();
                $faqTranslate->item_id = $faq->id;
                $faqTranslate->question = request()->get('question');
                $faqTranslate->answer = request()->get('answer');
                $faqTranslate->lang = request()->get('language');
                $faqTranslate->save();


            }
        }

        return redirect('admin/support');
    }

    public function getFaqData($id,$lang)
    {
        $data = Faq::select('faq_translate.*','faq_item.status')
            ->leftJoin('faq_translate','faq_translate.item_id','=','faq_item.id')
            ->groupBy('item_id')
            ->where('item_id' ,'=',$id)
            ->where('faq_translate.lang' ,'=',$lang)
            ->first();

        return $data;
    }

    public function trashSupportInfo($id)
    {
        if (isset($id) && $id > 0){
            $about = Faq::where('id',$id)->delete();
            $aboutT = FaqTranslate::where('item_id',$id)->delete();
            if ($about && $aboutT)
            {
                return redirect('admin/support');
            }
        }else{
            return redirect('admin/support');
        }
    }

    public function trashSupportOnlyTranslate($id)
    {
        if (isset($id) && $id > 0){
            $about = FaqTranslate::where('id',$id)->delete();
            if ($about)
            {
                return redirect('admin/support');
            }
        }else{
            return redirect('admin/support');
        }
    }
}

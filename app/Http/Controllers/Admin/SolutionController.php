<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Solution;
use App\Models\SolutionTranslate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SolutionController extends Controller
{
    public function index()
    {
        $data = Solution::select('solution_translate.*',DB::raw("(GROUP_CONCAT(lang SEPARATOR ',')) as language"),'solution_item.status','solution_item.back_img','solution_item.created_at')
            ->leftJoin('solution_translate','solution_translate.item_id','=','solution_item.id')
            ->groupBy('item_id')
            ->where('solution_translate.id' ,'!=','')
            ->get();

        foreach ($data as $key => $val)
        {

            $data[$key]['language'] = explode(',',$val->language);
        }
        return view('admin.pages.solution',['data'=>$data]);
    }

    public function addNewSolution($id,$key,$lang = '')
    {
        if ($key == 'new')
        {
            $data = new \stdClass();
        }elseif ($key == 'edit'){
            $data = $this->getSolutionData($id,$lang);
        }else{
            $data = new \stdClass();
            $data->lang = $lang;
            $data->item_id = $id;
        }

        return view('admin.pages.addNewSolution',['solutionData'=>$data]);
    }

    public function getSolutionData($id,$lang)
    {
        $data = Solution::select('solution_translate.*','solution_item.status','solution_item.back_img')
            ->leftJoin('solution_translate','solution_translate.item_id','=','solution_item.id')
            ->groupBy('item_id')
            ->where('item_id' ,'=',$id)
            ->where('solution_translate.lang' ,'=',$lang)
            ->first();

        return $data;
    }

    public function saveSolutionInfo()
    {
        $validator = validator(request()->all(),[
            'status' => 'nullable|integer',
            'language' => 'required|string',
            'category_name' => 'required|string',
            'name' => 'required|string',
            'first_info' => 'required|string',
            'last_info' => 'required|string',
            'newsImage' => 'required|string'
        ]);
        if (request()->get('item_id') > 0)
        {
            $id = request()->get('item_id');
            $translate = SolutionTranslate::where('item_id',$id)->where('lang',request()->get('lang'))->first();

            DB::table('solution_item')->where('id','=',$id)->update([
                'status' => request()->get('status'),
                'back_img' => request()->get('newsImage')
            ]);

            if ($translate == null){
                $solutionTranslate = new SolutionTranslate();
                $solutionTranslate->item_id = $id;
                $solutionTranslate->category_name = request()->get('category_name');
                $solutionTranslate->name = request()->get('name');
                $solutionTranslate->first_info = request()->get('first_info');
                $solutionTranslate->last_info = request()->get('last_info');
                $solutionTranslate->lang = request()->get('language');
                $solutionTranslate->save();
            }else{
                DB::table('solution_translate')->where('item_id','=',$id)->where('lang','=',request()->get('lang'))->update([
                    'category_name' => request()->get('category_name'),
                    'name' => request()->get('name'),
                    'first_info' => request()->get('first_info'),
                    'last_info' => request()->get('last_info')
                ]);
            }
        }else{
            if ($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInput();
            }else {
                $solution = new Solution();
                $solution->status = request()->get('status');
                $solution->back_img = request()->get('newsImage');
                $solution->save();

                $solutionTranslate = new SolutionTranslate();
                $solutionTranslate->item_id = $solution->id;
                $solutionTranslate->category_name = request()->get('category_name');
                $solutionTranslate->name = request()->get('name');
                $solutionTranslate->first_info = request()->get('first_info');
                $solutionTranslate->last_info = request()->get('last_info');
                $solutionTranslate->lang = request()->get('language');
                $solutionTranslate->save();


            }
        }

        return redirect('admin/solutions');
    }

    public function trashSolutionInfo($id)
    {
        if (isset($id) && $id > 0){
            $about = Solution::where('id',$id)->delete();
            $aboutT = SolutionTranslate::where('item_id',$id)->delete();
            if ($about && $aboutT)
            {
                return redirect('admin/solutions');
            }
        }else{
            return redirect('admin/solutions');
        }
    }

    public function trashSolutionOnlyTranslate($id)
    {
        if (isset($id) && $id > 0){
            $about = SolutionTranslate::where('id',$id)->delete();
            if ($about)
            {
                return redirect('admin/solutions');
            }
        }else{
            return redirect('admin/solutions');
        }
    }

}

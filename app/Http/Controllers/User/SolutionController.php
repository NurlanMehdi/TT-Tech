<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Solution;
use Illuminate\Http\Request;

class SolutionController extends Controller
{
    public function index()
    {
        $lang = app()->getLocale();
        $data = $this->getSolutionData($lang);

        return view('user.pages.solutions',['solutionData'=>$data]);
    }

    public function solutionItem($id)
    {
        $lang = app()->getLocale();
        $data = $this->getSolutionData($lang,$id);
        return view('user.content.solutionItem',['solutionData'=>$data]);
    }

    public function getSolutionData($lang,$id = 0)
    {
        if ($id == 0){
            $data = Solution::select('solution_translate.category_name','solution_translate.item_id','solution_item.status')
                ->leftJoin('solution_translate','solution_translate.item_id','=','solution_item.id')
                ->where('solution_translate.lang' ,'=',$lang)
                ->where('solution_item.status' ,'=',1)
                ->get();
        }else{
            $data = Solution::select('solution_translate.*','solution_item.status','solution_item.back_img')
                ->leftJoin('solution_translate','solution_translate.item_id','=','solution_item.id')
                ->groupBy('item_id')
                ->where('solution_translate.lang' ,'=',$lang)
                ->where('solution_translate.item_id' ,'=',$id)
                ->first();
        }


        return $data;
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\User\NewsController;
use App\Http\Controllers\User\SolutionController;
use App\Models\Contacts;
use App\Models\News;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $lang = app()->getLocale();

        $newsCont = new NewsController();
        $newsData = $newsCont->getNewsData($lang);

        $solutionCont = new SolutionController();
        $solutionData = $solutionCont->getSolutionData($lang);


        return view('user.index',['news'=>$newsData,'solutions'=>$solutionData]);
    }
}

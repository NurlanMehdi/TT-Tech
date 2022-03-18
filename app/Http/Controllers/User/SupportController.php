<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\TutorialVideo;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function index()
    {
        $tutorialVideo = TutorialVideo::first();
        return view('user.pages.support',['tutorialVideo'=>$tutorialVideo]);
    }

}

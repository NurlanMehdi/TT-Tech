<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContentPageController extends Controller
{
    public function indexAbout()
    {
        return view('user.pages.about');
    }

    public function indexMobileApp()
    {
        return view('user.pages.mobileApp');
    }
}

<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\About;

class ContentPageController extends Controller
{
    public function indexAbout()
    {
        $data = About::select('about_us_translate.*','about_us_item.status','about_us_item.img','about_us_item.created_at')
            ->leftJoin('about_us_translate','about_us_translate.item_id','=','about_us_item.id')
            ->where('about_us_translate.lang' ,'=',app()->getLocale())
            ->get();

        return view('user.pages.about',['data'=>$data]);
    }

    public function indexMobileApp()
    {
        return view('user.pages.mobileApp');
    }
}

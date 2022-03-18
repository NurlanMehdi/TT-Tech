<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\NewsTranslate;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $lang = app()->getLocale();
        $data = $this->getNewsData($lang);
        $news = [];
        foreach ($data as $val)
        {
            if ($val->catagory == 0){
                $news['news'][] = $val;
            }else{
                $news['nationalLegislation'][] = $val;
            }
        }

        return view('user.pages.news',['newsData'=>$news]);
    }

    public function indexItem($id)
    {
        $lang = app()->getLocale();
        $data = $this->getNewsData($lang,$id);
        $allNews = $this->getNewsData($lang);

        return view('user.content.newsItem',['newsData'=>$data,'allNews'=>$allNews]);
    }

    public function searchPage()
    {
        $searchText = \request()->get('search');
        $lang = app()->getLocale();

        $news = News::select('news_translate.*','news_item.status','news_item.img','news_item.catagory','news_item.created_at')
            ->leftJoin('news_translate','news_translate.item_id','=','news_item.id')
            ->groupBy('item_id')
            ->where('news_translate.name','LIKE',"%{$searchText}%")
            ->orWhere('news_translate.info','LIKE',"%{$searchText}%")
            ->where('news_translate.lang' ,'=',$lang)
            ->where('news_item.status' ,'=',1)
            ->get();

        return view('user.pages.search',['news'=>$news]);
    }
    public function nationalLegislationListPage()
    {
        $lang = app()->getLocale();
       $data = News::select('news_translate.*','news_item.status','news_item.img','news_item.catagory','news_item.created_at')
            ->leftJoin('news_translate','news_translate.item_id','=','news_item.id')
            ->groupBy('item_id')
            ->where('news_translate.lang' ,'=',$lang)
            ->where('news_item.status' ,'=',1)
            ->where('news_item.catagory','=',1)
            ->get();

        return view('user.content.nationalLegislationList',['newsData'=>$data]);
    }

    public function getNewsData($lang,$id = 0)
    {
        if ($id == 0){
            $data = News::select('news_translate.*','news_item.status','news_item.img','news_item.catagory','news_item.created_at')
                ->leftJoin('news_translate','news_translate.item_id','=','news_item.id')
                ->groupBy('item_id')
                ->where('news_translate.lang' ,'=',$lang)
                ->where('news_item.status' ,'=',1)
                ->get();
        }else{
            $data = News::select('news_translate.*','news_item.status','news_item.img','news_item.catagory','news_item.created_at')
                ->leftJoin('news_translate','news_translate.item_id','=','news_item.id')
                ->groupBy('item_id')
                ->where('news_translate.lang' ,'=',$lang)
                ->where('news_translate.item_id' ,'=',$id)
                ->first();
        }


        return $data;
    }
}

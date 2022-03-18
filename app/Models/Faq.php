<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'faq_item';

    public function getFaqData()
    {
        $lang = app()->getLocale();
        $data = Faq::select('faq_translate.*','faq_item.status')
            ->leftJoin('faq_translate','faq_translate.item_id','=','faq_item.id')
            ->groupBy('item_id')
            ->where('faq_translate.lang' ,'=',$lang)
            ->get();

        return $data;
    }
}

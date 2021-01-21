<?php 

namespace App\Helpers;
use Illuminate\Support\Facades\Route;

class createPreview{
    public static function create($articles, $name=null, $to='article', $img='', $title=null, $rule=false){
        if(!$title){
            $title=$name;
        }
        return view('content/preview_articles',['title'=>$title, 'main_img'=>$img, 'name'=>$name, 'articles'=>$articles, 'toArticle'=>$to, 'rule'=>$rule]);
    }
}
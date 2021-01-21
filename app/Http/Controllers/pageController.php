<?php

namespace App\Http\Controllers;
use App\Helpers\createPreview;
use App\Helpers\findArticles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class pageController extends Controller
{
    public static function search(Request $req){
        $sData = $req->search_input;
        if($sData){
            $art=DB::table('articles')->where('name','LIKE',"%{$sData}%")->orderBy('name', 'desc')->paginate(6);
        }else{
            $art=DB::table('articles')->orderBy('views_num', 'desc')->paginate(6);
        }
        return view('content/search', ['art'=>$art, 'sData'=>$sData,'toArticle'=>'article', 'rule'=>null]);
    }

    public static function news(){
        $art=DB::table('articles')->orderBy('created_at', 'desc')->take(6)->get();
        return createPreview::create($art, 'News', 'article', '/images/service/news.jpeg', null, true);
    }

    public static function popular(){
        $art=DB::table('articles')->orderBy('views_num', 'desc')->take(12)->paginate(6);
        return createPreview::create($art, 'Popular articles');
    }

    public static function all(){
        $art=DB::table('articles')->orderBy('views_num', 'desc')->paginate(6);
        return createPreview::create($art ,'All publications');
    }

    public static function sport(){
        $art = findArticles::find('sport');
        return createPreview::create($art ,'Sport' ,'article', '/images/service/sport.jpg');
    }

    public static function travels(){
        $art = findArticles::find('travel');
        return createPreview::create($art ,'Travel' ,'article', '/images/service/travel.jpg');
    }

    public static function art(){
        $art = findArticles::find('art');
        return createPreview::create($art ,'Art' ,'article', '/images/service/art.jpg');
    }

    public static function science(){
        $art = findArticles::find('science');
        return createPreview::create($art ,'Science' ,'article', '/images/service/science.jpg');
    }

    public static function business(){
        $art = findArticles::find('business');
        return createPreview::create($art ,'Business' ,'article', '/images/service/business.jpg');
    }

    public static function tech(){
        $art = findArticles::find('tech');
        return createPreview::create($art ,'Tech' ,'article', '/images/service/tech.jpg');
    }

    public static function article($id){
        return $id;
    }

    
}

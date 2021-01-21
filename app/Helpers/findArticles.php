<?php

namespace App\Helpers;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

class findArticles{
    public static function find($found_tag){
        $tag_id=DB::table('tags')->select('id')->where('tag', $found_tag)->get();
        $arts_id_col=DB::table('article_tag_cons')->select('article_id')->where('tag_id',$tag_id[0]->id)->get();
        $arts_id = [];
        foreach ($arts_id_col as $art_id){
            array_push($arts_id, $art_id->article_id);
        }
        return DB::table('articles')->whereIn('id', $arts_id)->orderBy('views_num', 'desc')->paginate(6);
    }
}
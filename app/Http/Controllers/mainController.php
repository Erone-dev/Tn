<?php

namespace App\Http\Controllers;
use App\Models;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class mainController extends Controller
{
    private static function getNewsData(){
        return $articles=DB::table('articles')->orderBy('created_at', 'desc')->take(3)->get();
    }

    private static function getPopularData(){
        return $articles=DB::table('articles')->orderBy('views_num', 'desc')->take(3)->get();
    }


    public static function main(){
        $Ndata = mainController::getNewsData();
        $Pdata = mainController::getPopularData();
        return view('content/main', ['Ndata'=>$Ndata, 'Pdata'=>$Pdata]);
    }
}

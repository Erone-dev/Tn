<?php 

namespace App\Helpers;
use Illuminate\Support\Facades\Route;
use Michelf\Markdown;

class mdToHTMLHelper{

    private static function readMd($file){
        return $text = file_get_contents($file);
    }

    private static function transform($text){
        return $html = Markdown::defaultTransform($text);
    }

    public static function toHTML($file){
        $text = mdToHTMLHelper::readMd($file);
        return mdToHTMLHelper::transform($text);
    }
}
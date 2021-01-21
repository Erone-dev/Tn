<?php 

namespace App\Helpers;
use Illuminate\Support\Facades\Route;

class linkHelper{
    private static function is_link_active($link, $activeClass){
        $currentRoute = Route::currentRouteName();
        if($currentRoute === $link){
            return $activeClass;
        }else{
            return '';
        }
    }

    public static function is_hl_active($link){
        return linkHelper::is_link_active($link, 'headLinkActive');
    }

    public static function is_fl_active($link){
        return linkHelper::is_link_active($link, 'footerLinkActive');
    }
}
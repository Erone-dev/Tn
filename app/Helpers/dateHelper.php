<?php 

namespace App\Helpers;
use Illuminate\Support\Facades\Route;

class dateHelper{
    public static function showDate(){
        date_default_timezone_set('Asia/Almaty');
        $today = date("l, j F");
        return $today;
    }
}
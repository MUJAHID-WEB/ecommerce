<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelperController extends Controller
{
    public static function discount_price($price, $discount_price){
        $discount_price = $price - ($price*($discount_price/100));
        return $discount_price;
    }
}

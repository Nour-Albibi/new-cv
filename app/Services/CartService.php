<?php

namespace App\Services;

use App\Models\Template;
use Jackiedo\Cart\Facades\Cart;

class CartService
{
     public static function AddToCart($customerCV){
        $cart=Cart::name('cv');
         $cv = Template::find(session('chosen_template_id'));
         if ($cv != null) {
             $addedItem = $cart->addItem(array(
                 'id' => $customerCV->id,
                 'template_id' => $cv->id,
                 'title' => $cv->name_en,
                 'cv_language' => 1,
                 'cv_color' => session('chosen_cv_color'),
                 'price' => 0,
                 'quantity' => 1,
                 'options' => array(),
                 'extra_info' => [
                     'date_time' => [
                         'added_at' => time(),
                     ],
                 ],
                 'model' => $customerCV
             ));
             return $addedItem;
         }
     }
}

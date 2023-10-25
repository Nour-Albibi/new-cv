<?php

namespace App\Services;

use App\Models\Template;
use Jackiedo\Cart\Facades\Cart;

class CartService
{
     public static function AddToCart($customerCV){
        $cart=Cart::name('cv');
         $cv = Template::find(session('chosen_template_id')?? $customerCV->template_id);
         if ($cv != null) {
             $addedItem = $cart->addItem(array(
                 'id' => $customerCV->id,
                 'template_id' => $cv->id,
                 'title' => $cv->name_en,
                 'cv_language' => 1,
                 'cv_color' => session('chosen_cv_color') ?? $customerCV->template_color,
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
     public static function UpdateItem($item_hash,$updateArray){
         $cart=Cart::name('cv');
         return $cart->updateItem($item_hash,$updateArray);
     }
}

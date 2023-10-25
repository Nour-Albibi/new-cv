<?php

namespace App\Services;


use App\Models\CustomerCv;
use App\Models\Package;

class PackageService
{
    public static function getAvailableCustomerPackages(){
        return Package::where('type',1)
            ->where('is_active',1)->get();
    }
    public static function subscribeToPackage($pkg_id){
        $cvItem=CVService::getCVItem();
        $pkg=Package::find($pkg_id);
        if($pkg){
            CartService::UpdateItem($cvItem->hash,['package_id'=>$pkg->id,'price'=>$pkg->cv_price]);
        }else{
            return false;
        }
        return true;
    }
}

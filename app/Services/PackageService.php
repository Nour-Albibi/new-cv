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
    public static function subscribeToPackage($pkg){
        $cvItem=CVService::getCVItem();
        CartService::UpdateItem($cvItem->hash,['package_id'=>$pkg]);
        CustomerCv::where('id',$cvItem->id)->update(['package_id'=>$pkg]);
        return true;
    }
}

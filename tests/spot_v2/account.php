<?php
/**
 * @author lin <465382251@qq.com>
 * */

use Lin\Bitget\BitgetSpotV2;

require __DIR__ .'../../../vendor/autoload.php';


/*
 *
 * */
$bitget=new BitgetSpotV2('bg_a75dc076d9a80e807520b42673c7a738','e7b820c9e81bc801a290c33847304960d5f96e69ae0a9fac06f9d46587a3da60','asdasd123Aa');

//You can set special needs
$bitget->setOptions([
    //Set the request timeout to 60 seconds by default
    'timeout'=>10,
]);

try {
    $result=$bitget->account()->getInfo();
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}


<?php
/**
 * @author lin <465382251@qq.com>
 * */

use Lin\Bitget\BitgetSpot;

require __DIR__ .'../../../vendor/autoload.php';


/*
 *
 * asdasd123Aa
bg_a75dc076d9a80e807520b42673c7a738
e7b820c9e81bc801a290c33847304960d5f96e69ae0a9fac06f9d46587a3da60
 *
 * */
$bitget=new BitgetSpot('bg_a75dc076d9a80e807520b42673c7a738','e7b820c9e81bc801a290c33847304960d5f96e69ae0a9fac06f9d46587a3da60');

//You can set special needs
$bitget->setOptions([
    //Set the request timeout to 60 seconds by default
    'timeout'=>10,

    //If you are developing locally and need an agent, you can set this
    //'proxy'=>true,
    //More flexible Settings
    /* 'proxy'=>[
     'http'  => 'http://127.0.0.1:12333',
     'https' => 'http://127.0.0.1:12333',
     'no'    =>  ['.cn']
     ], */
    //Close the certificate
    //'verify'=>false,
]);

try {
    $result=$bitget->account()->get();
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$bitget->account()->getBalance([
        'account_id'=>'2633392069',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}


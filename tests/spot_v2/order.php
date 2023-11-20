<?php
/**
 * @author lin <465382251@qq.com>
 * */

use Lin\Bitget\BitgetSpot;

require __DIR__ .'../../../vendor/autoload.php';

require 'key_secret.php';

$bitget=new BitgetSpot($key,$secret);

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
    $result=$bitget->order()->postPlace([
        'account_id'=>'2633392069',
        'amount'=>'1',
        'price'=>'20000',
        'symbol'=>'btc_usdt',
        'type'=>'buy-limit',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}


try {
    $result=$bitget->order()->postSubmitCancel([
        'order_id'=>'2633392069',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$bitget->order()->postBatchCancel([
        'order_ids'=>'222'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$bitget->order()->post([
        'order_id'=>'11111111'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$bitget->order()->postOrderIdMatchresults([
        'order_id'=>'11111111'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$bitget->order()->getOpenOrders([
        'symbol'=>'btc_usdt'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

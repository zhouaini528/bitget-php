<?php
/**
 * @author lin <465382251@qq.com>
 * */

use Lin\Bitget\BitgetSpot;

require __DIR__ .'../../../vendor/autoload.php';

$bitget=new BitgetSpot();

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
    $result=$bitget->market()->getHistoryKline([
        'symbol'=>'btc_usdt',
        'period'=>'60min',
        'size'=>'2',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$bitget->market()->getDetail([
        'symbol'=>'btc_usdt',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$bitget->market()->getTickers();
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$bitget->market()->getAllTicker();
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$bitget->market()->getDepth([
        'symbol'=>'btc_usdt',
        'type'=>'step0'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$bitget->market()->getHistoryTrade([
        'symbol'=>'btc_usdt',
        'size'=>2
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

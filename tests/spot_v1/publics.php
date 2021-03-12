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

//Instruments
try {
    $result=$bitget->publics()->getTradePairList();
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}


try {
    $result=$bitget->publics()->getTradePairOne([
        'instrument_id'=>'BTC/USDT'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$bitget->publics()->getDepth([
        'instrument_id'=>'BTC/USDT',
        'depth'=>5
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}


try {
    $result=$bitget->publics()->getTickerList();
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$bitget->publics()->getTickerOne([
        'instrument_id'=>'BTC/USDT',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

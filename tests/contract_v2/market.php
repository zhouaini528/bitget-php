<?php
/**
 * @author lin <465382251@qq.com>
 * */

use Lin\Bitget\BitgetContractV2;

require __DIR__ .'../../../vendor/autoload.php';

$bitget=new BitgetContractV2();

//You can set special needs
$bitget->setOptions([
    //Set the request timeout to 60 seconds by default
    'timeout'=>10,

]);

try {
    $result=$bitget->market()->getTicker([
        'symbol'=>'BTCUSDT',
        'productType'=>'USDT-FUTURES'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$bitget->market()->getCandles([
        'symbol'=>'BTCUSDT',
        'granularity'=>'5m',
        'productType'=>'USDT-FUTURES'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}


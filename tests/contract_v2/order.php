<?php
/**
 * @author lin <465382251@qq.com>
 * */

use Lin\Bitget\BitgetContractV2;

require __DIR__ .'../../../vendor/autoload.php';

require 'key_secret.php';
/*
 *
 * */
$bitget=new BitgetContractV2($key,$secret,$passphrase);

//You can set special needs
$bitget->setOptions([
    //Set the request timeout to 60 seconds by default
    'timeout'=>10,

]);

try {
    $result=$bitget->order()->postPlaceOrder([
        'symbol'=>'BTCUSDT',
        'productType'=>'USDT-FUTURES',
        'marginMode'=>'isolated',
        'marginCoin'=>'USDT',
        'tradeSide'=>'open',
        'side'=>'sell',
        'size'=>'10',
        'price'=>'66666',
        'orderType'=>'limit',
        'force'=>'gtc',

        //'clientOid'=>'***********',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}


try {
    $result=$bitget->order()->getDetail([
        'symbol'=>'BTCUSDT',
        'productType'=>'USDT-FUTURES',

        //'orderId'=>'*********',
        'clientOid'=>'***********',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

<?php
/**
 * @author lin <465382251@qq.com>
 * */

use Lin\Bitget\BitgetSpotV2;

require __DIR__ .'../../../vendor/autoload.php';


require 'key_secret.php';

$bitget=new BitgetSpotV2($key,$secret,$passphrase);

//You can set special needs
$bitget->setOptions([
    //Set the request timeout to 60 seconds by default
    'timeout'=>10,

]);

try {
    $result=$bitget->trade()->postPlaceOrder([
        'symbol'=>'BTCUSDT',
        'side'=>'sell',
        'orderType'=>'limit',
        'force'=>'gtc',

        'price'=>'66666',
        'size'=>'1',
        //'clientOid'=>'**************',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$bitget->trade()->getOrderInfo([
        //'orderId'=>'***************',
        'clientOid'=>'**************',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

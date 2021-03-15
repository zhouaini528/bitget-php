<?php
/**
 * @author lin <465382251@qq.com>
 * */

use Lin\Bitget\BitgetSwap;

require __DIR__ .'../../../vendor/autoload.php';

require 'key_secret.php';

$bitget=new BitgetSwap($key,$secret,$passphrase);

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
    $result=$bitget->position()->getAllPosition();
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$bitget->position()->getSinglePosition([
        'symbol'=>'cmt_btcusdt',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}


try {
    $result=$bitget->position()->postChangeHoldModel([
        'symbol'=>'cmt_btcusdt',
        'holdModel'=>2
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

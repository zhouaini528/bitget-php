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
    $result=$bitget->account()->getAccounts([
        'productType'=>'USDT-FUTURES'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}


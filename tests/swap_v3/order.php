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
    $result=$bitget->order()->postPlaceOrder([
        'symbol'=>'cmt_btcusdt',
        'client_oid'=>'xxxxxxx',
        'size'=>'1',
        'type'=>'1',
        'order_type'=>'0',
        'match_price'=>'1',
        //'price'=>'40000',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$bitget->order()->postBatchOrders([
        'symbol'=>'cmt_btcusdt',
        'orderDataList'=>[
            [
                'client_oid'=>'xxxxxxx111',
                'size'=>'1',
                'type'=>'1',
                'order_type'=>'0',
                'match_price'=>'1',
            ],
            [
                'client_oid'=>'xxxxxxx222',
                'size'=>'1',
                'type'=>'1',
                'order_type'=>'0',
                'match_price'=>'1',
            ],
        ],
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$bitget->order()->postCancelOrder([
        'symbol'=>'cmt_btcusdt',
        'orderId'=>'xxxxxx'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$bitget->order()->postCancelBatchOrders([
        'symbol'=>'cmt_btcusdt',
        'ids'=>['xxxx1','xxxxx2']
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$bitget->order()->getDetail([
        'symbol'=>'cmt_btcusdt',
        'orderId'=>'xxxxxx'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}


try {
    $result=$bitget->order()->getHistory([
        'symbol'=>'cmt_btcusdt',
        'pageIndex'=>'1',
        'pageSize'=>'10',
        'createDate'=>'14',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$bitget->order()->getCurrent([
        'symbol'=>'cmt_btcusdt',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$bitget->order()->postPlanOrder([
        'symbol'=>'cmt_btcusdt',
        'client_oid'=>'xxxxxxx',
        'size'=>'1',
        'type'=>'1',
        'match_price'=>'1',
        'holdSide'=>'1',
        'execute_price'=>'50000',
        'trigger_price'=>'52000',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}



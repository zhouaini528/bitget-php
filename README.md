### It is recommended that you read the official document first

Bitget Document 

[https://www.bitget.com/zh-CN/api-doc/common/intro](https://www.bitget.com/zh-CN/api-doc/common/intro)

All interface methods are initialized the same as those provided by Bitget. See details [src/api](https://github.com/zhouaini528/bitget-php/tree/master/src/Api)

Most of the interface is now complete, and the user can continue to extend it based on my design, working with me to improve it.

[中文文档](https://github.com/zhouaini528/bitget-php/blob/master/README_CN.md)

### Other exchanges API

[Exchanges](https://github.com/zhouaini528/exchanges-php) It includes all of the following exchanges and is highly recommended.

[Bitmex](https://github.com/zhouaini528/bitmex-php) Support [Websocket](https://github.com/zhouaini528/bitmex-php/blob/master/README.md#Websocket)

[Okex](https://github.com/zhouaini528/okex-php) Support [Websocket](https://github.com/zhouaini528/okex-php/blob/master/README.md#Websocket)

[Huobi](https://github.com/zhouaini528/huobi-php) Support [Websocket](https://github.com/zhouaini528/huobi-php/blob/master/README.md#Websocket)

[Binance](https://github.com/zhouaini528/binance-php) Support [Websocket](https://github.com/zhouaini528/binance-php/blob/master/README.md#Websocket)

[Kucoin](https://github.com/zhouaini528/kucoin-php)

[Mxc](https://github.com/zhouaini528/Mxc-php)

[Coinbase](https://github.com/zhouaini528/coinbase-php)

[ZB](https://github.com/zhouaini528/zb-php)

[Bitfinex](https://github.com/zhouaini528/bitfinex-php)

[Bittrex](https://github.com/zhouaini528/bittrex-php)

[Kraken](https://github.com/zhouaini528/kraken-php)

[Gate](https://github.com/zhouaini528/gate-php)   

[Bigone](https://github.com/zhouaini528/bigone-php)   

[Crex24](https://github.com/zhouaini528/crex24-php)   

[Bybit](https://github.com/zhouaini528/bybit-php)  

[Coinbene](https://github.com/zhouaini528/coinbene-php)   

[Bitget](https://github.com/zhouaini528/bitget-php)   

[Poloniex](https://github.com/zhouaini528/poloniex-php)

**If you don't find the exchange SDK you want, you can tell me and I'll join them.**

#### Installation
```
composer require linwj/bitget
```

Support for more request Settings
```php
$bitget=new BitgetSpotV2($key,$secret,$passphrase);
//or
$bitget=new BitgetContractV2()($key,$secret,$passphrase);

//You can set special needs
$bitget->setOptions([
    //Set the request timeout to 60 seconds by default
    'timeout'=>10,
    
]);
```

### Bitget Spot API

Market API [More](https://github.com/zhouaini528/bitget-php/blob/master/tests/spot_v1/market.php)
```php
$bitget=new BitgetSpotV2($key,$secret,$passphrase);

try {
    $result=$bitget->market()->getTickers([
        'symbol'=>'BTCUSDT',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$bitget->market()->getCandles([
        'symbol'=>'BTCUSDT',
        'granularity'=>'5min'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}
```
Account API [More](https://github.com/zhouaini528/bitget-php/blob/master/tests/spot_v1/account.php)
```php
$bitget=new BitgetSpotV2($key,$secret,$passphrase);

try {
    $result=$bitget->account()->getAssets();
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

```

Order API [More](https://github.com/zhouaini528/bitget-php/blob/master/tests/spot_v1/order.php)
```php
$bitget=new BitgetSpot($key,$secret);

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
```

[More Test](https://github.com/zhouaini528/bitget-php/tree/master/tests)

[More Api](https://github.com/zhouaini528/bitget-php/tree/master/src/Api)

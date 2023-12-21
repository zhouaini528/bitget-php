### 建议您先阅读官方文档

Bitget 文档1 [https://www.bitget.com/zh-CN/api-doc/common/intro](https://www.bitget.com/zh-CN/api-doc/common/intro)

所有接口方法的初始化都与Bitget提供的方法相同。更多细节 [src/api](https://github.com/zhouaini528/bitget-php/tree/master/src/Api)

大部分的接口已经完成，使用者可以根据我的设计方案继续扩展，欢迎与我一起迭代它。

[English Document](https://github.com/zhouaini528/bitget-php/blob/master/README_CN.md)

QQ交流群：668421169

### 其他交易所API

[Exchanges](https://github.com/zhouaini528/exchanges-php) 它包含以下所有交易所，强烈推荐使用该SDK。

[Bitmex](https://github.com/zhouaini528/bitmex-php) 支持[Websocket](https://github.com/zhouaini528/bitmex-php/blob/master/README_CN.md#Websocket)

[Okex](https://github.com/zhouaini528/okex-php) 支持[Websocket](https://github.com/zhouaini528/okex-php/blob/master/README_CN.md#Websocket)

[Huobi](https://github.com/zhouaini528/huobi-php) 支持[Websocket](https://github.com/zhouaini528/huobi-php/blob/master/README_CN.md#Websocket)

[Binance](https://github.com/zhouaini528/binance-php) 支持[Websocket](https://github.com/zhouaini528/binance-php/blob/master/README_CN.md#Websocket)

[Kucoin](https://github.com/zhouaini528/kucoin-php)

[Mxc](https://github.com/zhouaini528/mxc-php)

[Coinbase](https://github.com/zhouaini528/coinbase-php)

[ZB](https://github.com/zhouaini528/zb-php)

[Bitfinex](https://github.com/zhouaini528/zb-php)

[Bittrex](https://github.com/zhouaini528/bittrex-php)

[Kraken](https://github.com/zhouaini528/kraken-php)

[Gate](https://github.com/zhouaini528/gate-php)   

[Bigone](https://github.com/zhouaini528/bigone-php)   

[Crex24](https://github.com/zhouaini528/crex24-php)   

[Bybit](https://github.com/zhouaini528/bybit-php)  

[Coinbene](https://github.com/zhouaini528/coinbene-php)   

[Bitget](https://github.com/zhouaini528/bitget-php)   

[Poloniex](https://github.com/zhouaini528/poloniex-php)

**如果没有找到你想要的交易所SDK你可以告诉我，我来加入它们。**

**如果没有找到你想要的交易所SDK你可以告诉我，我来加入它们。**

#### 安装方式
```
composer require linwj/bitget
```

支持更多的请求设置
```php
$bitget=new BitgetSpot();
//or
$bitget=new BitgetSwap();

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

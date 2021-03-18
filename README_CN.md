### 建议您先阅读官方文档

Bitget 文档1 [https://github.com/BitgetLimited](https://github.com/BitgetLimited) 

Bitget 文档2 [https://bitgetlimited.github.io/apidoc/en/swap/](https://bitgetlimited.github.io/apidoc/en/swap/)

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

[Kucoin/Kumex](https://github.com/zhouaini528/kucoin-php)

[Mxc](https://github.com/zhouaini528/mxc-php)

[Coinbase](https://github.com/zhouaini528/coinbase-php)

[ZB](https://github.com/zhouaini528/zb-php)

[Bitfinex](https://github.com/zhouaini528/zb-php)

[Bittrex](https://github.com/zhouaini528/bittrex-php)

[Kraken](https://github.com/zhouaini528/kraken-php)

[Gate](https://github.com/zhouaini528/gate-php)   支持 V2/V4

[Bigone](https://github.com/zhouaini528/bigone-php)   

[Crex24](https://github.com/zhouaini528/crex24-php)   

[Bybit](https://github.com/zhouaini528/bybit-php)   

[Coinbene](https://github.com/zhouaini528/coinbene-php)   支持V3

[Bitget](https://github.com/zhouaini528/bitget-php)   支持SwapV3 SpotV1 

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
```

### Bitget 现货API

Market API [More](https://github.com/zhouaini528/bitget-php/blob/master/tests/spot_v1/market.php)
```php
$bitget=new BitgetSpot();

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
```
Account API [More](https://github.com/zhouaini528/bitget-php/blob/master/tests/spot_v1/account.php)
```php
$bitget=new BitgetSpot($key,$secret);

try {
    $result=$bitget->account()->get();
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$bitget->account()->getBalance([
        'account_id'=>'2633392069',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}
```

Order API [More](https://github.com/zhouaini528/bitget-php/blob/master/tests/spot_v1/order.php)
```php
$bitget=new BitgetSpot($key,$secret);

try {
    $result=$bitget->order()->postPlace([
        'account_id'=>'2633392069',
        'amount'=>'1',
        'price'=>'20000',
        'symbol'=>'btc_usdt',
        'type'=>'buy-limit',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}


try {
    $result=$bitget->order()->postSubmitCancel([
        'order_id'=>'2633392069',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$bitget->order()->postBatchCancel([
        'order_ids'=>'222'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$bitget->order()->post([
        'order_id'=>'11111111'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$bitget->order()->postOrderIdMatchresults([
        'order_id'=>'11111111'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$bitget->order()->getOpenOrders([
        'symbol'=>'btc_usdt'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}
```





### Bitget 合约API
Market API [More](https://github.com/zhouaini528/bitget-php/blob/master/tests/swap_v3/market.php)
```php
$bitget=new BitgetSwap();
try {
    $result=$bitget->market()->getTime();
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$bitget->market()->getContracts();
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$bitget->market()->getDepth([
        'symbol'=>'cmt_btcusdt',
        'limit'=>5
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
    $result=$bitget->market()->getTicker([
        'symbol'=>'cmt_btcusdt',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$bitget->market()->getTrades([
        'symbol'=>'cmt_btcusdt',
        'limit'=>5
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$bitget->market()->getCandles([
        'symbol'=>'cmt_btcusdt',
        'startTime'=>'1615779615',
        'endTime'=>'1615789615',
        'granularity'=>3600,
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$bitget->market()->getIndex([
        'symbol'=>'cmt_btcusdt',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$bitget->market()->getOpenCount([
        'symbol'=>'cmt_btcusdt',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}
```

Account API [More](https://github.com/zhouaini528/bitget-php/blob/master/tests/swap_v3/account.php)
```php
$bitget=new BitgetSwap($key,$secret,$passphrase);

try {
    $result=$bitget->account()->getAccounts();
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$bitget->account()->getAccount([
        'symbol'=>'cmt_dotusdt',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$bitget->account()->getSettings([
        'symbol'=>'cmt_dotusdt',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$bitget->account()->postLeverage([
        'symbol'=>'cmt_dotusdt',
        'leverage'=>'20',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}
```

Order API [More](https://github.com/zhouaini528/bitget-php/blob/master/tests/swap_v3/order.php)
```php
$bitget=new BitgetSwap($key,$secret,$passphrase);

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
```

Position API [More](https://github.com/zhouaini528/bitget-php/blob/master/tests/swap_v3/position.php)
```php
$bitget=new BitgetSwap($key,$secret,$passphrase);

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
```

Trace API [More](https://github.com/zhouaini528/bitget-php/blob/master/tests/swap_v3/trace.php)
```php
$bitget=new BitgetSwap($key,$secret,$passphrase);

try {
    $result=$bitget->trace()->postCloseTrackOrder([
        'symbol'=>'cmt_btcusdt',
        'trackingNo'=>'xxxxxxxxx',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$bitget->trace()->getCurrentTrack([
        'symbol'=>'cmt_btcusdt',
        'pageIndex'=>'1',
        'pageSize'=>20
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$bitget->trace()->getHistoryTrack([
        'pageIndex'=>'1',
        'pageSize'=>20,
        'createDate'=>'14',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}
```


[More Test](https://github.com/zhouaini528/bitget-php/tree/master/tests)

[More Api](https://github.com/zhouaini528/bitget-php/tree/master/src/Api)

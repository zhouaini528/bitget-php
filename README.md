### It is recommended that you read the official document first

Bitget Document 

[https://github.com/BitgetLimited](https://github.com/BitgetLimited) 

[https://bitgetlimited.github.io/apidoc/en/swap/](https://bitgetlimited.github.io/apidoc/en/swap/)

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

### Bitget Spot API

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

### Bitget Swap API
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

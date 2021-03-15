<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Bitget;


use Lin\Bitget\Api\SwapV3\Account;
use Lin\Bitget\Api\SwapV3\Market;
use Lin\Bitget\Api\SwapV3\Order;
use Lin\Bitget\Api\SwapV3\Position;
use Lin\Bitget\Api\SwapV3\Trace;

class BitgetSwap
{
    protected $key;
    protected $secret;
    protected $passphrase;
    protected $host;

    protected $options=[];

    function __construct(string $key='',string $secret='',string $passphrase='',string $host='https://capi.bitget.com'){
        $this->key=$key;
        $this->secret=$secret;
        $this->host=$host;
        $this->passphrase=$passphrase;
    }

    /**
     *
     * */
    private function init(){
        return [
            'key'=>$this->key,
            'secret'=>$this->secret,
            'host'=>$this->host,
            'passphrase'=>$this->passphrase,
            'options'=>$this->options,

            'platform'=>'swap',
            'version'=>'v3',
        ];
    }

    /**
     *
     * */
    function setOptions(array $options=[]){
        $this->options=$options;
    }

    /**
     *
     * */
    function account(){
        return new Account($this->init());
    }

    function market(){
        return new Market($this->init());
    }

    function order(){
        return new Order($this->init());
    }

    function position(){
        return new Position($this->init());
    }

    function trace(){
        return new Trace($this->init());
    }
}

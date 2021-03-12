<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Bitget;


use Lin\Bitget\Api\SpotV1\Account;
use Lin\Bitget\Api\SpotV1\Common;
use Lin\Bitget\Api\SpotV1\Market;
use Lin\Bitget\Api\SpotV1\Order;

class BitgetSpot
{
    protected $key;
    protected $secret;
    protected $host;

    protected $options=[];

    function __construct(string $key='',string $secret='',string $host='https://api.bitget.com'){
        $this->key=$key;
        $this->secret=$secret;
        $this->host=$host;
    }

    /**
     *
     * */
    private function init(){
        return [
            'key'=>$this->key,
            'secret'=>$this->secret,
            'host'=>$this->host,
            'options'=>$this->options,
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

    /**
     *
     * */
    function common(){
        return new Common($this->init());
    }

    function market(){
        return new Market($this->init());
    }

    function order(){
        return new Order($this->init());
    }
}

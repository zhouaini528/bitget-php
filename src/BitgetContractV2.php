<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Bitget;


use Lin\Bitget\Api\ContractV2\Account;
use Lin\Bitget\Api\ContractV2\Market;
use Lin\Bitget\Api\ContractV2\Order;
use Lin\Bitget\Api\ContractV2\Position;

class BitgetContractV2
{
    protected $key;
    protected $secret;
    protected $passphrase;
    protected $host;

    protected $options=[];

    function __construct(string $key='',string $secret='',string $passphrase='',string $host='https://api.bitget.com'){
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

            'platform'=>'contract_v2',
            'version'=>'v2',
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
    function market(){
        return new Market($this->init());
    }

    /**
     *
     * */
    function order(){
        return new Order($this->init());
    }

    /**
     *
     * */
    function position(){
        return new Position($this->init());
    }
}

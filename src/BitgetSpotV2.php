<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Bitget;



use Lin\Bitget\Api\SpotV2\Account;
use Lin\Bitget\Api\SpotV2\Market;
use Lin\Bitget\Api\SpotV2\Publics;
use Lin\Bitget\Api\SpotV2\Trade;
use Lin\Bitget\Api\SpotV2\Wallet;

class BitgetSpotV2
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

            'platform'=>'spot_v2',
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
    function publics(){
        return new Publics($this->init());
    }

    /**
     *
     * */
    function trade(){
        return new Trade($this->init());
    }

    /**
     *
     * */
    function wallet(){
        return new Wallet($this->init());
    }
}

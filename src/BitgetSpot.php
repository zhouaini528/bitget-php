<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Bitget;

use Lin\Bitget\Api\SpotV3\Privates;
use Lin\Bitget\Api\SpotV3\Publics;


class BitgetSpot
{
    protected $key;
    protected $secret;
    protected $host;

    protected $options=[];

    function __construct(string $key='',string $secret='',string $host='https://openapi-exchange.Bitget.com'){
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
    function privates(){
        return new Privates($this->init());
    }

    /**
     *
     * */
    function publics(){
        return new Publics($this->init());
    }
}

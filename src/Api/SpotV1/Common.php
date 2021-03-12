<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Bitget\Api\SpotV1;

use Lin\Bitget\Request;

class Common extends Request
{
    /**
     *GET /data/v1/common/symbols 查询站内支持的所有交易对及精度
     * */
    public function getSymbols(array $data=[]){
        $this->type='GET';
        $this->path='/data/v1/common/symbols ';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /data/v1/common/currencys 查询站内支持的所有币种
     * */
    public function getCurrencys(array $data=[]){
        $this->type='GET';
        $this->path='/data/v1/common/currencys';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /data/v1/common/currencysDetail 查询站内支持的所有币种
     * */
    public function getCurrencysDetail(array $data=[]){
        $this->type='GET';
        $this->path='/data/v1/common/currencysDetail';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /data/v1/common/timestamp
     * */
    public function getTimestamp(array $data=[]){
        $this->type='GET';
        $this->path='/data/v1/common/timestamp';
        $this->data=$data;
        return $this->exec();
    }
}

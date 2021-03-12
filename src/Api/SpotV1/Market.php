<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Bitget\Api\SpotV1;

use Lin\Bitget\Request;

class Market extends Request
{
    /**
     *GET /data/v1/market/history/kline 获取K线数据
     * */
    public function getHistoryKline(array $data=[]){
        $this->type='GET';
        $this->path='/data/v1/market/history/kline';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /data/v1/market/detail/merged 获取聚合行情(Ticker)
     * */
    public function getDetailMerged(array $data=[]){
        $this->type='GET';
        $this->path='/data/v1/market/detail/merged';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /data/v1/market/tickers 获取全部交易行情(Ticker)
     * */
    public function getTickers(array $data=[]){
        $this->type='GET';
        $this->path='/data/v1/market/tickers';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /data/v1/market/allticker 获取全部交易行情2
     * */
    public function getAllTicker(array $data=[]){
        $this->type='GET';
        $this->path='/data/v1/market/allticker';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /data/v1/market/depth 获取 Market Depth 数据
     * */
    public function getDepth(array $data=[]){
        $this->type='GET';
        $this->path='/data/v1/market/depth';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /data/v1/market/trade 获取 Trade Detail 数据
     * */
    public function getTrade(array $data=[]){
        $this->type='GET';
        $this->path='/data/v1/market/trade';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /data/v1/market/history/trade 批量获取最近的交易记录
     * */
    public function getHistoryTrade(array $data=[]){
        $this->type='GET';
        $this->path='/data/v1/market/history/trade';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /data/v1/market/detail 获取 Market Detail 24小时成交量数据
     * */
    public function getDetail(array $data=[]){
        $this->type='GET';
        $this->path='/data/v1/market/detail';
        $this->data=$data;
        return $this->exec();
    }


    /**
     *
     * */
    /*public function get(array $data=[]){
        $this->type='GET';
        $this->path='';
        $this->data=$data;
        return $this->exec();
    }*/
}

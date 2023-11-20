<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Bitget\Api\SpotV2;

use Lin\Bitget\Request;

class Market extends Request
{
    /**
     *GET /api/v2/spot/market/vip-fee-rate
     * */
    public function getVipFeeRate(array $data=[]){
        $this->type='GET';
        $this->path='/api/v2/spot/market/vip-fee-rate';

        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /api/v2/spot/market/tickers
     * */
    public function getTickers(array $data=[]){
        $this->type='GET';
        $this->path='/api/v2/spot/market/tickers';

        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /api/v2/spot/market/merge-depth
     * */
    public function getMergeDepth(array $data=[]){
        $this->type='GET';
        $this->path='';

        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /api/v2/spot/market/orderbook
     * */
    public function getOrderBook(array $data=[]){
        $this->type='GET';
        $this->path='/api/v2/spot/market/orderbook';

        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /api/v2/spot/market/candles
     * */
    public function getCandles(array $data=[]){
        $this->type='GET';
        $this->path='/api/v2/spot/market/candles';

        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /api/v2/spot/market/history-candles
     * */
    public function getHistoryCandles(array $data=[]){
        $this->type='GET';
        $this->path='/api/v2/spot/market/history-candles';

        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /api/v2/spot/market/fills
     * */
    public function getFills(array $data=[]){
        $this->type='GET';
        $this->path='/api/v2/spot/market/fills';

        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /api/v2/spot/market/fills-history
     * */
    public function getFillsHistory(array $data=[]){
        $this->type='GET';
        $this->path='/api/v2/spot/market/fills-history';

        $this->data=$data;
        return $this->exec();
    }
}

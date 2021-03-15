<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Bitget\Api\SwapV3;

use Lin\Bitget\Request;

class Market extends Request
{
    /**
     *GET /api/swap/v3/market/time
     * */
    public function getTime(array $data=[]){
        $this->type='GET';
        $this->path='/api/swap/v3/market/time';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /api/swap/v3/market/contracts
     * */
    public function getContracts(array $data=[]){
        $this->type='GET';
        $this->path='/api/swap/v3/market/contracts';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /api/swap/v3/market/depth
     * */
    public function getDepth(array $data=[]){
        $this->type='GET';
        $this->path='/api/swap/v3/market/depth';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /api/swap/v3/market/tickers
     * */
    public function getTickers(array $data=[]){
        $this->type='GET';
        $this->path='/api/swap/v3/market/tickers';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /api/swap/v3/market/ticker
     * */
    public function getTicker(array $data=[]){
        $this->type='GET';
        $this->path='/api/swap/v3/market/ticker';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /api/swap/v3/market/trades
     * */
    public function getTrades(array $data=[]){
        $this->type='GET';
        $this->path='/api/swap/v3/market/trades';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /api/swap/v3/market/candles
     * */
    public function getCandles(array $data=[]){
        $this->type='GET';
        $this->path='/api/swap/v3/market/candles';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /api/swap/v3/market/index
     * */
    public function getIndex(array $data=[]){
        $this->type='GET';
        $this->path='/api/swap/v3/market/index';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /api/swap/v3/market/open_interest
     * */
    public function getOpenInterest(array $data=[]){
        $this->type='GET';
        $this->path='/api/swap/v3/market/open_interest';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /api/swap/v3/market/price_limit
     * */
    public function getPriceLimit(array $data=[]){
        $this->type='GET';
        $this->path='/api/swap/v3/market/price_limit';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /api/swap/v3/market/funding_time
     * */
    public function getFundingTime(array $data=[]){
        $this->type='GET';
        $this->path='/api/swap/v3/market/funding_time';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /api/swap/v3/market/historyFundRate
     * */
    public function getHistoryFundRate(array $data=[]){
        $this->type='GET';
        $this->path='/api/swap/v3/market/historyFundRate';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /api/swap/v3/market/mark_price
     * */
    public function getMarkPrice(array $data=[]){
        $this->type='GET';
        $this->path='/api/swap/v3/market/mark_price';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /api/swap/v3/market/open_count
     * */
    public function getOpenCount(array $data=[]){
        $this->type='GET';
        $this->path='/api/swap/v3/market/open_count';
        $this->data=$data;
        return $this->exec();
    }
}

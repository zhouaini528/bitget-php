<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Bitget\Api\ContractV2;

use Lin\Bitget\Request;

class Market extends Request
{

    /**
     *GET /api/v2/mix/market/vip-fee-rate
     * */
    public function getVipFeeRate(array $data=[]){
        $this->type='GET';
        $this->path='/api/v2/mix/market/vip-fee-rate';

        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /api/v2/mix/market/merge-depth
     * */
    public function getMergeDepth(array $data=[]){
        $this->type='GET';
        $this->path='/api/v2/mix/market/merge-depth';

        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /api/v2/mix/market/ticker
     * */
    public function getTicker(array $data=[]){
        $this->type='GET';
        $this->path='/api/v2/mix/market/ticker';

        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /api/v2/mix/market/tickers
     * */
    public function getTickers(array $data=[]){
        $this->type='GET';
        $this->path='/api/v2/mix/market/tickers';

        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /api/v2/mix/market/fills
     * */
    public function getFills(array $data=[]){
        $this->type='GET';
        $this->path='/api/v2/mix/market/fills';

        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /api/v2/mix/market/fills-history
     * */
    public function getFillsHistory(array $data=[]){
        $this->type='GET';
        $this->path='/api/v2/mix/market/fills-history';

        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /api/v2/mix/market/candles
     * */
    public function getCandles(array $data=[]){
        $this->type='GET';
        $this->path='/api/v2/mix/market/candles';

        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /api/v2/mix/market/history-candles
     * */
    public function getHistoryCandles(array $data=[]){
        $this->type='GET';
        $this->path='/api/v2/mix/market/history-candles';

        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /api/v2/mix/market/history-index-candles
     * */
    public function getHistoryIndexCandles(array $data=[]){
        $this->type='GET';
        $this->path='/api/v2/mix/market/history-index-candles';

        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /api/v2/mix/market/history-mark-candles
     * */
    public function getHistoryMarkCandles(array $data=[]){
        $this->type='GET';
        $this->path='/api/v2/mix/market/history-mark-candles';

        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /api/v2/mix/market/open-interest
     * */
    public function getOpenInterest(array $data=[]){
        $this->type='GET';
        $this->path='/api/v2/mix/market/open-interest';

        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /api/v2/mix/market/funding-time
     * */
    public function getFundingTime(array $data=[]){
        $this->type='GET';
        $this->path='/api/v2/mix/market/funding-time';

        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /api/v2/mix/market/symbol-price
     * */
    public function getSymbolPrice(array $data=[]){
        $this->type='GET';
        $this->path='/api/v2/mix/market/symbol-price';

        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /api/v2/mix/market/history-fund-rate
     * */
    public function getHistoryFundRate(array $data=[]){
        $this->type='GET';
        $this->path='/api/v2/mix/market/history-fund-rate';

        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /api/v2/mix/market/current-fund-rate
     * */
    public function getCurrentFundRate(array $data=[]){
        $this->type='GET';
        $this->path='/api/v2/mix/market/current-fund-rate';

        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /api/v2/mix/market/contracts
     * */
    public function getContracts(array $data=[]){
        $this->type='GET';
        $this->path='/api/v2/mix/market/contracts';

        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /api/v2/mix/market/query-position-lever
     * */
    public function getQueryPositionLever(array $data=[]){
        $this->type='GET';
        $this->path='/api/v2/mix/market/query-position-lever';

        $this->data=$data;
        return $this->exec();
    }
}

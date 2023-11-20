<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Bitget\Api\SpotV2;

use Lin\Bitget\Request;

class Trade extends Request
{
    /**
     *POST /api/v2/spot/trade/place-order
     * */
    public function postPlaceOrder(array $data=[]){
        $this->type='POST';
        $this->path='/api/v2/spot/trade/place-order';

        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST /api/v2/spot/trade/cancel-order
     * */
    public function postCancelOrder(array $data=[]){
        $this->type='POST';
        $this->path='/api/v2/spot/trade/cancel-order';

        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST /api/v2/spot/trade/batch-orders
     * */
    public function postBatchOrders(array $data=[]){
        $this->type='POST';
        $this->path='/api/v2/spot/trade/batch-orders';

        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST /api/v2/spot/trade/batch-cancel-order
     * */
    public function postBatchCancelOrder(array $data=[]){
        $this->type='POST';
        $this->path='/api/v2/spot/trade/batch-cancel-order';

        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST /api/v2/spot/trade/cancel-symbol-order
     * */
    public function postCancelSymbolOrder(array $data=[]){
        $this->type='POST';
        $this->path='/api/v2/spot/trade/cancel-symbol-order';

        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /api/v2/spot/trade/orderInfo
     * */
    public function getOrderInfo(array $data=[]){
        $this->type='GET';
        $this->path='/api/v2/spot/trade/orderInfo';

        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /api/v2/spot/trade/unfilled-orders
     * */
    public function getUnfilledOrders(array $data=[]){
        $this->type='GET';
        $this->path='/api/v2/spot/trade/unfilled-orders';

        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /api/v2/spot/trade/history-orders
     * */
    public function getHistoryOrders(array $data=[]){
        $this->type='GET';
        $this->path='/api/v2/spot/trade/history-orders';

        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /api/v2/spot/trade/fills
     * */
    public function getFills(array $data=[]){
        $this->type='GET';
        $this->path='/api/v2/spot/trade/fills';

        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST /api/v2/spot/trade/place-plan-order
     * */
    public function postPlacePlanOrder(array $data=[]){
        $this->type='POST';
        $this->path='/api/v2/spot/trade/place-plan-order';

        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST /api/v2/spot/trade/modify-plan-order
     * */
    public function postModifyPlanOrder(array $data=[]){
        $this->type='POST';
        $this->path='/api/v2/spot/trade/modify-plan-order';

        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST /api/v2/spot/trade/cancel-plan-order
     * */
    public function postCancelPlanOrder(array $data=[]){
        $this->type='POST';
        $this->path='/api/v2/spot/trade/cancel-plan-order';

        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /api/v2/spot/trade/current-plan-order
     * */
    public function getCurrentPlanOrder(array $data=[]){
        $this->type='GET';
        $this->path='/api/v2/spot/trade/current-plan-order';

        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /api/v2/spot/trade/history-plan-order
     * */
    public function getHistoryPlanOrder(array $data=[]){
        $this->type='GET';
        $this->path='/api/v2/spot/trade/history-plan-order';

        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST /api/v2/spot/trade/batch-cancel-plan-order
     * */
    public function postBatchCancelPlanOrder(array $data=[]){
        $this->type='POST';
        $this->path='/api/v2/spot/trade/batch-cancel-plan-order';

        $this->data=$data;
        return $this->exec();
    }
}

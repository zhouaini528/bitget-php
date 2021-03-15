<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Bitget\Api\SwapV3;

use Lin\Bitget\Request;

class Order extends Request
{
    /**
     *POST /api/swap/v3/order/placeOrder
     * */
    public function postPlaceOrder(array $data=[]){
        $this->type='POST';
        $this->path='/api/swap/v3/order/placeOrder';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST /api/swap/v3/order/batchOrders
     * */
    public function postBatchOrders(array $data=[]){
        $this->type='POST';
        $this->path='/api/swap/v3/order/batchOrders';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST /api/swap/v3/order/cancel_order
     * */
    public function postCancelOrder(array $data=[]){
        $this->type='POST';
        $this->path='/api/swap/v3/order/cancel_order';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST /api/swap/v3/order/cancel_batch_orders
     * */
    public function postCancelBatchOrders(array $data=[]){
        $this->type='POST';
        $this->path='/api/swap/v3/order/cancel_batch_orders';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /api/swap/v3/order/detail
     * */
    public function getDetail(array $data=[]){
        $this->type='GET';
        $this->path='/api/swap/v3/order/detail';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /api/swap/v3/order/history
     * */
    public function getHistory(array $data=[]){
        $this->type='GET';
        $this->path='/api/swap/v3/order/history';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /api/swap/v3/order/current
     * */
    public function getCurrent(array $data=[]){
        $this->type='GET';
        $this->path='/api/swap/v3/order/current';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /api/swap/v3/order/fills
     * */
    public function getFills(array $data=[]){
        $this->type='GET';
        $this->path='/api/swap/v3/order/fills';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST /api/swap/v3/order/plan_order
     * */
    public function postPlanOrder(array $data=[]){
        $this->type='POST';
        $this->path='/api/swap/v3/order/plan_order';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST /api/swap/v3/order/cancel_plan
     * */
    public function postCancelPlan(array $data=[]){
        $this->type='POST';
        $this->path='/api/swap/v3/order/cancel_plan';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /api/swap/v3/order/currentPlan
     * */
    public function getCurrentPlan(array $data=[]){
        $this->type='GET';
        $this->path='/api/swap/v3/order/currentPlan';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /api/swap/v3/order/historyPlan
     * */
    public function getHistoryPlan(array $data=[]){
        $this->type='GET';
        $this->path='/api/swap/v3/order/historyPlan';
        $this->data=$data;
        return $this->exec();
    }


    /**
     *
     * */
    /*public function post(array $data=[]){
        $this->type='POST';
        $this->path='';
        $this->data=$data;
        return $this->exec();
    }*/
}

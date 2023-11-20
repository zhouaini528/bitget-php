<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Bitget\Api\ContractV2;

use Lin\Bitget\Request;

class Order extends Request
{

    /**
     *POST /api/v2/mix/order/place-order
     * */
    public function postPlaceOrder(array $data=[]){
        $this->type='POST';
        $this->path='/api/v2/mix/order/place-order';

        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST /api/v2/mix/order/click-backhand
     * */
    public function postClickBackhand(array $data=[]){
        $this->type='POST';
        $this->path='/api/v2/mix/order/click-backhand';

        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST /api/v2/mix/order/batch-place-order
     * */
    public function postBatchPlaceOrder(array $data=[]){
        $this->type='POST';
        $this->path='/api/v2/mix/order/batch-place-order';

        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST /api/v2/mix/order/modify-order
     * */
    public function postModifyOrder(array $data=[]){
        $this->type='POST';
        $this->path='/api/v2/mix/order/modify-order';

        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST /api/v2/mix/order/cancel-order
     * */
    public function postCancelOrder(array $data=[]){
        $this->type='POST';
        $this->path='/api/v2/mix/order/cancel-order';

        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST /api/v2/mix/order/batch-cancel-orders
     * */
    public function postBatchCancelOrders(array $data=[]){
        $this->type='POST';
        $this->path='/api/v2/mix/order/batch-cancel-orders';

        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /api/v2/mix/order/detail
     * */
    public function getDetail(array $data=[]){
        $this->type='GET';
        $this->path='/api/v2/mix/order/detail';

        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST /api/v2/mix/order/close-positions
     * */
    public function postClosePositions(array $data=[]){
        $this->type='POST';
        $this->path='/api/v2/mix/order/close-positions';

        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /api/v2/mix/order/fills
     * */
    public function getFills(array $data=[]){
        $this->type='GET';
        $this->path='/api/v2/mix/order/fills';

        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /api/v2/mix/order/fill-history
     * */
    public function getFillHistory(array $data=[]){
        $this->type='GET';
        $this->path='/api/v2/mix/order/fill-history';

        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /api/v2/mix/order/orders-pending
     * */
    public function getOrdersPending(array $data=[]){
        $this->type='GET';
        $this->path='/api/v2/mix/order/orders-pending';

        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /api/v2/mix/order/orders-history
     * */
    public function getOrdersHistory(array $data=[]){
        $this->type='GET';
        $this->path='/api/v2/mix/order/orders-history';

        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST /api/v2/mix/order/place-tpsl-order
     * */
    public function postPlaceTpslOrder(array $data=[]){
        $this->type='POST';
        $this->path='/api/v2/mix/order/place-tpsl-order';

        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST /api/v2/mix/order/place-plan-order
     * */
    public function postPlacePlanOrder(array $data=[]){
        $this->type='POST';
        $this->path='/api/v2/mix/order/place-plan-order';

        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST /api/v2/mix/order/modify-tpsl-order
     * */
    public function postModifyTpslOrder(array $data=[]){
        $this->type='POST';
        $this->path='/api/v2/mix/order/modify-tpsl-order';

        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST /api/v2/mix/order/modify-plan-order
     * */
    public function postModifyPlanOrder(array $data=[]){
        $this->type='POST';
        $this->path='/api/v2/mix/order/modify-plan-order';

        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST /api/v2/mix/order/cancel-plan-order
     * */
    public function postCancelPlanOrder(array $data=[]){
        $this->type='POST';
        $this->path='/api/v2/mix/order/cancel-plan-order';

        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /api/v2/mix/order/orders-plan-pending
     * */
    public function getOrdersPlanPending(array $data=[]){
        $this->type='GET';
        $this->path='/api/v2/mix/order/orders-plan-pending';

        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /api/v2/mix/order/orders-plan-history
     * */
    public function getOrdersPlanHistory(array $data=[]){
        $this->type='GET';
        $this->path='/api/v2/mix/order/orders-plan-history';

        $this->data=$data;
        return $this->exec();
    }
}

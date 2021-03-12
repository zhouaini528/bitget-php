<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Bitget\Api\SpotV1;

use Lin\Bitget\Request;

class Order extends Request
{
    /**
     *POST /api/v1/order/orders/place 下单
     * */
    public function postPlace(array $data=[]){
        $this->type='POST';
        $this->path='/api/v1/order/orders/place';


        $data['method']='place';

        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST /api/v1/order/orders/{order_id}/submitcancel 申请撤销一个订单请求
     * */
    public function postSubmitCancel(array $data=[]){
        $this->type='POST';
        $this->path='/api/v1/order/orders/'.$data['order_id'].'/submitcancel';

        unset($data['order_id']);

        $data['method']='submitcancel';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST /api/v1/order/orders/batchcancel 批量撤销订单
     * */
    public function postBatchCancel(array $data=[]){
        $this->type='POST';
        $this->path='/api/v1/order/orders/batchcancel';

        $data['method']='batchcancel';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST /api/v1/order/orders/{order_id} 查询某个订单详情
     * */
    public function post(array $data=[]){
        $this->type='POST';
        $this->path='/api/v1/order/orders/'.$data['order_id'];

        unset($data['order_id']);

        $data['method']='orders';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST /api/v1/order/orders/{order_id}/matchresults 查询某个订单的成交明细
     * */
    public function postOrderIdMatchresults(array $data=[]){
        $this->type='POST';
        $this->path='/api/v1/order/orders/'.$data['order_id'].'/matchresults';

        unset($data['order_id']);

        $data['method']='matchresults';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /api/v1/order/orders 查询当前委托、历史委托
     * */
    public function get(array $data=[]){
        $this->type='GET';
        $this->path='/api/v1/order/orders';

        $data['method']='orders';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /api/v1/order/orders/openOrders 查询当前委托
     * */
    public function getOpenOrders(array $data=[]){
        $this->type='GET';
        $this->path='/api/v1/order/orders/openOrders';

        $data['method']='openOrders';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /api/v1/order/orders/history 查询历史委托
     * */
    public function getHistory(array $data=[]){
        $this->type='GET';
        $this->path='/api/v1/order/orders/history';

        $data['method']='history';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST /api/v1/order/matchresults 查询当前成交、历史成交
     * */
    public function postMatchresults(array $data=[]){
        $this->type='POST';
        $this->path='/api/v1/order/matchresults';

        $data['method']='matchresults';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /api/v1/order/deposit_withdraw 查询虚拟币充提记录
     * */
    public function getDepositWithdraw(array $data=[]){
        $this->type='GET';
        $this->path='/api/v1/order/deposit_withdraw';

        $data['method']='deposit_withdraw';
        $this->data=$data;
        return $this->exec();
    }
}

<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Bitget\Api\SpotV1;

use Lin\Bitget\Request;

class Account extends Request
{
    /**
     *GET /api/v1/account/accounts 查询当前用户的所有账户(即account_id)。
     * */
    public function get(array $data=[]){
        $this->type='GET';
        $this->path='/api/v1/account/accounts';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /api/v1/accounts/{account_id}/balance 查询站内指定账户的余额
     * */
    public function getBalance(array $data=[]){
        $this->type='GET';
        $this->path='/api/v1/accounts/'.$data['account_id'].'/balance';
        $this->data=$data;
        return $this->exec();
    }
}

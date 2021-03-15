<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Bitget\Api\SwapV3;

use Lin\Bitget\Request;

class Account extends Request
{
    /**
     *GET /api/swap/v3/account/accounts
     * */
    public function getAccounts(array $data=[]){
        $this->type='GET';
        $this->path='/api/swap/v3/account/accounts';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /api/swap/v3/account/account
     * */
    public function getAccount(array $data=[]){
        $this->type='GET';
        $this->path='/api/swap/v3/account/account';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /api/swap/v3/account/settings
     * */
    public function getSettings(array $data=[]){
        $this->type='GET';
        $this->path='/api/swap/v3/account/settings';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST /api/swap/v3/account/leverage
     * */
    public function postLeverage(array $data=[]){
        $this->type='POST';
        $this->path='/api/swap/v3/account/leverage';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST /api/swap/v3/account/adjustMargin
     * */
    public function postAdjustMargin(array $data=[]){
        $this->type='POST';
        $this->path='/api/swap/v3/account/adjustMargin';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST /api/swap/v3/account/modifyAutoAppendMargin
     * */
    public function postModifyAutoAppendMargin(array $data=[]){
        $this->type='POST';
        $this->path='/api/swap/v3/account/modifyAutoAppendMargin';
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

<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Bitget\Api\ContractV2;

use Lin\Bitget\Request;

class Account extends Request
{

    /**
     *GET /api/v2/mix/account/account
     * */
    public function getAccount(array $data=[]){
        $this->type='GET';
        $this->path='/api/v2/mix/account/account';

        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /api/v2/mix/account/accounts
     * */
    public function getAccounts(array $data=[]){
        $this->type='GET';
        $this->path='/api/v2/mix/account/accounts';

        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /api/v2/mix/account/sub-account-assets
     * */
    public function getSubAccountAssets(array $data=[]){
        $this->type='GET';
        $this->path='/api/v2/mix/account/sub-account-assets';

        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /api/v2/mix/account/open-count
     * */
    public function getOpenCount(array $data=[]){
        $this->type='GET';
        $this->path='/api/v2/mix/account/open-count';

        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST /api/v2/mix/account/set-leverage
     * */
    public function postAetLeverage(array $data=[]){
        $this->type='POST';
        $this->path='/api/v2/mix/account/set-leverage';

        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST /api/v2/mix/account/set-margin
     * */
    public function postSetMargin(array $data=[]){
        $this->type='POST';
        $this->path='/api/v2/mix/account/set-margin';

        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST /api/v2/mix/account/set-margin-mode
     * */
    public function postSetMarginMode(array $data=[]){
        $this->type='POST';
        $this->path='/api/v2/mix/account/set-margin-mode';

        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST /api/v2/mix/account/set-position-mode
     * */
    public function postSetPositionMode(array $data=[]){
        $this->type='POST';
        $this->path='/api/v2/mix/account/set-position-mode';

        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /api/v2/mix/account/bill
     * */
    public function getBill(array $data=[]){
        $this->type='GET';
        $this->path='/api/v2/mix/account/bill';

        $this->data=$data;
        return $this->exec();
    }
}

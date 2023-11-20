<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Bitget\Api\SpotV2;

use Lin\Bitget\Request;

class Wallet extends Request
{
    /**
     *POST /api/v2/spot/wallet/transfer
     * */
    public function postTransfer(array $data=[]){
        $this->type='POST';
        $this->path='/api/v2/spot/wallet/transfer';

        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST /api/v2/spot/wallet/subaccount-transfer
     * */
    public function postSubaccountTransfer(array $data=[]){
        $this->type='POST';
        $this->path='/api/v2/spot/wallet/subaccount-transfer';

        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST /api/v2/spot/wallet/withdrawal
     * */
    public function postWithdrawal(array $data=[]){
        $this->type='POST';
        $this->path='/api/v2/spot/wallet/withdrawal';

        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /api/v2/spot/wallet/deposit-address
     * */
    public function getDepositAddress(array $data=[]){
        $this->type='GET';
        $this->path='/api/v2/spot/wallet/deposit-address';

        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /api/v2/spot/wallet/deposit-records
     * */
    public function getDepositRecords(array $data=[]){
        $this->type='GET';
        $this->path='/api/v2/spot/wallet/deposit-records';

        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /api/v2/spot/wallet/withdrawal-records
     * */
    public function getWithdrawalRecords(array $data=[]){
        $this->type='GET';
        $this->path='/api/v2/spot/wallet/withdrawal-records';

        $this->data=$data;
        return $this->exec();
    }
}

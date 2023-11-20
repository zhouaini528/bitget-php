<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Bitget\Api\SpotV2;

use Lin\Bitget\Request;

class Account extends Request
{

    /*
     *GET /api/v2/spot/account/info
     * */
    public function getInfo(array $data=[]){
        $this->type='GET';
        $this->path='/api/v2/spot/account/info';

        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /api/v2/spot/account/assets
     * */
    public function getAssets(array $data=[]){
        $this->type='GET';
        $this->path='/api/v2/spot/account/assets';

        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /api/v2/spot/account/subaccount-assets
     * */
    public function getSubaccountAssets(array $data=[]){
        $this->type='GET';
        $this->path='/api/v2/spot/account/subaccount-assets';

        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /api/v2/spot/account/bills
     * */
    public function getBills(array $data=[]){
        $this->type='GET';
        $this->path='/api/v2/spot/account/bills';

        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /api/v2/spot/account/sub-main-trans-record
     * */
    public function getSubMainTransRecord(array $data=[]){
        $this->type='GET';
        $this->path='/api/v2/spot/account/sub-main-trans-record';

        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /api/v2/spot/account/transferRecords
     * */
    public function getTransferRecords(array $data=[]){
        $this->type='GET';
        $this->path='/api/v2/spot/account/transferRecords';

        $this->data=$data;
        return $this->exec();
    }
}

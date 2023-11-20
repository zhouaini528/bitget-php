<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Bitget\Api\ContractV2;

use Lin\Bitget\Request;

class Position extends Request
{

    /**
     *GET /api/v2/mix/position/single-position
     * */
    public function getSinglePosition(array $data=[]){
        $this->type='GET';
        $this->path='/api/v2/mix/position/single-position';

        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /api/v2/mix/position/all-position
     * */
    public function getAllPosition(array $data=[]){
        $this->type='GET';
        $this->path='/api/v2/mix/position/all-position';

        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /api/v2/mix/position/history-position
     * */
    public function getHistoryPosition(array $data=[]){
        $this->type='GET';
        $this->path='/api/v2/mix/position/history-position';

        $this->data=$data;
        return $this->exec();
    }
}

<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Bitget\Api\SwapV3;

use Lin\Bitget\Request;

class Position extends Request
{
    /**
     *GET /api/swap/v3/position/allPosition
     * */
    public function getAllPosition(array $data=[]){
        $this->type='GET';
        $this->path='/api/swap/v3/position/allPosition';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /api/swap/v3/position/singlePosition
     * */
    public function getSinglePosition(array $data=[]){
        $this->type='GET';
        $this->path='/api/swap/v3/position/singlePosition';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST /api/swap/v3/position/changeHoldModel
     * */
    public function postChangeHoldModel(array $data=[]){
        $this->type='POST';
        $this->path='/api/swap/v3/position/changeHoldModel';
        $this->data=$data;
        return $this->exec();
    }
}

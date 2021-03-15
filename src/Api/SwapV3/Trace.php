<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Bitget\Api\SwapV3;

use Lin\Bitget\Request;

class Trace extends Request
{
    /**
     *POST /api/swap/v3/trace/closeTrackOrder
     * */
    public function postCloseTrackOrder(array $data=[]){
        $this->type='POST';
        $this->path='/api/swap/v3/trace/closeTrackOrder';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /api/swap/v3/trace/currentTrack
     * */
    public function getCurrentTrack(array $data=[]){
        $this->type='GET';
        $this->path='/api/swap/v3/trace/currentTrack';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /api/swap/v3/trace/historyTrack
     * */
    public function getHistoryTrack(array $data=[]){
        $this->type='GET';
        $this->path='/api/swap/v3/trace/historyTrack';
        $this->data=$data;
        return $this->exec();
    }
}

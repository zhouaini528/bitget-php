<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Bitget\Api\SpotV2;

use Lin\Bitget\Request;

class Publics extends Request
{


    /*
     *GET /api/v2/spot/public/coins
     * */
    public function getCoins(array $data=[]){
        $this->type='GET';
        $this->path='/api/v2/spot/public/coins';

        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /api/v2/spot/public/symbols
     * */
    public function getSymbols(array $data=[]){
        $this->type='GET';
        $this->path='/api/v2/spot/public/symbols';

        $this->data=$data;
        return $this->exec();
    }
}

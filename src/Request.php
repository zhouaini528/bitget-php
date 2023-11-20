<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Bitget;

use GuzzleHttp\Exception\RequestException;
use Lin\Bitget\Exceptions\Exception;

class Request
{
    protected $key='';

    protected $secret='';

    protected $passphrase='';

    protected $host='';

    protected $nonce='';

    protected $signature='';

    protected $headers=[];

    protected $type='';

    protected $path='';

    protected $data=[];

    protected $options=[];

    protected $platform='';

    protected $version='';

    public function __construct(array $data)
    {
        $this->key=$data['key'] ?? '';
        $this->secret=$data['secret'] ?? '';
        $this->passphrase=$data['passphrase'] ?? '';
        $this->host=$data['host'] ?? '';

        $this->options=$data['options'] ?? [];

        $this->platform=$data['platform'] ?? [];
        $this->version=$data['version'] ?? [];
    }

    /**
     *
     * */
    protected function auth(){
        $this->nonce();

        $this->signature();

        $this->headers();

        $this->options();
    }

    /**
     *
     * */
    protected function nonce(){
        $this->nonce = time()*1000;
    }

    /**
     *
     * */
    protected function signature(){
        switch ($this->platform){
            case 'spot':{
                if(empty($this->data)) $param='';
                else $param=implode('&',$this->sort($this->data));
                $this->signature=hash_hmac('md5',$param,sha1($this->secret));
                break;
            }
            case 'spot_v2':
            case 'swap':{
                $param=$this->nonce.$this->type.$this->path;

                if($this->type=='POST'){
                    $param .= json_encode($this->data);
                }else{
                    $param .= empty($this->data) ? '' : '?'.http_build_query($this->data, '', '&') ;
                }

                $this->signature = base64_encode(hash_hmac("sha256", $param, $this->secret,true));
                break;
            }
        }
    }

    /**
     *
     * */
    protected function headers(){
        switch ($this->platform){
            case 'spot':{
                $this->headers= [
                    'User-Agent'=>'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.71 Safari/537.36',
                ];
                break;
            }
            case 'spot_v2':
            case 'swap':{
                $this->headers= [
                    'Content-Type'=>'application/json',
                    "ACCESS-KEY"=>$this->key,
                    "ACCESS-SIGN"=>$this->signature,
                    "ACCESS-TIMESTAMP"=>$this->nonce,
                    "ACCESS-PASSPHRASE"=>$this->passphrase,
                    "locale"=>'en-US'
                ];
                break;
            }
        }
    }

    /**
     *
     * */
    protected function options(){
        if(isset($this->options['headers'])) $this->headers=array_merge($this->headers,$this->options['headers']);

        $this->options['headers']=$this->headers;
        $this->options['timeout'] = $this->options['timeout'] ?? 60;
    }

    /**
     *
     * */
    protected function send(){
        $client = new \GuzzleHttp\Client();

        $url=$this->host.$this->path;

        switch ($this->platform){
            case 'spot':{
                $url.='?'."sign=" . $this->signature . "&req_time=" . $this->nonce . "&accesskey=" . $this->key;
                if($this->type=='GET') $url.= empty($this->data) ? '' : '&'.http_build_query($this->data);
                else $this->options['form_params']=$this->data;
                break;
            }
            case 'spot_v2':
            case 'swap':{
                if($this->type=='GET') $url.= empty($this->data) ? '' : '?'.http_build_query($this->data);
                else $this->options['body']=json_encode($this->data);
                break;
            }
        }

        /*echo $url.PHP_EOL;
        print_r($this->options);
        echo $this->platform.'   '.$this->version.PHP_EOL;*/
        //die;

        $response = $client->request($this->type, $url, $this->options);

        return $response->getBody()->getContents();
    }

    /*
     *
     * */
    protected function exec(){
        $this->auth();

        try {
            return json_decode($this->send(),true);
        }catch (RequestException $e){
            if(method_exists($e->getResponse(),'getBody')){
                $contents=$e->getResponse()->getBody()->getContents();

                $temp=json_decode($contents,true);
                if(!empty($temp)) {
                    $temp['_method']=$this->type;
                    $temp['_url']=$this->host.$this->path;
                }else{
                    $temp['_message']=$e->getMessage();
                }
            }else{
                $temp['_message']=$e->getMessage();
            }

            $temp['_httpcode']=$e->getCode();

            throw new Exception(json_encode($temp));
        }
    }

    /**
     * */
    protected function sort($param)
    {
        $u = [];
        $sort_rank = [];
        foreach ($param as $k => $v) {
            $u[] = $k . "=" . urlencode($v);
            $sort_rank[] = ord($k);
        }
        asort($u);

        return $u;
    }
}

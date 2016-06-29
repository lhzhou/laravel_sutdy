<?php

namespace App\Http\Controllers\Wechat;

use App\Models\AccountModel;
use App\Models\ReviveQrCodeModel;
use Faker\Provider\Uuid;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use EasyWeChat;

class QrcodeController extends Controller
{

    public function generate()
    {



        $results = AccountModel::all();


        ob_start();
        foreach ($results AS $value)
        {


            if (ReviveQrCodeModel::create(['id' => Uuid::uuid() , 'user_id' => $value->id , 'url' => $this->getQrcode('RES_'.$value->id)])){
                echo $value->id."生成二维码成功<br />\n";;
            }else{
                echo $value->id."生成二维码失败<br />\n";;
            }

            ob_flush();
            flush();
            usleep(500000);
        }


    }


    private function getQrcode($user_id)
    {
        $app = EasyWeChat::qrcode(); // 用户服务

        $result = $app->temporary($user_id, 7 * 24 * 3600);

        $ticket = $result->ticket; // 或者 $result['ticket']
        $url = $result->url;

        return $url = $app->url($ticket);

    }
}

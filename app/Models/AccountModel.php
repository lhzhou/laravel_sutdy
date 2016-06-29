<?php

namespace App\Models;

use Faker\Provider\Uuid;
use Illuminate\Database\Eloquent\Model;

class AccountModel extends Model
{
    protected $table  = 'users';

    protected $fillable = ['id','paternalID','openID', 'subscribe' , 'nickname' , 'sex' , 'language' , 'city' , 'province' , 'country' , 'headimgurl' , 'subscribe_time' , 'remark' ,'groupid'];

    protected $dateFormat = 'U';

    protected $casts = ['id' => 'string'];




    public static function getAll(array $condition =[])
    {
        $db = self::orderBy('created_at', 'desc');

        if (!empty($condition['id']))
            $db = $db->where('id' , '=' , $condition['id']);

        if (!empty($condition['gameID']))
            $db = $db->where('gameID' , '=' , $condition['gameID']);

        if (!empty($condition['openID']))
            $db = $db->where('openID' , '=' , $condition['openID']);

        if (!empty($condition['paternalID']))
            $db = $db->where('paternalID' , '=' , $condition['paternalID']);

        if (!empty($condition['nickname']))
            $db = $db->where('nickname' , 'like' , '%'.$condition['nickname'].'%');

        if (!empty($condition['city']))
            $db = $db->where('city' , 'like' , '%'.$condition['city'].'%');

        if (!empty($condition['startDate']))
            $db = $db->where('subscribe_time' , '>' , $condition['startDate']);

        if (!empty($condition['endDate']))
            $db = $db->where('subscribe_time' , '<' , $condition['endDate']);



        $db = $db->paginate('50');

        return $db;

    }

    public static function updateID($openId)
    {
       return self::where('openID' , $openId)->update(['id' => Uuid::uuid()]);
    }


}

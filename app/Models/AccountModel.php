<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccountModel extends Model
{
    protected $table  = 'users';

    protected $dateFormat = 'U';


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

//        $db = $db->toSql();
        return $db;

        //        self::where();
//        if (isset($condition['id']))
//            self::where('id', $condition['id']);
//        if (isset($condition['gameID']))
//            self::where('gameID', $condition['gameID']);
//        if (isset($condition['nickname']))
//            self::where('nickname', 'like', '%'.$condition['nickname'].'%');
//
//        self::;
//        return DB::paginate(50);
    }


}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApiCodeModel extends Model
{

    protected $table = 'common_message';

    protected $fillable = ['code', 'message'];

    protected $dateFormat = 'U';

    //

    public static function getAll(array $condition = [])
    {
        $db = self::orderBy('created_at', 'desc');

        if (!empty($condition['id']))
            $db = $db->where('id', '=', $condition['id']);

        if (!empty($condition['code']))
            $db = $db->where('code', '=', $condition['code']);

        if (!empty($condition['message']))
            $db = $db->where('message' , 'like' , '%'.$condition['message'].'%');
        
        $db = $db->paginate('50');

        return $db;

    }



}

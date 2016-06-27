<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccountModel extends Model
{
    protected $table  = 'users';

    protected $dateFormat = 'U';


    public static function getAll(array $condition =[])
    {

        return self::where($condition)->orderBy('created_at', 'desc')->paginate(50);
    }


}

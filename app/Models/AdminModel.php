<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminModel extends Model
{
    protected  $table = 'admin';

    protected $dateFormat = 'U';

    public static function auth($parames)
    {
        return self::where($parames)->get();
    }
}

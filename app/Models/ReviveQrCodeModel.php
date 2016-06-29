<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReviveQrCodeModel extends Model
{
    protected $table = 'revive_qr_code';

    protected $fillable = ['user_id' , 'url'];

    protected $dateFormat = 'U';
}

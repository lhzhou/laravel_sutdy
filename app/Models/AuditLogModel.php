<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AuditLogModel extends Model
{
    protected $table = 'log';

    protected $dateFormat = 'U';

    protected $connection = 'audit_log';
}

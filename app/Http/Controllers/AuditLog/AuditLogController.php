<?php

namespace App\Http\Controllers\AuditLog;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\AuditLogModel;

class AuditLogController extends Controller
{
    public function index()
    {
       return AuditLogModel::all();
    }
}

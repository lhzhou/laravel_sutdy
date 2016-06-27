<?php

namespace App\Http\Controllers\Account;

use App\Models\AccountModel;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AccountController extends Controller
{

    public function index()
    {

        return AccountModel::orderBy('created_at', 'desc')->paginate('20');
//        return 'accountList';

    }

}

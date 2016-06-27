<?php

namespace App\Http\Controllers\Account;

use App\Models\AccountModel;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AccountController extends Controller
{

    public function index(Request $request)
    {
        $condition = [];
        if ($request->input('id'))
            $condition['id'] = $request->input('id');
        if ($request->input('gameID'))
            $condition['id'] = $request->input('gameID');



        $data['results'] = AccountModel::getAll($condition);



        return view('account.account_list' , $data);

    }

}

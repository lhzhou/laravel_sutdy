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

        $condition['id'] = $request->input('id');
        $condition['gameID'] = $request->input('gameID');
        $condition['nickname'] = $request->input('nickname');
        $condition['city'] = $request->input('city');
        $condition['openID'] = $request->input('openID');
        $condition['paternalID'] = $request->input('paternalID');
        $condition['startDate'] = ($request->input('startDate'))? strtotime($request->input('startDate')):'';
        $condition['endDate'] = ($request->input('endDate'))? strtotime($request->input('endDate')):'';


        $data['results'] = AccountModel::getAll($condition);



        return view('account.account_list' , $data);

    }

}

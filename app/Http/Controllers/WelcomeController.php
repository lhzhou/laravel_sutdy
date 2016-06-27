<?php

namespace App\Http\Controllers;

use App\Models\AdminModel;
use Illuminate\Http\Request;
use App\Http\Requests;



class WelcomeController extends Controller
{

    public function index(Request $request)
    {
        $data = [];
        return view('welcome' ,$data);
    }

    public function login()
    {
       return view('login');
    }

    public function loginValidate(Request $request)
    {
        $params['account'] =  $request->input('email');
        $params['password'] =  md5($request->input('password'));

        $userData = AdminModel::auth($params);

        if ($userData = AdminModel::auth($params))
        {
            $request->session()->put('user_data' , $userData);

            return redirect('/');

        }else{


            $data['errorMessage']  = '账号密码错误';

            return view('login' ,$data);
        }
    }

    public function out(Request $request)
    {
        $request->session()->clear();

        return redirect('/');

    }
    



    
}

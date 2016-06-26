<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class WelcomeController extends Controller
{

    public function index()
    {

        return 'hi';
    }

    public function login()
    {
       return view('login');
    }

    public function loginValidate()
    {


    }


    
}

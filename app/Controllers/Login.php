<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function login()
    {
        $data = [
            'title' => 'Login Form'
        ];
        return view('login', $data);
    }

    //--------------------------------------------------------------------

}

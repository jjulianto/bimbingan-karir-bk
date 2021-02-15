<?php

namespace App\Controllers;

class Profile extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Profile',
            'user' => 'List Siswa'
        ];
        return view('dashboard/profile', $data);
    }

    //--------------------------------------------------------------------

}

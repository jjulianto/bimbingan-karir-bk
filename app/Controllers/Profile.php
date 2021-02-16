<?php

namespace App\Controllers;

class Profile extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Profile',
            'check' => 'profile'
        ];
        return view('dashboard/profile', $data);
    }

    public function siswa()
    {
        $data = [
            'title' => 'Profile',
            'user' => 'List Guru'
        ];
        return view('dashboard-siswa/profile-siswa', $data);
    }

    //--------------------------------------------------------------------

}

<?php

namespace App\Controllers;

class Profile extends BaseController
{
    public function guru()
    {
        $data = [
            'title' => 'Profile',
            'check' => 'profile',
            'user'  => 'guru'
        ];
        return view('dashboard-guru/profile-guru', $data);
    }

    public function siswa()
    {
        $data = [
            'title' => 'Profile',
            'check' => 'profile',
            'user'  => 'siswa'
        ];
        return view('dashboard-siswa/profile-siswa', $data);
    }

    //--------------------------------------------------------------------

}

<?php

namespace App\Controllers;

class Profile extends BaseController
{
    public function guru()
    {
        if (session()->get('role') == 'siswa') {
            return redirect()->to('/dashboard-siswa');
        }
        $data = [
            'title' => 'Profile',
            'check' => 'profile',
            'user'  => 'guru'
        ];
        return view('dashboard-guru/profile-guru', $data);
    }

    public function siswa()
    {
        if (session()->get('role') == 'guru') {
            return redirect()->to('/dashboard-guru');
        }
        $data = [
            'title' => 'Profile',
            'check' => 'profile',
            'user'  => 'siswa'
        ];
        return view('dashboard-siswa/profile-siswa', $data);
    }

    //--------------------------------------------------------------------

}

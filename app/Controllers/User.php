<?php

namespace App\Controllers;

class User extends BaseController
{
    public function guru()
    {
        $data = [
            'title' => 'List Siswa',
            'check' => 'siswa',
            'user'  => 'guru'
        ];
        return view('dashboard-guru/user-guru', $data);
    }

    public function siswa()
    {
        $data = [
            'title' => 'List Guru',
            'check' => 'siswa',
            'user'  => 'siswa'
        ];
        return view('dashboard-siswa/user-siswa', $data);
    }

    //--------------------------------------------------------------------

}

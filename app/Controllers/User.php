<?php

namespace App\Controllers;

class User extends BaseController
{
    public function guru()
    {
        if (session()->get('role') == 'siswa') {
            return redirect()->to('/dashboard-siswa');
        }
        $data = [
            'title' => 'List Siswa',
            'check' => 'siswa',
            'user'  => 'guru'
        ];
        return view('dashboard-guru/user-guru', $data);
    }

    public function siswa()
    {
        if (session()->get('role') == 'guru') {
            return redirect()->to('/dashboard-guru');
        }
        $data = [
            'title' => 'List Guru',
            'check' => 'siswa',
            'user'  => 'siswa'
        ];
        return view('dashboard-siswa/user-siswa', $data);
    }

    //--------------------------------------------------------------------

}

<?php

namespace App\Controllers;

use App\Models\UserModel;

class User extends BaseController
{
    protected $user;
    public function __construct()
    {
        $this->UserModel = new UserModel();
    }

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
        $data['user'] = $this->UserModel->where('role', 'siswa')->findAll();
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
        $data['user'] = $this->UserModel->where('role', 'guru')->findAll();
        return view('dashboard-siswa/user-siswa', $data);
    }

    //--------------------------------------------------------------------

}

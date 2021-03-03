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
        $data = [];
		helper(['form']);
		$model = new UserModel();
        if (session()->get('role') == 'siswa') {
            return redirect()->to('/dashboard-siswa');
        }
        $data = [
            'title' => 'List Siswa',
            'check' => 'siswa',
            'user'  => 'guru'
        ];
        $data['users'] = $this->UserModel->where('role', 'siswa')->findAll();
        $data['user'] = $model->where('id', session()->get('id'))->first();
        return view('dashboard-guru/user-guru', $data);
    }

    public function siswa()
    {
        $data = [];
		helper(['form']);
		$model = new UserModel();
        if (session()->get('role') == 'guru') {
            return redirect()->to('/dashboard-guru');
        }
        $data = [
            'title' => 'List Guru',
            'check' => 'siswa',
            'user'  => 'siswa'
        ];
        $data['users'] = $this->UserModel->where('role', 'guru')->findAll();
        $data['user'] = $model->where('id', session()->get('id'))->first();
        return view('dashboard-siswa/user-siswa', $data);
    }

    //--------------------------------------------------------------------

}

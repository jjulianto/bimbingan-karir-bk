<?php

namespace App\Controllers;

use App\Models\UserModel;

class Profile extends BaseController
{
    public function guru()
    {
        $data = [];
        helper(['form']);
        $model = new UserModel();
        if (session()->get('role') == 'siswa') {
            return redirect()->to('/dashboard-siswa');
        }
        $data = [
            'title' => 'Profile',
            'check' => 'profile',
            'user'  => 'guru'
        ];
        $data['user'] = $model->where('id', session()->get('id'))->first();
        return view('dashboard-guru/profile-guru', $data);
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
            'title' => 'Profile',
            'check' => 'profile',
            'user'  => 'siswa'
        ];
        $data['user'] = $model->where('id', session()->get('id'))->first();
        return view('dashboard-siswa/profile-siswa', $data);
    }

    //--------------------------------------------------------------------

}

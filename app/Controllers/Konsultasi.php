<?php

namespace App\Controllers;
use App\Models\UserModel;

class Konsultasi extends BaseController
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
            'title' => 'Riwayat Konsultasi',
            'check' => 'konsultasi',
            'user'  => 'guru'
        ];
        $data['user'] = $model->where('id', session()->get('id'))->first();
        return view('dashboard-guru/konsultasi-guru', $data);
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
            'title' => 'Riwayat Konsultasi',
            'check' => 'konsultasi',
            'user'  => 'siswa'
        ];
        $data['user'] = $model->where('id', session()->get('id'))->first();
        return view('dashboard-siswa/konsultasi-siswa', $data);
    }

    //--------------------------------------------------------------------

}

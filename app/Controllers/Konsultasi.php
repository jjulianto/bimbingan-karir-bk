<?php

namespace App\Controllers;

class Konsultasi extends BaseController
{
    public function guru()
    {
        if (session()->get('role') == 'siswa') {
            return redirect()->to('/dashboard-siswa');
        }
        $data = [
            'title' => 'Riwayat Konsultasi',
            'check' => 'konsultasi',
            'user'  => 'guru'
        ];
        return view('dashboard-guru/konsultasi-guru', $data);
    }

    public function siswa()
    {
        if (session()->get('role') == 'guru') {
            return redirect()->to('/dashboard-guru');
        }
        $data = [
            'title' => 'Riwayat Konsultasi',
            'check' => 'konsultasi',
            'user'  => 'siswa'
        ];
        return view('dashboard-siswa/konsultasi-siswa', $data);
    }

    //--------------------------------------------------------------------

}

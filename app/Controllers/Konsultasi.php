<?php

namespace App\Controllers;

class Konsultasi extends BaseController
{
    public function guru()
    {
        $data = [
            'title' => 'Riwayat Konsultasi',
            'check' => 'konsultasi',
            'user'  => 'guru'
        ];
        return view('dashboard-guru/konsultasi-guru', $data);
    }

    public function siswa()
    {
        $data = [
            'title' => 'Riwayat Konsultasi',
            'check' => 'konsultasi',
            'user'  => 'siswa'
        ];
        return view('dashboard-siswa/konsultasi-siswa', $data);
    }

    //--------------------------------------------------------------------

}

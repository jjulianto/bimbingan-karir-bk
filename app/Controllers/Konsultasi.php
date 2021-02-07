<?php

namespace App\Controllers;

class Konsultasi extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Riwayat Konsultasi',
            'user' => 'List Siswa'
        ];
        return view('dashboard/konsultasi', $data);
    }

    //--------------------------------------------------------------------

}

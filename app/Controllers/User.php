<?php

namespace App\Controllers;

class User extends BaseController
{
    public function siswa()
    {
        $data = [
            'title' => 'List Siswa',
            'check' => 'siswa'
        ];
        return view('dashboard/user', $data);
    }

    //--------------------------------------------------------------------

}

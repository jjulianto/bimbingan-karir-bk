<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;
use Config\Services;

class NoAuth implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if (session()->get('log') && session()->get('role') == 'guru') {
            return redirect()->to('/dashboard-guru');
        } else if (session()->get('log') && session()->get('role') == 'siswa') {
            return redirect()->to('/dashboard-siswa');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // if (session('id') && session('role') == 'guru') {
        //     return redirect()->to('/dashboard-guru');
        // }
        // else {
        //     return redirect()->to('/dashboard-siswa');
        // }
    }
}

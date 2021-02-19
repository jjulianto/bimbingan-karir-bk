<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function guru()
	{
		$data = [
			'title' => 'Dashboard',
			'check' => 'dashboard',
			'user'  => 'guru'
		];
		return view('dashboard-guru/dashboard-guru', $data);
	}

	public function siswa()
	{
		$data = [
			'title' => 'Dashboard',
			'check' => 'dashboard',
			'user'  => 'siswa'
		];
		return view('dashboard-siswa/dashboard-siswa', $data);
	}

	//--------------------------------------------------------------------

}

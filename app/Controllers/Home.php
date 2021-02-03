<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Dashboard',
			'user' => 'List Siswa',
		];
		return view('dashboard/dashboard', $data);
	}

	//--------------------------------------------------------------------

}

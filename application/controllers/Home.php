<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function index()
	{
		$data['judul'] = "Beranda";
		$this->template->load('template/template-layout', 'home', $data);
	}
}

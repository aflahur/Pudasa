<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Belajar extends CI_Controller
{
	public function index()
	{
		$data['judul'] = "Belajar";
		$this->template->load('template/template-layout', 'belajar', $data);
	}

	public function detail_jenis_tari()
	{
		$data['judul'] = "Belajar";
		$this->template->load('template/template-layout', 'detail-jenis-tari', $data);
	}

	public function detail_jenis_musik()
	{
		$data['judul'] = "Belajar";
		$this->template->load('template/template-layout', 'detail-jenis-musik', $data);
	}

	public function detail_jenis_seni_rupa()
	{
		$data['judul'] = "Belajar";
		$this->template->load('template/template-layout', 'detail-jenis-seni-rupa', $data);
	}

	public function detail_sanggar_tari()
	{
		$data['judul'] = "Belajar";
		$this->template->load('template/template-layout', 'detail-sanggar-tari', $data);
	}

	public function detail_sanggar_tari_kelompok()
	{
		$data['judul'] = "Belajar";
		$this->template->load('template/template-layout', 'detail-sanggar-tari-kelompok', $data);
	}
}

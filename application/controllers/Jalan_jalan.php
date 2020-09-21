<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jalan_jalan extends CI_Controller
{
    public function index()
    {
        $data['judul'] = "Jalan-jalan";
        $this->template->load('template/template-layout', 'jalan-jalan', $data);
    }
    public function detail_jalan_jalan()
    {
        $data['judul'] = "Detail Jalan-jalan";
        $this->template->load('template/template-layout', 'detail-jalan-jalan', $data);
    }
}

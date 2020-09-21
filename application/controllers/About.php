<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{
    public function index()
    {
        $data['judul'] = "Tentang Kami";
        $this->template->load('template/template-layout', 'about-pudasa', $data);
    }

    public function ask()
    {
        $data['judul'] = "Tentang Kami";
        $this->template->load('template/template-layout', 'ask-pudasa', $data);
    }
}

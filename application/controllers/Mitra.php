<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mitra extends CI_Controller
{
    public function profil_mitra()
    {
        $data['judul'] = "Profil Mitra";
        $this->template->load('template/template-layout', 'profil-mitra', $data);
    }
}

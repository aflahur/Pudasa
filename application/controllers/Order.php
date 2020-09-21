<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Order extends CI_Controller
{
    public function jalan_jalan()
    {
        $data['judul'] = "Order Jalan-jalan";
        $this->template->load('template/template-layout', 'order-jalan-jalan', $data);
    }

    public function belajar()
    {
        $data['judul'] = "Order Belajar";
        $this->template->load('template/template-layout', 'order-belajar', $data);
    }

    public function success()
    {
        $data['judul'] = "Order Sukses";
        $this->template->load('template/template-layout', 'order-sukses', $data);
    }

    public function confirmation()
    {
        $data['judul'] = "Order Konfirmasi";
        $this->template->load('template/template-layout', 'order-confirmation', $data);
    }
}

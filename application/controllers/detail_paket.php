<?php

class detail_paket extends CI_Controller{
  public function index() {
    $data['judul']='Halaman Checkout';
    $data['page_aktif']='destail_paket';
    $this->load->view('template/header', $data);
    $this->load->view('layout/detail_paket');
    $this->load->view('template/footer');

  }
}
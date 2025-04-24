<?php

class Home extends CI_Controller
{
  public function index()
  {
    $data['judul'] = 'Halaman Home';
    $data['page_aktif'] = 'home';
    $this->load->view('template/header', $data);
    $this->load->view('layout/home');
    $this->load->view('template/footer');
  }
}

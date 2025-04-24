<?php

class About extends CI_Controller
{
  public function index()
  {
    $data['judul'] = 'Halaman About';
    $data['page_aktif'] = 'about';
    $this->load->view('template/header', $data);
    $this->load->view('layout/about');
    $this->load->view('template/footer');
  }
}

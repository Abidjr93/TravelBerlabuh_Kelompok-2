<?php

class About extends CI_Controller
{
  public function index()
  {
    $data['judul'] = 'About Us - Berlabuh Trip & Travel';
    $data['page_aktif'] = 'about';
    $this->load->view('template/header', $data);
    $this->load->view('layout/about');
    $this->load->view('template/footer');
  }
}

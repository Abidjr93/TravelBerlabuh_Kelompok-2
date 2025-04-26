<?php

class Home extends CI_Controller {
  public function index()
  {
    $data = [
      'judul'        => 'Halaman Home',
      'page_aktif'   => 'home',
      'destinations' => 7,      // ➡ nilai akhir Destinations
      'people'       => 1593,   // ➡ nilai akhir People Served
      'years'        => 3       // ➡ nilai akhir Years Active
    ];
    $this->load->view('template/header', $data);
    // jangan lupa passing $data ke view berikutnya juga:
    $this->load->view('layout/home', $data);
    $this->load->view('template/footer');
  }
}

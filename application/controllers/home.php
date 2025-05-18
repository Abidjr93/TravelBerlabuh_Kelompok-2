<?php

class Home extends CI_Controller
{
  public function index()
  {
    $this->load->model('Tour_model');

    $data['popular_tours'] = $this->Tour_model->get_popular_tours(4);
    $data['judul'] = 'Halaman Home';
    $data['page_aktif'] = 'home';
    $this->load->view('template/header', $data);
    $this->load->view('layout/home');
    $this->load->view('template/footer');
  }
}

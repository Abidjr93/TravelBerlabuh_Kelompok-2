<?php

class destinasi extends CI_Controller{
  public function index() {

    $this->load->view('template/header');
    $this->load->view('layout/destinasi');
    $this->load->view('template/footer');

  }
}
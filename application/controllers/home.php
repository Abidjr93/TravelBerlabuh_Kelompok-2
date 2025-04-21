<?php

class home extends CI_Controller{
  public function index()
  {
    $this->load->view('template/header');
    $this->load->view('layout/home');
    $this->load->view('template/footer');
  }
}
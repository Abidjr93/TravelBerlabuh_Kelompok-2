<?php

class about extends CI_Controller {
  public function index()
  {
    $this->load->view('template/header');
    $this->load->view('about/about');
    $this->load->view('template/footer');
  }

}
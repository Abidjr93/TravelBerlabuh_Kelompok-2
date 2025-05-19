<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * @property CI_Input $input
 * @property Tour_model $Tour_model
 */


class Tours extends CI_Controller
{


  /**
   * Index page for tour listings
   */
  public function index()
  {
    // Get filter values from GET request
    $filters = [
      'destination' => $this->input->get('destination'),
      'duration'    => $this->input->get('duration'),
      'month'       => $this->input->get('month'),
      'min_price'   => $this->input->get('min_price'),
      'max_price'   => $this->input->get('max_price')
    ];

    // Get data for view
    $data['destinations'] = array_column($this->Tour_model->get_all_destinations(), 'destination');
    $data['durations'] = array_column($this->Tour_model->get_all_durations(), 'duration');
    $data['months'] = $this->Tour_model->get_all_months();
    $data['filters'] = $filters;
    $data['tours'] = $this->Tour_model->get_tour_packages($filters);
    $data['judul'] = 'Destinasi - Berlabuh Trip & Travel';
    $data['page_aktif'] = 'Tours';

    // Load view
    $this->load->view('template/header', $data);
    $this->load->view('layout/Tours', $data);
    $this->load->view('template/footer');
  }

  /**
   * View details of a specific tour
   * 
   * @param int $id Tour ID
   */
  public function detail($id)
  {
    // This would be implemented to handle the detail_destinasi.php functionality
    // We'll add placeholder code for now
    echo "Tour detail for ID: " . $id;
  }
}

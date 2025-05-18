<?php

class Detail_paket extends CI_Controller
{
  public function index()
  {
    $data['judul'] = 'Halaman Checkout';
    $data['page_aktif'] = 'detail_paket';
    $this->load->view('template/header', $data);
    $this->load->view('layout/detail_paket');
    $this->load->view('template/footer');
  }
  public function send_WA()
  {
    $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required|trim');
    $this->form_validation->set_rules('email', 'Email', 'required|trim');
    $this->form_validation->set_rules('telepon', 'Nomor Whatsapp', 'required|numeric');
    $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('layout/detail_paket');
    } else {
      $nama_lengkap = $this->input->post('nama_lengkap');
      $email = $this->input->post('email');
      $telepon = $this->input->post('telepon');
      $tanggal = $this->input->post('tanggal');
      $options = $this->input->post('options');
      $admin_wa = $this->input->post('noWA');

      $selected_options = '';
      if (!empty($options)) {
        $option_labels = [
          'tg' => 'Tour guide',
          'fg' => 'Fotografer',
          'makan_malam' => 'Makan Malam',
          'kendaraan' => 'Sewa Jeep'
        ];

        foreach ($options as $option) {
          if (isset($option_labels[$option])) {
            $selected_options .= "- " . $option_labels[$option] . "\n";
          }
        }
      }

      $formatted_date = date('d-m-Y', strtotime($tanggal));

      $message = "Halo, saya ingin melakukan pemesanan:\n\n";
      $message .= "Nama: {$nama_lengkap}\n";
      $message .= "Email: {$email}\n";
      $message .= "WhatsApp: {$telepon}\n";
      $message .= "Tanggal: {$formatted_date}\n";

      if (!empty($selected_options)) {
        $message .= "\nFasilitas tambahan:\n{$selected_options}";
      }

      $message .= "\nMohon konfirmasi pemesanan saya. Terima kasih.";

      $encoded_message = urlencode($message);

      redirect("https://api.whatsapp.com/send?phone={$admin_wa}&text={$encoded_message}");
    }
  }
}

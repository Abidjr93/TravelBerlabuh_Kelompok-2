<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{


  // Halaman utama dashboard
  public function index()
  {
    $data['title'] = 'Dashboard - Berlabuh Trip & Travel';
    $data['packages'] = $this->Admin_model->get_all_packages();

    $this->load->view('admin/header', $data);
    $this->load->view('admin/dashboard', $data);
    $this->load->view('admin/footer');
  }

  // Halaman tambah paket baru
  public function add()
  {
    $data['title'] = 'Tambah Paket - Berlabuh Trip and Travel';

    $this->form_validation->set_rules('title', 'Judul Paket', 'required|trim');
    $this->form_validation->set_rules('destination', 'Destinasi', 'required|trim');
    $this->form_validation->set_rules('location', 'Lokasi', 'required|trim');
    $this->form_validation->set_rules('duration', 'Durasi', 'required|trim');
    $this->form_validation->set_rules('group_size', 'Ukuran Grup', 'required|trim');
    $this->form_validation->set_rules('price', 'Harga', 'required|numeric|trim');
    $this->form_validation->set_rules('description', 'Deskripsi', 'required|trim');

    if ($this->form_validation->run() == FALSE) {

      $this->load->view('admin/header', $data);
      $this->load->view('admin/add_package', $data);
    } else {
      $package_data = [
        'title' => $this->input->post('title', TRUE),
        'destination' => $this->input->post('destination', TRUE),
        'location' => $this->input->post('location', TRUE),
        'duration' => $this->input->post('duration', TRUE),
        'group_size' => $this->input->post('group_size', TRUE),
        'price' => $this->input->post('price', TRUE),
        'description' => $this->input->post('description', TRUE),
        'available_months' => $this->input->post('available_months', TRUE),
        'is_featured' => $this->input->post('is_featured') ? 1 : 0,
        'created_at' => date('Y-m-d H:i:s')
      ];

      // Upload gambar jika ada
      if (!empty($_FILES['image']['name'])) {
        $config['upload_path'] = './assets/images/packages/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size'] = 2048;
        $config['file_name'] = 'package_' . time();

        // Pastikan direktori upload ada
        if (!is_dir($config['upload_path'])) {
          mkdir($config['upload_path'], 0777, TRUE);
        }

        $this->upload->initialize($config);

        if ($this->upload->do_upload('image')) {
          $upload_data = $this->upload->data();
          $package_data['image'] = $upload_data['file_name'];
        } else {
          $this->session->set_flashdata('error', $this->upload->display_errors());
          redirect('dashboard/add');
        }
      }

      $result = $this->Admin_model->add_package($package_data);

      if ($result) {
        $this->session->set_flashdata('success', 'Paket tour berhasil ditambahkan');
      } else {
        $this->session->set_flashdata('error', 'Gagal menambahkan paket tour');
      }

      redirect('dashboard');
    }
  }

  // Halaman edit paket
  public function edit($id)
  {
    $data['title'] = 'Edit Paket - Berlabuh Trip and Travel';
    $data['package'] = $this->Admin_model->get_package_by_id($id);

    if (empty($data['package'])) {
      $this->session->set_flashdata('error', 'Paket tour tidak ditemukan');
      redirect('dashboard');
    }

    $this->form_validation->set_rules('title', 'Judul Paket', 'required|trim');
    $this->form_validation->set_rules('destination', 'Destinasi', 'required|trim');
    $this->form_validation->set_rules('location', 'Lokasi', 'required|trim');
    $this->form_validation->set_rules('duration', 'Durasi', 'required|trim');
    $this->form_validation->set_rules('group_size', 'Ukuran Grup', 'required|trim');
    $this->form_validation->set_rules('price', 'Harga', 'required|numeric|trim');
    $this->form_validation->set_rules('description', 'Deskripsi', 'required|trim');

    if ($this->form_validation->run() == FALSE) {

      $this->load->view('admin/header', $data);
      $this->load->view('admin/edit_package', $data);
    } else {
      $package_data = [
        'title' => $this->input->post('title', TRUE),
        'destination' => $this->input->post('destination', TRUE),
        'location' => $this->input->post('location', TRUE),
        'duration' => $this->input->post('duration', TRUE),
        'group_size' => $this->input->post('group_size', TRUE),
        'price' => $this->input->post('price', TRUE),
        'description' => $this->input->post('description', TRUE),
        'available_months' => $this->input->post('available_months', TRUE),
        'is_featured' => $this->input->post('is_featured') ? 1 : 0
      ];

      // Upload gambar jika ada
      if (!empty($_FILES['image']['name'])) {
        $config['upload_path'] = './assets/images/packages/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size'] = 2048;
        $config['file_name'] = 'package_' . time();

        // Pastikan direktori upload ada
        if (!is_dir($config['upload_path'])) {
          mkdir($config['upload_path'], 0777, TRUE);
        }

        $this->upload->initialize($config);

        if ($this->upload->do_upload('image')) {
          // Hapus gambar lama jika ada
          if (!empty($data['package']->image)) {
            $old_file = './assets/images/packages/' . $data['package']->image;
            if (file_exists($old_file)) {
              unlink($old_file);
            }
          }

          $upload_data = $this->upload->data();
          $package_data['image'] = $upload_data['file_name'];
        } else {
          $this->session->set_flashdata('error', $this->upload->display_errors());
          redirect('dashboard/edit/' . $id);
        }
      }

      $result = $this->Admin_model->update_package($id, $package_data);

      if ($result) {
        $this->session->set_flashdata('success', 'Paket tour berhasil diupdate');
      } else {
        $this->session->set_flashdata('error', 'Gagal mengupdate paket tour');
      }

      redirect('dashboard');
    }
  }

  // Fungsi untuk menghapus paket
  public function delete($id)
  {
    $package = $this->Admin_model->get_package_by_id($id);

    if (empty($package)) {
      $this->session->set_flashdata('error', 'Paket tour tidak ditemukan');
    } else {
      // Hapus gambar jika ada
      if (!empty($package->image)) {
        $file_path = './assets/images/packages/' . $package->image;
        if (file_exists($file_path)) {
          unlink($file_path);
        }
      }

      $result = $this->Admin_model->delete_package($id);

      if ($result) {
        $this->session->set_flashdata('success', 'Paket tour berhasil dihapus');
      } else {
        $this->session->set_flashdata('error', 'Gagal menghapus paket tour');
      }
    }

    redirect('dashboard');
  }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
    $this->table = 'tour_packages'; // Nama tabel di database
  }

  // Mendapatkan semua paket tour
  public function get_all_packages()
  {
    $this->db->order_by('id', 'DESC');
    return $this->db->get($this->table)->result();
  }

  // Mendapatkan paket tour berdasarkan ID
  public function get_package_by_id($id)
  {
    $this->db->where('id', $id);
    return $this->db->get($this->table)->row();
  }

  // Menambahkan paket tour baru
  public function add_package($data)
  {
    return $this->db->insert($this->table, $data);
  }

  // Mengupdate paket tour
  public function update_package($id, $data)
  {
    $this->db->where('id', $id);
    return $this->db->update($this->table, $data);
  }

  // Menghapus paket tour
  public function delete_package($id)
  {
    $this->db->where('id', $id);
    return $this->db->delete($this->table);
  }
}

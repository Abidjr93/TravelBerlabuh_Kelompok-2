<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tour_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    /*Untuk menampilkan 4 Destinasi Populer di Home*/
    public function get_popular_tours($limit = 4)
    {
        $this->db->select('*');
        $this->db->from('tour_packages');
        $this->db->order_by('is_featured', 'DESC'); // Order by featured first
        $this->db->limit($limit);

        $query = $this->db->get();
        return $query->result_array();
    }
    /**
     * Get all unique destinations
     * 
     * @return array Array of destinations
     */
    public function get_all_destinations()
    {
        $query = $this->db->query("SELECT DISTINCT destination FROM tour_packages ORDER BY destination");
        return $query->result_array();
    }

    /**
     * Get all unique durations
     * 
     * @return array Array of durations
     */
    public function get_all_durations()
    {
        $query = $this->db->query("SELECT DISTINCT duration FROM tour_packages ORDER BY duration");
        return $query->result_array();
    }

    /**
     * Get all months
     * 
     * @return array Array of month names
     */
    public function get_all_months()
    {
        return [
            "January",
            "February",
            "March",
            "April",
            "May",
            "June",
            "July",
            "August",
            "September",
            "October",
            "November",
            "December"
        ];
    }

    /**
     * Get tour packages based on filters
     * 
     * @param array $filters Filter criteria
     * @return array Array of tour packages
     */
    public function get_tour_packages($filters = [])
    {
        $this->db->select('*');
        $this->db->from('tour_packages');

        // Apply filters
        if (!empty($filters['destination']) && $filters['destination'] != 'Any Destination') {
            $this->db->where('destination', $filters['destination']);
        }

        if (!empty($filters['duration']) && $filters['duration'] != 'Any Duration') {
            $this->db->where('duration', $filters['duration']);
        }

        if (!empty($filters['month']) && $filters['month'] != 'Any Month') {
            $this->db->like('available_months', $filters['month']);
        }

        if (!empty($filters['min_price'])) {
            $this->db->where('price >=', $filters['min_price']);
        }

        if (!empty($filters['max_price'])) {
            $this->db->where('price <=', $filters['max_price']);
        }

        // Order by featured first, then by ID
        $this->db->order_by('is_featured', 'DESC');
        $this->db->order_by('id', 'ASC');

        $query = $this->db->get();
        return $query->result_array();
    }
}

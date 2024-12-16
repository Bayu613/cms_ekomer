<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Transaksi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("User_model");
    }
    public function index()
    {
        $this->db->from('user');
        $this->db->order_by('nama', 'ASC');
        $user = $this->db->get()->result_array();

        $this->db->from('transaksi');
        $transaksi = $this->db->get()->result_array();
        $data = array(
            'judul_halaman' => 'Data Pengguna',
            'user'          => $user,
            'transaksi' => $transaksi
        );
        $this->load->view('admin/transaksi', $data);
    }

    public function print($id)
    {
        // Fetch the specific transaction by ID
        $this->db->from('transaksi');
        $this->db->where('id_transaksi', $id); // Adjust the column name if necessary
        $transaksi = $this->db->get()->row();

        // Check if transaction exists
        if (!$transaksi) {
            show_404(); // Show a 404 error if the transaction is not found
            return;
        }

        // Prepare data for the view
        $data = [
            'judul' => "Print Transaction | Bayu",
            'transaksi' => $transaksi,
        ];

        // Load the print view
        $this->load->view('admin/print', $data);
    }
}

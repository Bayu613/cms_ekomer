<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Transaksi extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
    }
    public function index()
    {
        $this->db->from('konfigurasi');
        $konfig = $this->db->get()->row();


        $this->db->from('kategori');
        $kategori = $this->db->get()->result_array();



        $this->db->from('konten a');
        $this->db->join('kategori b', 'a.id_kategori=b.id_kategori', 'left');
        $this->db->join('user c', 'a.username=c.username', 'left');
        $this->db->order_by('tanggal', 'DESC');
        $konten = $this->db->get()->result_array();

        $this->db->from('carousel');
        $carousel = $this->db->get()->result_array();
        $data = array(
            'judul'   => "Beranda | Bayu",
            'konfig' => $konfig,
            'kategori' => $kategori,
            'carousel' => $carousel,

            'konten' => $konten
        );
        $this->load->view('transaksi', $data);
    }

    public function bayar()
    {
        $uploadPath = 'upload/pembayaran/';
        $namafoto1 = date("YmHis") . '_1.jpg';

        // General upload configuration
        $config = [
            'upload_path'   => $uploadPath,
            'max_size'      => 50 * 1024,
            'allowed_types' => 'jpg|jpeg|png|gif',
        ];

        $this->load->library('upload');


        $config['file_name'] = $namafoto1;
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('foto')) {
            echo "
           <script>
           alert('Gagal Mengunggah Foto 1');
           window.location = '" . base_url('admin/konten') . "';
           </script>
           ";
            redirect('welcome/transaksi');
        }

        $data = [
            'alamat'        => $this->input->post('alamat'),
            'via'  => $this->input->post('via'),
            'no'   => $this->input->post('no'),
            'barcode'        => $this->input->post('barcode'),
            'status'        => $this->input->post('status'),
            'total'        => $this->input->post('total'),
            'belanja'        => $this->input->post('belanja'),
            'email'     => $this->session->userdata('email'),

            'tanggal'      => date('Y-m-d'),
            'foto'        => $namafoto1,
        ];

        if ($this->db->insert('transaksi', $data)) {
            echo "
           <script>
           alert('Produk Berhasil Dicekot');
           window.location = '" . base_url('welcome/pay') . "';
           </script>
           ";
        } else {
            echo "
            <script>
            alert('Produk Gagal Ditambahkan');
            window.location = '" . base_url('welcome/transaksi') . "';
            </script>
            ";
        }
    }

    public function update()
    {
        $uploadPath = 'upload/konten/';
        $namafoto1 = date("YmHis") . '_1.jpg';


        // General upload configuration
        $config = [
            'upload_path'   => $uploadPath,
            'max_size'      => 50 * 1024, // 50 MB in KB
            'allowed_types' => 'jpg|jpeg|png|gif', // Limit to common image types
        ];

        $this->load->library('upload');

        $config['file_name'] = $namafoto1;
        $this->upload->initialize($config);
      $this->upload->do_upload('foto');


        $data = [
            'alamat'        => $this->input->post('alamat'),
            'via'  => $this->input->post('via'),
            'no'   => $this->input->post('no'),
            'barcode'        => $this->input->post('barcode'),
            'status'        => $this->input->post('status'),
            'total'        => $this->input->post('total'),
            'email'     => $this->session->userdata('email'),
            'tanggal'      => date('Y-m-d'),
            'foto'        => $namafoto1,
        ];

        $where = array(
            'id_transaksi'        => $this->input->post('id_transaksi'),

        );

        if ($this->db->update('transaksi', $data, $where)) {
            echo "
           <script>
           alert('Produk Berhasil Dikonfirmasi');
           window.location = '" . base_url('admin/transaksi') . "';
           </script>
           ";
        } else {
            echo "
            <script>
            alert('Produk Gagal Diupdate');
            window.location = '" . base_url('admin/transaksi') . "';
            </script>
            ";
        }
    }
}

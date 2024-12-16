<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Welcome extends CI_Controller
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

		$this->db->from('transaksi');
		$transaksi = $this->db->get()->result_array();



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
			'transaksi' => $transaksi,

			'konten' => $konten
		);
		$this->load->view('beranda', $data);
	}


	public function detail($id)
	{

		$this->db->from('konfigurasi');
		$konfig = $this->db->get()->row();
		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();
		$this->db->from('konten a');
		$this->db->join('kategori b', 'a.id_kategori=b.id_kategori', 'left');
		$this->db->join('user c', 'a.username=c.username', 'left');
		$this->db->where('slug', $id);
		$konten = $this->db->get()->row();
		$data = array(
			'judul'   => $konten->judul,
			'konfig' => $konfig,
			'kategori' => $kategori,
			'konten' => $konten
		);
		$this->load->view('detail', $data);
	}
	public function transaksi()
	{

		$this->db->from('konfigurasi');
		$konfig = $this->db->get()->row();
		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();
		$this->db->from('konten a');
		$this->db->join('kategori b', 'a.id_kategori=b.id_kategori', 'left');
		$this->db->join('user c', 'a.username=c.username', 'left');
		$this->db->where('slug');
		$konten = $this->db->get()->row();
		$data = array(
			'konfig' => $konfig,
			'kategori' => $kategori,
			'konten' => $konten
		);
		$this->load->view('transaksi', $data);
	}
	public function transaksi_langsung($id)
	{

		$this->db->from('konfigurasi');
		$konfig = $this->db->get()->row();
		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();
		$this->db->from('konten a');
		$this->db->join('kategori b', 'a.id_kategori=b.id_kategori', 'left');
		$this->db->join('user c', 'a.username=c.username', 'left');
		$this->db->where('slug', $id);
		$konten = $this->db->get()->row();
		$data = array(
			'konfig' => $konfig,
			'kategori' => $kategori,
			'konten' => $konten
		);
		$this->load->view('transaksi_langsung', $data);
	}
	

	public function kategori($id)
	{
		$this->db->from('konfigurasi');
		$konfig = $this->db->get()->row();


		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();


		$this->db->from('konten a');
		$this->db->join('kategori b', 'a.id_kategori=b.id_kategori', 'left');
		$this->db->join('user c', 'a.username=c.username', 'left');
		$this->db->where('a.id_kategori', $id);
		$konten = $this->db->get()->result_array();




		$this->db->from('carousel');
		$carousel = $this->db->get()->result_array();

		$this->db->from('kategori');
		$this->db->where('id_kategori', $id);
		$nama_kategori = $this->db->get()->row()->nama_kategori;
		$data = array(
			'judul'   => $nama_kategori,
			'konfig' => $konfig,
			'nama_kategori' => $nama_kategori,
			'kategori' => $kategori,
			'carousel' => $carousel,
			'konten' => $konten
		);
		$this->load->view('kategori', $data);
	}


	public function galeri()
	{
		$this->db->from('konfigurasi');
		$konfig = $this->db->get()->row();


		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();

		$this->db->from('galeri');
		$galeri = $this->db->get()->result_array();


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
			'galeri' => $galeri,
			'konten' => $konten
		);
		$this->load->view('galeri', $data);
	}

	public function cart()
	{
		$this->load->view('cart');
	}
	public function pay()
	{

		$this->db->from('transaksi');
		$transaksi = $this->db->get()->result_array();

		$this->db->from('konten');
		$konten = $this->db->get()->row();

		$this->db->from('transaksi');
		$status = $this->db->get()->row()->status;

		$data = array(
			'status'   => $status,
			'transaksi' => $transaksi,
			'konten' => $konten
		);
		$this->load->view('pay', $data);
	}

	public function tambah_keranjang($id)
	{
		$konten = $this->User_model->find($id);
		$data = array(
			'id'    => $konten->id_konten,
			'qty'    => 1,
			'price'    => $konten->harga,
			'name'    => $konten->judul,
			'diskon'    => $konten->diskon,
			'foto'    => $konten->foto,


		);
		$this->cart->insert($data);
		redirect('welcome');
	}
	public function like($id)
	{
		$konten = $this->User_model->like($id);
		$data = array(
			'id'    => $konten->id_konten,
			'qty'    => 1,
			'price'    => $konten->harga,
			'name'    => $konten->judul,
			'diskon'    => $konten->diskon,
			'foto'    => $konten->foto,
			'kete' => $konten->keterangan,
			'foto_2'    => $konten->foto_2,
			'foto_3'    => $konten->foto_3,
			'foto_4'    => $konten->foto_4,

		);
		$this->cart->insert($data);
	}

	public function hapus_cart()
	{
		$this->cart->destroy();
		redirect('welcome/cart');
	}
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Konten extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("User_model");
    }
    public function index()
    {
        $this->db->from('kategori');
        $this->db->order_by('nama_kategori', 'ASC');
        $kategori = $this->db->get()->result_array();


        $this->db->from('konten a');
        $this->db->join('kategori b', 'a.id_kategori=b.id_kategori', 'left');
        $this->db->join('user c', 'a.username=c.username', 'left');
        $this->db->order_by('tanggal', 'DESC');
        $konten = $this->db->get()->result_array();


        $data = array(
            'judul_halaman' => 'Daftar Konten',
            'kategori'          => $kategori,
            'konten'          => $konten,
        );
        $this->load->view('admin/konten_index', $data);
    }

    public function simpan()
    {
        $uploadPath = 'upload/konten/';
        $namafoto1 = date("YmHis") . '_1.jpg';
        $namafoto2 = date("YmHis") . '_2.jpg';
        $namafoto3 = date("YmHis") . '_3.jpg';
        $namafoto4 = date("YmHis") . '_4.jpg';

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
            redirect('admin/konten');
        }

        $config['file_name'] = $namafoto2;
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('foto_2')) {
            echo "
            <script>
            alert('Gagal Mengunggah Foto 2');
            window.location = '" . base_url('admin/konten') . "';
            </script>
            ";
            redirect('admin/konten');
        }

        $config['file_name'] = $namafoto3;
        $this->upload->initialize($config);
        $this->upload->do_upload('foto_3'); 


        $config['file_name'] = $namafoto4;
        $this->upload->initialize($config);
        $this->upload->do_upload('foto_4'); 

        $data = [
            'judul'        => $this->input->post('judul'),
            'id_kategori'  => $this->input->post('id_kategori'),
            'keterangan'   => $this->input->post('keterangan'),
            'harga'        => $this->input->post('harga'),
            'diskon'        => $this->input->post('diskon'),
            'tanggal'      => date('Y-m-d'),
            'foto'        => $namafoto1,
            'foto_2'        => $namafoto2,
            'foto_3'        => $namafoto3,
            'foto_4'        => $namafoto4,
            'username'     => $this->session->userdata('username'),
            'slug'         => str_replace(' ', '-', $this->input->post('judul')),
        ];

        if ($this->db->insert('konten', $data)) {
            echo "
           <script>
           alert('Produk Berhasil Ditambahkan');
           window.location = '" . base_url('admin/konten') . "';
           </script>
           ";
        } else {
            echo "
            <script>
            alert('Produk Gagal Ditambahkan');
            window.location = '" . base_url('admin/konten') . "';
            </script>
            ";
        }
    }


    public function update()
    {
        $uploadPath = 'upload/konten/';
        $namafoto1 = date("YmHis") . '_1.jpg';
        $namafoto2 = date("YmHis") . '_2.jpg';
        $namafoto3 = date("YmHis") . '_3.jpg';
        $namafoto4 = date("YmHis") . '_4.jpg';

        // General upload configuration
        $config = [
            'upload_path'   => $uploadPath,
            'max_size'      => 50 * 1024, // 50 MB in KB
            'allowed_types' => 'jpg|jpeg|png|gif', // Limit to common image types
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
            redirect('admin/konten');
        }

        $config['file_name'] = $namafoto2;
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('foto_2')) {
            echo "
            <script>
            alert('Gagal Mengunggah Foto 2');
            window.location = '" . base_url('admin/konten') . "';
            </script>
            ";
            redirect('admin/konten');
        }

        $config['file_name'] = $namafoto3;
        $this->upload->initialize($config);
        $this->upload->do_upload('foto_3'); 

        $config['file_name'] = $namafoto4;
        $this->upload->initialize($config);
        $this->upload->do_upload('foto_4'); 

        $data = [
            'judul'        => $this->input->post('judul'),
            'id_kategori'  => $this->input->post('id_kategori'),
            'keterangan'   => $this->input->post('keterangan'),
            'harga'        => $this->input->post('harga'),
            'diskon'        => $this->input->post('diskon'),
            'tanggal'      => date('Y-m-d'),
            'foto'        => $namafoto1,
            'foto_2'        => $namafoto2,
            'foto_3'        => $namafoto3,
            'foto_4'        => $namafoto4,
            'username'     => $this->session->userdata('username'),
            'slug'         => str_replace(' ', '-', $this->input->post('judul')),
        ];

        $where = array(
            'id_konten'        => $this->input->post('id_konten'),

        );

        if ($this->db->update('konten', $data, $where)) {
            echo "
           <script>
           alert('Produk Berhasil Diupdate');
           window.location = '" . base_url('admin/konten') . "';
           </script>
           ";
        } else {
            echo "
            <script>
            alert('Produk Gagal Diupdate');
            window.location = '" . base_url('admin/konten') . "';
            </script>
            ";
        }
    }









    public function hapus($id)
    {
        $filename = FCPATH . '/upload/konten' . $id;
        if (file_exists($filename)) {
            unlink("./upload/konten" . $id);
        }
        $where = array(
            'foto' => $id
        );
        $this->db->delete('konten', $where);
        $this->session->set_flashdata('alert', '<div class="alert alert-success alert-dismissible" role="alert">
        Konten Berhasil Dihapus
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </button>
      </div>');
        redirect('admin/konten');
    }


    public function edit($id)
    {
        $this->db->select('*')->from('konten');
        $this->db->where('id_kategori', $id);
        $user = $this->db->get()->result_array();
        $data = array('konten' => $user);
        $this->load->view('admin/konten_edit', $data);
    }
}

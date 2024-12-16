<?php
defined('BASEPATH') or exit('No direct script access allowed');
class User_model extends CI_Model
{

    public function __construct() {
        parent::__construct();
    }
    
    public function simpan()
    {
        $data = array(
            'nama'      => $this->input->post('nama'),
            'username'      => $this->input->post('username'),
            'email'      => $this->input->post('email'),
            'password'      => md5($this->input->post('password')),
            'level'      => $this->input->post('level'),
        );

        $this->db->insert('user', $data);
    }

    public function update()
    {
        $data = array(
            'nama' => $this->input->post('nama'),
            'level' => $this->input->post('level'),
        );
        $where = array(
            'id_user' =>  $this->input->post('id_user')
        );
        $this->db->update('user', $data, $where);
    }

    public function update_kategori()
    {
        $data = array(
            'nama_kategori' => $this->input->post('nama_kategori'),

        );
        $where = array(
            'id_kategori' =>  $this->input->post('id_kategori')
        );
        $this->db->update('kategori', $data, $where);
    }

    public function find($id)
    {
        $result = $this->db->where('id_konten', $id)
            ->limit(1)
            ->get('konten');
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }
    public function like($id)
    {
        $result = $this->db->where('id_konten', $id)
            ->limit(1)
            ->get('konten');
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }
}

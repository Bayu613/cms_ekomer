<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data = array (
            'judul_halaman' => ' Halaman Dashboard'
        );
        $this->load->view('admin/dashboard',$data);
    }
}

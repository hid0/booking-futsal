<?php defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        echo "Selamat Datang " . $data['users']['name'];
        echo " <a href=" . base_url('auth/logout') . " type=\"button\">logout</a>";
    }
}

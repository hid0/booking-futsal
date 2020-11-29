<?php defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        redirect('dashboard/op');
    }

    public function op()
    {
        is_logged_in();
        $data['title'] = 'Dashboard Operator';
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $this->template->load('layouts/main', '_operator/dashboard-op', $data);
        // return view('_operator.dashboard', $data);
    }

    public function adm()
    {
        is_logged_in();
        // ini halaman admin
        $data['title'] = 'Dashboard Admin';
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $this->template->load('layouts/main', '_admin/dashboard-admin', $data);
        // return view('_admin.dashboard', $data);
    }
}

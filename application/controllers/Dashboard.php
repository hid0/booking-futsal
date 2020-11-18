<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function index()
    {
        redirect('dashboard/op');
    }
    
    public function op()
    {
        $data['title'] = 'Dashboard Operator';
        $this->template->load('layouts/main', '_operator/dashboard-op', $data);
        // return view('_operator.dashboard', $data);
    }
    
    public function adm()
    {
        // ini halaman admin
        $data['title'] = 'Dashboard Admin';
        $this->template->load('layouts/main', '_admin/dashboard-admin', $data);
        // return view('_admin.dashboard', $data);
    }
}
<?php defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Home_Model', 'Home');
        // is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Halaman Home';
        $data['field'] = $this->Home->getField();
        $data['booking'] = $this->Home->getBooking();
        if ($this->session->userdata('email')) {
            $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        }
        // echo "Selamat Datang " . $data['users']['name'];
        // echo " <a href=" . base_url('auth/logout') . " type=\"button\">logout</a>";
        $this->load->view('user/index', $data);
    }

    public function getLapanganAjax()
    {
        $no = 1;
        if (!empty($this->input->post('id_lapangan'))) {
            $data['booking'] = $this->Home->getLapanganId($this->input->post('id_lapangan'));
            foreach ($data as $data) {
                echo $no++;
                echo '<tr>';
                echo '<td>' . $data->nama_tim . '</td>';
                echo '<td>' . $data->jam_mulai . '</td>';
                echo '<td>' . $data->jam_selesai . '</td>';
                echo '</tr>';
            }
        }
    }
}

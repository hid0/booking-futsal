<?php defined('BASEPATH') or exit('No direct script access allowed');

class Booking extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Booking_Model', 'Booking');
        is_logged_in();
    }

    public function index()
    {
        // menu untuk admin
        redirect('booking/data');
    }

    public function data()
    {
        $data['title'] = 'Data Booking';
        $data['bookings'] = $this->Booking->getDataBooking();
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('nama', 'Nama Pemesan', 'required');
        $this->form_validation->set_rules('tempat', 'Lapangan', 'required');
        $this->form_validation->set_rules('tim', 'Nama Tim', 'requiredtrim|min_length[4]');
        $this->form_validation->set_rules('tgl', 'Tanggal', 'required');
        $this->form_validation->set_rules('start', 'Mulai', 'required');
        $this->form_validation->set_rules('finish', 'Selesai', 'required');

        $this->form_validation->set_message([
            'required' => '%s Harus Diisi',
            'min_length' => '%s Terlalu Pendek'
        ]);
        $this->form_validation->set_error_delimiters('<span class="text-danger text-sm">', '</span>');
        if ($this->form_validation->run() == false) {
            $this->template->load('layouts/main', '_operator/booking/data', $data);
        } else {
            $this->add_booking();
        }
    }

    private function add_booking()
    {
        // aksi tambah pemesanan booking
        $booking = array(
            'id_user' => $this->input->post('nama'),
            'id_lapangan' => $this->input->post('tempat'),
            'nama_tim' => $this->input->post('tim'),
            'tgl' => $this->input->post('tgl'),
            'jam_mulai' => $this->input->post('start'),
            'jam_selesai' => $this->input->post('finish'),
            'status' => 'pending',
        );
        $this->db->insert('tb_booking', $booking);
        // var_dump($booking);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Booking berhasil ditambah!</div>');
        redirect('booking/data');
    }

}

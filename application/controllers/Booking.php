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
        // redirect to data
        redirect('booking/data');
    }

    public function data()
    {
        $data['title'] = 'Data Booking';
        $data['bookings'] = $this->Booking->getDataBooking();
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        // var_dump($data);
        // return view('_operator.booking.data', $data);
        $this->template->load('layouts/main', '_operator/booking/data', $data);
    }
}

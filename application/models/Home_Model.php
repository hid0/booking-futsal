<?php defined('BASEPATH') or exit('No direct script access allowed');

class Home_Model extends CI_Model
{

    function getField()
    {
        $this->db->select('*');
        $this->db->from('tb_stadion');
        $this->db->join('tb_lapangan', 'tb_lapangan.id_stadion = tb_stadion.id_stadion');
        return $this->db->get()->result();
    }

    function getBooking()
    {
        return $this->db->get('tb_booking')->result();
    }

}

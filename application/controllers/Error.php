<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Error extends CI_Controller {

    public function index()
    {
        $this->template->load('layouts/error', 'errors/404');
    }

}
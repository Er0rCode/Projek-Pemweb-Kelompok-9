<?php
defined('BASEPATH') or exit('No direct script access allowed');

class home extends CI_Controller
{

    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('home'); // Pastikan Anda memiliki file home di layout
        $this->load->view('template/footer');
    }
}

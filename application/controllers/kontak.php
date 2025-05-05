<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kontak extends CI_Controller
{

    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('kontak'); // Memuat view kontak.php
        $this->load->view('template/footer');
    }
}

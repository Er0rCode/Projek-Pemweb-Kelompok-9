<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Layanan extends CI_Controller
{

    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('layanan'); // Memuat view layanan.php
        $this->load->view('template/footer');
    }
}

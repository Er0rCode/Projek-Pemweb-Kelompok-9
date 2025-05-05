<?php

class About extends CI_Controller { 

    public function index() { 
        $this->load->view('template/header');
        $this->load->view('about'); // Memuat view about.php
        $this->load->view('template/footer');
    }
}
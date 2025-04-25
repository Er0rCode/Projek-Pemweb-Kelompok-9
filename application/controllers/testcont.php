<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testcont extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->database(); // Pindahkan load database ke controller
        $this->load->model('testmod');
        $this->load->helper('url');
    }
    
    public function index() {
        $data['mahasiswa'] = $this->testmod->ambil_data();
        $this->load->view('testview', $data);
    }
    
    public function simpan() {
        $data = array(
            'nama' => $this->input->post('nama'),
            'nim' => $this->input->post('nim'),
            'alamat' => $this->input->post('alamat')
        );
        
        $this->testmod->simpan_data($data);
        
        redirect('testcont/index');
    }
}
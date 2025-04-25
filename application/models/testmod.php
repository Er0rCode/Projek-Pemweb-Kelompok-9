<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testmod extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        // Tidak perlu memanggil load database di sini jika sudah diatur di autoload
    }
    
    public function simpan_data($data) {
        $this->db->insert('testing', $data);
        return $this->db->insert_id();
    }
    
    public function ambil_data() {
        $query = $this->db->get('testing');
        return $query->result();
    }
}
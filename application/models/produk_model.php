<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function get_all_produk() {
        $this->db->select('produk.*, kategori_produk.nama as kategori_nama');
        $this->db->from('produk');
        $this->db->join('kategori_produk', 'produk.kategori_id = kategori_produk.id', 'left');
        $this->db->where('produk.status', 'aktif');
        $this->db->order_by('produk.urutan', 'ASC');
        $query = $this->db->get();
        
        return $query->result();
    }
    
    public function get_produk_by_kategori($kategori_id) {
        $this->db->select('produk.*, kategori_produk.nama as kategori_nama');
        $this->db->from('produk');
        $this->db->join('kategori_produk', 'produk.kategori_id = kategori_produk.id', 'left');
        $this->db->where('produk.kategori_id', $kategori_id);
        $this->db->where('produk.status', 'aktif');
        $this->db->order_by('produk.urutan', 'ASC');
        $query = $this->db->get();
        
        return $query->result();
    }
    
    public function get_produk_by_id($id) {
        $this->db->select('produk.*, kategori_produk.nama as kategori_nama');
        $this->db->from('produk');
        $this->db->join('kategori_produk', 'produk.kategori_id = kategori_produk.id', 'left');
        $this->db->where('produk.id', $id);
        $query = $this->db->get();
        
        return $query->row();
    }
    
    public function get_kategori_by_id($id) {
        $query = $this->db->get_where('kategori_produk', ['id' => $id]);
        return $query->row();
    }
    
    public function get_related_produk($id, $kategori_id, $limit = 3) {
        $this->db->select('produk.*');
        $this->db->from('produk');
        $this->db->where('kategori_id', $kategori_id);
        $this->db->where('id !=', $id);
        $this->db->where('status', 'aktif');
        $this->db->order_by('RANDOM()'); // gunakan RANDOM()
        $this->db->limit($limit);
        $query = $this->db->get();
        
        return $query->result();
    }
    
}
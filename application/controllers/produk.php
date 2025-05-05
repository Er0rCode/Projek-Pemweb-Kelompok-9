<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Produk_model');
    }

    public function index() {
        $data['produk'] = $this->Produk_model->get_all_produk();
        $this->load->view('template/header');
        $this->load->view('produk', $data); // <- langsung view
        $this->load->view('template/footer');

        
    }

    // public function detail($id) {
    //     $produk = $this->Produk_model->get_produk_by_id($id);
    //     if (!$produk) {
    //         show_404();
    //     }

    //     $data['produk'] = $produk;
    //     $data['produk_terkait'] = $this->Produk_model->get_related_produk($produk->id, $produk->kategori_id);

    //     $this->load->view('detail_produk', $data); // <- langsung view
    // }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Capres extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Capres_model');
    }
    public function index(){
        $data['judul']="Halaman Calon Presiden";
        $data['capres']= $this->Capres_model->get();
        $this->load->view("layout/header");
        $this->load->view("capres/vw_capres",$data);
        $this->load->view("layout/footer");
        
    }                   
    public function tambah(){
        $data['judul']="Halaman Tambah Calon Presiden";
        $data['capres'] = $this->Capres_model->get();
        $this->load->view("layout/header");
        $this->load->view("capres/vw_tambah_capres", $data);
        $this->load->view("layout/footer");
    }
    public function detail($id){
        $data['judul']="Halaman Detail Calon Presiden";
        $data['capres']= $this->Capres_model->getById($id);
        $this->load->view("layout/header");
        $this->load->view("capres/vw_detail_capres", $data);
        $this->load->view("layout/footer");
    }
    public function hapus($id){
        $this->Capres_model->delete($id);
        redirect('Capres');
    }
    function upload(){
        $data = [
            'nik' => $this->input->post('nik'),
            'nama_lengkap' => $this->input->post('nama_lengkap'),
            'umur' => $this->input->post('umur'),
            'asal' => $this->input->post('asal'),
            'riwayat_pekerjaan' => $this->input->post('riwayat_pekerjaan'),
            'partai_pendukung' => $this->input->post('partai_pendukung'),
        ];
        $this->Capres_model->insert($data);
        redirect('Capres');
    }
    public function edit($id){
        $data['judul']="Halaman Edit Calon Presiden";
        $data['capres']= $this->Capres_model->getById($id);
        $this->load->view("layout/header");
        $this->load->view("capres/vw_ubah_capres", $data);
        $this->load->view("layout/footer");
    }
    function update(){
        $data = [
            'nik' => $this->input->post('nik'),
            'nama_lengkap' => $this->input->post('nama_lengkap'),
            'umur' => $this->input->post('umur'),
            'asal' => $this->input->post('asal'),
            'riwayat_pekerjaan' => $this->input->post('riwayat_pekerjaan'),
            'partai_pendukung' => $this->input->post('partai_pendukung'),
        ];
        $id = $this->input->post('id');
        $this->Capres_model->update(['id' => $id],$data);
        redirect('Capres');
    }
}
?>
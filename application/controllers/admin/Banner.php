<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Banner extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("banner_model");
        $this->load->library("form_validation");
        $this->load->model("user_model");
        if($this->user_model->isNotLogin()) redirect(site_url('admin/login'));
    }

    public function index()
    {
        $data["banner"] = $this->banner_model->getAll();
        $this->load->view("admin/banner/list", $data);
    }

    public function add()
    {
        $banner = $this->banner_model; // objek model
        $validation = $this->form_validation; // objek form validation
        $validation->set_rules($banner->rules()); // terapkan rules

        if($validation->run()) { // melakukan validasi
            $banner->save(); // simpan data ke database
            $this->session->set_flashdata('success', 'Berhasil disimpan'); // tampilkan pesan berhasil
        }

        $this->load->view("admin/banner/new_form"); // tampilkan form add
    }

    public function edit($id = null) // id data yang akan diedit
    {
        if (!isset($id)) redirect('admin/banner'); // kita lakukan redirect ke route ini kalau $id bernilai null

        $banner = $this->banner_model; // objek model
        $validation = $this->form_validation; // objek validation
        $validation->set_rules($banner->rules()); // menerapkan rules

        if($validation->run()) { // melakukan validasi
            $banner->update(); // menyimpan data
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["banner"] = $banner->getById($id); // mengambil data untuk ditampilkan pada form
        if(!$data["banner"]) show_404(); // jika tidak ada data, tampilkan error 404

        $this->load->view("admin/banner/edit_form", $data); // menampilkan form edit
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();

        if($this->banner_model->delete($id)) {
            redirect(site_url('admin/banner'));
        }
    }
}
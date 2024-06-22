<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("gallery_model");
        $this->load->library("form_validation");
        $this->load->model("user_model");
        if($this->user_model->isNotLogin()) redirect(site_url('admin/login'));
    }

    public function index()
    {
        $data["gallery"] = $this->gallery_model->getAll();
        $this->load->view("admin/gallery/list", $data);
    }

    public function add()
    {
        $gallery = $this->gallery_model; // objek model
        $validation = $this->form_validation; // objek form validation
        $validation->set_rules($gallery->rules()); // terapkan rules

        if($validation->run()) { // melakukan validasi
            $gallery->save(); // simpan data ke database
            $this->session->set_flashdata('success', 'Berhasil disimpan'); // tampilkan pesan berhasil
        }

        $this->load->view("admin/gallery/new_form"); // tampilkan form add
    }

    public function edit($id = null) // id data yang akan diedit
    {
        if (!isset($id)) redirect('admin/gallery'); // kita lakukan redirect ke route ini kalau $id bernilai null

        $gallery = $this->gallery_model; // objek model
        $validation = $this->form_validation; // objek validation
        $validation->set_rules($gallery->rules()); // menerapkan rules

        if($validation->run()) { // melakukan validasi
            $gallery->update(); // menyimpan data
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["gallery"] = $gallery->getById($id); // mengambil data untuk ditampilkan pada form
        if(!$data["gallery"]) show_404(); // jika tidak ada data, tampilkan error 404

        $this->load->view("admin/gallery/edit_form", $data); // menampilkan form edit
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();

        if($this->gallery_model->delete($id)) {
            redirect(site_url('admin/gallery'));
        }
    }
}
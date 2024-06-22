<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("service_model");
        $this->load->library("form_validation");
        $this->load->model("user_model");
        if($this->user_model->isNotLogin()) redirect(site_url('admin/login'));
    }

    public function index()
    {
        $data["service"] = $this->service_model->getAll();
        $this->load->view("admin/service/list", $data);
    }

    public function add()
    {
        $service = $this->service_model; // objek model
        $validation = $this->form_validation; // objek form validation
        $validation->set_rules($service->rules()); // terapkan rules

        if($validation->run()) { // melakukan validasi
            $service->save(); // simpan data ke database
            $this->session->set_flashdata('success', 'Berhasil disimpan'); // tampilkan pesan berhasil
        }

        $this->load->view("admin/service/new_form"); // tampilkan form add
    }

    public function edit($id = null) // id data yang akan diedit
    {
        if (!isset($id)) redirect('admin/service'); // kita lakukan redirect ke route ini kalau $id bernilai null

        $service = $this->service_model; // objek model
        $validation = $this->form_validation; // objek validation
        $validation->set_rules($service->rules()); // menerapkan rules

        if($validation->run()) { // melakukan validasi
            $service->update(); // menyimpan data
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["service"] = $service->getById($id); // mengambil data untuk ditampilkan pada form
        if(!$data["service"]) show_404(); // jika tidak ada data, tampilkan error 404

        $this->load->view("admin/service/edit_form", $data); // menampilkan form edit
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();

        if($this->service_model->delete($id)) {
            redirect(site_url('admin/service'));
        }
    }
}
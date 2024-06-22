<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class City extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('city_model');
        $this->load->model("province_model");
        $this->load->library("form_validation");
        $this->load->model("user_model");
        if($this->user_model->isNotLogin()) redirect(site_url('admin/login'));
    }

    public function index()
    {
        $data["city"] = $this->city_model->getAll();
        $this->load->view("admin/city/list", $data);
    }

    public function add()
    {
        $city = $this->city_model; // objek model
        $data['province'] = $this->province_model->getAll();
        $validation = $this->form_validation; // objek form validation
        $validation->set_rules($city->rules()); // terapkan rules

        if($validation->run()) { // melakukan validasi
           $city->save(); // simpan data ke database
           $this->session->set_flashdata('success', 'Berhasil disimpan'); // tampilkan pesan berhasil
        }

        $this->load->view("admin/city/new_form", $data); // tampilkan form add
    }

    // public function save()
    // {
    //     $city_name = $this->input->post('city_name',TRUE);
    //     $province  = $this->input->post('province',TRUE);
    //     $createdby = $this->input->post('createdby',TRUE);
    //     $createdon = $this->input->post('createdon',TRUE);
    //     $city = $this->city_model; // objek model
    //     $validation = $this->form_validation; // objek form validation
    //     $validation->set_rules($city->rules()); // terapkan rules
    //     $this->city_model->save($city_name,$province,$createdby,$createdon);
    //     $this->session->set_flashdata('success', 'Berhasil disimpan'); // tampilkan pesan berhasil
    //     redirect('/admin/city');
    // }

    public function edit($id = null) // id data yang akan diedit
    {
        if (!isset($id)) redirect('admin/city'); // kita lakukan redirect ke route ini kalau $id bernilai null

        $city = $this->city_model; // objek model
        $data['province'] = $this->province_model->getAll();
        $validation = $this->form_validation; // objek validation
        $validation->set_rules($city->rules()); // menerapkan rules

        if($validation->run()) { // melakukan validasi
            $city->update(); // menyimpan data
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["city"] = $city->getById($id); // mengambil data untuk ditampilkan pada form
        if(!$data["city"]) show_404(); // jika tidak ada data, tampilkan error 404

        $this->load->view("admin/city/edit_form", $data); // menampilkan form edit
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();

        if($this->city_model->delete($id)) {
            redirect(site_url('admin/city'));
        }
    }

}
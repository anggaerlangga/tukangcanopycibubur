<?php defined('BASEPATH') OR exit('No direct script access allowed');

class service_model extends CI_Model 
{
    // nama table
    private $_table = "service";

    // nama kolom di tabel
    public $service_id;
    public $title;
    public $subtitle;
    public $description;
    public $image = "default.jpg";
    public $createdby;
    public $createdon;

    public function rules() {
        return [
            ['field' => 'title',
            'label' => 'Title'],

            ['field' => 'subtitle',
            'label' => 'Sub Title'],

            ['field' => 'description',
            'label' => 'Description'],

            ['field' => 'createdby',
            'label' => 'Author',
            'rules' => 'required'],

            ['field' => 'createdon',
            'label' => 'Created on',
            'rules' => 'required']
        ];
    }

    public function getAll() {
        return $this->db->get($this->_table)->result();
        // SELECT * FROM banner
        // method ini akan mengembalikan sebuah array
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["service_id" => $id])->row();
        // SELECT * FROM barang WHERE id_barang=$id
        // method ini akan mengembalikan sebuah objek
    }

    public function save() 
    {
        $post = $this->input->post(); // ambil data dari form
        $this->service_id = uniqid(); // membuat id unik
        $this->title = $post["title"]; // isi field nama
        $this->subtitle = $post["subtitle"]; // isi field jumlah
        $this->description = $post["description"]; // isi field tipe
        $this->image = $this->_uploadImage(); // isi field kategori
        $this->createdby = $post["createdby"];
        $this->createdon = $post["createdon"];
        return $this->db->insert($this->_table, $this); // simpan ke database
    }

    public function update()
    {
        $post = $this->input->post();
        $this->service_id = $post["id"];
        $this->title = $post["title"];
        $this->subtitle = $post["subtitle"];
        $this->description = $post["description"];
       
        if (!empty($_FILES["image"]["name"])) {
            $this->image = $this->_uploadImage();
        } else {
            $this->image = $post["old_image"];
        }
        
        $this->createdby = $post["createdby"];
        $this->createdon = $post["createdon"];
        return $this->db->update($this->_table, $this, array('service_id' => $post['id']));
    }

    public function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("service_id" => $id));
    }

    private function _uploadImage()
    {
        $config['upload_path']          = './upload/service/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $this->service_id;
        $config['overwrite']			= true;
        $config['max_size']             = 3024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            return $this->upload->data("file_name");
        }
        
        print_r($this->upload->display_errors());
        //return "default.jpg";
    }

    private function _deleteImage($id)
    {
        $service = $this->getById($id);
        if ($service->image != "default.jpg") {
            $filename = explode(".", $service->image)[0];
            return array_map('unlink', glob(FCPATH."upload/service/$filename.*"));
        }
    }
}
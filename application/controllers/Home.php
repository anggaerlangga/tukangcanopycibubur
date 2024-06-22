<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
	}

    public function index()
	{
		// $this->session->set_userdata('site_lang', "english");

		 $this->load->model("banner_model");
		 $banner["banner"] = $this->banner_model->getAll();
		 $this->load->model("gallery_model");
		 $data["gallery"] = $this->gallery_model->getAll();
		 $this->load->model("service_model");
		 $data["service"] = $this->service_model->getAll();

		//  $data = array (
		// 	$location => $this->location_model->getAll();
		// 	// $banner["banner"] = $this->banner_model->getAll();
		// 	$villa => $this->villa_model->getTopVilla();
		//  )

		$this->load->view('/common/header');
		$this->load->view('/common/banner', $banner);
		$this->load->view('home', $data);
		$this->load->view('/common/footer');

	}

	// public function switchLang($language = "") {
	// 	$this->session->set_userdata('site_lang', $language);
	// 	echo $language;
	// 	header('Location: http://localhost/kangvillas/');
	// }
}

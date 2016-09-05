<?php

class Home extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('Dashboard_model');
	}

	function index(){
		$data = array(
			'title'			=> 'Karya Ilkom | BEM KM Fasilkom',
			'content'		=> 'dashboard',
			'data_karya'=> $this->Dashboard_model->get_all()
		);
		$this->load->view('includes/template', $data);
	}
}

?>

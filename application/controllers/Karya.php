<?php

class Karya extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('Karya_model');

		$id_karya = $this->session->userdata('id_karya');
		if (!isset($id_karya)) {
		   redirect('Login/mhs');
		   exit;
		}
	}

	function index(){
		$data = array(
			'dt'		 		=> $this->Karya_model->get_data_byId($this->session->userdata('id_karya')),
			'title'				=> 'Karya Ilkom | BEM KM Fasilkom Unsri',
			'content'			=> 'Input_karya'
		);
		$this->load->view('includes/template', $data);
	}

	function edit(){
		$id_karya = $this->session->userdata('id_karya');

		if($this->input->post('edit')){
			$input = array (
				'nama'				=> $this->input->post('nama'),
				'nim'				=> $this->input->post('nim'),
				'jurusan'			=> $this->input->post('jurusan'),
				'angkatan'			=> $this->input->post('angkatan'),
				'nama_karya'		=> $this->input->post('nama_karya'),
				'kategori_karya'	=> $this->input->post('kategori_karya'),
				'jenis_karya'		=> $this->input->post('jenis_karya'),
				'img_karya'			=> $this->session->userdata('id_karya'). '.jng',
				'detail_karya'		=> $this->input->post('detail_karya')
			);
			$this->Karya_model->update($id_karya, $input);
			$this->Karya_model->do_upload($id_karya);
			$this->session->set_flashdata('msg', '<div class="alert alert-success" style="text-align:center;">Data berhasil disimpan!</div>');
			redirect('Karya/edit');
			exit;
		}

		$data = array(
			'title' 		=> 'Edit Karya Ilkom | BEM KM Fasilkom',
			'content' 		=> 'Input_karya',
			'dt'		 	=> $this->Karya_model->get_data_byId($id_karya)
		);
		$this->load->view('includes/template',$data);
	}

	function view(){
		$data = array(
			'title' 			=> 'Karya Ilkom | BEM KM Fasilkom',
			'content' 		=> 'view',
			'dt'		 			=> $this->Karya_model->get_data_byId($this->session->userdata('id_karya'))
		);
		$this->load->view('includes/template',$data);
	}

}

 ?>

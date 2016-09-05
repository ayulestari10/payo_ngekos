<?php

class Register extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('Karya_model');
	}

	function index(){
		$data = array(
			'title'		=> 'DAFTAR | Karya Ilkom',
			'content'	=> 'regist'
		);
		$this->load->view('includes/template', $data);
	}

	function regist(){
		if($this->input->post('daftar')){
			$nim 				= $this->input->post('nim');
			$password 	= $this->input->post('password');

			if(isset($nim, $password)){
				if($this->input->post('password') == $this->input->post('password2')){

					$cek_data = $this->Karya_model->get_data_byId($nim);
					if(isset($cek_data->nim)){
						$data_nim = $cek_data->nim;
					} else {
						$data_nim = "";
					}
					if($data_nim != $nim){
						$data = array(
							'nim'				=> $nim,
							'password'	=> md5($password)
						);
						$this->Karya_model->insert($data);

						$id_karya	= $this->Karya_model->get_id_karya($nim);

						$this->session->set_flashdata('msg', '<div class="alert alert-success" style="text-align:center;">Registrasi Berhasil</div>');
					}
					else {
						$this->session->set_flashdata('msg', '<div class="alert alert-warning" style="text-align:center;">nisn yang anda masukkan telah terdaftar sebelumnya.</div>');
					}
					redirect('Login/mhs');
				}
				else {
					$this->session->set_flashdata('msg', '<div class="alert alert-danger" style="text-align:center;">Password harus sama dengan Konfirmasi Password</div>');
					redirect('Register');
				}
			}
			else {
				$this->session->set_flashdata('msg', '<div class="alert alert-danger" style="text-align:center;">Registrasi Gagal</div>');
				redirect('Register');
			}
		} else {
			redirect('Register');
		}
	}
}

?>

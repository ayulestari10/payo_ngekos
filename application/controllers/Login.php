<?php  

class Login extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('Login_model');
		$this->load->model('Karya_model');
	}

	function admin(){
		if($this->input->post('login')){
			$data = array(
				'username'		=> $this->input->post('username'),
				'password' 		=> md5($this->input->post('password'))
			);
			$data_admin = $this->Login_model->cek_login_admin($data);
			if($this->Login_model->rows == 1){
				$this->session->set_userdata($data);
				redirect('Admin');
			} else {
				$this->session->set_flashdata('msg', '<div class="alert alert-danger" style="text-align:center;">Gagal Login!</div>'); 
				redirect('Login/admin');
				exit;
			}
		}
		$data = array(
			'title'		=> 'LOGIN | Karya Ilkom',
			'content'	=> 'Login_admin'
		);
		$this->load->view('includes/template', $data);
	}

	function mhs(){
		if($this->input->post('login')){
			$nim = $this->input->post('nim');

			$data = array(
				'nim'		=> $nim,
				'password' 	=> md5($this->input->post('password')),
				'id_karya'	=> $this->Karya_model->get_id_karya($nim)
			);
			$data_admin = $this->Login_model->cek_login_mhs($data);
			if($this->Login_model->rows == 1){
				$this->session->set_userdata($data);
				redirect('Karya');
			} else {
				$this->session->set_flashdata('msg', '<div class="alert alert-danger" style="text-align:center;">Gagal Login!</div>'); 
				redirect('Login/mhs');
				exit;
			}
		}
		$data = array(
			'title'		=> 'LOGIN | Karya Ilkom',
			'content'	=> 'Login'
		);
		$this->load->view('includes/template', $data);
	}

}
?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('login/index.php');
    }

	public function logar(){
		if (!$this->input->post()){
			redirect('/');
		}
		
		$identity = $this->input->post()['identity'];
		$password = $this->input->post()['password'];
		$remember = TRUE; // remember the user
		if ($this->ion_auth->login($identity, $password, $remember)){
			redirect('home');
		}else{
			$this->session->set_flashdata('error', 'Usuário ou senha inválido.');
			redirect('/');
		}
	}

	public function efetuar_logout(){
		$this->ion_auth->logout();
		redirect('/');
	}
}
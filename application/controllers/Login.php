<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
  public function index()
  {
    $this->load->view('login/index');
  }

  public function logar()
  {
    if (!$this->input->post()) {
      redirect('/');
    }

    $identity = $this->input->post()['identity'];
    $password = $this->input->post()['password'];
    $remember = TRUE;

    if ($this->ion_auth->login($identity, $password, $remember)) {
      $this->session->set_flashdata('success', 'Seja bem-vindo(a) de volta!');
      redirect('home');
    } else {
      $this->session->set_flashdata('error', 'Usuário ou senha inválidos');
      redirect('/');
    }
  }
}

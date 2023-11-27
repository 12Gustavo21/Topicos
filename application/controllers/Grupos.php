<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Grupos extends CI_Controller
{

	public function index()
	{
		$user = $this->ion_auth->user()->row();
		if ($user) {
			$data = array(
				'grupos' => $this->ion_auth->groups()->result(),
			);
			$this->load->view('grupos/index.php', $data);
		} else {
			redirect('/');
		}
	}
	public function insert()
	{
		if (!$this->input->post()) {
			redirect('/');
		}
		$data = elements(
			array('name', 'description'),
			$this->input->post()
		);
		$data = html_escape($data);
		if ($this->core_model->insert('groups', $data)) {
			$this->session->set_flashdata('sucesso', 'Registro inserido com sucesso.');
		} else {
			$this->session->set_flashdata('error', 'Não foi possível inserir o registro.');
		}
		redirect('/' . $this->router->fetch_class());
		// echo '<pre>';
		// print_r($this->input->post());
		// exit();
	}
	public function edit()
	{
		if (!$this->input->post()) {
			redirect('/');
		}
		$data = elements(
			array('name', 'description'),
			$this->input->post()
		);
		$data = html_escape($data);
		$id = $this->input->post()['id'];
		if ($this->core_model->update('groups', $data, 'id', $id)) {
			$this->session->set_flashdata('sucesso', 'Registro alterado com sucesso.');
		} else {
			$this->session->set_flashdata('error', 'Não foi possível alterar o registro.');
		}
		redirect('/' . $this->router->fetch_class());
	}
	public function delete()
	{
		if (!$this->input->post()) {
			redirect('/');
		}
		$id = $this->input->post()['id'];
		if ($this->core_model->delete('groups', 'id', $id)) {
			$this->session->set_flashdata('sucesso', 'Registro deletado com sucesso.');
		} else {
			$this->session->set_flashdata('error', 'Não foi possível deletar o registro.');
		}
		redirect('/' . $this->router->fetch_class());
	}
}

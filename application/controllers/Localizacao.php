<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Localizacao extends CI_Controller {

	public function index()
	{
		
		$data = array(
			'localizacoes'=>$this->core_model->get_all('localizacao'),
		);
		
		$this->load->view('localizacao/index.php',$data);
    }

	public function insert(){
		if(!$this->input->post()){
			redirect('/');
		}		
		
		$data = elements(
            array('locacodigo','locadescricao'),
            $this->input->post()
        );

		$data = html_escape($data);
			
		if ($this->core_model->insert('localizacao', $data)) {
            $this->session->set_flashdata('sucesso', 'Registro inserido com sucesso.');
        } else {
            $this->session->set_flashdata('error', 'Não foi possível inserir o registro.');
        }		
		redirect('/'.$this->router->fetch_class());
		// echo '<pre>';
		// print_r($this->input->post());
		// exit();
	}

	
	public function edit(){
		if(!$this->input->post()){
			redirect('/');
		}
		$data = elements(
            array('locacodigo','locadescricao'),
            $this->input->post()
        );

		$data = html_escape($data);
		
		$id = $this->input->post()['locaid'];
		
		if ($this->core_model->update('localizacao', $data, 'locaid',$id)) {
            $this->session->set_flashdata('sucesso', 'Registro alterado com sucesso.');
        } else {
            $this->session->set_flashdata('error', 'Não foi possível alterar o registro.');
        }		
		redirect('/'.$this->router->fetch_class());		
	}

	public function delete(){
		if(!$this->input->post()){
			redirect('/');
		}
		$id = $this->input->post()['locaid'];
		
		if ($this->core_model->delete('localizacao', 'locaid', $id)) {
            $this->session->set_flashdata('sucesso', 'Registro deletado com sucesso.');
        } else {
            $this->session->set_flashdata('error', 'Não foi possível deletar o registro.');
        }		
		redirect('/'.$this->router->fetch_class());		
	}
}

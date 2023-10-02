<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Categorias extends CI_Controller
{
    public function index()
    {
        $data = array(
            'categorias' => $this->core_model->get_all('categorias'),
        );

        $this->load->view('categorias/index', $data);
    }

    public function insert()
    {
        if (!$this->input->post()) {
            redirect('/');
        }

        $data = elements(
            array(
                'catecodigo',
                'catedescricao'
            ),
            $this->input->post()
        );

        $data = html_escape($data);

        if ($this->core_model->insert('categorias', $data)) {
            $this->session->set_flashdata('success', 'Dados salvos com sucesso!');
        } else {
            $this->session->set_flashdata('error', 'Erro ao salvar os dados!');
        }

        redirect($this->router->fetch_class());
    }

    public function edit()
    {
        if (!$this->input->post()) {
            redirect('/');
        }
        $data = elements(
            array(
                'catecodigo',
                'catedescricao'
            ),
            $this->input->post()
        );

        $data = html_escape($data);

        $id = $this->input->post()['cateid'];

        if ($this->core_model->update('categorias', $data, 'cateid', $id)) {
            $this->session->set_flashdata('success', 'Alteração realizada com sucesso!');
        } else {
            $this->session->set_flashdata('error', 'Erro ao alterar os dados!');
        }

        redirect($this->router->fetch_class());

        echo '<pre>';
        print_r($this->input->post());
        exit();
    }

    public function delete()
    {
        if (!$this->input->post()) {
            redirect('/');
        }

        $id = $this->input->post()['cateid'];

        if ($this->core_model->delete('categorias', 'cateid', $id)) {
            $this->session->set_flashdata('success', 'Exclusão realizada com sucesso!');
        } else {
            $this->session->set_flashdata('error', 'Erro ao excluir os dados!');
        }

        redirect($this->router->fetch_class());

        echo '<pre>';
        print_r($this->input->post());
        exit();
    }
}

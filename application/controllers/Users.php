<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{

  public function index()
  {
    $user = $this->ion_auth->user()->row();
    if ($user and $this->ion_auth->is_admin()) {
      if ($user) {
        $data = array(
          'users' => $this->core_model->get_all('users'),
          'styles' => array(base_url() . "public/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css"),
          'scripts' => array(
            base_url() . "public/plugins/datatables.net/js/jquery.dataTables.min.js",
            base_url() . "public/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js",
            base_url() . "public/js/datatables.js"
          )

        );
        $this->load->view('users/index.php', $data);
      } else {
        redirect('/');
      }
    }
  }

  public function insert()
  {
    if (!$this->input->post()) {
      redirect('/');
    }

    $data = elements(
      array(
        'clieCPF', 'clieNome', 'clieDatadenascimento', 'clieEndereco',
        'clieNumero', 'clieBairro', 'clieCEP', 'clieCidade', 'clieEstado',
        'clieReferencia'
      ),
      $this->input->post()
    );

    $data = html_escape($data);

    if ($this->core_model->insert('users', $data)) {
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
      array(
        'clieCPF', 'clieNome', 'clieDatadenascimento', 'clieEndereco',
        'clieNumero', 'clieBairro', 'clieCEP', 'clieCidade', 'clieEstado',
        'clieReferencia'
      ),
      $this->input->post()
    );

    $data = html_escape($data);

    $id = $this->input->post()['clieId'];

    if ($this->core_model->update('users', $data, 'clieId', $id)) {
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
    $id = $this->input->post()['clieId'];

    if ($this->core_model->delete('users', 'clieId', $id)) {
      $this->session->set_flashdata('sucesso', 'Registro deletado com sucesso.');
    } else {
      $this->session->set_flashdata('error', 'Não foi possível deletar o registro.');
    }
    redirect('/' . $this->router->fetch_class());
  }
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Executar_pagamentos extends CI_Controller {

	public function index()
	{
		$this->load->view('executarpagamento/index.php');
    }
}
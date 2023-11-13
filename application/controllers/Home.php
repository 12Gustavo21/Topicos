<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function index()
	{
		$user = $this->ion_auth->user()->row();
		if ($user) {
			$this->load->view('home/index');
		} else {
			redirect('/');
		}
	}
}

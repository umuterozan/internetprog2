<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Form extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('FormModel', 'form');
	}

	public function index()
	{
		$this->load->view('form');
	}

	public function send()
	{
		$data = $this->security->xss_clean(html_escape(array(
			'user_name' => $this->input->post('name'),
			'user_surname' => $this->input->post('surname'),
			'user_email' => $this->input->post('email'),
			'user_phone' => $this->input->post('phone'),
			'user_adress' => $this->input->post('adress'),
			'user_city' => $this->input->post('city'),
			'user_state' => $this->input->post('state'),
			'user_zip' => $this->input->post('zip'),
			'user_domain' => $this->input->post('domain'),
			'user_choice' => $this->input->post('choice'),
			'user_description' => $this->input->post('description')
		)));

		$this->form->insert($data);
		$this->session->set_flashdata('success', TRUE);
		redirect(base_url());
	}
}

<?php

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

	public function insert()
	{
		$data = $this->security->xss_clean(html_escape(array(
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'service' => $this->input->post('service'),
			'budget' => $this->input->post('budget'),
			'message' => $this->input->post('message')
		)));

		$this->form->insert($data);
		$this->session->set_flashdata('insert_success', TRUE);
		redirect(base_url());
	}
}

<?php

class Admin extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('AdminModel', 'admin');
    }

    public function index()
    {
        $formsData = $this->admin->getAllData();

        $viewDataForms = array(
            'forms' => $formsData
        );

        $this->load->view('admin', $viewDataForms);
    }

    public function delete($id)
	{
		$this->admin->delete($id);
		$this->session->set_flashdata('delete_success', TRUE);
		redirect(base_url('admin'));
	}
}
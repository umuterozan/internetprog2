<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function index()
	{
		echo "Merhaba";
		die();
		$this->load->view('welcome_message');
	}


	public function listele()
	{
		echo "Veriler Listelendi";
	}

	public function uyegetir()
	{
		echo "Üyeler Listelendi";
	}
}

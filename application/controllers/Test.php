<?php

class Test extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		
		//	« Décommenter » cette ligne pour charger le helper url
		
		$this->load->helper('url');
		$this->load->helper('assets');
	}
	






	public function index()
	{
		redirect(array('error', 'probleme'));
	}
	
	public function accueil()
	{
		$this->load->view('test/accueil');
	}


}

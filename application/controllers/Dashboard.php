<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		// Force SSL
      	$this->is_logged_in();
		// Form and URL helpers always loaded (just for convenience)
		$this->load->helper('form');
		$this->lang->load("app","english");
		$this->load->model('auth/recovery_model');
	}

	public function index()
	{
        $view_data 	= array(); 
		$data 		= array(
		            	    	'title'     => 	$this->lang->line('dashboard_title'),
		                		'content'   =>	$this->load->view('dashboard',$view_data,TRUE)
		                	);
		$this->load->view($this->dbvars->app_template, $data);
	}
}
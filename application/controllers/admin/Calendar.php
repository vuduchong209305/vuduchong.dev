<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Calendar extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$this->data_admin['main_content'] = $this->load->view('admin/calendar/calendar_v', array(

		), TRUE);

		$this->load->view('admin/template_v', $this->data_admin);
	}
}
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Persional_model', 'Persional');
	}

	public function index()
	{
		$field_info = '';
		$input = array(
			'where' => array('invalid' => 0),
			'order' => array('order', 'ASC')
		);

		$list_info = $this->Persional->get_row('persional_info', $field_info, $input);

		$field_social = array('name', 'link', 'image');
		$list_social = $this->Persional->get_list('social', $field_social, $input);

		$this->data = array(
			'list_info' => $list_info,
			'list_social' => $list_social
		);

		$this->load->view('home_v', $this->data);
	}
}
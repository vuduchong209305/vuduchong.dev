<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		date_default_timezone_set('Asia/Ho_Chi_Minh');
		
		$this->load->model('admin/User_model', 'User');

		$baseUrl = base_url();

		$this->current_url = current_url();

		$session_data = $this->session->userdata('logged_in');

		$controller = $this->uri->rsegment(1);

		if(!$session_data && $controller != 'login') {
			
			redirect('admin/login', 'refresh');

		} elseif ($session_data && $controller == 'login') {

			redirect('admin/calendar', 'refresh');

		}

		$this->user_id      = $session_data['user_id'];
		$this->user_name    = $session_data['user_name'];
		$this->full_name    = $session_data['full_name'];
		$this->avatar_path  = $session_data['avatar_path'];
		$this->address      = $session_data['address'];
		$this->created_at   = $session_data['created_at'];
		$this->last_visited = $session_data['last_visited'];
		$this->data_admin   = $session_data;

	}

	function page_404()
	{
		$this->data_admin['main_content'] = $this->load->view('admin/404_error', '', TRUE);
		$this->load->view('admin/template_v', $this->data_admin);
		return true;
	}

}
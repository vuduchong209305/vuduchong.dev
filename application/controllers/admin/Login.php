<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('username', 'Tài khoản', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Mật khẩu', 'trim|required|xss_clean');
		$this->form_validation->set_rules('login', 'login', 'callback_check_database');

		$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');

		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('admin/user/login_v');

		} else {

			redirect('admin/calendar', 'refresh');
		}
	}

	/**
	 * Check thông tin user & pass nhập vào với dữ liệu trong database
	 * Nếu trùng thì trả về True, ngược lại trả về False
	 */

	public function check_database(){
		
		$username = $this->input->post('username');
		
		$password = md5($this->input->post('password'));
		
		$where    = array(
			'user_name'  => $username, 
			'password'   => $password, 
			'invalid'    => 0,
		);
		
		$field  = array('user_id', 'user_name', 'full_name', 'avatar_path', 'address', 'created_at', 'last_visited');
		
		$result = $this->User->check_exists('users', $where, $field);

		if($result) {

			$this->session->set_userdata('logged_in', array(
				'user_id'      => $result['user_id'],
				'user_name'    => $result['user_name'],
				'full_name'    => $result['full_name'],
				'avatar_path'  => $result['avatar_path'],
				'address'      => $result['address'],
				'created_at'   => $result['created_at'],
				'last_visited' => $result['last_visited'],
			));

			$data_update = array('last_visited' => date('Y-m-d H:i:s'), 'online' => 1);

			$where = array('user_id' => $result['user_id']); 

			$this->User->update('users', $data_update, $where);

			return TRUE;
		}

		$this->form_validation->set_message(__FUNCTION__, 'Đăng nhập thất bại');
		return FALSE;
	}
}
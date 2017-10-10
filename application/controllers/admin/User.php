<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/user_model', 'User');
	}

	/**
	 * Author : Vũ Đức Hồng
	 * Module : Get list user
	 * Date : 25.09.2017
	 */
	public function index()
	{
		$field = array('user_id', 'user_name', 'full_name', 'avatar_path', 'email', 'address', 'phone_number', 'group', 'created_at', 'last_visited', 'invalid', 'online');

		$input = array(
			'where' => array('deleted' => 0),
			'order' => array('user_id', 'ASC')
		);

		$list_user = $this->User->get_list('users', $field, $input);

		$this->data_admin['main_content'] = $this->load->view('admin/user/list_user_v', array(
			'list_user' => $list_user,
		), TRUE);

		$this->load->view('admin/template_v', $this->data_admin);
	}

	/**
	 * Author : Vũ Đức Hồng
	 * Module : Add new User
	 * Date : 29.09.2017
	 */
	public function add()
	{
		$this->form_validation->set_rules('username', 'Tài khoản','trim|required|min_length[5]|max_length[20]|xss_clean|is_unique[users.user_name]');
		$this->form_validation->set_rules('password', 'Mật khẩu','trim|required|min_length[5]|max_length[20]|xss_clean');
		$this->form_validation->set_rules('email', 'Email','trim|valid_email|xss_clean');
		$this->form_validation->set_rules('group', 'Nhóm quyền', 'trim|required');

		if($this->form_validation->run() == FALSE){

			$feild = '';

			$input = array(
				'where' => array('invalid' => 0),
				'order' => array('id', 'ASC')
			);

			$list_group = $this->User->get_list('group_users_permission', $feild, $input);

			$this->data_admin['main_content'] = $this->load->view('admin/user/add_user_v', array(
				'list_group' => $list_group
			), TRUE );

			$this->load->view('admin/template_v', $this->data_admin);

		} else {

			$data = $this->input->post();

			$dataInsert = array (
				'user_name'    => $data['username'],
				'password'     => md5($data['password']),
				'full_name'    => $data['fullname'],
				'email'        => $data['email'],
				'address'      => $data['address'],
				'avatar_path'  => $data['avatar_path'],
				'phone_number' => $data['phone'],
				'group'        => $data['group'],
				'invalid'      => $data['invalid'],
				'created_by'   => $this->user_id,
				// 'created_at'   => date('Y-m-d H:i:s'),
			);

			$this->User->create('users', $dataInsert) ? 
			$this->session->set_flashdata('message', 'Thêm Thành Công') : 
			$this->session->set_flashdata('message', 'Thêm Thất Bại');

			$redirect = $data['redirect'];
			redirect($redirect, 'refresh');
		}
	}

	public function edit()
	{
		$params = $this->uri->ruri_to_assoc();

		if( !isset($params['id']) ){
			$this->page_404();
			return false;
		}

		$user_id = $params['id'];

		$field = array('user_id', 'user_name', 'password', 'full_name', 'avatar_path', 'email', 'address', 'phone_number', 'invalid', 'group');

		$where = array('user_id' => $user_id);

		$record_detail = $this->User->get_info('users', $where, $field);

		if(!$record_detail){
			$this->page_404();
			return false;
		}

		$this->form_validation->set_rules('email', 'Email', 'trim|valid_email|xss_clean');
		$this->form_validation->set_rules('password', 'Mật khẩu','trim|min_length[5]|max_length[20]|xss_clean');

		if($this->form_validation->run() == FALSE){

			$feild = '';

			$input = array(
				'where' => array('invalid' => 0),
				'order' => array('id', 'ASC')
			);

			$list_group = $this->User->get_list('group_users_permission', $feild, $input);

			$this->data_admin['main_content']=$this->load->view('admin/user/edit_user_v', array(
				'record_detail'	=> $record_detail,
				'list_group'	=> $list_group,
			),TRUE);
			
			$this->load->view('admin/template_v',$this->data_admin);

		} else {

			$data = $this->input->post();

			$password = NULL;

			if(!empty($data['password'])){
				$password = md5($data['password']);
			} else {
				$password = $record_detail['password'];
			}

			$data_update = array(				
				'password'     => $password,
				'full_name'    => $data['fullname'],
				'email'        => $data['email'],
				'address'      => $data['address'],
				'phone_number' => $data['phone'],
				'avatar_path'  => $data['avatar_path'],
				'group'        => $data['group'],
				'invalid'      => $data['invalid'],
				'updated_by'   => $this->user_id,
				// 'updated_at'   => date('Y-m-d H:i:s'),
			);

			$redirect = $data['redirect'];

			unset($data['redirect']);

			$where = array('user_id' => $record_detail['user_id']); 

			$this->User->update('users', $data_update, $where) ? 
			$this->session->set_flashdata('message', 'Cập Nhật Thành Công') : 
			$this->session->set_flashdata('message', 'Cập Nhật Thất Bại');

			redirect($redirect);

		}
	}

	/**
	 * Author : Vũ Đức Hồng
	 * Module : Delete user
	 * Date : 30.09.2017
	 */
	public function delete()
	{
		$id_list_str = $this->input->post('IDstring');
		$id_list_arr = explode(',', $id_list_str);

		$data = array('deleted' => 1);

		foreach ($id_list_arr as $id) {
			if($id > 0) {
				$where = array('user_id' => $id);
				$this->User->delete_user('users', $data, $where);
			}
		}
		echo json_encode(array('status' => 'OK'));
	}

	/**
	 * Author : Vũ Đức Hồng
	 * Module : Profile user
	 * Date : 01.10.2017
	 */
	public function profile()
	{
		$this->data_admin['main_content'] = $this->load->view('admin/user/profile_v', '', TRUE);

		$this->load->view('admin/template_v', $this->data_admin);
	}

	/**
	 * Author : Vũ Đức Hồng
	 * Module : Logout & update Online = 0
	 * Date : 27.09.2017
	 */
	public function logout()
	{
		$where = array('user_id' => $this->user_id);

		$data_update = array('online' => 0);

		$this->User->update('users', $data_update, $where);

		$this->session->sess_destroy();

		redirect('admin/login');
	}

	public function addPermission()
	{
		$this->form_validation->set_rules('group_name', 'Tên nhóm quyền','trim|required|max_length[17]|xss_clean|is_unique[group_users_permission.group_name]');

		if($this->form_validation->run() == FALSE){

			$this->load->config('permissions', TRUE);

			$module_permissions = $this->config->item('permissions');

			$this->data_admin['main_content'] = $this->load->view('admin/user/add_permission_v', array(

				'module_permissions' => $module_permissions

			), TRUE);

			$this->load->view('admin/template_v', $this->data_admin);

		} else {

			$data = $this->input->post();

			$list_permission = $this->input->post('list_permission');

			$dataInsert = array(
				'group_name'      => $data['group_name'],
				'list_permission' => json_encode($list_permission),
				'created_by'      => $this->user_id,
			);

			$redirect = $data['redirect'];

			unset($data['redirect']);

			$this->User->create('group_users_permission', $dataInsert) ? 
			$this->session->set_flashdata('message', 'Thêm Thành Công') : 
			$this->session->set_flashdata('message', 'Thêm Thất Bại');

			redirect($redirect, 'refresh');

		}
	}

	public function listPermission()
	{
		$feild = '';

		$input = array(
			'where' => array('invalid' => 0),
			'order' => array('id', 'ASC')
		);

		$list_permission = $this->User->get_list('group_users_permission', $feild, $input);

		$this->data_admin['main_content'] = $this->load->view('admin/user/list_permission_v', array(
			'list_permission' => $list_permission
		), TRUE);

		$this->load->view('admin/template_v', $this->data_admin);
	}
}
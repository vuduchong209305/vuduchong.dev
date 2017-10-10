<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Persional extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/Persional_model', 'Persional');
	}

	public function index()
	{
		$field_info = '';
		$where = array('invalid' => 0);
		$list_info = $this->Persional->get_info('persional_info', $where, $field_info);

		$field_social = array('id', 'name', 'link', 'image');
		$input = array(
			'where' => array('invalid' => 0),
			'order' => array('order', 'ASC')
		);
		$list_social = $this->Persional->get_list('social', $field_social, $input);

		$this->data_admin['main_content'] = $this->load->view('admin/persional_info_v', array(
			'list_info' => $list_info,
			'list_social' => $list_social
		), TRUE);

		$this->load->view('admin/template_v', $this->data_admin);
	}

	public function edit_info()
	{
		$this->form_validation->set_rules('fullname', 'Họ tên', 'trim|xss_clean');
		$this->form_validation->set_rules('email', 'Mật khẩu','trim|valid_email|xss_clean');

		$field_info = '';
		$where = array('invalid' => 0);
		$list_info = $this->Persional->get_info('persional_info', $where, $field_info);

		if($this->form_validation->run() == FALSE){

			$this->data_admin['main_content'] = $this->load->view('admin/persional_info_v', array(

				'list_info'	=> $list_info,

			),TRUE);
			
			$this->load->view('admin/template_v',$this->data_admin);

		} else {

			$data = $this->input->post();

			$data_update_info = array(			
				'fullname'    => $data['fullname'],
				'birthday'    => $data['birthday'],
				'email'       => $data['email'],
				'address'     => $data['address'],
				'phone'       => $data['phone'],
				'avatar'      => $data['avatar_path'],
				'job'         => $data['job'],
				'description' => $data['description'],
				'background'  => $data['background'],
			);

			$where = array('id' => $list_info['id']);

			$this->Persional->update('persional_info', $data_update_info, $where) ? 
			$this->session->set_flashdata('message', 'Cập Nhật Thành Công') : 
			$this->session->set_flashdata('message', 'Cập Nhật Thất Bại');

			redirect('admin/persional');
		}
	}

	public function edit_social()
	{
		$data = $this->input->post();

		foreach ($data as $k => $v)
		{
			foreach($v as $item)
			{
				$where = array('id' => $item['id']);

				$data_update_social = array(
					'image' => $item['image'],
					'link'	=> $item['link']
				);

				$this->Persional->update('social', $data_update_social, $where) ?
				$this->session->set_flashdata('message', 'Cập Nhật Thành Công') : 
				$this->session->set_flashdata('message', 'Cập Nhật Thất Bại');
			}
			
		}

		redirect('admin/persional');
	}

	public function update_order()
	{
		
	}
}
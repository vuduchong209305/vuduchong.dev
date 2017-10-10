<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Model extends CI_Model
{

	/**------Thêm mới dữ liệu-----
	 * $table : Bảng cần thêm dữ liệu.
	 * $data  : Mảng dữ liệu cần thêm.
	 */
	function create($table, $data = '')
	{
		if($this->db->insert($table, $data)) {
			return TRUE;
		} else {
			return FALSE;
		}
	}
	
	/**------Update dữ liệu------
	 * $table : Bảng cần update dữ liệu.
	 * $where : Mảng điều kiện update.
	 * $data  : Mảng dữ liệu cần update.
	 */
	function update($table, $data = '', $where = '')
	{
		if (!$where) {
			return FALSE;
		}

	 	$this->db->update($table, $data, $where);
	 	
	 	return TRUE;
	}

	/**
	 * Xoa row tu id
	 * $id : gia tri cua khoa chinh
	 */
	function delete($id)
	{
		if (!$id)
		{
			return FALSE;
		}
		//neu la so
		if(is_numeric($id))
		{
			$where = array($this->key => $id);
		} else {
		    //$id = 1,2,3...
			$where = $this->key . " IN (".$id.") ";
		}
	 	$this->del_rule($where);
		
		return TRUE;
	}
	
	/**
	 * Xoa row tu dieu kien
	 * $where : mang dieu kien de xoa
	 */
	function del_rule($where = '')
	{
		if (!$where) {
			return FALSE;
		}
		
	 	$this->db->where($where);
		$this->db->delete($this->table);
	 
		return TRUE;
	}
	
	/**
	 * Thực hiện câu lệnh query
	 * $sql : cau lenh sql
	 */
	function query($sql){
		$rows = $this->db->query($sql);
		return $rows->result;
	}

	
	/**------Lấy ra thông tin của 1 record------
	 * $table : Bảng cần lấy dữ liệu.
	 * $where : Mảng điều kiện để lấy.
	 * $field : Các field cần lấy dữ liệu.
	 */
	function get_info($table, $where = '', $field = '')
	{
		if (!$where) {
			return FALSE;
		}

		$this->db->select($field);
		$this->db->where($where);
		$query = $this->db->get($table);

	 	if ($query->num_rows()) {
			return $query->row_array();
		}
	}

	/**
	 * Lay 1 row
	 */
	function get_row($table, $field = '', $input = '')
	{
		// Select các field cần lấy dữ liệu
		$this->db->select($field);

		// Xử lý các dữ liệu đầu vào
		$this->get_list_set_input($input);
		
		return $this->db->get($table)->row();

	}
	
	/**
	 * Lay tong so
	 */
	function get_total($input = array())
	{
		$this->get_list_set_input($input);
		
		$query = $this->db->get($this->table);
		
		return $query->num_rows();
	}
	
	/**
	 * Lay tong so
	 * $field: cot muon tinh tong
	 */
	function get_sum($field = '', $where = '')
	{
		$this->db->select_sum($field);//tinh tong
		$this->db->where($where);//dieu kien
		$this->db->from($this->table);
		
		$row = $this->db->get()->row();
		foreach ($row as $f => $v)
		{
			$sum = $v;
		}
		return $sum;
	}
	
	
	
	/**
	 * Lay danh sach
	 * $input : mang cac du lieu dau vao
	 */
	function get_list($table, $field = '', $input = '')
	{
		// Select các field cần lấy dữ liệu
		$this->db->select($field);

		// Xử lý các dữ liệu đầu vào
		$this->get_list_set_input($input);

		return $this->db->get($table)->result_array();
	}
	
	/**
	 * Gan cac thuoc tinh trong input khi lay danh sach
	 * $input : mang du lieu dau vao
	 */
	
	protected function get_list_set_input($input = array())
	{
		
		// Thêm điều kiện cho câu truy vấn truyền qua biến $input['where'] 
		//(vi du: $input['where'] = array('email' => 'hocphp@gmail.com'))
		if ((isset($input['where'])) && $input['where'])
		{
			$this->db->where($input['where']);
		}
		
		//tim kiem like
		// $input['like'] = array('name' , 'abc');
	    if ((isset($input['like'])) && $input['like'])
		{
			$this->db->like($input['like'][0], $input['like'][1]); 
		}
		
		// Thêm sắp xếp dữ liệu thông qua biến $input['order'] 
		//(ví dụ $input['order'] = array('id','DESC'))
		if (isset($input['order'][0]) && isset($input['order'][1]))
		{
			$this->db->order_by($input['order'][0], $input['order'][1]);
		}
		else
		{
			//mặc định sẽ sắp xếp theo id giảm dần 
			$order = ($this->order == '') ? array($this->table.'.'.$this->key, 'desc') : $this->order;
			$this->db->order_by($order[0], $order[1]);
		}
		
		// Thêm điều kiện limit cho câu truy vấn thông qua biến $input['limit'] 
		//(ví dụ $input['limit'] = array('10' ,'0')) 
		if (isset($input['limit'][0]) && isset($input['limit'][1]))
		{
			$this->db->limit($input['limit'][0], $input['limit'][1]);
		}
		
	}
	
	/**
	 * ------Kiểm tra sự tồn tại của dữ liệu theo điều kiện nào đó------
	 * $table : Bảng dữ liệu cần kiểm tra.
	 * $where : Mảng điều kiện cần kiểm tra.
	 * $field : Mảng dữ liệu cần lấy ra.
	 */
    function check_exists($table, $where = array(), $field = '')
    {
    	$this->db->select($field);
	    $this->db->where($where);
	    //thuc hien cau truy van lay du lieu
		$query = $this->db->get($table);
		
		if($query->num_rows() > 0){
			return $query->row_array();
		} else {
			return FALSE;
		}
	}
}
?>
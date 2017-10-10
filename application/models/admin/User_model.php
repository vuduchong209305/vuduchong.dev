<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends MY_Model
{
	function delete_user($table, $data, $id)
	{
		$this->db->trans_begin();
		// $this->db->delete($table, array('user_id' => $id));
		$this->db->update($table, $data, $where);
		
		if($this->db->trans_status() === FALSE){
			$this->db->trans_rollback();
			return false;
		} else {
			$this->db->trans_commit();
			return $id;
		}
	}
}



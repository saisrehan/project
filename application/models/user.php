<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Model{
     function get_user($data) {
		$query = $this->db->query("SELECT * FROM user WHERE email = '". $data['email'] ."' AND password = '".$data['password']."';");
		if($query->num_rows() != 0)
		{
			$row = $query->row_array();
			$session_data = array(
				'user_id' => $row['user_id'],
				'first_name'  => $row['first_name'],
				'last_name'  => $row['last_name'],
				'phone'  => $row['phone'],
				'email'     => $row['email'],
				'account_type' =>$row['account_type'],
				'status' => $row['status'],
				'created' => $row['created'],
				'modified' => $row['modified'],
				'logged_in' => TRUE
			);

			$this->session->set_userdata($session_data);
			return $row;
		}
		else
		{
			return "0";
		}
	} 
	
}
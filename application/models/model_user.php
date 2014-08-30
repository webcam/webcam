<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_user extends CH_Model {

	public function __construct(){
		parent::__construct();
		$this->set_table_name('user');
	}


	public function C($data) {
		$data['password'] = md5(config_item('encryption_key').$data['password']);
		$data['reg_at'] = time();
		$data['last_login'] = $data['reg_at'];
		return $this->insert($data);
	}



	public function get_by_username($username) {
		$sql = "SELECT id FROM `{$this->_table_name}` WHERE username = ?";
		$query = $this->db->query($sql, array($username));
		return $query->first_row();
	}



	public function login($data) {
		if($data['username'] && $data['password']) {
			$password = md5(config_item('encryption_key').$data['password']);
			$sql = "SELECT * FROM {$this->_table_name} WHERE username = ? AND password = ?";
			$query = $this->db->query($sql, array($data['username'], $password));
			$data = $query->first_row();
			if($data) {
				$data->ip = $this->input->ip_address();
				$sql = "UPDATE `{$this->_table_name}` SET `last_login` = '".time()."' WHERE id = {$data->id}";
				$this->db->query($sql);
			}
			return $data;
		}
		return FALSE;
	}


	public function change_pwd($data) {
		if($data['id'] && $data['password']) {
			$password = md5(config_item('encryption_key').$data['password']);
			$sql = "UPDATE `{$this->_table_name}` SET `password` = '".$password."' WHERE id = ?";
			$this->db->query($sql, array($data['id']));
			return $data;
		}
		return FALSE;
	}
}

/* End of file model_admin.php */
/* Location: ./application/models/model_admin.php */
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_order extends CH_Model {

	public function __construct(){
		parent::__construct();
		$this->set_table_name('order');
	}
}

/* End of file model_admin.php */
/* Location: ./application/models/model_admin.php */
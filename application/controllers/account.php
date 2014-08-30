<?php
class Account extends CH_Controller {

	public function __construct() {
		parent::__construct();
		if(!$this->user)
			redirect(base_url());
	}

    public function index() {
	    //if($_GET['r']) {
		    $this->load->model('model_user');
		    $user = $this->model_user->get_by_id($this->user->id);

		    $_SESSION['login_user'] = $user;

		    $this->user = $user;
	    //}


        $this->_view('account_index');
    }


	public function payment() {

		if($_GET['action'] == 'paybank') {
			$this->_view('account_payment_bank');
		} else if($_GET['action'] == 'paycard') {
			$this->_view('account_payment_bank');
		} else {
			$this->_view('account_payment');
		}

	}



	public function bank() {
		if($_POST['v_amount'] && $_POST['bankType']) {
			//$money = '10.00';
			$money = '0.10';
			$bank_type = abs($_POST['bankType']);

			$this->load->model('model_order');
			$order_id = $this->model_order->insert(array(
				'uid' => $this->user->id,
				'money' => $money,
				'remark' => '10元试用',
				'create_at' => time(),
				'status' => 0,
			));


			$config = config_item('pay');
			$url = 'http://web.eshengpay.com/chargebank.aspx?';
			$sign = array(
				'parter' => $config['id'],
				'type' => $bank_type,
				'value' => $money,
				'orderid' => $order_id,
				'callbackurl' => base_url('epay/callback'),
			);

			$key = md5(http_build_query($sign).$config['code']);
			$params = array(
				'hrefbackurl' => base_url('account/callback'),
				'payerIp' => $this->input->ip_address(),
				'attach' => '',
				'sign' => $key,
			);

			$params = $sign + $params;

			redirect($url.http_build_query($params));
		}
	}

	public function callback() {
		$orderid        = trim($_GET['orderid']);
		$orderid = intval($orderid);
		$opstate        = trim($_GET['opstate']);
		$ovalue         = trim($_GET['ovalue']);
		$sign           = trim($_GET['sign']);
		$error = false;
		//订单号为必须接收的参数，若没有该参数，则返回错误
		if(!$orderid){
			$error = true;
			//die("opstate=-1");
		}
		$config = config_item('pay');
		$sign_text	= "orderid=$orderid&opstate=$opstate&ovalue=$ovalue".$config['code'];
		$sign_md5 = md5($sign_text);
		if($sign_md5 != $sign){
			//die("opstate=-2");
			$error = true;
		}

		$this->data->error = $error;
		$this->data->order_id = 1;

		$this->_view('account_callback');
	}


	public function check_order() {
		if($_POST['id']) {
			$orderid = intval($_POST['id']);
			$this->load->model('model_order');
			$order = $this->model_order->get_by_id($orderid);

			$success = ($order && $order->status == 2) ? 1 : 0;
			echo json_encode(array('success' => $success));
		}
	}

	public function girls() {

		if($_GET['action'] == 'PayMoney')
			redirect(base_url('account/payment?action=paybank'));


		$this->_view('account_girls');
	}

	public function logout() {

		unset($_SESSION['login_user']);
		redirect(base_url());
	}
}
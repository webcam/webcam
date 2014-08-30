<?php
class Epay extends CH_Controller {

    public function bank() {
	    $orderid        = trim($_GET['orderid']);
	    $orderid = intval($orderid);
	    $opstate        = trim($_GET['opstate']);
	    $ovalue         = trim($_GET['ovalue']);
	    $sign           = trim($_GET['sign']);

	    //订单号为必须接收的参数，若没有该参数，则返回错误
	    if(!$orderid){
		    die("opstate=-1");		//签名不正确，则按照协议返回数据
	    }
	    $this->load->model(array('model_order', 'model_user'));
	    $order = $this->model_order->get_by_id($orderid);
	    if(!$order){
		    die("opstate=-1");		//签名不正确，则按照协议返回数据
	    }

	    $sign_text	= "orderid=$orderid&opstate=$opstate&ovalue=$ovalue".$this->key;
	    $sign_md5 = md5($sign_text);
	    if($sign_md5 != $sign){
		    die("opstate=-2");		//签名不正确，则按照协议返回数据
	    }


	    $this->model_order->update(array(
		    'status' => 2,
		    'success_at' => time(),
		    'opstate' => $opstate,
		    'ovalue' => $ovalue,
		    'ekaorderid' => $_GET['ekaorderid'],
		    'ekatime' => $_GET['ekatime'],
		    'attach' => $_GET['attach'] ? iconv('GBK', 'UTF-8', $_GET['msg']) : NULL,
		    'msg' => $_GET['msg'] ? iconv('GBK', 'UTF-8', $_GET['msg']) : NULL,
	    ), $orderid);

	    $this->load->model('model_user');
	    $user = $this->model_user->get_by_id($order->uid);

	    $this->model_user->update(array(
		    'total_money' => $user->total_money + $order->money,
		    'rank' => 1,
		    'money' => $user->money + $order->money
	    ),$order->uid);



	    die("opstate=0");
    }
}
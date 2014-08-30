<?php
class Ajax extends CH_Controller {

	public function reg() {

		if($_POST['username'] && $_POST['checkcode']) {
			if($_POST['checkcode'] != $_SESSION['captcha'])
				die("【系统提示】\n\n验证码错误\n\n请重新输入。");

			$username = trim($_POST['username']);
//var_dump(preg_match("#^[A-Za-z0-9]$#", $username));
//			if(!preg_match("#^[A-Za-z0-9]$#", $username))
//				die("【系统提示】\n\n用户名只能使用英文加数字组合\n\n请重新输入。");

			$len = strlen($username);
			if($len<6 || $len>12)
				die("【系统提示】\n\n帐号长度在6位到12位之间！\n\n　请重新输入。");

			$this->load->model('model_user');

			if($this->model_user->get_by_username($username))
				die("【系统提示】\n\n用户名已经被注册。");


			$id = $this->model_user->C(array(
				'username' => $username,
				'password' => $_POST['password'],
			));

			$user =$this->model_user->get_by_id($id);
			$_SESSION['login_user'] = $user;

			die('ok');
		}

	}


	public function login() {

		if($_POST['username'] && $_POST['checkcode']) {
			if($_POST['checkcode'] != $_SESSION['captcha'])
				die("【系统提示】\n\n验证码错误\n\n请重新输入。");

			$username = trim($_POST['username']);

//			if(!preg_match("#[^0-9A-Za-z-_]#", $username))
//				die("【系统提示】\n\n用户名只能使用英文加数字组合\n\n请重新输入。");

			$len = strlen($username);
			if($len<6 || $len>12)
				die("【系统提示】\n\n帐号长度在6位到12位之间！\n\n　请重新输入。");

			$this->load->model('model_user');

//			if($this->model_user->get_by_username($username))
//				die("【系统提示】\n\n用户名已经被注册。");


			$login = $this->model_user->login(array(
				'username' => $username,
				'password' => $_POST['password'],
			));

			$_SESSION['login_user'] = $login;

			$tip = $login ? 'ok' : "【系统提示】\n\n用户名或密码错误。";
			die($tip);
		}
	}


		public function nickname() {

			if($_POST['nickname']) {

				if(!$_SESSION['login_user'])
					die("【系统提示】\n\n请先登录。");

				$username = trim($_POST['nickname']);

				$len = strlen($username);
				if($len<1 || $len>12)
					die("【系统提示】\n\n昵称在1位到12位之间！\n\n　请重新输入。");

				$this->load->model('model_user');
				$user = $this->model_user->get_by_id($_SESSION['login_user']->id);

				if($user->nick_changed)
					die("【系统提示】\n\n你已经修改过昵称。");

				$this->model_user->update(array(
					'nick_changed' => 1,
					'nickname' => $username,
				),$user->id);

				//$tip = $login ? 'ok' : "【系统提示】\n\n用户名或密码错误。";
				die('ok');
			}
		}

}
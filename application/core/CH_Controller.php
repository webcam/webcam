<?php
class CH_Controller extends CI_Controller {
    public $data;
    public $script = '';
    public $style = '';
    public $template = 'v1/';
    public $user = FALSE;
	public $is_mobile = false;

    public function __construct() {
        parent::__construct();
        date_default_timezone_set('Asia/Chongqing');
        session_start();
        error_reporting(E_ALL ^ E_NOTICE);
        $this->data = new stdClass();
        //$this->load->driver('cache');


	    if($_SESSION['login_user']) $this->user = $_SESSION['login_user'];

    }



    public function _add_script($script_name) {
        $script_name = preg_match("#^http#", $script_name) ? $script_name : base_url().'assets/scripts/'.$script_name;
        $this->script .= '<script type="text/javascript" src="'.$script_name.'"></script>';
    }

    public function _add_style($css) {
        $css = preg_match("#^http#", $css) ? $css : base_url().'assets/style/'.$css;
        $this->style .= '<link rel="stylesheet" href="'.$css.'" type="text/css" media="all" charset="utf-8" />';
    }

    public function _view($view) {
        $this->load->view($this->template.ltrim($view, '/'), $this->data);
    }

    public function _m_view($view) {
        $this->load->view('manage/'.ltrim($view, '/'), $this->data);
    }


	private function isMobile() {
		$ua = array(
			'Android', 'AvantGo', 'BlackBerry', 'DoCoMo', 'Fennec', 'iPod', 'iPhone', 'iPad',
			'J2ME', 'MIDP', 'NetFront', 'Nokia', 'Opera Mini', 'Opera Mobi', 'PalmOS', 'PalmSource',
			'portalmmm', 'Plucker', 'ReqwirelessWeb', 'SonyEricsson', 'Symbian', 'UP\\.Browser',
			'webOS', 'Windows CE', 'Windows Phone OS', 'Xiino'
		);

		$pattern = '/' . implode('|', $ua) . '/i';
		return (bool) preg_match($pattern, $_SERVER['HTTP_USER_AGENT']);
	}

}
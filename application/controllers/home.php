<?php
class Home extends CH_Controller {

    public function index() {

        $this->_view('home');
    }


	public function reg() {

		$this->_view('reg');
	}
	public function newbie() {
		$this->_view('newbie');
	}
}
<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Crazy Horse
 * Date: 12-11-8
 */
class Captcha extends CH_Controller
{

	public function index() {
		$this->load->library('SimpleCaptcha');
		$captcha = new SimpleCaptcha();
		$captcha->wordsFile = null;
		$captcha->width = 100;
		$captcha->height = 40;
		$captcha->minWordLength = 4;
		$captcha->maxWordLength = 4;

		$captcha->CreateImage();
	}

}

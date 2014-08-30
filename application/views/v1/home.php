<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml/index.html">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="http://cdn.68ting.com/template/aile/favicon.ico" type="image/x-icon" />
	<title>皇家一号</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/index.css') ?>" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/thickbox.css') ?>" type="text/css">
	<style>
		#banner #logo #logoimg, html.ie #banner #logo #logoimg {
			display:inline-block;
			background:url('<?php echo base_url('assets/img/logo.png') ?>') no-repeat 0 0;
			width:322px;
			height:113px;
			margin:0 auto;
		}

		.badge { margin: 0 15px 0 0;}
		.lang-fi_FI .badge,.lang-fr_FR .badge{ margin-right:2px;}
		.country-DE .badge, .country-AT .badge, .country-CH .badge { margin-right:1px;}
		.country-DE .badge .onehundredpercent, .country-AT .badge .onehundredpercent, .country-CH .badge .onehundredpercent {width:106px;}
		#discreet_badge {
			background: url('<?php echo base_url('assets/img/discreet_badge.jpg') ?>') no-repeat 0 0;
			width: 85px;
			height: 75px;
			margin-top: 25px;
			margin-right: 0;
		}
		.lang-en_US #discreet_badge { margin-left: 20px; margin-right: 25px; }
		.discreet_number{ font-size:15px; font-weight:bold; text-align:center; margin:10px 5px 0 0; color: white; font-family:"Times New Roman"; }
		.discreet_text { font-size: 10px; font-weight: bold; text-align:center; }
		.discreet_text.white { margin: 4px 6px 0 0; color: white; }
		.lang-fi_FI .discreet_text.white { font-size: 7px; margin-top:5px; }
		.discreet_text.blue{ margin: 7px 0 0 0; color: #259eb3; }
		.lang-fi_FI .discreet_text.blue{ margin-top: 10px;}
		.country-DE .badge .description, .country-AT .badge .description, .country-CH .badge .description { width:165px; }
		.country-CH #discreet_badge { margin-left:3px; margin-right:3px;}
		.badge .outlets {margin-left:1px; margin-top:9px;}
		.country-DE .badge .outlets, .country-AT .badge .outlets { width:123px; }
		.country-IT .badge .outlets { width:195px; }
		.country-IT.lang-fi_FI .badge .outlets { width:184px; margin-right:0;}
		.country-IT.lang-fr_FR .badge .outlets {margin-left:1px; margin-right:0;}
		.country-CH .badge .outlets { width:146px; margin-left:1px; margin-right:2px; }
		.country-DE #container .badge.ssl.right, .country-CH #container .badge.ssl.right, .country-AT #container .badge.ssl.right {margin-right:1px; font-size:12px;}
		.country-DE #content .badge.ssl, .country-CH #content .badge.ssl, .country-AT #content .badge.ssl, .country-IT #content .badge.ssl { padding-left:60px; }
	</style>
</head>
<body class="lang-zh_HK country-HK date-10-23">
<script type="application/javascript">
	window.BASEURL = '<?php echo base_url('/assets'); ?>';
</script>
<script src="<?php echo base_url('/assets'); ?>/js/jquery-1.8.3.min.js"></script>
<script src="<?php echo base_url('/assets'); ?>/js/thickbox.js"></script>
<script type="text/javascript">
	function dologin()
	{
		var username = $("#username").val();
		var password = $("#password").val();
		var checkcode = $("#checkcode").val();
		if(username == '')
		{
			alert('请输入用户名!');
			$("#username").focus();
			return false;
		}
		if(password == '')
		{
			alert('请输入密码!');
			$("#password").focus();
			return false;
		}

		if(checkcode == '')
		{
			alert('请输入验证码!')
			$("#checkcode").focus();
			return false;
		}
		$('#dosubmit').html("正在登录..");

		$.post("<?php echo base_url('ajax/login') ?>",{ username: username, password: password,checkcode:checkcode}, function(data){
			if(data == 'ok'){
				window.location.href = '<?php echo base_url('account') ?>';
			}
			else {
				$("#logincode").attr("src",'<?php echo base_url('captcha') ?>?r=' + Math.random());
				$("#password").attr("value",'');
				$("#checkcode").attr("value",'');
				$('#dosubmit').html("立即登录&raquo;");
				alert(data);
			}
		});
		return false;
	}
	function goRegister()
	{
		tb_show('注册新会员', '#TB_inline?height=380&width=400&inlineId=RegWindow');
		document.getElementById('imgreg').src = '<?php echo base_url('captcha') ?>?r=' + Math.random();
	}
	function checkreg()
	{
		var a=$("#regname").val();
		var b=$("#regpass").val();
		var c=$("#reregpass").val();
		var d=$("#regcode").val();
		if(a==''){alert('请输入用户名!');$("#regname").focus();return false;}
		var pattern = /[^0-9A-Za-z-_]/;
		if (pattern.test(a)) {alert("【系统提示】\n\n用户名只能使用英文加数字组合\n\n请重新输入。");$("#regname").focus();return false;};
		if(a.length<6 || a.length>12){alert("【系统提示】\n\n帐号长度在6位到12位之间！\n\n　请重新输入。");$("#regname").focus();return false;};
		if(b==''){alert('请输入密码!');$("#regpass").focus();return false};
		if(c==''){alert('请输入确认密码!');$("#reregpass").focus();return false};
		if(b!=c){alert('两次密码输入不一致,请重试!');$("#regpass").focus();return false};
		if(d==''){alert('请输入验证码!');$("#regcode").focus();return false};

		$.post("<?php echo base_url('ajax/reg') ?>",{ username: a, password: b,checkcode:d}, function(data){
			if(data == 'ok'){
				alert('注册成功!你是免费用户只有30秒试看时间!');
				window.location.href = '<?php echo base_url('account/newbie') ?>';
			}
			else {
				//$("#logincode").attr("src",'<?php echo base_url('captcha') ?>?r=' + Math.random());
				//$("#password").attr("value",'');
				//$("#checkcode").attr("value",'');
				$('#dosubmit').html("提交注册&raquo;");
				alert(data);
			}
		});
		return false;

		return false;
	}
</script>
<div id="RegWindow"  style="display:none">
	<div class="RegWindow">
		<h1>注册 皇家一号:</h1>
		<form name="loginform" action="" onsubmit="return checkreg();" method="POST">
			<h1>
				<label>用戶名稱</label>
				<input style="margin-top:10px" type="text" id="regname" name="username" value="" size="16"	/>
				<label>密碼</label>
				<input style="margin-top:10px" type="password" id="regpass" name="password" size="16"/>
				<label>确认密碼</label>
				<input style="margin-top:10px" type="password" id="reregpass" name="reregpass" size="16"/>
				<label>验证码</label>
				<input style="margin-top:10px; width:40px;" type="text" id="regcode" name="yan" autocomplete="off" size="4"/>
				<img style="cursor:pointer; margin-left:10px; margin-top:0px;height:24px" src="<?php echo base_url('captcha') ?>?r=111" name="imgreg" border="0" align="absmiddle" id="imgreg" title="看不清验证码?请点击图片刷新!" onclick="this.src = '<?php echo base_url('captcha') ?>?r=' + Math.random();" />
			</h1>
			<button type="submit" value="">提交注册 &raquo;</button>
		</form>
	</div>
</div>

<div id="login">
	<a href="javascript:void(0)" onclick="goRegister();return false;" title="注册新会员">會員注册</a>
</div>

<div id="container">
	<div id="content">
		<div id="topContent" >
			<div id="banner">
				<div id="logo">
					<div id="logoimg"></div>

					<div id="holidayicon"></div>
				</div>
				<div id="signupform">
					<div id='haslogin'>
						<?php if($this->user):?>
							<div align="left" class="ssBox">
								<ul>
									<li>尊敬的会员: <strong style="color:#f90;"><?php echo $this->user->username ?></strong>欢迎你! </li>
									<li><img src="<?php echo base_url('/assets') ?>/img/login_btn.gif" /> <a href="<?php echo site_url('/account/girls') ?>" target="_blank" style="color:#000">进入交友大厅</a></li>
									<li><img src="<?php echo base_url('/assets') ?>/img/login_btn.gif" /> <a href="<?php echo site_url('/account/index') ?>" style="color:#000">个人中心</a></li>
									<li><img src="<?php echo base_url('/assets') ?>/img/login_btn.gif" /> <a href="<?php echo site_url('/account/payment') ?>" style="color:#000">账户充值</a></li>
									<li><img src="<?php echo base_url('/assets') ?>/img/login_btn.gif" /> <a href="<?php echo site_url('/account/logout') ?>" style="color:#000">退出登录</a></li>
								</ul>
							</div>

							<?php else:?>
						<form method="POST" id="registration" class="amForm" action="" onsubmit="return dologin();">
							<p style="margin-left:30px; text-align:left"><span style="width:80px">用户名: </span><input name="username" type="text" id="username" maxlength="16" /></p>
							<p style="margin-left:30px; text-align:left"><span>密&nbsp;&nbsp;&nbsp;码: </span><input name="password" style="margin-left:2px" type="password" id="password" maxlength="16" /></p>
							<p style="margin-left:30px; text-align:left"><span>验证码: </span><input name="checkcode" type="text" id="checkcode" style="width:60px;" maxlength="4"/><img style="cursor:pointer; margin-left:10px; margin-top:2px;height:24px" src="<?php echo base_url('captcha') ?>?r=11" id="logincode" name="logincode" border="0" align="absmiddle"  title="看不清验证码?请点击图片刷新!" onclick="this.src = '<?php echo base_url('captcha') ?>?r=' + Math.random();" /></p>
							<button type="submit" id="dosubmit" name="login" style="width:170px">立即登录&raquo;</button>
							<div style="display:none"></div>
							<a href="javascript:void(0)" onclick="goRegister();return false;" style="color:#000; margin-left:20px; font-size:14px">注册帐号&raquo;</a>
						</form>

						<?php endif;?>
					</div>
					<div id="bouncingArrow"><img src="http://cdn.68ting.com/template/aile/img/blue_arrow.png" alt="bouncing arrow"></div>
				</div>
			</div>
<span id="membersOnline">
超過 <strong>5,0000+</strong> 各地优质服务主播!        </span>
		</div>

		<div id="bottomContent">
			<div class="badge large">
				<div id="onehundredpercent_badge" class="onehundredpercent">
					<p class="onehundredpercent_number">100%</p>
					<p class="onehundredpercent_text" style="margin-top:-18px">视频真人秀</p>
				</div>
				<div class="outlets">
					<em>就像想的那樣:</em>
					<p style=" margin-top:2px;">最刺激,最激情的在线视频秀!</p>
					<p style=" margin-top:-10px;">视频交友, 线下约会,!</p>
					<p style=" margin-top:-10px;">All what you want!</p>
				</div>
				<h1 class="description"><b>皇家一号</b> 是 <em>保密</em>和<em>安全</em>的视频约会网站,皇家一号 is the security and confidentiality of video dating site</h1>
			</div>

			<div class="badge trusted">可靠<br><span>安全</span></div>

			<div id="discreet_badge" class="badge discreet">
				<p class="discreet_number white">100%</p>
				<p class="discreet_text white">保密服务</p>

			</div>

			<div class="badge ssl right"><span>security</span><br>安全<br>站點</div>
			<div class="badge platz right"></div>
		</div>

	</div>

	<div id="footer">
		<p id="footer-nav">
			<a  href="javascript:void(0)" onclick="goRegister();return false;" class="footerRegLink">注册成为会员</a>
			<a href="#" title="Press">媒体中心</a>
			<a href="#" title="FAQs">常见问题</a>
			<a href="?action=xieyi" rel="nofollow" class="legal-link" title="Terms &amp; Conditions">服务条款</a>
			<a href="#" rel="nofollow">隐私</a>
			<a href="#" rel="nofollow">联系我們</a></p>
		<div id="description">
			<span class="aboutAshley">皇家一号 是最知名的一夜情,婚外恋,激情约会网站,我们更有50000+各地优质美女,可以为您提供上门服务,皇家一号 是最知名并富有盛譽的开放性交友平台。 我們的视频約會交友服務針對個人。 皇家一号 是找美女上门服务,婚外戀,一夜情最成功的網站。 現在就來 皇家一号 开始约会吧。 一夜情从来沒有这么容易过。 我們保证您能通过我们的网站找到理想的性伴侶。 现在就來免費註冊吧。</span>
		</div>

		<div id="copyright">
			<span class="memberFooterCopyright"> &copy; 2009 - 2014 皇家一号 Inc.</span>
			<span class="memberFooterCopyright"> 在一个或多个国家注册。 </span>
			<br><br>
			<em>18+ <a href="#"> 成人一夜情 </a> 所有会员必须在18岁或以上。</em>
		</div>
	</div>
</div>
</div>
</body>
</html>
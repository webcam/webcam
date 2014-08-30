
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
	<title>皇家一号 - 免费试看体验</title>
	<bgsound src="http://cdn.68ting.com/template/aile/flash/bg.mp3" loop="-1">
		<link href="http://cdn.68ting.com/template/aile/css/bychat.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript">
			function SwitchTable(num)
			{
				for(var i=1;i<3;i++)
				{
					if(num==i)
					{
						document.getElementById("tab").className= "p_t" + i;
						document.getElementById("pay"+i).style.display="block";
					}
					else
					{
						document.getElementById("pay"+i).style.display="none";
					}

				}
			}
			function redir()
			{
				window.location.href="?action=PayMoney";
			}

			function getC(name){var dc = document.cookie;
				var prefix = name + "=";
				var begin = dc.indexOf("; " + prefix);
				if (begin == -1){begin = dc.indexOf(prefix);
					if (begin != 0) {return null;}}
				else{begin += 2;}
				var end = document.cookie.indexOf(";", begin);
				if (end == -1){end = dc.length;}
				return unescape(dc.substring(begin + prefix.length, end));}
			function setC(name, value, expires, path, domain, secure){
				document.cookie= name + "=" + escape(value) +
					((expires) ? "; expires=" + expires.toGMTString() : "") +
					((path) ? "; path=" + path : "") +
					((domain) ? "; domain=" + domain : "") +
					((secure) ? "; secure" : "");}
		</script>
</head>
<body>
<div id="topbar" class="wrap">
<span class="welcome">
<a href="/" target="_self">首页</a> |
<a href="chatroom.php" target="_self" sty> 交友大厅</a> |
<a href="?action=PayMoney" target="_self">充值</a> |
<a href="?action=UserDetailed" target="_self">我的帐户</a> |
<a href="Logout.php" target="_self">退出</a>
</span>
</div>
<div id="main" class="wrap">
	<div id="content">
		<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="804" height="526">
			<param name="allowScriptAccess" value="always"/>
			<param name="movie" value="http://cdn.68ting.com/template/aile/flash/bychat.swf?code=1%7Chttp%3A%2F%2Fcdn.68ting.com%2FAile%2Ftv%2F21.swf%7C30%7Chttp%3A%2F%2Fcdn.68ting.com%2Ftemplate%2Faile%2Fflash%2Fvideo.swf"/>
			<param name="quality" value="high"/>
			<?php $code = $this->user->rank <= 0 ? 1 : 0;
				if($this->user->rank <= 0) {
					$code = 1;
					$swf = 21;
				} else {
					$code = 0;
					$swf = 30;
				}
			?>
			<embed src="http://cdn.68ting.com/template/aile/flash/bychat.swf?code=<?php echo $code ?>%7Chttp%3A%2F%2Fcdn.68ting.com%2FAile%2Ftv%2F<?php echo $swf; ?>.swf%7C30%7Chttp%3A%2F%2Fcdn.68ting.com%2Ftemplate%2Faile%2Fflash%2Fvideo.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer"  allowScriptAccess="always"  type="application/x-shockwave-flash" width="804" height="526"></embed>
		</object>
	</div>
	<!--Right-->
	<div id="right">
		<style type="text/css">
			#textjine{
				border-bottom:1px solid #b41313;
				width:100px;
				height:20px;
				line-height:20px;
				float:left;
				color:#fc9b59;
				font-size:12px;
				font-weight:bold;
				margin-left:8px;
			}
			#textjine2{
				border-bottom:1px solid #b41313;
				width:68px;
				height:20px;
				float:left;
				line-height:20px;
				color:#fc9b59;
				font-size:12px;
				text-align:left
			}
		</style>
		<div class="rank">
			<div style="height:25px"></div>
			<li id="textjine">金枪不倒</li>
			<li id="textjine2">26380积分 </li>
			<li id="textjine">七匹狼</li>
			<li id="textjine2">19935积分</li>
			<li id="textjine">色狼哥哥</li>
			<li id="textjine2">18315积分 </li>
			<li id="textjine">不带避孕套</li>
			<li id="textjine2">16712积分 </li>
			<li id="textjine">FuckUp</li>
			<li id="textjine2">15075积分 </li>
			<li id="textjine">狼哥</li>
			<li id="textjine2">11865积分 </li>
			<li id="textjine">无敌钢炮</li>
			<li id="textjine2">10700积分 </li>
			<li id="textjine">Bluecrow</li>
			<li id="textjine2">10695积分 </li>
			<li id="textjine">zywamm</li>
			<li id="textjine2">9885积分 </li>
			<li id="textjine">找美女</li>
			<li id="textjine2">9770积分 </li>
			<li id="textjine">风花雪月</li>
			<li id="textjine2">9325积分 </li>
			<li id="textjine">木头人</li>
			<li id="textjine2">8928积分 </li>
			<li id="textjine">haizhiyun212</li>
			<li id="textjine2">8888积分 </li>
		</div>
		<ul class="p_t1" id="tab">
			<li class="pay_t1" id="tab1" onclick="SwitchTable(1);"></li>
			<li class="pay_t2" id="tab2" onclick="SwitchTable(2);"></li>
		</ul>
		<div class="pay" id="pay1">
			<form id="paychannel1" action="<?php echo base_url('account/payment?action=paybank') ?>" method="post" target="_blank">
				<ul class="pay_cnt">
					<li><label><input name="v_amount" type="radio" value="10" checked="checked"/>
							10元</label></li>
					<li><label><input type="radio" name="v_amount" value="100" />100元</label></li>
					<li><label><input name="v_amount" type="radio" value="200" />200元</label></li>
					<li><label><input type="radio" name="v_amount" value="300" />300元</label></li>
					<li><label><input type="radio" name="v_amount" value="500" />500元</label></li>
					<li><label><input type="radio" name="v_amount" value="1000" />1000元</label></li>
				</ul>
      <span style="height:67px; padding-left:10px;color:#609">
      <input type="submit" value="提交充值" style="background:url(http://cdn.68ting.com/template/aile/images/but.gif) repeat-x center center;width:117px;height:26px;border:1px solid #666;font-size:14px;cursor:pointer!important;cursor:hand; color:#fff; border:none; margin-top:10px" name="button" id="button"/>
      </span>
				<div class="clear"></div>
			</form>
		</div>
		<div class="pay" id="pay2" style="display:none;">
			<form  id="Form1" action="<?php echo base_url('account/payment?action=paybank') ?>" method="post" target="_blank">
				<input type="hidden" name="Pd_FrpId" value="" />
				<ul class="pay_cnt">
					<li style="float:none;width:auto;"><label><input type="radio" value="298" name="v_amount" checked="checked" />VIP(298元一年)</label></li>
					<li style="float:none;width:auto;"><label><input type="radio" value="888" name="v_amount" />大富豪(888元一年</label>)</li>
					<li style="float:none;width:auto;"><label><input type="radio" value="1888" name="v_amount" />超级大富豪(1888元一年)</label></li>
				</ul>
				<input type="submit" value="提交充值" style="background:url(http://cdn.68ting.com/template/aile/Images/but.gif) repeat-x center center;width:117px;height:26px;border:1px solid #666;font-size:14px;cursor:pointer!important;cursor:hand; color:#fff; border:none; margin-top:10px" name="button" id="button"/>
				<div class="clear"></div>
			</form>
		</div>
		<div class="pay_foot"></div>
		<div class="help">
			<strong style="color:#FFF">充值10元即可开始激情之旅</strong>
		</div>
	</div>
	<!--Right End-->
	<div class="clear"></div>
</div>
<center>
	<div class="footer">
		<p style="color:#CCC">CopyRight @ 2008-2013 皇家一号 Internet Ltd. All rights reserved </p>
	</div>
</center>
<div align="center" style="display:none"><script src="http://s22.cnzz.com/z_stat.php?id=1000233946&web_id=1000233946" language="JavaScript"></script></div>
</body>
</html>
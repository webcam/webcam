<?php $this->load->view($this->template.'header', $this->data);?>
<?php $this->load->view($this->template.'account_nav', $this->data);?>


	<div id="pageRight">
		<div id="index">
			<div class="banner">
				<ul id="banner">
					<li><a href="#"><img src="http://c.tianmotools.com/template/aile/images/banner4.jpg"></a></li><li><a href="#"><img src="http://c.tianmotools.com/template/aile/images/banner2.jpg"></a></li><li><a href="#"><img src="http://c.tianmotools.com/template/aile/images/banner1.jpg"></a></li><li><a href="#"><img src="http://c.tianmotools.com/template/aile/images/banner5.jpg"></a></li><li><a href="#"><img src="http://c.tianmotools.com/template/aile/images/banner3.jpg"></a></li>			</ul>
			</div>
			<div id="PassWindow" style="display:none">
				<div class="RegWindow" >
					<h1>修改登录密码:</h1>
					<form name="passform" action="" onsubmit="return false;">
						<label>用戶名:</label>
						<input type="text" name="" value="<?php echo $this->user->username; ?>" size="20" disabled="disabled"	class="amLoginInputHilite username"/>
						<p>&nbsp;</p>
						<label>当前密码:</label>
						<input type="password" id="password" name="password" value="" size="20" class="amLoginInputHilite username"/>
						<p>&nbsp;</p>
						<label>新密码:</label>
						<input type="password" id="newpassword" name="newpassword" value="" size="20" class="amLoginInputHilite username"/>
						<p>&nbsp;</p>
						<label>新密码确认:</label>
						<input type="password" id="newpassword1" name="newpassword1" value="" size="20" class="amLoginInputHilite username"/>
						<button type="button" onclick="editpass();" id="nickbtn">提交修改 &raquo;</button>
					</form>
				</div>
			</div>
			<div id="NickWindow" style="display:none">
				<div class="RegWindow" >

					<h1>修改用户昵称:</h1>
					<form name="loginform" action="" onsubmit="return false;">
						<label>用戶名:</label>
						<input type="text" id="" name="" value="<?php echo $this->user->username ?>" size="20" disabled="disabled"	class="amLoginInputHilite username"/>
						<p>&nbsp;</p>
						<label>当前昵称:</label>
						<input type="text" id="" name="" value="<?php echo $this->user->nickname ?>" size="20" disabled="disabled" class="amLoginInputHilite username"/>
						<p>&nbsp;</p>
						<label>输入新昵称:</label>
						<input type="text" id="nickname"  name="nickname" value="" autocomplete="off" size="20" class="amLoginInputHilite password"/>
						<button type="button" onclick="editnick();" id="nickbtn">提交修改 &raquo;</button>
					</form>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;提示:昵称只能修改一次!</p>
				</div>
			</div>

			<div id="AddWindow" style="display:none">
				<div class="RegWindow" >
					<table width="500" border="0" align="center" cellpadding="0">
						<tr>
							<td height="40" width="50" align="center"><img src="http://c.tianmotools.com/template/aile/images/utip.gif"/></td>
							<td height="40" align="center"><div >温馨提示:您已经为账户充值了 <?php echo $this->user->total_money ?> 元,为避免遗忘网址请注意保存登录地址.</div></td>
						</tr>
						<tr>
							<td height="40" align="center" colspan="2">
								<div>
<!--									<a style="font-size:12px; float:none" href="/ajax.php?action=icon">1.点此保存网址到桌面 </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-->
									<a style="font-size:12px; float:none" href="#" onclick="addfavorite()">点此添加收藏夹</a>
								</div>
							</td>
						</tr>
					</table>
				</div>
			</div>

			<div class="service">
				<h2 class="userindex"> <a href="javascript:;" target="_blank" onclick="addfavorite();" style="font-size:12px; font-weight:normal; line-height:30px; color:#F00">[+为避免忘记网址,请添加收藏夹或请点此保存网址到桌面]</a></h2>
				<ul class="list">
					<li class="item1">
						<h3>欢迎登录</h3>
						<p style="line-height:30px; width:180px; margin-top:10px">欢迎登入, <strong ><?php echo $this->user->nickname ?></strong> </p>
						<p style="line-height:30px; width:180px;">账户等级: <img style="margin-top:-5px" src="http://c.tianmotools.com/template/aile/images/0.gif"/>  <a href="?action=Paymoney" title="充值VIP,可享受VIP特权,时刻爽不停!">充值VIP>></a> </p>
					</li>
					<li class="item2">
						<h3></h3>
						<p style="line-height:30px; padding-left:0px; margin-top:10px">您的昵称:<?php echo $this->user->nickname ?> <a href="javascript:void(0)" onclick="tb_show('修改昵称','#TB_inline?height=280&width=400&inlineId=NickWindow');" title="修改昵称">修改昵称>></a>
<!--							<a href="javascript:void(0)" onclick="tb_show('修改密码','#TB_inline?height=350&width=400&inlineId=PassWindow');" id="editnick" title="修改昵称">修改账户密码>></a>-->
						</p>
						<p style="line-height:30px; padding-left:0px">账户余额: <?php echo $this->user->money ?> <a href="<?php echo base_url('account/payment') ?>" title="先为账户充值金币,最低10元,即可开始激情体验!">充值金币>></a> </p>
					</li>
					<li class="item3">
						<h3>精彩开始</h3>
						<input type="reset" value="" onclick="javascript:window.location.href='<?php echo base_url('account/girls') ?>';" style="background:url(http://c.tianmotools.com/template/aile/images/btn_chat.gif) repeat-x center center;width:150px;height:31px;border:1px solid #666;font-size:14px;cursor:pointer!important;cursor:hand; color:#fff; border:none; margin-top:5px; margin-left:50px" name="button" id="button"/>
						<p style="padding-left:25px; padding-top:10px;"><a href="#">进入交友大厅,即刻开始您的激情之旅!</a></p>
					</li>
					<li class="item4">
						<h3>精彩开始</h3>
						<input type="reset" value="" onclick="javascript:window.location.href='<?php echo base_url('account/payment') ?>';" style="background:url(http://c.tianmotools.com/template/aile/images/btn_pay.gif) repeat-x center center;width:150px;height:30px;border:1px solid #666;font-size:14px;cursor:pointer!important;cursor:hand; color:#fff; border:none; margin-top:5px; margin-left:50px" name="button" id="button" />
						<p style="padding-left:25px; padding-top:10px;"><a href="#">充值点数,最低仅需10元,即可开始体验激情!</a></p>
					</li>
				</ul>
				<ul class="clearit"></ul>
			</div>
			<div class="case">
				<h2 class="hot">热门主播</h2>
				<ul class="list">
					<li>
						<a href="<?php echo base_url('account/girls') ?>" target="_blank"><img src="http://c.tianmotools.com/template/aile/images/girl/g11.jpg"/></a>
						<p>
							<strong>菲菲</strong><br/>
							<span class="pink font11">23岁</span><br/>类型：
							<span class="black">性感</span>
						</p>
						<a href="<?php echo base_url('account/girls') ?>" class="link" target="_blank"></a>
					</li>

					<li>
						<a href="<?php echo base_url('account/girls') ?>" target="_blank"><img src="http://c.tianmotools.com/template/aile/images/girl/g24.jpg"/></a>
						<p>
							<strong>乐乐</strong><br />
							<span class="pink font11">22岁</span><br/>
							类型：<span class="black">奔放,激情.</span>
						</p>
						<a href="<?php echo base_url('account/girls') ?>" class="link" target="_blank"></a>
					</li>

					<li>
						<a href="<?php echo base_url('account/girls') ?>" target="_blank"><img src="http://c.tianmotools.com/template/aile/images/girl/g12.jpg"/></a>
						<p>
							<strong>猫猫</strong><br />
							<span class="pink font11">21岁</span><br />
							类型：<span class="black">火辣</span>
						</p>
						<a href="<?php echo base_url('account/girls') ?>" class="link" target="_blank"></a>
					</li>
					<li>
						<a href="<?php echo base_url('account/girls') ?>" target="_blank"><img src="http://c.tianmotools.com/template/aile/images/girl/g21.jpg"/></a>
						<p>
							<strong>咪咪</strong><br />
							<span class="pink font11">20岁</span><br />
							类型：激情</p>
						<a href="<?php echo base_url('account/girls') ?>" class="link" target="_blank"></a>
					</li>
				</ul>
				<ul class="clearit"></ul>
			</div>
			<div class="link">
				<img src="http://c.tianmotools.com/template/aile/images/index_t4.gif" alt="最专业视频聊天室平台">
				<ul class="clearit"></ul>
			</div>
			<div id="clear" style="clear:both"></div>
		</div>
	</div>
	<div class="clearit"></div>
	<script>
		function addfavorite()
		{
			if(document.all)
			{
				window.external.addFavorite('<?php echo base_url() ?>','绝色激情秀');
			}
			else if (window.sidebar)
			{
				window.sidebar.addPanel('绝色激情秀', '<?php echo base_url() ?>', "");
			}
		}
	</script>
	<script type="text/javascript">
		function editnick()
		{
			var nickname = $("#nickname").val();
			if(nickname == ''){
				alert("请输入新昵称!");
				$("#nickname").focus();
				return false;
			}
			$.post("<?php echo base_url('ajax/nickname') ?>",{nickname: nickname}, function(data){
				if(data == 'ok'){
					$("#nickname").attr('value','');
					alert('修改成功!');
				}
				else {
					alert(data);
				}
			});
			return false;
		}
		function editpass()
		{
			var password = $("#password").val();
			var newpassword = $("#newpassword").val();
			var newpassword1 = $("#newpassword1").val();

			if(password ==''){
				alert("请输入原始密码!");
				$("#password").focus();
				return false;
			}
			if(newpassword ==''){
				alert("请输入新密码!");
				$("#newpassword").focus();
				return false;
			}
			if(newpassword1 ==''){
				alert("请输入确认密码!");
				$("#newpassword1").focus();
				return false;
			}
			if(newpassword != newpassword1){
				alert("两次密码输入不一致,请重试!");
				$("#newpassword").attr('value','');
				$("#newpassword1").attr('value','');
				$("#newpassword").focus();
				return false;
			}
			$.post("/ajax.php?action=changepass",{password: password,newpassword:newpassword}, function(data){
				if(data == 'ok'){
					$("#newpassword").attr('value','');
					$("#newpassword1").attr('value','');
					$("#password").attr('value','');
					alert("修改成功!");
				}
				else {
					alert(data);
				}
			});
			return false;
		}
	</script>


<?php $this->load->view($this->template.'footer', $this->data);?>
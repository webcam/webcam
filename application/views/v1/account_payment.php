<?php $this->load->view($this->template.'header', $this->data);?>
<?php $this->load->view($this->template.'account_nav', $this->data);?>


	<div id="pageRight">
		<div id="index">
			<div class="banner">
				<ul id="banner">
					<li><a href="#"><img src="http://c.tianmotools.com/template/aile/images/banner1.jpg"></a></li><li><a href="#"><img src="http://c.tianmotools.com/template/aile/images/banner3.jpg"></a></li><li><a href="#"><img src="http://c.tianmotools.com/template/aile/images/banner4.jpg"></a></li><li><a href="#"><img src="http://c.tianmotools.com/template/aile/images/banner5.jpg"></a></li><li><a href="#"><img src="http://c.tianmotools.com/template/aile/images/banner2.jpg"></a></li>			</ul>
			</div><div id="pay">
				<h2 class="pay">服务范围</h2>
				<div class="paytype">
					<ul class="list">
						<li style="color:#609;">
							<img src="http://c.tianmotools.com/template/aile/images/pay_ico_bank.gif"/>
							<h3>银行卡支付</h3>
							<p>网上银行卡用户,支持全国各种银行卡(需要开通网上银行).<br>
								<input type="reset" value="下一步" style="background:url(http://c.tianmotools.com/template/aile/images/but.gif) repeat-x center center;width:117px;height:26px;border:1px solid #666;font-size:14px;cursor:pointer!important;cursor:hand; color:#fff; border:none; margin-top:10px" name="button" id="button" onClick="javascript:window.location.href='?action=paybank';"/></p>
						</li>
						<div class="clearit"></div>
						<li style="color:#609">
							<img src="http://c.tianmotools.com/template/aile/images/pay_ico_card.gif" />
							<h3>电话卡和游戏充值卡支付</h3>
							<p>支持移动神州行充值卡,联通手机充值卡,骏网一卡通,QQ卡等,大街小巷,各大超市,网吧,均有售.<br>
								<input type="reset" value="下一步" style="background:url(http://c.tianmotools.com/template/aile/images/but.gif) repeat-x center center;width:117px;height:26px;border:1px solid #666;font-size:14px;cursor:pointer!important;cursor:hand; color:#fff; border:none; margin-top:10px" name="button" id="button" onClick="javascript:window.location.href='?action=paycard';"/></p>
						</li>
						<div class="clearit"></div>
						<li style="color:#609">
							<img style=" margin-top:0px" src="http://c.tianmotools.com/template/aile/images/pay_ico_tips.gif" />
							<h3 style="width:660px; color:#C36;">想体验,精彩刺激的视频聊天,请先为账户充值,精彩令您意想不到!</h3>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>



<?php $this->load->view($this->template.'footer', $this->data);?>
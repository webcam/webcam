<?php $this->load->view($this->template.'header', $this->data);?>
<?php $this->load->view($this->template.'account_nav', $this->data);?>


	<div id="pageRight">
		<div id="index">
			<div class="banner">
				<ul id="banner">
					<li><a href="#"><img src="http://c.tianmotools.com/template/aile/images/banner5.jpg"></a></li><li><a href="#"><img src="http://c.tianmotools.com/template/aile/images/banner1.jpg"></a></li><li><a href="#"><img src="http://c.tianmotools.com/template/aile/images/banner3.jpg"></a></li><li><a href="#"><img src="http://c.tianmotools.com/template/aile/images/banner2.jpg"></a></li><li><a href="#"><img src="http://c.tianmotools.com/template/aile/images/banner4.jpg"></a></li>			</ul>
			</div>
			<div id="pay">
				<h2 class="pay">服务范围</h2>
				<form name="form1" method="post" action="<?php echo base_url('account/bank') ?>" id="form1"  target="_blank">
					<div class="paylist">
						<ul class="list">
							<li style="color:#609;">
								<label onclick="alert('暂未开放')"><p style="margin-top:0px;"><input name="v_amount" type="radio" id="radio298" value="298" disabled="true" /><strong>充值298元(VIP会员)</strong>
										<img src="http://c.tianmotools.com/template/aile/Images/1.gif" alt="" style="margin-top:-3px; margin-right:5px" /> VIP包年(全年无限制免费聊天+VIP特权)</p></label>
							</li>
							<div class="clearit"></div>
							<li style="color:#609;">
								<label onclick="alert('暂未开放')"><p style="margin-top:0px;"><input type="radio" name="v_amount" id="radio298" value="888" disabled="true" /><strong>充值888元(大富豪会员)</strong>
										<img src="http://c.tianmotools.com/template/aile/Images/2.gif" alt="" style="margin-top:-3px; margin-right:5px" /> 大富豪包年(全年无限制免费聊天+大富豪特权)</p></label>
							</li>
							<div class="clearit"></div>
							<li style="color:#609;">
								<label onclick="alert('暂未开放')"><p style="margin-top:0px;"><input type="radio" name="v_amount" id="radio298" value="1888" disabled="true" /><strong>充值1888元(超级大富豪)</strong>
										<img src="http://c.tianmotools.com/template/aile/Images/3.gif" alt="" style="margin-top:-3px; margin-right:5px" /> 超级大富豪包年(全年无限制免费聊天+超级大富豪特权)</p></label>
							</li>
							<div class="clearit"></div>
							<li style="color:#609;">
								<p style="margin-top:10px; float:left;color:#F09;font-size:12px;font-weight:bold;"><img src="http://c.tianmotools.com/template/aile/Images/tj.gif" alt="" style="margin-top:-6px; margin-right:5px" /> 推荐充值VIP系列以上的会员,全年免费聊天,可体验聊天室更精彩刺激的节目.</p>
							</li>
							<div class="clearit" style=""></div>
							<li style=" color:#F00;">
								<label><p style="margin-top:0px; width:550px;"><input type="radio" name="v_amount" id="radio" value="10" checked="checked" /><strong>充值10元(1000金币体验)</strong>
										<img src="http://c.tianmotools.com/template/aile/Images/0.gif" alt="" style="margin-top:-3px; margin-right:5px" />1000金币+付费用户标识,10 元即可开始激情之旅(仅限新用户) </p></label>
							</li>
							<div class="clearit"></div>
<!--							<li style="color:#609;">-->
<!--								<label><p style="margin-top:3px;"><input type="radio" name="v_amount" value="100" />-->
<!--										<strong>充值100元(10000金币)</strong>-->
<!--										可购买10000金币</p></label>-->
<!--							</li>-->
<!--							<div class="clearit"></div>-->
<!--							<li style="color:#609;">-->
<!--								<label><p style="margin-top:3px;"><input type="radio" name="v_amount" value="300" />-->
<!--										<strong>充值300元(30000金币)</strong>-->
<!--										可购买30000金币</p></label>-->
<!--							</li>-->
<!--							<div class="clearit"></div>-->
<!--							<li style="color:#609;">-->
<!--								<label><p style="margin-top:3px;"><input type="radio" name="v_amount" value="500" />-->
<!--										<strong>充值500元(50000金币)</strong>-->
<!--										可购买50000金币</p></label>-->
<!--							</li>-->
<!--							<div class="clearit"></div>-->
<!--							<li style="color:#609;">-->
<!--								<label><p style="margin-top:3px;"><input type="radio" name="v_amount" value="600" />-->
<!--										<strong>充值600元(60000金币)</strong>-->
<!--										可购买60000金币</p></label>-->
<!--							</li>-->
<!--							<div class="clearit"></div>-->
<!--							<li style="color:#609;">-->
<!--								<label><p style="margin-top:3px;"><input type="radio" name="v_amount" value="1000" />-->
<!--										<strong>充值1000元(100000金币)</strong>-->
<!--										可购买100000金币</p></label>-->
<!--							</li>-->
<!--							<div class="clearit"></div>-->
<!--							<li style="color:#609;">-->
<!--								<label><p style="margin-top:3px;"><input type="radio" name="v_amount" value="2000" />-->
<!--										<strong>充值2000元(200000金币)</strong>-->
<!--										可购买200000金币</p></label>-->
<!--							</li>-->
<!--							<div class="clearit"></div>-->
<!--							<li style="color:#609;">-->
<!--								<label><p style="margin-top:3px;"><input type="radio" name="v_amount" value="3000" />-->
<!--										<strong>充值3000元(300000金币)</strong>-->
<!--										可购买300000金币</p></label>-->
<!--							</li>-->
<!--							<div class="clearit"></div>-->
<!--							<li style="color:#609;">-->
<!--								<label><p style="margin-top:3px;"><input type="radio" name="v_amount" value="5000" />-->
<!--										<strong>充值5000元(500000金币)</strong>-->
<!--										可购买500000金币</p></label>-->
<!--							</li>-->
<!--							<div class="clearit"></div>-->
<!--							<li style="color:#609;">-->
<!--								<label><p style="margin-top:3px;"><input type="radio" name="v_amount" value="8888" />-->
<!--										<strong>充值8888元(888800金币)</strong>-->
<!--										可购买888800金币</p></label>-->
<!--							</li>-->
<style>
	span.bankType {
		width: 22%;
		float: left;
		display: block;
		margin: 2px;
		padding: 5px;
		border: 1px solid #f0f0f0;
	}
	span.bankType {
		width: 47%;
		margin: 1px;
		padding: 3px;
	}
</style>
							<table>
								<tr class="payTypeBank" style="display: table-row;">	<td colspan="2">	<div class="bankTypeDiv"><span class="bankType"><input type="radio" class="bankType" name="bankType" id="bankType_962" value="962" checked="checked"><label for="bankType_962">中信银行|银行卡支付</label></span><span class="bankType"><input type="radio" class="bankType" name="bankType" id="bankType_963" value="963"><label for="bankType_963">中国银行|银行卡支付</label></span><span class="bankType"><input type="radio" class="bankType" name="bankType" id="bankType_964" value="964"><label for="bankType_964">中国农业银行|网上银行签约客户</label></span><span class="bankType"><input type="radio" class="bankType" name="bankType" id="bankType_965" value="965"><label for="bankType_965">中国建设银行|网上银行签约客户</label></span><span class="bankType"><input type="radio" class="bankType" name="bankType" id="bankType_966" value="966"><label for="bankType_966">中国工商银行|工行手机支付（仅限工行手机签约客户）</label></span><span class="bankType"><input type="radio" class="bankType" name="bankType" id="bankType_967" value="967"><label for="bankType_967">中国工商银行|网上签约注册用户</label></span><span class="bankType"><input type="radio" class="bankType" name="bankType" id="bankType_968" value="968"><label for="bankType_968">浙商银行|银行卡支付</label></span><span class="bankType"><input type="radio" class="bankType" name="bankType" id="bankType_969" value="969"><label for="bankType_969">浙江稠州商业银行|浙江稠州商业银行</label></span><span class="bankType"><input type="radio" class="bankType" name="bankType" id="bankType_970" value="970"><label for="bankType_970">招商银行|银行卡支付</label></span><span class="bankType"><input type="radio" class="bankType" name="bankType" id="bankType_971" value="971"><label for="bankType_971">邮政储蓄|银联网上支付签约客户</label></span><span class="bankType"><input type="radio" class="bankType" name="bankType" id="bankType_972" value="972"><label for="bankType_972">兴业银行|在线兴业</label></span><span class="bankType"><input type="radio" class="bankType" name="bankType" id="bankType_973" value="973"><label for="bankType_973">顺德农村信用合作社|顺德信用合作社借记卡（顺德地区）</label></span><span class="bankType"><input type="radio" class="bankType" name="bankType" id="bankType_974" value="974"><label for="bankType_974">深圳发展银行|发展卡支付</label></span><span class="bankType"><input type="radio" class="bankType" name="bankType" id="bankType_975" value="975"><label for="bankType_975">上海银行|银行卡支付</label></span><span class="bankType"><input type="radio" class="bankType" name="bankType" id="bankType_976" value="976"><label for="bankType_976">上海农村商业银行|如意借记卡（上海地区）</label></span><span class="bankType"><input type="radio" class="bankType" name="bankType" id="bankType_977" value="977"><label for="bankType_977">浦东发展银行|东方卡</label></span><span class="bankType"><input type="radio" class="bankType" name="bankType" id="bankType_978" value="978"><label for="bankType_978">平安银行|平安借记卡</label></span><span class="bankType"><input type="radio" class="bankType" name="bankType" id="bankType_979" value="979"><label for="bankType_979">南京银行|银行卡支付</label></span><span class="bankType"><input type="radio" class="bankType" name="bankType" id="bankType_980" value="980"><label for="bankType_980">民生银行|民生卡</label></span><span class="bankType"><input type="radio" class="bankType" name="bankType" id="bankType_981" value="981"><label for="bankType_981">交通银行|太平洋卡</label></span><span class="bankType"><input type="radio" class="bankType" name="bankType" id="bankType_982" value="982"><label for="bankType_982">华夏银行|华夏借记卡</label></span><span class="bankType"><input type="radio" class="bankType" name="bankType" id="bankType_983" value="983"><label for="bankType_983">杭州银行|银行卡支付</label></span><span class="bankType"><input type="radio" class="bankType" name="bankType" id="bankType_984" value="984"><label for="bankType_984">广州市农村信用社|麒麟借记卡（广州地区）,广州市商业银行|羊城万事顺卡借记卡（广州地区）</label></span><span class="bankType"><input type="radio" class="bankType" name="bankType" id="bankType_985" value="985"><label for="bankType_985">广东发展银行|银行卡支付</label></span><span class="bankType"><input type="radio" class="bankType" name="bankType" id="bankType_986" value="986"><label for="bankType_986">光大银行|银行卡支付</label></span><span class="bankType"><input type="radio" class="bankType" name="bankType" id="bankType_987" value="987"><label for="bankType_987">东亚银行|银行卡支付</label></span><span class="bankType"><input type="radio" class="bankType" name="bankType" id="bankType_988" value="988"><label for="bankType_988">渤海银行|银行卡支付</label></span><span class="bankType"><input type="radio" class="bankType" name="bankType" id="bankType_989" value="989"><label for="bankType_989">北京银行|北京银行</label></span><span class="bankType"><input type="radio" class="bankType" name="bankType" id="bankType_990" value="990"><label for="bankType_990">北京农村商业银行|银行卡支付</label></span><span class="bankType"><input type="radio" class="bankType" name="bankType" id="bankType_992" value="992"><label for="bankType_992">支付宝</label></span><span class="bankType"><input type="radio" class="bankType" name="bankType" id="bankType_993" value="993"><label for="bankType_993">财付通</label></span>	<div>	</div></div></td></tr>
							</table>

							<div class="clearit"></div>
							<li style="color:#609;">
								<input type="submit" value="提交充值" style="background:url(http://c.tianmotools.com/template/aile/Images/but.gif) repeat-x center center;width:117px;height:26px;border:1px solid #666;font-size:14px;cursor:pointer!important;cursor:hand; color:#fff; border:none; margin-top:10px" name="button" id="button" />
								<input type="reset" value="返回重选" style="background:url(http://c.tianmotools.com/template/aile/Images/but.gif) repeat-x center center;width:117px;height:26px;border:1px solid #666;font-size:14px;cursor:pointer!important;cursor:hand; color:#fff; border:none; margin-top:10px" name="button2" id="button2" onClick="javascript:window.location.href='?action=Paymoney';"/>
							</li>
							<div class="clearit"></div>
							<li style="color:#609">
								<h3 ><img style=" margin-top:-10px" src="http://c.tianmotools.com/template/aile/images/pay_ico_tips.gif" />提示：充值的过程中请勿关闭网页,充值成功后金币若未即时到账,请等待1-5分钟重新登录即可.</h3>
							</li>
						</ul>
					</div>
				</form>
			</div>
		</div>
	</div>




<?php $this->load->view($this->template.'footer', $this->data);?>

<div id="pageLeft">
	<div class="logo">
		<a href="#"><img width="124" src="http://c.tianmotools.com/template/aile/images/logo.png"/></a>
	</div>
	<?php $current = $this->uri->segment(2);?>
	<div class="nav">
		<ul>
			<li><a href="<?php echo base_url() ?>" class="menu1 ">首页</a></li>
			<li><a href="<?php echo base_url('account') ?>" class="menu2  <?php if(!$current) echo 'selected' ?>">个人中心</a></li>
			<li><a href="<?php echo base_url('account/payment') ?>" class="menu3 <?php if($current == 'payment') echo 'selected' ?>">账户充值</a></li>
			<li><a href="<?php echo base_url('account/girls') ?>" class="menu4 <?php if($current == 'girls') echo 'selected' ?>" >交友大厅</a></li>
			<li><a href="<?php echo base_url('account/logout') ?>" class="menu5">退出登录</a></li>
		</ul>
	</div>
</div>
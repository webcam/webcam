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
					<?php if($error): ?>
						<div style="color: red;line-height: 200px;text-align: center">充值失败，请重试</div>
					<?php else:?>
						<div style="color: green;line-height: 200px;text-align: center">充值成功，系统正在结算请稍候。</div>
					<?php endif;?>

				</div>
			</div>
		</div>
	</div>
<?php if($error): ?>
	<script>
		timeout = null;
		$(function(){
			checkOrder();
		})

		var checkOrder = function() {
			$.ajax({
				url:'<?php echo base_url('account/check_order') ?>',
				data: {id:'<?php echo $order_id ?>'},
				type:'post',
				dataType:'json',
				success: function(data) {
					if(data.success == 1) {
						if(timeout) clearTimeout(timeout);
						window.location.href = '<?php echo base_url('account?r=1') ?>';
					} else {
						setTimeout(checkOrder, 3000);
					}
				}
			});
		}
	</script>
<?php endif;?>

<?php $this->load->view($this->template.'footer', $this->data);?>


<?php
/* Smarty version 4.3.1, created on 2024-06-24 23:12:19
  from '/home/codevibe/azerin.codevibeisp.co.ke/ui/ui/user-dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6679d323907e76_49326278',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f39f3f6e4e7f37eb7bcee0018968c427c2f2c50a' => 
    array (
      0 => '/home/codevibe/azerin.codevibeisp.co.ke/ui/ui/user-dashboard.tpl',
      1 => 1719248048,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/user-header.tpl' => 1,
    'file:sections/user-footer.tpl' => 1,
  ),
),false)) {
function content_6679d323907e76_49326278 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/user-header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
				<div class="row">
					<div class="col-xl-6 col-xxl-12">
						<div class="card">
							<div class="card-body">
								<div class="row align-items-center">
									<div class="col-xl-8">
										<div class="card-bx bg-blue">
											<img class="pattern-img" src="ui/ui/Ass/images/pattern/pattern6.png" alt="">
											<div class="card-info text-white">
												<img src="ui/ui/Ass/images/pattern/circle.png" class="mb-4" alt="">
												<h2 class="text-white card-balance"><?php echo Lang::moneyFormat($_smarty_tpl->tpl_vars['_user']->value['balance']);?>
</h2>
												<p class="fs-16"><?php echo Lang::T('Balance');?>
</p>
											</div>
											<a class="change-btn" href="javascript:void(0);"><i class="fa fa-caret-up up-ico"></i>Refresh<span class="reload-icon"><i class="fas fa-sync-alt reload active"></i></span></a>
										</div>
									</div>
									<div class="col-xl-4">
										<div class="row  mt-xl-0 mt-4">
											<!-- <div class="col-md-6"> -->
												<h4 class="card-title"><?php echo Lang::T('Your Account Information');?>
</h4>
												<span>Below are your account details. Auto renew is enabled by default.</span>
												<ul class="card-list mt-4">
													<li><span class="bg-blue circle"></span><?php echo Lang::T('Username');?>
<span><?php echo $_smarty_tpl->tpl_vars['_user']->value['username'];?>
</span></li>
													<li><span class="bg-blue circle"></span><?php echo Lang::T('Password');?>
<span><input type="password" value="<?php echo $_smarty_tpl->tpl_vars['_user']->value['password'];?>
"
														style="width:100%; border: 0px;" onmouseleave="this.type = 'password'"
														onmouseenter="this.type = 'text'" onclick="this.select()"></span></li>
													<li><span class="bg-blue circle"></span><?php echo Lang::T('Service Type');?>
<span><?php if ($_smarty_tpl->tpl_vars['_user']->value['service_type'] == 'Hotspot') {?>
														Hotspot
													<?php } elseif ($_smarty_tpl->tpl_vars['_user']->value['service_type'] == 'PPPoE') {?>
														PPPoE
													<?php } elseif ($_smarty_tpl->tpl_vars['_user']->value['service_type'] == 'Others' || $_smarty_tpl->tpl_vars['_user']->value['service_type'] == null) {?>
														Others
													<?php }?></span></li>
													<!-- <li><span class="bg-blue circle"></span>Auto Renew<span>Yes</span></li> -->
												</ul>
											<!-- </div> -->
											<!-- <div class="col-md-6">
												<canvas id="polarChart"></canvas>
											</div> -->
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-xxl-5">
						<div class="card">
						<?php if ($_smarty_tpl->tpl_vars['unpaid']->value) {?>
							<div class=" box-danger box-solid">
								<div class="card-header">
									<h3 class=""><?php echo Lang::T('Unpaid Order');?>
</h3>
								</div>
								<div class="card-body pb-0 pt-3">
									<table class="table table-condensed table-bordered table-striped table-hover" style="margin-bottom: 0px;">
										<tbody>
											<tr>
												<td><?php echo Lang::T('expired');?>
</td>
												<td><?php echo Lang::dateTimeFormat($_smarty_tpl->tpl_vars['unpaid']->value['expired_date']);?>
 </td>
											</tr>
											<tr>
												<td><?php echo Lang::T('Plan Name');?>
</td>
												<td><?php echo $_smarty_tpl->tpl_vars['unpaid']->value['plan_name'];?>
</td>
											</tr>
											<tr>
												<td><?php echo Lang::T('Plan Price');?>
</td>
												<td><?php echo $_smarty_tpl->tpl_vars['unpaid']->value['price'];?>
</td>
											</tr>
											<tr>
												<td><?php echo Lang::T('Routers');?>
</td>
												<td><?php echo $_smarty_tpl->tpl_vars['unpaid']->value['routers'];?>
</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="card-footer p-2">
									<div class="btn-group btn-group-justified mb15">
										<div class="btn-group">
											<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
order/view/<?php echo $_smarty_tpl->tpl_vars['unpaid']->value['id'];?>
/cancel" class="btn btn-danger btn-sm"
												onclick="return confirm('<?php echo Lang::T('Cancel it?');?>
')">
												<span class="glyphicon glyphicon-trash"></span>
												<?php echo Lang::T('Cancel');?>

											</a>
										</div>
										<div class="btn-group">
											<a class="btn btn-success btn-block btn-sm" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
order/view/<?php echo $_smarty_tpl->tpl_vars['unpaid']->value['id'];?>
">
												<span class="icon"><i class="ion ion-card"></i></span>
												<span><?php echo Lang::T('PAY NOW');?>
</span>
											</a>
										</div>
									</div>
								</div>
							</div>
						<?php }?>
							<div class="card-header pb-0 border-0">
								<div>
									<h4 class="card-title mb-2"><?php echo Lang::T('Announcement');?>
</h4>
								</div>
							</div>
							<div class="card-body pb-0 pt-3">
								<div class="user-bx mb-2">
									<div>
										<span class="meta">
											<?php $_smarty_tpl->_assignInScope('Announcement_Customer', ((string)$_smarty_tpl->tpl_vars['PAGES_PATH']->value)."/Announcement_Customer.html");?>
											<?php if (file_exists($_smarty_tpl->tpl_vars['Announcement_Customer']->value)) {?>
												<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['Announcement_Customer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
											<?php }?>
										</span>
									</div>
									<i class="las la-check-circle check-icon"></i>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-xxl-7">
					<?php if ($_smarty_tpl->tpl_vars['_bills']->value) {?>
						<div class="card card-primary card-solid">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['_bills']->value, '_bill');
$_smarty_tpl->tpl_vars['_bill']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_bill']->value) {
$_smarty_tpl->tpl_vars['_bill']->do_else = false;
?>
								<?php if ($_smarty_tpl->tpl_vars['_bill']->value['routers'] != 'radius') {?>
									<div class="card-header">
										<h3 class=""><?php echo $_smarty_tpl->tpl_vars['_bill']->value['routers'];?>
</h3>
										<div class="btn-group pull-right">
											<?php if ($_smarty_tpl->tpl_vars['_bill']->value['type'] == 'Hotspot') {?>
												<?php if ($_smarty_tpl->tpl_vars['_c']->value['hotspot_plan'] == '') {?>Hotspot Plan<?php } else {
echo $_smarty_tpl->tpl_vars['_c']->value['hotspot_plan'];
}?>
											<?php } else { ?>
												<?php if ($_smarty_tpl->tpl_vars['_c']->value['pppoe_plan'] == '') {?>PPPOE Plan<?php } else {
echo $_smarty_tpl->tpl_vars['_c']->value['pppoe_plan'];
}?>
											<?php }?>
										</div>
									</div>
								<?php } else { ?>
									<div class="card-header">
										<h3 class=""><?php if ($_smarty_tpl->tpl_vars['_c']->value['radius_plan'] == '') {?>Radius Plan<?php } else {
echo $_smarty_tpl->tpl_vars['_c']->value['radius_plan'];
}?></h3>
									</div>
								<?php }?>
								<div class="card-body">	
								<table class="table table-striped table-hover" style="margin-bottom: 0px;">
									<tr>
										<td class="small text-primary text-uppercase text-normal"><?php echo Lang::T('Plan Name');?>
</td>
										<td class="small mb15">
											<?php echo $_smarty_tpl->tpl_vars['_bill']->value['namebp'];?>

											<?php if ($_smarty_tpl->tpl_vars['_bill']->value['status'] != 'on') {?>
												<a class="label label-danger pull-right" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
order/package"><?php echo Lang::T('expired');?>
</a>
											<?php }?>
										</td>
									</tr>
									<tr>
										<td class="small text-info text-uppercase text-normal"><?php echo Lang::T('Created On');?>
</td>
										<td class="small mb15">
											<?php if ($_smarty_tpl->tpl_vars['_bill']->value['time'] != '') {
echo Lang::dateAndTimeFormat($_smarty_tpl->tpl_vars['_bill']->value['recharged_on'],$_smarty_tpl->tpl_vars['_bill']->value['recharged_time']);?>

											<?php }?>&nbsp;</td>
									</tr>
									<tr>
										<td class="small text-danger text-uppercase text-normal"><?php echo Lang::T('Expires On');?>
</td>
										<td class="small mb15 text-danger">
											<?php if ($_smarty_tpl->tpl_vars['_bill']->value['time'] != '') {
echo Lang::dateAndTimeFormat($_smarty_tpl->tpl_vars['_bill']->value['expiration'],$_smarty_tpl->tpl_vars['_bill']->value['time']);
}?>&nbsp;
										</td>
									</tr>
									<tr>
										<td class="small text-success text-uppercase text-normal"><?php echo Lang::T('Type');?>
</td>
										<td class="small mb15 text-success">
											<b><?php if ($_smarty_tpl->tpl_vars['_bill']->value['prepaid'] == 'yes') {?>Prepaid<?php } else { ?>Postpaid<?php }?></b>
											<?php echo Lang::T($_smarty_tpl->tpl_vars['_bill']->value['plan_type']);?>

										</td>
									</tr>
									<?php if ($_smarty_tpl->tpl_vars['nux_ip']->value != '') {?>
										<tr>
											<td class="small text-primary text-uppercase text-normal"><?php echo Lang::T('Current IP');?>
</td>
											<td class="small mb15"><?php echo $_smarty_tpl->tpl_vars['nux_ip']->value;?>
</td>
										</tr>
									<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['nux_mac']->value != '') {?>
										<tr>
											<td class="small text-primary text-uppercase text-normal"><?php echo Lang::T('Current MAC');?>
</td>
											<td class="small mb15"><?php echo $_smarty_tpl->tpl_vars['nux_mac']->value;?>
</td>
										</tr>
									<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['_bill']->value['type'] == 'Hotspot' && $_smarty_tpl->tpl_vars['_bill']->value['status'] == 'on' && $_smarty_tpl->tpl_vars['_bill']->value['routers'] != 'radius') {?>
										<tr>
											<td class="small text-primary text-uppercase text-normal"><?php echo Lang::T('Login Status');?>
</td>
											<td class="small mb15" id="login_status_<?php echo $_smarty_tpl->tpl_vars['_bill']->value['id'];?>
">
												<img src="ui/ui/images/loading.gif">
											</td>
										</tr>
									<?php }?>
									<tr>
										<td class="text-primary text-uppercase text-normal">
											<?php if ($_smarty_tpl->tpl_vars['_bill']->value['status'] == 'on') {?>
												<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
home&deactivate=<?php echo $_smarty_tpl->tpl_vars['_bill']->value['id'];?>
"
													onclick="return confirm('<?php echo Lang::T('Deactivate');?>
?')" class="btn btn-danger d-block text-uppercase"><i
														class="bi-trash-fill"></i></a>
											<?php }?>
										</td>
										<td class="row">
											<?php if ($_smarty_tpl->tpl_vars['_bill']->value['status'] != 'on' && $_smarty_tpl->tpl_vars['_bill']->value['prepaid'] != 'yes' && $_smarty_tpl->tpl_vars['_c']->value['extend_expired']) {?>
												<a class="btn btn-warning text-black d-block text-uppercase"
													href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
home&extend=<?php echo $_smarty_tpl->tpl_vars['_bill']->value['id'];?>
&stoken=<?php echo App::getToken();?>
"
													onclick="return confirm('<?php echo Text::toHex($_smarty_tpl->tpl_vars['_c']->value['extend_confirmation']);?>
')"><?php echo Lang::T('Extend');?>
</a>
											<?php }?>
											<a class="btn btn-primary pull-right d-block text-uppercase"
												href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
home&recharge=<?php echo $_smarty_tpl->tpl_vars['_bill']->value['id'];?>
&stoken=<?php echo App::getToken();?>
"
												onclick="return confirm('<?php echo Lang::T('Recharge');?>
?')"><?php echo Lang::T('Recharge');?>
</a>
										</td>
									</tr>
								</table>
								</div>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</div>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['_c']->value['disable_voucher'] == 'yes') {?>
						<div class="card-footer">
							<?php if ($_smarty_tpl->tpl_vars['_c']->value['payment_gateway'] != 'none' || $_smarty_tpl->tpl_vars['_c']->value['payment_gateway'] == '') {?>
								<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
order/package" class="btn btn-primary btn-block">
									<i class="bi-cart-plus-fill"></i>
									<?php echo Lang::T('Order Package');?>

								</a>
							<?php }?>
						</div>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['_bills']->value) {?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['_bills']->value, '_bill');
$_smarty_tpl->tpl_vars['_bill']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_bill']->value) {
$_smarty_tpl->tpl_vars['_bill']->do_else = false;
?>
							<?php if ($_smarty_tpl->tpl_vars['_bill']->value['type'] == 'Hotspot' && $_smarty_tpl->tpl_vars['_bill']->value['status'] == 'on') {?>
								<?php echo '<script'; ?>
>
									setTimeout(() => {
										$.ajax({
											url: "index.php?_route=autoload_user/isLogin/<?php echo $_smarty_tpl->tpl_vars['_bill']->value['id'];?>
",
											cache: false,
											success: function(msg) {
												$("#login_status_<?php echo $_smarty_tpl->tpl_vars['_bill']->value['id'];?>
").html(msg);
											}
										});
									}, 2000);
								<?php echo '</script'; ?>
>
							<?php }?>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					<?php }?>
					</div>
					<div class="col-xl-6 col-xxl-7">
					<?php if ($_smarty_tpl->tpl_vars['_c']->value['enable_balance'] == 'yes' && $_smarty_tpl->tpl_vars['_c']->value['allow_balance_transfer'] == 'yes') {?>
						<div class="card card-primary box-solid mb30">
							<div class="card-header">
								<h4 class="card-title mb-2"><?php echo Lang::T("Transfer Balance");?>
</h4>
							</div>
							<div class="card-body">
								<form method="post" onsubmit="return askConfirm()" role="form" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
home">
									<div class="row">
										<div class="format-slider col-xl-4 mb-3">
											<input type="text" id="username" name="username" class="form-control" required
												placeholder="<?php echo Lang::T('Username');?>
">
										</div>
										<div class="format-slider col-xl-4 mb-3">
											<input type="number" id="balance" name="balance" autocomplete="off" class="form-control"
												required placeholder="<?php echo Lang::T('Balance');?>
">
										</div>
										<div class="col-xl-4">
											<button class="btn btn-primary btn-block text-uppercase" id="sendBtn" type="submit" name="send"
												onclick="return confirm('<?php echo Lang::T("Are You Sure?");?>
')" value="balance">Transfer</button>
										</div>
									</div>
								</form>
								<?php echo '<script'; ?>
>
									function askConfirm() {
										if(confirm('<?php echo Lang::T('Send your balance?');?>
')){
										setTimeout(() => {
											document.getElementById('sendBtn').setAttribute('disabled', '');
										}, 1000);
										return true;
									}
									return false;
									}
								<?php echo '</script'; ?>
>
							</div>
							<div class="card-header border-0 pb-0">
								<h4 class="card-title mb-2"><?php echo Lang::T("Recharge a friend");?>
</h4>
							</div>
							<div class="card-body">
								<form method="post" role="form" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
home">
									<div class="row">
										<div class="format-slider col-xl-9 mb-3">
											<input type="text" id="username" name="username" class="form-control" required
												placeholder="<?php echo Lang::T('Username');?>
">
										</div>
										<div class="col-xl-3">
											<button class="btn btn-primary btn-block text-uppercase" id="sendBtn" type="submit" name="send"
												onclick="return confirm('<?php echo Lang::T("Are You Sure?");?>
')" value="plan">Recharge</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					<?php }?>
					</div>
					<div class="col-xl-6 col-xxl-7">
						<?php if ($_smarty_tpl->tpl_vars['_c']->value['disable_voucher'] != 'yes') {?>
						<div class="card">
							<div class="card-header border-0 pb-0">
								<div>
									<h4 class="card-title mb-2"><?php echo Lang::T('Voucher Activation');?>
</h4>
								</div>
							</div>
							<div class="card-body">	
								<form method="post" role="form" class="form-horizontal" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
voucher/activation-post">
									<label class="control-label text-center"><?php echo Lang::T('Code Voucher');?>
</label>
									<div class="row">
										<div class="col-xl-9 format-slider mb-3">
											<input type="text" id="code" name="code" class="form-control" placeholder="<?php echo Lang::T('Enter voucher code here');?>
">
										</div>

										<div class="col-xl-3 border-0 pt-0">
											<button class="btn btn-primary btn-block text-uppercase" type="submit"><?php echo Lang::T('Recharge');?>
</button>
										</div>
									</div>
								</form>
							</div>
							<div class="card-body">
								<div class="btn-group btn-group-justified col-xl-12 col-xxl-12" role="group">
									<a class="btn btn-warning" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
voucher/activation">
										<i class="bi-cart-plus-fill"></i>
										<?php echo Lang::T('Order Voucher');?>

									</a>
									<?php if ($_smarty_tpl->tpl_vars['_c']->value['payment_gateway'] != 'none' || $_smarty_tpl->tpl_vars['_c']->value['payment_gateway'] == '') {?>
										<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
order/package" class="btn btn-primary">
											<i class="bi-cart-plus-fill"></i>
											<?php echo Lang::T('Order Package');?>

										</a>
									<?php }?>
								</div>
							</div>
						</div>
						</div>
					<?php }?>
					</div>
				</div>
<?php $_smarty_tpl->_subTemplateRender("file:sections/user-footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

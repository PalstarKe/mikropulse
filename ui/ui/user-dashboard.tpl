{include file="sections/user-header.tpl"}
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
												<h2 class="text-white card-balance">{Lang::moneyFormat($_user['balance'])}</h2>
												<p class="fs-16">{Lang::T('Balance')}</p>
											</div>
											<a class="change-btn" href="javascript:void(0);"><i class="fa fa-caret-up up-ico"></i>Refresh<span class="reload-icon"><i class="fas fa-sync-alt reload active"></i></span></a>
										</div>
									</div>
									<div class="col-xl-4">
										<div class="row  mt-xl-0 mt-4">
											<!-- <div class="col-md-6"> -->
												<h4 class="card-title">{Lang::T('Your Account Information')}</h4>
												<span>Below are your account details. Auto renew is enabled by default.</span>
												<ul class="card-list mt-4">
													<li><span class="bg-blue circle"></span>{Lang::T('Username')}<span>{$_user['username']}</span></li>
													<li><span class="bg-blue circle"></span>{Lang::T('Password')}<span><input type="password" value="{$_user['password']}"
														style="width:100%; border: 0px;" onmouseleave="this.type = 'password'"
														onmouseenter="this.type = 'text'" onclick="this.select()"></span></li>
													<li><span class="bg-blue circle"></span>{Lang::T('Service Type')}<span>{if $_user.service_type == 'Hotspot'}
														Hotspot
													{elseif $_user.service_type == 'PPPoE'}
														PPPoE
													{elseif $_user.service_type == 'Others' || $_user.service_type == null}
														Others
													{/if}</span></li>
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
						{if $unpaid }
							<div class=" box-danger box-solid">
								<div class="card-header">
									<h3 class="">{Lang::T('Unpaid Order')}</h3>
								</div>
								<div class="card-body pb-0 pt-3">
									<table class="table table-condensed table-bordered table-striped table-hover" style="margin-bottom: 0px;">
										<tbody>
											<tr>
												<td>{Lang::T('expired')}</td>
												<td>{Lang::dateTimeFormat($unpaid['expired_date'])} </td>
											</tr>
											<tr>
												<td>{Lang::T('Plan Name')}</td>
												<td>{$unpaid['plan_name']}</td>
											</tr>
											<tr>
												<td>{Lang::T('Plan Price')}</td>
												<td>{$unpaid['price']}</td>
											</tr>
											<tr>
												<td>{Lang::T('Routers')}</td>
												<td>{$unpaid['routers']}</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="card-footer p-2">
									<div class="btn-group btn-group-justified mb15">
										<div class="btn-group">
											<a href="{$_url}order/view/{$unpaid['id']}/cancel" class="btn btn-danger btn-sm"
												onclick="return confirm('{Lang::T('Cancel it?')}')">
												<span class="glyphicon glyphicon-trash"></span>
												{Lang::T('Cancel')}
											</a>
										</div>
										<div class="btn-group">
											<a class="btn btn-success btn-block btn-sm" href="{$_url}order/view/{$unpaid['id']}">
												<span class="icon"><i class="ion ion-card"></i></span>
												<span>{Lang::T('PAY NOW')}</span>
											</a>
										</div>
									</div>
								</div>
							</div>
						{/if}
							<div class="card-header pb-0 border-0">
								<div>
									<h4 class="card-title mb-2">{Lang::T('Announcement')}</h4>
								</div>
							</div>
							<div class="card-body pb-0 pt-3">
								<div class="user-bx mb-2">
									<div>
										<span class="meta">
											{$Announcement_Customer = "{$PAGES_PATH}/Announcement_Customer.html"}
											{if file_exists($Announcement_Customer)}
												{include file=$Announcement_Customer}
											{/if}
										</span>
									</div>
									<i class="las la-check-circle check-icon"></i>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-xxl-7">
					{if $_bills}
						<div class="card card-primary card-solid">
							{foreach $_bills as $_bill}
								{if $_bill['routers'] != 'radius'}
									<div class="card-header">
										<h3 class="">{$_bill['routers']}</h3>
										<div class="btn-group pull-right">
											{if $_bill['type'] == 'Hotspot'}
												{if $_c['hotspot_plan']==''}Hotspot Plan{else}{$_c['hotspot_plan']}{/if}
											{else}
												{if $_c['pppoe_plan']==''}PPPOE Plan{else}{$_c['pppoe_plan']}{/if}
											{/if}
										</div>
									</div>
								{else}
									<div class="card-header">
										<h3 class="">{if $_c['radius_plan']==''}Radius Plan{else}{$_c['radius_plan']}{/if}</h3>
									</div>
								{/if}
								<div class="card-body">	
								<table class="table table-striped table-hover" style="margin-bottom: 0px;">
									<tr>
										<td class="small text-primary text-uppercase text-normal">{Lang::T('Plan Name')}</td>
										<td class="small mb15">
											{$_bill['namebp']}
											{if $_bill['status'] != 'on'}
												<a class="label label-danger pull-right" href="{$_url}order/package">{Lang::T('expired')}</a>
											{/if}
										</td>
									</tr>
									<tr>
										<td class="small text-info text-uppercase text-normal">{Lang::T('Created On')}</td>
										<td class="small mb15">
											{if $_bill['time'] ne ''}{Lang::dateAndTimeFormat($_bill['recharged_on'],$_bill['recharged_time'])}
											{/if}&nbsp;</td>
									</tr>
									<tr>
										<td class="small text-danger text-uppercase text-normal">{Lang::T('Expires On')}</td>
										<td class="small mb15 text-danger">
											{if $_bill['time'] ne ''}{Lang::dateAndTimeFormat($_bill['expiration'],$_bill['time'])}{/if}&nbsp;
										</td>
									</tr>
									<tr>
										<td class="small text-success text-uppercase text-normal">{Lang::T('Type')}</td>
										<td class="small mb15 text-success">
											<b>{if $_bill['prepaid'] eq yes}Prepaid{else}Postpaid{/if}</b>
											{Lang::T($_bill['plan_type'])}
										</td>
									</tr>
									{if $nux_ip neq ''}
										<tr>
											<td class="small text-primary text-uppercase text-normal">{Lang::T('Current IP')}</td>
											<td class="small mb15">{$nux_ip}</td>
										</tr>
									{/if}
									{if $nux_mac neq ''}
										<tr>
											<td class="small text-primary text-uppercase text-normal">{Lang::T('Current MAC')}</td>
											<td class="small mb15">{$nux_mac}</td>
										</tr>
									{/if}
									{if $_bill['type'] == 'Hotspot' && $_bill['status'] == 'on' && $_bill['routers'] != 'radius'}
										<tr>
											<td class="small text-primary text-uppercase text-normal">{Lang::T('Login Status')}</td>
											<td class="small mb15" id="login_status_{$_bill['id']}">
												<img src="ui/ui/images/loading.gif">
											</td>
										</tr>
									{/if}
									<tr>
										<td class="text-primary text-uppercase text-normal">
											{if $_bill['status'] == 'on'}
												<a href="{$_url}home&deactivate={$_bill['id']}"
													onclick="return confirm('{Lang::T('Deactivate')}?')" class="btn btn-danger d-block text-uppercase"><i
														class="bi-trash-fill"></i></a>
											{/if}
										</td>
										<td class="row">
											{if $_bill['status'] != 'on' && $_bill['prepaid'] != 'yes' && $_c['extend_expired']}
												<a class="btn btn-warning text-black d-block text-uppercase"
													href="{$_url}home&extend={$_bill['id']}&stoken={App::getToken()}"
													onclick="return confirm('{Text::toHex($_c['extend_confirmation'])}')">{Lang::T('Extend')}</a>
											{/if}
											<a class="btn btn-primary pull-right d-block text-uppercase"
												href="{$_url}home&recharge={$_bill['id']}&stoken={App::getToken()}"
												onclick="return confirm('{Lang::T('Recharge')}?')">{Lang::T('Recharge')}</a>
										</td>
									</tr>
								</table>
								</div>
							{/foreach}
						</div>
					{/if}
					{if $_c['disable_voucher'] == 'yes'}
						<div class="card-footer">
							{if $_c['payment_gateway'] != 'none' or $_c['payment_gateway'] == '' }
								<a href="{$_url}order/package" class="btn btn-primary btn-block">
									<i class="bi-cart-plus-fill"></i>
									{Lang::T('Order Package')}
								</a>
							{/if}
						</div>
					{/if}
					{if $_bills}
						{foreach $_bills as $_bill}
							{if $_bill['type'] == 'Hotspot' && $_bill['status'] == 'on'}
								<script>
									setTimeout(() => {
										$.ajax({
											url: "index.php?_route=autoload_user/isLogin/{$_bill['id']}",
											cache: false,
											success: function(msg) {
												$("#login_status_{$_bill['id']}").html(msg);
											}
										});
									}, 2000);
								</script>
							{/if}
						{/foreach}
					{/if}
					</div>
					<div class="col-xl-6 col-xxl-7">
					{if $_c['enable_balance'] == 'yes' && $_c['allow_balance_transfer'] == 'yes'}
						<div class="card card-primary box-solid mb30">
							<div class="card-header">
								<h4 class="card-title mb-2">{Lang::T("Transfer Balance")}</h4>
							</div>
							<div class="card-body">
								<form method="post" onsubmit="return askConfirm()" role="form" action="{$_url}home">
									<div class="row">
										<div class="format-slider col-xl-4 mb-3">
											<input type="text" id="username" name="username" class="form-control" required
												placeholder="{Lang::T('Username')}">
										</div>
										<div class="format-slider col-xl-4 mb-3">
											<input type="number" id="balance" name="balance" autocomplete="off" class="form-control"
												required placeholder="{Lang::T('Balance')}">
										</div>
										<div class="col-xl-4">
											<button class="btn btn-primary btn-block text-uppercase" id="sendBtn" type="submit" name="send"
												onclick="return confirm('{Lang::T("Are You Sure?")}')" value="balance">Transfer</button>
										</div>
									</div>
								</form>
								<script>
									function askConfirm() {
										if(confirm('{Lang::T('Send your balance?')}')){
										setTimeout(() => {
											document.getElementById('sendBtn').setAttribute('disabled', '');
										}, 1000);
										return true;
									}
									return false;
									}
								</script>
							</div>
							<div class="card-header border-0 pb-0">
								<h4 class="card-title mb-2">{Lang::T("Recharge a friend")}</h4>
							</div>
							<div class="card-body">
								<form method="post" role="form" action="{$_url}home">
									<div class="row">
										<div class="format-slider col-xl-9 mb-3">
											<input type="text" id="username" name="username" class="form-control" required
												placeholder="{Lang::T('Username')}">
										</div>
										<div class="col-xl-3">
											<button class="btn btn-primary btn-block text-uppercase" id="sendBtn" type="submit" name="send"
												onclick="return confirm('{Lang::T("Are You Sure?")}')" value="plan">Recharge</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					{/if}
					</div>
					<div class="col-xl-6 col-xxl-7">
						{if $_c['disable_voucher'] != 'yes'}
						<div class="card">
							<div class="card-header border-0 pb-0">
								<div>
									<h4 class="card-title mb-2">{Lang::T('Voucher Activation')}</h4>
								</div>
							</div>
							<div class="card-body">	
								<form method="post" role="form" class="form-horizontal" action="{$_url}voucher/activation-post">
									<label class="control-label text-center">{Lang::T('Code Voucher')}</label>
									<div class="row">
										<div class="col-xl-9 format-slider mb-3">
											<input type="text" id="code" name="code" class="form-control" placeholder="{Lang::T('Enter voucher code here')}">
										</div>

										<div class="col-xl-3 border-0 pt-0">
											<button class="btn btn-primary btn-block text-uppercase" type="submit">{Lang::T('Recharge')}</button>
										</div>
									</div>
								</form>
							</div>
							<div class="card-body">
								<div class="btn-group btn-group-justified col-xl-12 col-xxl-12" role="group">
									<a class="btn btn-warning" href="{$_url}voucher/activation">
										<i class="bi-cart-plus-fill"></i>
										{Lang::T('Order Voucher')}
									</a>
									{if $_c['payment_gateway'] != 'none' or $_c['payment_gateway'] == '' }
										<a href="{$_url}order/package" class="btn btn-primary">
											<i class="bi-cart-plus-fill"></i>
											{Lang::T('Order Package')}
										</a>
									{/if}
								</div>
							</div>
						</div>
						</div>
					{/if}
					</div>
				</div>
{include file="sections/user-footer.tpl"}
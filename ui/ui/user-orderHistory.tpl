{include file="sections/user-header.tpl"}
<!-- user-orderHistory -->
<div class="row">
                    <!-- <div class="col-xl-6 col-xxl-12">
						<div class="row">
							<div class="col-sm-6">
								<div class="card">
									<div class="card-body">
										<h4 class="card-title mt-2">Orders</h4>
										<div class="d-flex align-items-center mt-3 mb-2">
											<h2 class="fs-38 mb-0 me-3">456</h2>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="card">
									<div class="card-body">
										<h4 class="card-title mt-2">Activated Vouchers</h4>
										<div class="d-flex align-items-center mt-3 mb-2">
											<h2 class="fs-38 mb-0 me-3">1467</h2>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div> -->
                    <div class="col-xl-12 col-xxl-12">
						<div class="card">
							<div class="card-header d-block d-sm-flex border-0">
								<div class="me-3">
									<h4 class="card-title mb-2">My Reports</h4>
								</div>
								<div class="card-tabs mt-3 mt-sm-0">
									<ul class="nav nav-tabs" role="tablist">
										<li class="nav-item">
											<a class="nav-link active" data-bs-toggle="tab" href="#orders" role="tab">Orders</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" data-bs-toggle="tab" href="#activation" role="tab">Activations</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="card-body tab-content p-0">
								<div class="tab-pane active show fade" id="orders" role="tabpanel">
									<div class="table-responsive">
										<table class="table table-responsive-md card-table transactions-table">
                                            <thead>
                                                <tr>
                                                    <th><h6 class="fs-16 font-w500 mb-0">{Lang::T('Plan Name')}</h6></th>
                                                    <th><h6 class="fs-16 font-w500 mb-0">{Lang::T('Gateway')}</h6></th>
                                                    <th><h6 class="fs-16 font-w500 mb-0">{Lang::T('Routers')}</h6></th>
                                                    <th><h6 class="fs-16 font-w500 mb-0"><{Lang::T('Type')}</h6></th>
                                                    <th><h6 class="fs-16 font-w500 mb-0">{Lang::T('Plan Price')}</h6></th>
                                                    <th><h6 class="fs-16 font-w500 mb-0">{Lang::T('Created On')}</h6></th>
                                                    <th><h6 class="fs-16 font-w500 mb-0">{Lang::T('Expires On')}</h6></th>
                                                    <th><h6 class="fs-16 font-w500 mb-0">{Lang::T('Date Done')}</h6></th>
                                                    <th><h6 class="fs-16 font-w500 mb-0">{Lang::T('Method')}</h6></th>
                                                </tr>
                                            </thead>
											<tbody>
                                                {foreach $d as $ds}
                                                <tr>
                                                    <td><span class="fs-14"><a href="{$_url}order/view/{$ds['id']}">{$ds['plan_name']}</a></span></td>
                                                    <td><span class="fs-14">{$ds['gateway']}</span></td>
                                                    <td><span class="fs-14">{$ds['routers']}</span></td>
                                                    <td><span class="fs-14">{$ds['payment_channel']}</span></td>
                                                    <td><span class="fs-14">{Lang::moneyFormat($ds['price'])}</span></td>
                                                    <td class="text-primary"><span class="fs-14">{date("{$_c['date_format']} H:i",
                                                        strtotime($ds['created_date']))}</span></td>
                                                    <td class="text-danger"><span class="fs-14">{date("{$_c['date_format']} H:i",
                                                        strtotime($ds['expired_date']))}</span></td>
                                                    <td class="text-success"><span class="fs-14">{if $ds['status']!=1}{date("{$_c['date_format']} H:i",
                                                        strtotime($ds['paid_date']))}{/if}</span></td>
                                                    <td><span class="fs-14">{if $ds['status']==1}{Lang::T('UNPAID')}
                                                        {elseif $ds['status']==2}{Lang::T('PAID')}
                                                        {elseif $ds['status']==3}{$_L['FAILED']}
                                                        {elseif $ds['status']==4}{Lang::T('CANCELED')}
                                                        {elseif $ds['status']==5}{Lang::T('UNKNOWN')}
                                                        {/if}</span></td>
                                                </tr>
                                            {/foreach}
											</tbody>
										</table>
									</div>
                                    {include file="pagination.tpl"}
								</div>
								<div class="tab-pane" id="activation" role="tabpanel">
									<div class="table-responsive">
										<table class="table table-responsive-md card-table transactions-table">
											<thead>
                                                <tr>
                                                    <th><h6 class="fs-16 font-w500 mb-0">{Lang::T('Invoice')}</h6></th>
                                                    <th><h6 class="fs-16 font-w500 mb-0">{Lang::T('Plan Name')}</h6></th>
                                                    <th><h6 class="fs-16 font-w500 mb-0">{Lang::T('Plan Price')}</h6></th>
                                                    <th><h6 class="fs-16 font-w500 mb-0">{Lang::T('Type')}</h6></th>
                                                    <th><h6 class="fs-16 font-w500 mb-0">{Lang::T('Created On')}</h6></th>
                                                    <th><h6 class="fs-16 font-w500 mb-0">{Lang::T('Expires On')}</h6></th>
                                                    <th><h6 class="fs-16 font-w500 mb-0">{Lang::T('Method')}</h6></th>
                                                </tr>
                                            </thead>
											<tbody>
												<tr>
                                                    {foreach $d as $ds}
                                                        <tr onclick="window.location.href = '{$_url}voucher/invoice/{$ds['id']}'" style="cursor: pointer;">
                                                            <td><span class="fs-14">{$ds['invoice']}</span></td>
                                                            <td><span class="fs-14">{$ds['plan_name']}</span></td>
                                                            <td><span class="fs-14">{Lang::moneyFormat($ds['price'])}</span></td>
                                                            <td><span class="fs-14">{$ds['type']}</span></td>
                                                            <td><span class="fs-14">{Lang::dateAndTimeFormat($ds['recharged_on'],$ds['recharged_time'])}</span></td>
                                                            <td><span class="fs-14">{Lang::dateAndTimeFormat($ds['expiration'],$ds['time'])}</span></td>
                                                            <td><span class="fs-14">{$ds['method']}</span></td>
                                                        </tr>
                                                    {/foreach}
												</tr>
											</tbody>
										</table>
									</div>
                                    {include file="pagination.tpl"}
								</div>
							</div>
						</div>
					</div>
                </div>
{include file="sections/user-footer.tpl"}
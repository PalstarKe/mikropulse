{include file="sections/user-header.tpl"}
<!-- user-orderPlan -->
                <div class="row">
                    <div class="col-xl-12 col-xxl-12">
						<div class="col-xl-12">
							<div class="card coin-card">
								<div class="card-body d-sm-flex d-block align-items-center">
									<span class="coin-icon">
										<svg width="38" height="41" viewcard="0 0 38 41" fill="none" xmlns="http://www.w3.org/2000/svg">
											<g><path d="M14.0413 32.5832C15.7416 32.5934 17.4269 32.2659 18.9997 31.6199C20.5708 32.2714 22.2572 32.5991 23.958 32.5832C29.1218 32.5832 33.1663 29.8278 33.1663 26.3088V20.441C33.1663 16.922 29.1218 14.1666 23.958 14.1666C23.7186 14.1666 23.4834 14.1779 23.2497 14.1906V7.55498C23.2497 4.10823 19.2051 1.41656 14.0413 1.41656C8.87759 1.41656 4.83301 4.10823 4.83301 7.55498V26.4448C4.83301 29.8916 8.87759 32.5832 14.0413 32.5832ZM30.333 26.3088C30.333 27.9366 27.715 29.7499 23.958 29.7499C20.201 29.7499 17.583 27.9366 17.583 26.3088V24.9984C19.5015 26.1652 21.7131 26.7604 23.958 26.714C26.203 26.7604 28.4145 26.1652 30.333 24.9984V26.3088ZM23.958 16.9999C27.715 16.9999 30.333 18.8132 30.333 20.441C30.333 22.0687 27.715 23.8807 23.958 23.8807C20.201 23.8807 17.583 22.0673 17.583 20.441C17.583 18.8147 20.201 16.9999 23.958 16.9999ZM14.0413 4.2499C17.7983 4.2499 20.4163 5.9924 20.4163 7.55498C20.4163 9.11757 17.7983 10.8615 14.0413 10.8615C10.2843 10.8615 7.66634 9.11898 7.66634 7.55498C7.66634 5.99098 10.2843 4.2499 14.0413 4.2499ZM7.66634 12.0161C9.59282 13.1601 11.8012 13.7417 14.0413 13.6948C16.2814 13.7417 18.4899 13.1601 20.4163 12.0161V14.6341C18.8724 15.0232 17.4565 15.8078 16.308 16.9107C15.5631 17.0718 14.8034 17.1545 14.0413 17.1572C10.2843 17.1572 7.66634 15.4146 7.66634 13.8521V12.0161ZM7.66634 18.3132C9.59323 19.4561 11.8015 20.0371 14.0413 19.9905C14.2935 19.9905 14.5372 19.9593 14.7851 19.9466C14.764 20.1106 14.7522 20.2756 14.7497 20.441V23.3947C14.5117 23.4089 14.2822 23.4542 14.0413 23.4542C10.2843 23.4542 7.66634 21.7117 7.66634 20.1477V18.3132ZM7.66634 24.6088C9.59282 25.7529 11.8012 26.3344 14.0413 26.2876C14.2793 26.2876 14.5131 26.2692 14.7497 26.2578V26.3088C14.7699 27.5148 15.2334 28.6711 16.0516 29.5572C15.3887 29.6824 14.7159 29.7469 14.0413 29.7499C10.2843 29.7499 7.66634 28.0074 7.66634 26.4448V24.6088Z" fill="#fff"></path></g>
										</svg>
									</span>
									<div>
										<h3 class="text-white">Buy or Upgrade Your Package</h3>
										<p>You can buy a package or chose a different package if you wish to upgrade to another package.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
                    {if $_c['radius_enable']}
            {if $_user['service_type'] == 'PPPoE'}
                {if Lang::arrayCount($radius_pppoe)>0}
                    <ol class="breadcrumb">
                        <li>{if $_c['radius_plan']==''}Radius Plan{else}{$_c['radius_plan']}{/if}</li>
                        <li>{if $_c['pppoe_plan']==''}PPPOE Plan{else}{$_c['pppoe_plan']}{/if}</li>
                    </ol>
                    <div class="row">
                        {foreach $radius_pppoe as $plan}
                            <div class="col-xl-3 col-xxl-4">
                                <div class="card card-primary">
                                    <div class="card-header border-0 pb-0">
                                        <div>
                                            <h4 class="card-header mb-2">{$plan['name_plan']}</h4>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex align-items-end mt-2 pb-3 justify-content-between">
                                            <span>{Lang::T('Type')}</span>
                                            <span class="fs-18"><span class="text-black pe-2">{$plan['type']}
                                        </div>
                                        <div class="d-flex align-items-end mt-2 pb-3 justify-content-between">
                                            <span>{Lang::T('Price')}</span>
                                            <span class="fs-18"><span class="text-black pe-2">{Lang::moneyFormat($plan['price'])}
                                        </div>
                                        <div class="d-flex align-items-end mt-2 pb-3 justify-content-between">
                                            <span>{Lang::T('Validity')}</span>
                                            <span class="fs-18"><span class="text-black pe-2">{$plan['validity']} {$plan['validity_unit']}
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="btn-group btn-group-justified" role="group" aria-label="...">
                                            <a href="{$_url}order/gateway/radius/{$plan['id']}"
                                                onclick="return confirm('{Lang::T('Buy this? your active package will be overwrite')}')"
                                                class="btn btn-outline-primary btn-block btn-lg">Buy</a>
                                            {if $_c['enable_balance'] == 'yes' && $_user['balance']>=$plan['price']}
                                                <a href="{$_url}order/pay/radius/{$plan['id']}"
                                                    onclick="return confirm('{Lang::T('Pay this with Balance? your active package will be overwrite')}')"
                                                    class="btn btn-outline-primary btn-block btn-lg">{Lang::T('Pay With Balance')}</a>
                                            {/if}
                                        </div>
                                        {if $_c['enable_balance'] == 'yes' && $_c['allow_balance_transfer'] == 'yes' && $_user['balance']>=$plan['price']}
                                            <a href="{$_url}order/send/radius/{$plan['id']}"
                                                onclick="return confirm('{Lang::T('Buy this for friend account?')}')"
                                                class="btn btn-outline-primary btn-block btn-lg">{Lang::T('Buy for friend')}</a>
                                        {/if}
                                    </div>
                                </div>
                            </div>
                        {/foreach}
                    </div>
                {/if}
            {elseif $_user['service_type'] == 'Hotspot'}
                {if Lang::arrayCount($radius_hotspot)>0}
                    <ol class="breadcrumb">
                        <li>{if $_c['radius_plan']==''}Radius Plan{else}{$_c['radius_plan']}{/if}</li>
                        <li>{if $_c['hotspot_plan']==''}Hotspot Plan{else}{$_c['hotspot_plan']}{/if}</li>
                    </ol>
                    <div class="row">
                        {foreach $radius_hotspot as $plan}
                            <div class="col-xl-3 col-xxl-4">
                                <div class="card card-primary">
                                    <div class="card-header border-0 pb-0">
                                        <div>
                                            <h4 class="card-header mb-2">{$plan['name_plan']}</h4>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex align-items-end mt-2 pb-3 justify-content-between">
                                            <span>{Lang::T('Type')}</span>
                                            <span class="fs-18"><span class="text-black pe-2">{$plan['type']}
                                        </div>
                                        <div class="d-flex align-items-end mt-2 pb-3 justify-content-between">
                                            <span>{Lang::T('Price')}</span>
                                            <span class="fs-18"><span class="text-black pe-2">{Lang::moneyFormat($plan['price'])}
                                        </div>
                                        <div class="d-flex align-items-end mt-2 pb-3 justify-content-between">
                                            <span>{Lang::T('Validity')}</span>
                                            <span class="fs-18"><span class="text-black pe-2">{$plan['validity']} {$plan['validity_unit']}
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="btn-group btn-group-justified" role="group" aria-label="...">
                                            <a href="{$_url}order/gateway/radius/{$plan['id']}"
                                                onclick="return confirm('{Lang::T('Buy this? your active package will be overwrite')}')"
                                                class="btn btn-outline-primary btn-block btn-lg">Buy</a>
                                            {if $_c['enable_balance'] == 'yes' && $_user['balance']>=$plan['price']}
                                                <a href="{$_url}order/pay/radius/{$plan['id']}"
                                                    onclick="return confirm('{Lang::T('Pay this with Balance? your active package will be overwrite')}')"
                                                    class="btn btn-outline-primary btn-block btn-lg">{Lang::T('Pay With Balance')}</a>
                                            {/if}
                                        </div>
                                        {if $_c['enable_balance'] == 'yes' && $_c['allow_balance_transfer'] == 'yes' && $_user['balance']>=$plan['price']}
                                            <a href="{$_url}order/send/radius/{$plan['id']}"
                                                onclick="return confirm('{Lang::T('Buy this for friend account?')}')"
                                                class="btn btn-outline-primary btn-block btn-lg">{Lang::T('Buy for friend')}</a>
                                        {/if}
                                    </div>
                                </div>
                            </div>
                        {/foreach}
                    </div>
                {/if}
            {elseif $_user['service_type'] == 'Others' || $_user['service_type'] == '' && (Lang::arrayCount($radius_pppoe)>0 || Lang::arrayCount($radius_hotspot)>0)}
                <ol class="breadcrumb">
                    <li>{if $_c['radius_plan']==''}Radius Plan{else}{$_c['radius_plan']}{/if}</li>
                    <li>{if $_c['pppoe_plan']==''}PPPOE Plan{else}{$_c['pppoe_plan']}{/if}</li>
                </ol>
                {if Lang::arrayCount($radius_pppoe)>0}
                    <div class="row">
                        {foreach $radius_pppoe as $plan}
                            <div class="col-xl-3 col-xxl-4">
                                <div class="card card-primary">
                                    <div class="card-header border-0 pb-0">{$plan['name_plan']}
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex align-items-end mt-2 pb-3 justify-content-between">
                                            <span>{Lang::T('Type')}</span>
                                            <span class="fs-18"><span class="text-black pe-2">{$plan['type']}
                                        </div>
                                        <div class="d-flex align-items-end mt-2 pb-3 justify-content-between">
                                            <span>{Lang::T('Price')}</span>
                                            <span class="fs-18"><span class="text-black pe-2">{Lang::moneyFormat($plan['price'])}
                                        </div>
                                        <div class="d-flex align-items-end mt-2 pb-3 justify-content-between">
                                            <span>{Lang::T('Validity')}</span>
                                            <span class="fs-18"><span class="text-black pe-2">{$plan['validity']} {$plan['validity_unit']}
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="btn-group btn-group-justified" role="group" aria-label="...">
                                            <a href="{$_url}order/gateway/pppoe/{$plan['id']}"
                                                onclick="return confirm('{Lang::T('Buy this? your active package will be overwritten')}')"
                                                class="btn btn-outline-primary btn-block btn-lg">Buy</a>
                                            {if $_c['enable_balance'] == 'yes' && $_user['balance']>=$plan['price']}
                                                <a href="{$_url}order/pay/pppoe/{$plan['id']}"
                                                    onclick="return confirm('{Lang::T('Pay this with Balance? your active package will be overwritten')}')"
                                                    class="btn btn-outline-primary btn-block btn-lg">{Lang::T('Pay With Balance')}</a>
                                            {/if}
                                        </div>
                                        {if $_c['enable_balance'] == 'yes' && $_c['allow_balance_transfer'] == 'yes' && $_user['balance']>=$plan['price']}
                                            <a href="{$_url}order/send/pppoe/{$plan['id']}"
                                                onclick="return confirm('{Lang::T('Buy this for friend account?')}')"
                                                class="btn btn-outline-primary btn-block btn-lg">{Lang::T('Buy for friend')}</a>
                                        {/if}
                                    </div>
                                </div>
                            </div>
                        {/foreach}
                    </div>
                {/if}
                {if Lang::arrayCount($radius_hotspot)>0}
                    <ol class="breadcrumb">
                        <li>{if $_c['radius_plan']==''}Radius Plan{else}{$_c['radius_plan']}{/if}</li>
                        <li>{if $_c['hotspot_plan']==''}Hotspot Plan{else}{$_c['hotspot_plan']}{/if}</li>
                    </ol>
                    <div class="row">
                        {foreach $radius_hotspot as $plan}
                            <div class="col-xl-3 col-xxl-4">
                                <div class="card card-primary">
                                    <div class="card-header border-0 pb-0">
                                        <div>
                                            <h4 class="card-title mb-2">{$plan['name_plan']}</h4>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex align-items-end mt-2 pb-3 justify-content-between">
                                            <span>{Lang::T('Type')}</span>
                                            <span class="fs-18"><span class="text-black pe-2">{$plan['type']}
                                        </div>
                                        <div class="d-flex align-items-end mt-2 pb-3 justify-content-between">
                                            <span>{Lang::T('Price')}</span>
                                            <span class="fs-18"><span class="text-black pe-2">{Lang::moneyFormat($plan['price'])}
                                        </div>
                                        <div class="d-flex align-items-end mt-2 pb-3 justify-content-between">
                                            <span>{Lang::T('Validity')}</span>
                                            <span class="fs-18"><span class="text-black pe-2">{$plan['validity']} {$plan['validity_unit']}
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="btn-group btn-group-justified" role="group" aria-label="...">
                                            <a href="{$_url}order/gateway/hotspot/{$plan['id']}"
                                                onclick="return confirm('{Lang::T('Buy this? your active package will be overwritten')}')"
                                                class="btn btn-outline-primary btn-block btn-lg">Buy</a>
                                            {if $_c['enable_balance'] == 'yes' && $_user['balance']>=$plan['price']}
                                                <a href="{$_url}order/pay/hotspot/{$plan['id']}"
                                                    onclick="return confirm('{Lang::T('Pay this with Balance? your active package will be overwritten')}')"
                                                    class="btn btn-outline-primary btn-block btn-lg">{Lang::T('Pay With Balance')}</a>
                                            {/if}
                                        </div>
                                        {if $_c['enable_balance'] == 'yes' && $_c['allow_balance_transfer'] == 'yes' && $_user['balance']>=$plan['price']}
                                            <a href="{$_url}order/send/hotspot/{$plan['id']}"
                                                onclick="return confirm('{Lang::T('Buy this for friend account?')}')"
                                                class="btn btn-outline-primary btn-block btn-lg">{Lang::T('Buy for friend')}</a>
                                        {/if}
                                    </div>
                                </div>
                            </div>
                        {/foreach}
                    </div>
                {/if}
            {/if}
        {/if}
        {foreach $routers as $router}
            {if Validator::isRouterHasPlan($plans_hotspot, $router['name']) || Validator::isRouterHasPlan($plans_pppoe, $router['name'])}
            <div class="col-xl-12 col-xxl-12">
                <div class="card card-solid card-primary bg-gray">
                    <div class="card-header card-title text-bold">{$router['name']} - {if $router['description'] != ''}{$router['description']} {/if}</div>
                    {if $_user['service_type'] == 'Hotspot' && Validator::countRouterPlan($plans_hotspot, $router['name'])>0}
                        <div class="card-header">{if $_c['hotspot_plan']==''}Hotspot Plan{else}{$_c['hotspot_plan']}{/if}
                        </div>
                        <div class="card-body row">
                            {foreach $plans_hotspot as $plan}
                                {if $router['name'] eq $plan['routers']}
                                    <div class="col-xl-3 col-xxl-4">
                                        <div class="card card-primary">
                                            <div class="card-header border-0 pb-0">
                                                <div>
                                                    <h4 class="card-title mb-2">{$plan['name_plan']}</h4>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="d-flex align-items-end mt-2 pb-3 justify-content-between">
                                                    <span>{Lang::T('Type')}</span>
                                                    <span class="fs-18"><span class="text-black pe-2">{$plan['type']}
                                                </div>
                                                <div class="d-flex align-items-end mt-2 pb-3 justify-content-between">
                                                    <span>{Lang::T('Price')}</span>
                                                    <span class="fs-18"><span class="text-black pe-2">{Lang::moneyFormat($plan['price'])}
                                                </div>
                                                <div class="d-flex align-items-end mt-2 pb-3 justify-content-between">
                                                    <span>{Lang::T('Validity')}</span>
                                                    <span class="fs-18"><span class="text-black pe-2">{$plan['validity']} {$plan['validity_unit']}
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <div class="btn-group btn-group-justified" role="group" aria-label="...">
                                                    <a href="{$_url}order/gateway/{$router['id']}/{$plan['id']}"
                                                        onclick="return confirm('{Lang::T('Buy this? your active package will be overwrite')}')"
                                                        class="btn btn-outline-primary d-block btn-lg">Buy</a>
                                                    {if $_c['enable_balance'] == 'yes' && $_user['balance']>=$plan['price']}
                                                        <a href="{$_url}order/pay/{$router['id']}/{$plan['id']}"
                                                            onclick="return confirm('{Lang::T('Pay this with Balance? your active package will be overwrite')}')"
                                                            class="btn btn-outline-primary btn-block btn-lg">{Lang::T('Pay With Balance')}</a>
                                                    {/if}
                                                </div>
                                                {if $_c['enable_balance'] == 'yes' && $_c['allow_balance_transfer'] == 'yes' && $_user['balance']>=$plan['price']}
                                                    <a href="{$_url}order/send/{$router['id']}/{$plan['id']}"
                                                        onclick="return confirm('{Lang::T('Buy this for friend account?')}')"
                                                        class="btn btn-outline-primary d-block btn-lg">{Lang::T('Buy for friend')}</a>
                                                {/if}
                                            </div>
                                        </div>
                                    </div>
                                {/if}
                            {/foreach}
                        </div>
                    {/if}
                    {if $_user['service_type'] == 'PPPoE' && Validator::countRouterPlan($plans_pppoe,$router['name'])>0}
                        <div class="card-header text-white">{if $_c['pppoe_plan']==''}PPPOE Plan{else}{$_c['pppoe_plan']}{/if}</div>
                        <div class="card-body row">
                            {foreach $plans_pppoe as $plan}
                                {if $router['name'] eq $plan['routers']}
                                    <div class="col-xl-3 col-xxl-4">
                                        <div class="card card- card-primary">
                                            <div class="card-header border-0 pb-0">
                                                <div>
                                                    <h4 class="card-title mb-2">{$plan['name_plan']}</h4>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="d-flex align-items-end mt-2 pb-3 justify-content-between">
                                                    <span>{Lang::T('Type')}</span>
                                                    <span class="fs-18"><span class="text-black pe-2">{$plan['type']}
                                                </div>
                                                <div class="d-flex align-items-end mt-2 pb-3 justify-content-between">
                                                    <span>{Lang::T('Price')}</span>
                                                    <span class="fs-18"><span class="text-black pe-2">{Lang::moneyFormat($plan['price'])}
                                                </div>
                                                <div class="d-flex align-items-end mt-2 pb-3 justify-content-between">
                                                    <span>{Lang::T('Validity')}</span>
                                                    <span class="fs-18"><span class="text-black pe-2">{$plan['validity']} {$plan['validity_unit']}
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <div class="btn-group btn-group-justified" role="group" aria-label="...">
                                                    <a href="{$_url}order/gateway/{$router['id']}/{$plan['id']}"
                                                        onclick="return confirm('{Lang::T('Buy this? your active package will be overwrite')}')"
                                                        class="btn btn-outline-primary btn-block btn-lg">Buy</a>
                                                    {if $_c['enable_balance'] == 'yes' && $_user['balance']>=$plan['price']}
                                                        <a href="{$_url}order/pay/{$router['id']}/{$plan['id']}"
                                                            onclick="return confirm('{Lang::T('Pay this with Balance? your active package will be overwrite')}')"
                                                            class="btn btn-outline-primary btn-block btn-lg">{Lang::T('Pay With Balance')}</a>
                                                    {/if}
                                                </div>
                                                {if $_c['enable_balance'] == 'yes' && $_c['allow_balance_transfer'] == 'yes' && $_user['balance']>=$plan['price']}
                                                    <a href="{$_url}order/send/{$router['id']}/{$plan['id']}"
                                                        onclick="return confirm('{Lang::T('Buy this for friend account?')}')"
                                                        class="btn btn-outline-primary btn-block btn-lg">{Lang::T('Buy for friend')}</a>
                                                {/if}
                                            </div>
                                        </div>
                                    </div>
                                {/if}
                            {/foreach}
                        </div>
                    {/if}
                    {if $_user['service_type'] == 'Others' || $_user['service_type'] == '' && (Validator::countRouterPlan($plans_hotspot, $router['name'])>0 || Validator::countRouterPlan($plans_pppoe, $router['name'])>0)}
                        <div class="card-header text-white">{if $_c['hotspot_plan']==''}Hotspot Plan{else}{$_c['hotspot_plan']}{/if}
                        </div>
                        <div class="card-body row">
                            {foreach $plans_hotspot as $plan}
                                {if $router['name'] eq $plan['routers']}
                                    <div class="col-xl-3 col-xxl-4">
                                        <div class="card card-primary">
                                            <div class="card-title border-0 pb-0">
                                                <div>
                                                    <h4 class="card-title mb-2">{$plan['name_plan']}</h4>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="d-flex align-items-end mt-2 pb-3 justify-content-between">
                                                    <span>{Lang::T('Type')}</span>
                                                    <span class="fs-18"><span class="text-black pe-2">{$plan['type']}
                                                </div>
                                                <div class="d-flex align-items-end mt-2 pb-3 justify-content-between">
                                                    <span>{Lang::T('Price')}</span>
                                                    <span class="fs-18"><span class="text-black pe-2">{Lang::moneyFormat($plan['price'])}
                                                </div>
                                                <div class="d-flex align-items-end mt-2 pb-3 justify-content-between">
                                                    <span>{Lang::T('Validity')}</span>
                                                    <span class="fs-18"><span class="text-black pe-2">{$plan['validity']} {$plan['validity_unit']}
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <div class="btn-group btn-group-justified" role="group" aria-label="...">
                                                    <a href="{$_url}order/gateway/{$router['id']}/{$plan['id']}"
                                                        onclick="return confirm('{Lang::T('Buy this? your active package will be overwrite')}')"
                                                        class="btn btn-outline-primary btn-block btn-lg">Buy</a>
                                                    {if $_c['enable_balance'] == 'yes' && $_user['balance']>=$plan['price']}
                                                        <a href="{$_url}order/pay/{$router['id']}/{$plan['id']}"
                                                            onclick="return confirm('{Lang::T('Pay this with Balance? your active package will be overwrite')}')"
                                                            class="btn btn-outline-primary btn-block btn-lg">{Lang::T('Pay With Balance')}</a>
                                                    {/if}
                                                </div>
                                                {if $_c['enable_balance'] == 'yes' && $_c['allow_balance_transfer'] == 'yes' && $_user['balance']>=$plan['price']}
                                                    <a href="{$_url}order/send/{$router['id']}/{$plan['id']}"
                                                        onclick="return confirm('{Lang::T('Buy this for friend account?')}')"
                                                        class="btn btn-outline-primary btn-block btn-lg">{Lang::T('Buy for friend')}</a>
                                                {/if}
                                            </div>
                                        </div>
                                    </div>
                                {/if}
                            {/foreach}
                        </div>
                        <div class="card-header text-white">{if $_c['pppoe_plan']==''}PPPOE Plan{else}{$_c['pppoe_plan']}{/if}</div>
                        <div class="card-body row">
                            {foreach $plans_pppoe as $plan}
                                {if $router['name'] eq $plan['routers']}
                                    <div class="col-xl-3 col-xxl-4">
                                        <div class="card card- card-primary">
                                            <div class="card-header border-0 pb-0">
                                                <div>
                                                    <h4 class="card-title mb-2">{$plan['name_plan']}</h4>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="d-flex align-items-end mt-2 pb-3 justify-content-between">
                                                    <span>{Lang::T('Type')}</span>
                                                    <span class="fs-18"><span class="text-black pe-2">{$plan['type']}
                                                </div>
                                                <div class="d-flex align-items-end mt-2 pb-3 justify-content-between">
                                                    <span>{Lang::T('Price')}</span>
                                                    <span class="fs-18"><span class="text-black pe-2">{Lang::moneyFormat($plan['price'])}
                                                </div>
                                                <div class="d-flex align-items-end mt-2 pb-3 justify-content-between">
                                                    <span>{Lang::T('Validity')}</span>
                                                    <span class="fs-18"><span class="text-black pe-2">{$plan['validity']} {$plan['validity_unit']}
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <div class="btn-group btn-group-justified" role="group" aria-label="...">
                                                    <a href="{$_url}order/gateway/{$router['id']}/{$plan['id']}"
                                                        onclick="return confirm('{Lang::T('Buy this? your active package will be overwrite')}')"
                                                        class="btn btn-outline-primary btn-block btn-lg">Buy</a>
                                                    {if $_c['enable_balance'] == 'yes' && $_user['balance']>=$plan['price']}
                                                        <a href="{$_url}order/pay/{$router['id']}/{$plan['id']}"
                                                            onclick="return confirm('{Lang::T('Pay this with Balance? your active package will be overwrite')}')"
                                                            class="btn btn-outline-primary btn-block btn-lg">{Lang::T('Pay With Balance')}</a>
                                                    {/if}
                                                </div>
                                                {if $_c['enable_balance'] == 'yes' && $_c['allow_balance_transfer'] == 'yes' && $_user['balance']>=$plan['price']}
                                                    <a href="{$_url}order/send/{$router['id']}/{$plan['id']}"
                                                        onclick="return confirm('{Lang::T('Buy this for friend account?')}')"
                                                        class="btn btn-outline-primary btn-block btn-lg">{Lang::T('Buy for friend')}</a>
                                                {/if}
                                            </div>
                                        </div>
                                    </div>
                                {/if}
                            {/foreach}
                        </div>
                    {/if}
                </div>
            </div>
            {/if}
        {/foreach}
                </div>
{include file="sections/user-footer.tpl"}
<?php
/* Smarty version 4.3.1, created on 2024-06-24 23:12:42
  from '/home/codevibe/azerin.codevibeisp.co.ke/ui/ui/user-orderPlan.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6679d33a15b1d4_35363533',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '272df66e4a80afb9297a610e3b64bca19d30228a' => 
    array (
      0 => '/home/codevibe/azerin.codevibeisp.co.ke/ui/ui/user-orderPlan.tpl',
      1 => 1719247381,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/user-header.tpl' => 1,
    'file:sections/user-footer.tpl' => 1,
  ),
),false)) {
function content_6679d33a15b1d4_35363533 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/user-header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
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
                    <?php if ($_smarty_tpl->tpl_vars['_c']->value['radius_enable']) {?>
            <?php if ($_smarty_tpl->tpl_vars['_user']->value['service_type'] == 'PPPoE') {?>
                <?php if (Lang::arrayCount($_smarty_tpl->tpl_vars['radius_pppoe']->value) > 0) {?>
                    <ol class="breadcrumb">
                        <li><?php if ($_smarty_tpl->tpl_vars['_c']->value['radius_plan'] == '') {?>Radius Plan<?php } else {
echo $_smarty_tpl->tpl_vars['_c']->value['radius_plan'];
}?></li>
                        <li><?php if ($_smarty_tpl->tpl_vars['_c']->value['pppoe_plan'] == '') {?>PPPOE Plan<?php } else {
echo $_smarty_tpl->tpl_vars['_c']->value['pppoe_plan'];
}?></li>
                    </ol>
                    <div class="row">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['radius_pppoe']->value, 'plan');
$_smarty_tpl->tpl_vars['plan']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['plan']->value) {
$_smarty_tpl->tpl_vars['plan']->do_else = false;
?>
                            <div class="col-xl-3 col-xxl-4">
                                <div class="card card-primary">
                                    <div class="card-header border-0 pb-0">
                                        <div>
                                            <h4 class="card-header mb-2"><?php echo $_smarty_tpl->tpl_vars['plan']->value['name_plan'];?>
</h4>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex align-items-end mt-2 pb-3 justify-content-between">
                                            <span><?php echo Lang::T('Type');?>
</span>
                                            <span class="fs-18"><span class="text-black pe-2"><?php echo $_smarty_tpl->tpl_vars['plan']->value['type'];?>

                                        </div>
                                        <div class="d-flex align-items-end mt-2 pb-3 justify-content-between">
                                            <span><?php echo Lang::T('Price');?>
</span>
                                            <span class="fs-18"><span class="text-black pe-2"><?php echo Lang::moneyFormat($_smarty_tpl->tpl_vars['plan']->value['price']);?>

                                        </div>
                                        <div class="d-flex align-items-end mt-2 pb-3 justify-content-between">
                                            <span><?php echo Lang::T('Validity');?>
</span>
                                            <span class="fs-18"><span class="text-black pe-2"><?php echo $_smarty_tpl->tpl_vars['plan']->value['validity'];?>
 <?php echo $_smarty_tpl->tpl_vars['plan']->value['validity_unit'];?>

                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="btn-group btn-group-justified" role="group" aria-label="...">
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
order/gateway/radius/<?php echo $_smarty_tpl->tpl_vars['plan']->value['id'];?>
"
                                                onclick="return confirm('<?php echo Lang::T('Buy this? your active package will be overwrite');?>
')"
                                                class="btn btn-outline-primary btn-block btn-lg">Buy</a>
                                            <?php if ($_smarty_tpl->tpl_vars['_c']->value['enable_balance'] == 'yes' && $_smarty_tpl->tpl_vars['_user']->value['balance'] >= $_smarty_tpl->tpl_vars['plan']->value['price']) {?>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
order/pay/radius/<?php echo $_smarty_tpl->tpl_vars['plan']->value['id'];?>
"
                                                    onclick="return confirm('<?php echo Lang::T('Pay this with Balance? your active package will be overwrite');?>
')"
                                                    class="btn btn-outline-primary btn-block btn-lg"><?php echo Lang::T('Pay With Balance');?>
</a>
                                            <?php }?>
                                        </div>
                                        <?php if ($_smarty_tpl->tpl_vars['_c']->value['enable_balance'] == 'yes' && $_smarty_tpl->tpl_vars['_c']->value['allow_balance_transfer'] == 'yes' && $_smarty_tpl->tpl_vars['_user']->value['balance'] >= $_smarty_tpl->tpl_vars['plan']->value['price']) {?>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
order/send/radius/<?php echo $_smarty_tpl->tpl_vars['plan']->value['id'];?>
"
                                                onclick="return confirm('<?php echo Lang::T('Buy this for friend account?');?>
')"
                                                class="btn btn-outline-primary btn-block btn-lg"><?php echo Lang::T('Buy for friend');?>
</a>
                                        <?php }?>
                                    </div>
                                </div>
                            </div>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                <?php }?>
            <?php } elseif ($_smarty_tpl->tpl_vars['_user']->value['service_type'] == 'Hotspot') {?>
                <?php if (Lang::arrayCount($_smarty_tpl->tpl_vars['radius_hotspot']->value) > 0) {?>
                    <ol class="breadcrumb">
                        <li><?php if ($_smarty_tpl->tpl_vars['_c']->value['radius_plan'] == '') {?>Radius Plan<?php } else {
echo $_smarty_tpl->tpl_vars['_c']->value['radius_plan'];
}?></li>
                        <li><?php if ($_smarty_tpl->tpl_vars['_c']->value['hotspot_plan'] == '') {?>Hotspot Plan<?php } else {
echo $_smarty_tpl->tpl_vars['_c']->value['hotspot_plan'];
}?></li>
                    </ol>
                    <div class="row">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['radius_hotspot']->value, 'plan');
$_smarty_tpl->tpl_vars['plan']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['plan']->value) {
$_smarty_tpl->tpl_vars['plan']->do_else = false;
?>
                            <div class="col-xl-3 col-xxl-4">
                                <div class="card card-primary">
                                    <div class="card-header border-0 pb-0">
                                        <div>
                                            <h4 class="card-header mb-2"><?php echo $_smarty_tpl->tpl_vars['plan']->value['name_plan'];?>
</h4>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex align-items-end mt-2 pb-3 justify-content-between">
                                            <span><?php echo Lang::T('Type');?>
</span>
                                            <span class="fs-18"><span class="text-black pe-2"><?php echo $_smarty_tpl->tpl_vars['plan']->value['type'];?>

                                        </div>
                                        <div class="d-flex align-items-end mt-2 pb-3 justify-content-between">
                                            <span><?php echo Lang::T('Price');?>
</span>
                                            <span class="fs-18"><span class="text-black pe-2"><?php echo Lang::moneyFormat($_smarty_tpl->tpl_vars['plan']->value['price']);?>

                                        </div>
                                        <div class="d-flex align-items-end mt-2 pb-3 justify-content-between">
                                            <span><?php echo Lang::T('Validity');?>
</span>
                                            <span class="fs-18"><span class="text-black pe-2"><?php echo $_smarty_tpl->tpl_vars['plan']->value['validity'];?>
 <?php echo $_smarty_tpl->tpl_vars['plan']->value['validity_unit'];?>

                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="btn-group btn-group-justified" role="group" aria-label="...">
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
order/gateway/radius/<?php echo $_smarty_tpl->tpl_vars['plan']->value['id'];?>
"
                                                onclick="return confirm('<?php echo Lang::T('Buy this? your active package will be overwrite');?>
')"
                                                class="btn btn-outline-primary btn-block btn-lg">Buy</a>
                                            <?php if ($_smarty_tpl->tpl_vars['_c']->value['enable_balance'] == 'yes' && $_smarty_tpl->tpl_vars['_user']->value['balance'] >= $_smarty_tpl->tpl_vars['plan']->value['price']) {?>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
order/pay/radius/<?php echo $_smarty_tpl->tpl_vars['plan']->value['id'];?>
"
                                                    onclick="return confirm('<?php echo Lang::T('Pay this with Balance? your active package will be overwrite');?>
')"
                                                    class="btn btn-outline-primary btn-block btn-lg"><?php echo Lang::T('Pay With Balance');?>
</a>
                                            <?php }?>
                                        </div>
                                        <?php if ($_smarty_tpl->tpl_vars['_c']->value['enable_balance'] == 'yes' && $_smarty_tpl->tpl_vars['_c']->value['allow_balance_transfer'] == 'yes' && $_smarty_tpl->tpl_vars['_user']->value['balance'] >= $_smarty_tpl->tpl_vars['plan']->value['price']) {?>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
order/send/radius/<?php echo $_smarty_tpl->tpl_vars['plan']->value['id'];?>
"
                                                onclick="return confirm('<?php echo Lang::T('Buy this for friend account?');?>
')"
                                                class="btn btn-outline-primary btn-block btn-lg"><?php echo Lang::T('Buy for friend');?>
</a>
                                        <?php }?>
                                    </div>
                                </div>
                            </div>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                <?php }?>
            <?php } elseif ($_smarty_tpl->tpl_vars['_user']->value['service_type'] == 'Others' || $_smarty_tpl->tpl_vars['_user']->value['service_type'] == '' && (Lang::arrayCount($_smarty_tpl->tpl_vars['radius_pppoe']->value) > 0 || Lang::arrayCount($_smarty_tpl->tpl_vars['radius_hotspot']->value) > 0)) {?>
                <ol class="breadcrumb">
                    <li><?php if ($_smarty_tpl->tpl_vars['_c']->value['radius_plan'] == '') {?>Radius Plan<?php } else {
echo $_smarty_tpl->tpl_vars['_c']->value['radius_plan'];
}?></li>
                    <li><?php if ($_smarty_tpl->tpl_vars['_c']->value['pppoe_plan'] == '') {?>PPPOE Plan<?php } else {
echo $_smarty_tpl->tpl_vars['_c']->value['pppoe_plan'];
}?></li>
                </ol>
                <?php if (Lang::arrayCount($_smarty_tpl->tpl_vars['radius_pppoe']->value) > 0) {?>
                    <div class="row">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['radius_pppoe']->value, 'plan');
$_smarty_tpl->tpl_vars['plan']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['plan']->value) {
$_smarty_tpl->tpl_vars['plan']->do_else = false;
?>
                            <div class="col-xl-3 col-xxl-4">
                                <div class="card card-primary">
                                    <div class="card-header border-0 pb-0"><?php echo $_smarty_tpl->tpl_vars['plan']->value['name_plan'];?>

                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex align-items-end mt-2 pb-3 justify-content-between">
                                            <span><?php echo Lang::T('Type');?>
</span>
                                            <span class="fs-18"><span class="text-black pe-2"><?php echo $_smarty_tpl->tpl_vars['plan']->value['type'];?>

                                        </div>
                                        <div class="d-flex align-items-end mt-2 pb-3 justify-content-between">
                                            <span><?php echo Lang::T('Price');?>
</span>
                                            <span class="fs-18"><span class="text-black pe-2"><?php echo Lang::moneyFormat($_smarty_tpl->tpl_vars['plan']->value['price']);?>

                                        </div>
                                        <div class="d-flex align-items-end mt-2 pb-3 justify-content-between">
                                            <span><?php echo Lang::T('Validity');?>
</span>
                                            <span class="fs-18"><span class="text-black pe-2"><?php echo $_smarty_tpl->tpl_vars['plan']->value['validity'];?>
 <?php echo $_smarty_tpl->tpl_vars['plan']->value['validity_unit'];?>

                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="btn-group btn-group-justified" role="group" aria-label="...">
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
order/gateway/pppoe/<?php echo $_smarty_tpl->tpl_vars['plan']->value['id'];?>
"
                                                onclick="return confirm('<?php echo Lang::T('Buy this? your active package will be overwritten');?>
')"
                                                class="btn btn-outline-primary btn-block btn-lg">Buy</a>
                                            <?php if ($_smarty_tpl->tpl_vars['_c']->value['enable_balance'] == 'yes' && $_smarty_tpl->tpl_vars['_user']->value['balance'] >= $_smarty_tpl->tpl_vars['plan']->value['price']) {?>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
order/pay/pppoe/<?php echo $_smarty_tpl->tpl_vars['plan']->value['id'];?>
"
                                                    onclick="return confirm('<?php echo Lang::T('Pay this with Balance? your active package will be overwritten');?>
')"
                                                    class="btn btn-outline-primary btn-block btn-lg"><?php echo Lang::T('Pay With Balance');?>
</a>
                                            <?php }?>
                                        </div>
                                        <?php if ($_smarty_tpl->tpl_vars['_c']->value['enable_balance'] == 'yes' && $_smarty_tpl->tpl_vars['_c']->value['allow_balance_transfer'] == 'yes' && $_smarty_tpl->tpl_vars['_user']->value['balance'] >= $_smarty_tpl->tpl_vars['plan']->value['price']) {?>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
order/send/pppoe/<?php echo $_smarty_tpl->tpl_vars['plan']->value['id'];?>
"
                                                onclick="return confirm('<?php echo Lang::T('Buy this for friend account?');?>
')"
                                                class="btn btn-outline-primary btn-block btn-lg"><?php echo Lang::T('Buy for friend');?>
</a>
                                        <?php }?>
                                    </div>
                                </div>
                            </div>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                <?php }?>
                <?php if (Lang::arrayCount($_smarty_tpl->tpl_vars['radius_hotspot']->value) > 0) {?>
                    <ol class="breadcrumb">
                        <li><?php if ($_smarty_tpl->tpl_vars['_c']->value['radius_plan'] == '') {?>Radius Plan<?php } else {
echo $_smarty_tpl->tpl_vars['_c']->value['radius_plan'];
}?></li>
                        <li><?php if ($_smarty_tpl->tpl_vars['_c']->value['hotspot_plan'] == '') {?>Hotspot Plan<?php } else {
echo $_smarty_tpl->tpl_vars['_c']->value['hotspot_plan'];
}?></li>
                    </ol>
                    <div class="row">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['radius_hotspot']->value, 'plan');
$_smarty_tpl->tpl_vars['plan']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['plan']->value) {
$_smarty_tpl->tpl_vars['plan']->do_else = false;
?>
                            <div class="col-xl-3 col-xxl-4">
                                <div class="card card-primary">
                                    <div class="card-header border-0 pb-0">
                                        <div>
                                            <h4 class="card-title mb-2"><?php echo $_smarty_tpl->tpl_vars['plan']->value['name_plan'];?>
</h4>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex align-items-end mt-2 pb-3 justify-content-between">
                                            <span><?php echo Lang::T('Type');?>
</span>
                                            <span class="fs-18"><span class="text-black pe-2"><?php echo $_smarty_tpl->tpl_vars['plan']->value['type'];?>

                                        </div>
                                        <div class="d-flex align-items-end mt-2 pb-3 justify-content-between">
                                            <span><?php echo Lang::T('Price');?>
</span>
                                            <span class="fs-18"><span class="text-black pe-2"><?php echo Lang::moneyFormat($_smarty_tpl->tpl_vars['plan']->value['price']);?>

                                        </div>
                                        <div class="d-flex align-items-end mt-2 pb-3 justify-content-between">
                                            <span><?php echo Lang::T('Validity');?>
</span>
                                            <span class="fs-18"><span class="text-black pe-2"><?php echo $_smarty_tpl->tpl_vars['plan']->value['validity'];?>
 <?php echo $_smarty_tpl->tpl_vars['plan']->value['validity_unit'];?>

                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="btn-group btn-group-justified" role="group" aria-label="...">
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
order/gateway/hotspot/<?php echo $_smarty_tpl->tpl_vars['plan']->value['id'];?>
"
                                                onclick="return confirm('<?php echo Lang::T('Buy this? your active package will be overwritten');?>
')"
                                                class="btn btn-outline-primary btn-block btn-lg">Buy</a>
                                            <?php if ($_smarty_tpl->tpl_vars['_c']->value['enable_balance'] == 'yes' && $_smarty_tpl->tpl_vars['_user']->value['balance'] >= $_smarty_tpl->tpl_vars['plan']->value['price']) {?>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
order/pay/hotspot/<?php echo $_smarty_tpl->tpl_vars['plan']->value['id'];?>
"
                                                    onclick="return confirm('<?php echo Lang::T('Pay this with Balance? your active package will be overwritten');?>
')"
                                                    class="btn btn-outline-primary btn-block btn-lg"><?php echo Lang::T('Pay With Balance');?>
</a>
                                            <?php }?>
                                        </div>
                                        <?php if ($_smarty_tpl->tpl_vars['_c']->value['enable_balance'] == 'yes' && $_smarty_tpl->tpl_vars['_c']->value['allow_balance_transfer'] == 'yes' && $_smarty_tpl->tpl_vars['_user']->value['balance'] >= $_smarty_tpl->tpl_vars['plan']->value['price']) {?>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
order/send/hotspot/<?php echo $_smarty_tpl->tpl_vars['plan']->value['id'];?>
"
                                                onclick="return confirm('<?php echo Lang::T('Buy this for friend account?');?>
')"
                                                class="btn btn-outline-primary btn-block btn-lg"><?php echo Lang::T('Buy for friend');?>
</a>
                                        <?php }?>
                                    </div>
                                </div>
                            </div>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                <?php }?>
            <?php }?>
        <?php }?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['routers']->value, 'router');
$_smarty_tpl->tpl_vars['router']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['router']->value) {
$_smarty_tpl->tpl_vars['router']->do_else = false;
?>
            <?php if (Validator::isRouterHasPlan($_smarty_tpl->tpl_vars['plans_hotspot']->value,$_smarty_tpl->tpl_vars['router']->value['name']) || Validator::isRouterHasPlan($_smarty_tpl->tpl_vars['plans_pppoe']->value,$_smarty_tpl->tpl_vars['router']->value['name'])) {?>
            <div class="col-xl-12 col-xxl-12">
                <div class="card card-solid card-primary bg-gray">
                    <div class="card-header card-title text-bold"><?php echo $_smarty_tpl->tpl_vars['router']->value['name'];?>
 - <?php if ($_smarty_tpl->tpl_vars['router']->value['description'] != '') {
echo $_smarty_tpl->tpl_vars['router']->value['description'];?>
 <?php }?></div>
                    <?php if ($_smarty_tpl->tpl_vars['_user']->value['service_type'] == 'Hotspot' && Validator::countRouterPlan($_smarty_tpl->tpl_vars['plans_hotspot']->value,$_smarty_tpl->tpl_vars['router']->value['name']) > 0) {?>
                        <div class="card-header"><?php if ($_smarty_tpl->tpl_vars['_c']->value['hotspot_plan'] == '') {?>Hotspot Plan<?php } else {
echo $_smarty_tpl->tpl_vars['_c']->value['hotspot_plan'];
}?>
                        </div>
                        <div class="card-body row">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['plans_hotspot']->value, 'plan');
$_smarty_tpl->tpl_vars['plan']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['plan']->value) {
$_smarty_tpl->tpl_vars['plan']->do_else = false;
?>
                                <?php if ($_smarty_tpl->tpl_vars['router']->value['name'] == $_smarty_tpl->tpl_vars['plan']->value['routers']) {?>
                                    <div class="col-xl-3 col-xxl-4">
                                        <div class="card card-primary">
                                            <div class="card-header border-0 pb-0">
                                                <div>
                                                    <h4 class="card-title mb-2"><?php echo $_smarty_tpl->tpl_vars['plan']->value['name_plan'];?>
</h4>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="d-flex align-items-end mt-2 pb-3 justify-content-between">
                                                    <span><?php echo Lang::T('Type');?>
</span>
                                                    <span class="fs-18"><span class="text-black pe-2"><?php echo $_smarty_tpl->tpl_vars['plan']->value['type'];?>

                                                </div>
                                                <div class="d-flex align-items-end mt-2 pb-3 justify-content-between">
                                                    <span><?php echo Lang::T('Price');?>
</span>
                                                    <span class="fs-18"><span class="text-black pe-2"><?php echo Lang::moneyFormat($_smarty_tpl->tpl_vars['plan']->value['price']);?>

                                                </div>
                                                <div class="d-flex align-items-end mt-2 pb-3 justify-content-between">
                                                    <span><?php echo Lang::T('Validity');?>
</span>
                                                    <span class="fs-18"><span class="text-black pe-2"><?php echo $_smarty_tpl->tpl_vars['plan']->value['validity'];?>
 <?php echo $_smarty_tpl->tpl_vars['plan']->value['validity_unit'];?>

                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <div class="btn-group btn-group-justified" role="group" aria-label="...">
                                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
order/gateway/<?php echo $_smarty_tpl->tpl_vars['router']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['plan']->value['id'];?>
"
                                                        onclick="return confirm('<?php echo Lang::T('Buy this? your active package will be overwrite');?>
')"
                                                        class="btn btn-outline-primary d-block btn-lg">Buy</a>
                                                    <?php if ($_smarty_tpl->tpl_vars['_c']->value['enable_balance'] == 'yes' && $_smarty_tpl->tpl_vars['_user']->value['balance'] >= $_smarty_tpl->tpl_vars['plan']->value['price']) {?>
                                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
order/pay/<?php echo $_smarty_tpl->tpl_vars['router']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['plan']->value['id'];?>
"
                                                            onclick="return confirm('<?php echo Lang::T('Pay this with Balance? your active package will be overwrite');?>
')"
                                                            class="btn btn-outline-primary btn-block btn-lg"><?php echo Lang::T('Pay With Balance');?>
</a>
                                                    <?php }?>
                                                </div>
                                                <?php if ($_smarty_tpl->tpl_vars['_c']->value['enable_balance'] == 'yes' && $_smarty_tpl->tpl_vars['_c']->value['allow_balance_transfer'] == 'yes' && $_smarty_tpl->tpl_vars['_user']->value['balance'] >= $_smarty_tpl->tpl_vars['plan']->value['price']) {?>
                                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
order/send/<?php echo $_smarty_tpl->tpl_vars['router']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['plan']->value['id'];?>
"
                                                        onclick="return confirm('<?php echo Lang::T('Buy this for friend account?');?>
')"
                                                        class="btn btn-outline-primary d-block btn-lg"><?php echo Lang::T('Buy for friend');?>
</a>
                                                <?php }?>
                                            </div>
                                        </div>
                                    </div>
                                <?php }?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['_user']->value['service_type'] == 'PPPoE' && Validator::countRouterPlan($_smarty_tpl->tpl_vars['plans_pppoe']->value,$_smarty_tpl->tpl_vars['router']->value['name']) > 0) {?>
                        <div class="card-header text-white"><?php if ($_smarty_tpl->tpl_vars['_c']->value['pppoe_plan'] == '') {?>PPPOE Plan<?php } else {
echo $_smarty_tpl->tpl_vars['_c']->value['pppoe_plan'];
}?></div>
                        <div class="card-body row">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['plans_pppoe']->value, 'plan');
$_smarty_tpl->tpl_vars['plan']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['plan']->value) {
$_smarty_tpl->tpl_vars['plan']->do_else = false;
?>
                                <?php if ($_smarty_tpl->tpl_vars['router']->value['name'] == $_smarty_tpl->tpl_vars['plan']->value['routers']) {?>
                                    <div class="col-xl-3 col-xxl-4">
                                        <div class="card card- card-primary">
                                            <div class="card-header border-0 pb-0">
                                                <div>
                                                    <h4 class="card-title mb-2"><?php echo $_smarty_tpl->tpl_vars['plan']->value['name_plan'];?>
</h4>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="d-flex align-items-end mt-2 pb-3 justify-content-between">
                                                    <span><?php echo Lang::T('Type');?>
</span>
                                                    <span class="fs-18"><span class="text-black pe-2"><?php echo $_smarty_tpl->tpl_vars['plan']->value['type'];?>

                                                </div>
                                                <div class="d-flex align-items-end mt-2 pb-3 justify-content-between">
                                                    <span><?php echo Lang::T('Price');?>
</span>
                                                    <span class="fs-18"><span class="text-black pe-2"><?php echo Lang::moneyFormat($_smarty_tpl->tpl_vars['plan']->value['price']);?>

                                                </div>
                                                <div class="d-flex align-items-end mt-2 pb-3 justify-content-between">
                                                    <span><?php echo Lang::T('Validity');?>
</span>
                                                    <span class="fs-18"><span class="text-black pe-2"><?php echo $_smarty_tpl->tpl_vars['plan']->value['validity'];?>
 <?php echo $_smarty_tpl->tpl_vars['plan']->value['validity_unit'];?>

                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <div class="btn-group btn-group-justified" role="group" aria-label="...">
                                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
order/gateway/<?php echo $_smarty_tpl->tpl_vars['router']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['plan']->value['id'];?>
"
                                                        onclick="return confirm('<?php echo Lang::T('Buy this? your active package will be overwrite');?>
')"
                                                        class="btn btn-outline-primary btn-block btn-lg">Buy</a>
                                                    <?php if ($_smarty_tpl->tpl_vars['_c']->value['enable_balance'] == 'yes' && $_smarty_tpl->tpl_vars['_user']->value['balance'] >= $_smarty_tpl->tpl_vars['plan']->value['price']) {?>
                                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
order/pay/<?php echo $_smarty_tpl->tpl_vars['router']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['plan']->value['id'];?>
"
                                                            onclick="return confirm('<?php echo Lang::T('Pay this with Balance? your active package will be overwrite');?>
')"
                                                            class="btn btn-outline-primary btn-block btn-lg"><?php echo Lang::T('Pay With Balance');?>
</a>
                                                    <?php }?>
                                                </div>
                                                <?php if ($_smarty_tpl->tpl_vars['_c']->value['enable_balance'] == 'yes' && $_smarty_tpl->tpl_vars['_c']->value['allow_balance_transfer'] == 'yes' && $_smarty_tpl->tpl_vars['_user']->value['balance'] >= $_smarty_tpl->tpl_vars['plan']->value['price']) {?>
                                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
order/send/<?php echo $_smarty_tpl->tpl_vars['router']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['plan']->value['id'];?>
"
                                                        onclick="return confirm('<?php echo Lang::T('Buy this for friend account?');?>
')"
                                                        class="btn btn-outline-primary btn-block btn-lg"><?php echo Lang::T('Buy for friend');?>
</a>
                                                <?php }?>
                                            </div>
                                        </div>
                                    </div>
                                <?php }?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['_user']->value['service_type'] == 'Others' || $_smarty_tpl->tpl_vars['_user']->value['service_type'] == '' && (Validator::countRouterPlan($_smarty_tpl->tpl_vars['plans_hotspot']->value,$_smarty_tpl->tpl_vars['router']->value['name']) > 0 || Validator::countRouterPlan($_smarty_tpl->tpl_vars['plans_pppoe']->value,$_smarty_tpl->tpl_vars['router']->value['name']) > 0)) {?>
                        <div class="card-header text-white"><?php if ($_smarty_tpl->tpl_vars['_c']->value['hotspot_plan'] == '') {?>Hotspot Plan<?php } else {
echo $_smarty_tpl->tpl_vars['_c']->value['hotspot_plan'];
}?>
                        </div>
                        <div class="card-body row">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['plans_hotspot']->value, 'plan');
$_smarty_tpl->tpl_vars['plan']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['plan']->value) {
$_smarty_tpl->tpl_vars['plan']->do_else = false;
?>
                                <?php if ($_smarty_tpl->tpl_vars['router']->value['name'] == $_smarty_tpl->tpl_vars['plan']->value['routers']) {?>
                                    <div class="col-xl-3 col-xxl-4">
                                        <div class="card card-primary">
                                            <div class="card-title border-0 pb-0">
                                                <div>
                                                    <h4 class="card-title mb-2"><?php echo $_smarty_tpl->tpl_vars['plan']->value['name_plan'];?>
</h4>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="d-flex align-items-end mt-2 pb-3 justify-content-between">
                                                    <span><?php echo Lang::T('Type');?>
</span>
                                                    <span class="fs-18"><span class="text-black pe-2"><?php echo $_smarty_tpl->tpl_vars['plan']->value['type'];?>

                                                </div>
                                                <div class="d-flex align-items-end mt-2 pb-3 justify-content-between">
                                                    <span><?php echo Lang::T('Price');?>
</span>
                                                    <span class="fs-18"><span class="text-black pe-2"><?php echo Lang::moneyFormat($_smarty_tpl->tpl_vars['plan']->value['price']);?>

                                                </div>
                                                <div class="d-flex align-items-end mt-2 pb-3 justify-content-between">
                                                    <span><?php echo Lang::T('Validity');?>
</span>
                                                    <span class="fs-18"><span class="text-black pe-2"><?php echo $_smarty_tpl->tpl_vars['plan']->value['validity'];?>
 <?php echo $_smarty_tpl->tpl_vars['plan']->value['validity_unit'];?>

                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <div class="btn-group btn-group-justified" role="group" aria-label="...">
                                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
order/gateway/<?php echo $_smarty_tpl->tpl_vars['router']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['plan']->value['id'];?>
"
                                                        onclick="return confirm('<?php echo Lang::T('Buy this? your active package will be overwrite');?>
')"
                                                        class="btn btn-outline-primary btn-block btn-lg">Buy</a>
                                                    <?php if ($_smarty_tpl->tpl_vars['_c']->value['enable_balance'] == 'yes' && $_smarty_tpl->tpl_vars['_user']->value['balance'] >= $_smarty_tpl->tpl_vars['plan']->value['price']) {?>
                                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
order/pay/<?php echo $_smarty_tpl->tpl_vars['router']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['plan']->value['id'];?>
"
                                                            onclick="return confirm('<?php echo Lang::T('Pay this with Balance? your active package will be overwrite');?>
')"
                                                            class="btn btn-outline-primary btn-block btn-lg"><?php echo Lang::T('Pay With Balance');?>
</a>
                                                    <?php }?>
                                                </div>
                                                <?php if ($_smarty_tpl->tpl_vars['_c']->value['enable_balance'] == 'yes' && $_smarty_tpl->tpl_vars['_c']->value['allow_balance_transfer'] == 'yes' && $_smarty_tpl->tpl_vars['_user']->value['balance'] >= $_smarty_tpl->tpl_vars['plan']->value['price']) {?>
                                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
order/send/<?php echo $_smarty_tpl->tpl_vars['router']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['plan']->value['id'];?>
"
                                                        onclick="return confirm('<?php echo Lang::T('Buy this for friend account?');?>
')"
                                                        class="btn btn-outline-primary btn-block btn-lg"><?php echo Lang::T('Buy for friend');?>
</a>
                                                <?php }?>
                                            </div>
                                        </div>
                                    </div>
                                <?php }?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                        <div class="card-header text-white"><?php if ($_smarty_tpl->tpl_vars['_c']->value['pppoe_plan'] == '') {?>PPPOE Plan<?php } else {
echo $_smarty_tpl->tpl_vars['_c']->value['pppoe_plan'];
}?></div>
                        <div class="card-body row">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['plans_pppoe']->value, 'plan');
$_smarty_tpl->tpl_vars['plan']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['plan']->value) {
$_smarty_tpl->tpl_vars['plan']->do_else = false;
?>
                                <?php if ($_smarty_tpl->tpl_vars['router']->value['name'] == $_smarty_tpl->tpl_vars['plan']->value['routers']) {?>
                                    <div class="col-xl-3 col-xxl-4">
                                        <div class="card card- card-primary">
                                            <div class="card-header border-0 pb-0">
                                                <div>
                                                    <h4 class="card-title mb-2"><?php echo $_smarty_tpl->tpl_vars['plan']->value['name_plan'];?>
</h4>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="d-flex align-items-end mt-2 pb-3 justify-content-between">
                                                    <span><?php echo Lang::T('Type');?>
</span>
                                                    <span class="fs-18"><span class="text-black pe-2"><?php echo $_smarty_tpl->tpl_vars['plan']->value['type'];?>

                                                </div>
                                                <div class="d-flex align-items-end mt-2 pb-3 justify-content-between">
                                                    <span><?php echo Lang::T('Price');?>
</span>
                                                    <span class="fs-18"><span class="text-black pe-2"><?php echo Lang::moneyFormat($_smarty_tpl->tpl_vars['plan']->value['price']);?>

                                                </div>
                                                <div class="d-flex align-items-end mt-2 pb-3 justify-content-between">
                                                    <span><?php echo Lang::T('Validity');?>
</span>
                                                    <span class="fs-18"><span class="text-black pe-2"><?php echo $_smarty_tpl->tpl_vars['plan']->value['validity'];?>
 <?php echo $_smarty_tpl->tpl_vars['plan']->value['validity_unit'];?>

                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <div class="btn-group btn-group-justified" role="group" aria-label="...">
                                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
order/gateway/<?php echo $_smarty_tpl->tpl_vars['router']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['plan']->value['id'];?>
"
                                                        onclick="return confirm('<?php echo Lang::T('Buy this? your active package will be overwrite');?>
')"
                                                        class="btn btn-outline-primary btn-block btn-lg">Buy</a>
                                                    <?php if ($_smarty_tpl->tpl_vars['_c']->value['enable_balance'] == 'yes' && $_smarty_tpl->tpl_vars['_user']->value['balance'] >= $_smarty_tpl->tpl_vars['plan']->value['price']) {?>
                                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
order/pay/<?php echo $_smarty_tpl->tpl_vars['router']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['plan']->value['id'];?>
"
                                                            onclick="return confirm('<?php echo Lang::T('Pay this with Balance? your active package will be overwrite');?>
')"
                                                            class="btn btn-outline-primary btn-block btn-lg"><?php echo Lang::T('Pay With Balance');?>
</a>
                                                    <?php }?>
                                                </div>
                                                <?php if ($_smarty_tpl->tpl_vars['_c']->value['enable_balance'] == 'yes' && $_smarty_tpl->tpl_vars['_c']->value['allow_balance_transfer'] == 'yes' && $_smarty_tpl->tpl_vars['_user']->value['balance'] >= $_smarty_tpl->tpl_vars['plan']->value['price']) {?>
                                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
order/send/<?php echo $_smarty_tpl->tpl_vars['router']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['plan']->value['id'];?>
"
                                                        onclick="return confirm('<?php echo Lang::T('Buy this for friend account?');?>
')"
                                                        class="btn btn-outline-primary btn-block btn-lg"><?php echo Lang::T('Buy for friend');?>
</a>
                                                <?php }?>
                                            </div>
                                        </div>
                                    </div>
                                <?php }?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                    <?php }?>
                </div>
            </div>
            <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
<?php $_smarty_tpl->_subTemplateRender("file:sections/user-footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

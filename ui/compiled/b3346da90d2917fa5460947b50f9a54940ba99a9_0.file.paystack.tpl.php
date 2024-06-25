<?php
/* Smarty version 4.3.1, created on 2024-06-25 01:23:36
  from '/home/codevibe/azerin.codevibeisp.co.ke/system/paymentgateway/ui/paystack.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6679f1e8909396_33087694',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3346da90d2917fa5460947b50f9a54940ba99a9' => 
    array (
      0 => '/home/codevibe/azerin.codevibeisp.co.ke/system/paymentgateway/ui/paystack.tpl',
      1 => 1719267792,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_6679f1e8909396_33087694 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container-fluid">
<form class="form-horizontal" method="post" role="form" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
paymentgateway/paystack">
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="card card-primary card-hovered card-stacked mb30">
                <div class="card-header">Paystack Payment Gateway</div>
                <div class="card-body">
                    <div class="form-group">
                        <label class="col-md-2 control-label">Paystack Secret Key</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="paystack_secret_key" name="paystack_secret_key"
                                value="<?php echo $_smarty_tpl->tpl_vars['_c']->value['paystack_secret_key'];?>
">
                            <a href="https://dashboard.paystack.co/#/settings/developer" target="_blank"
                                class="help-block">https://dashboard.paystack.co/#/settings/developer</a>
                        </div>
                    </div>

					 <div class="form-group">
                        <label class="col-md-2 control-label">Payment Channels</label>
                        <div class="col-md-6">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['channel']->value, 'payment_options');
$_smarty_tpl->tpl_vars['payment_options']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['payment_options']->value) {
$_smarty_tpl->tpl_vars['payment_options']->do_else = false;
?>
                                <label class="checkbox-inline"><input type="checkbox" <?php if (strpos($_smarty_tpl->tpl_vars['_c']->value['paystack_channel'],$_smarty_tpl->tpl_vars['payment_options']->value['id']) !== false) {?>checked="true"<?php }?> id="paystack_channel" name="paystack_channel[]" value="<?php echo $_smarty_tpl->tpl_vars['payment_options']->value['id'];?>
"> <?php echo $_smarty_tpl->tpl_vars['payment_options']->value['name'];?>
</label>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Currency</label>
                        <div class="col-md-6">
                            <select class="form-control" name="paystack_currency">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cur']->value, 'currency');
$_smarty_tpl->tpl_vars['currency']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['currency']->value) {
$_smarty_tpl->tpl_vars['currency']->do_else = false;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['currency']->value['id'];?>
"
                                    <?php if ($_smarty_tpl->tpl_vars['currency']->value['id'] == $_smarty_tpl->tpl_vars['_c']->value['paystack_currency']) {?>selected<?php }?>
                                    ><?php echo $_smarty_tpl->tpl_vars['currency']->value['id'];?>
 - <?php echo $_smarty_tpl->tpl_vars['currency']->value['name'];?>
</option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                            <small class="form-text text-muted">Attention</small>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button class="btn btn-primary waves-effect waves-light"
                                type="submit"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
</button>
                        </div>
                    </div>
                    <pre>/ip hotspot walled-garden
add dst-host=paystack.com
add dst-host=*.paystack.com</pre>
                    <small class="form-text text-muted">Set Telegram Bot to get any error and
                        notification</small>
                </div>
            </div>

        </div>
    </div>
</form>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

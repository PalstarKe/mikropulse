<?php
/* Smarty version 4.3.1, created on 2024-06-25 01:20:26
  from '/home/codevibe/azerin.codevibeisp.co.ke/system/paymentgateway/ui/mpesa.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6679f12abba449_80262228',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e28fb4a09ed934ef41e94172085d7ef36e1054b' => 
    array (
      0 => '/home/codevibe/azerin.codevibeisp.co.ke/system/paymentgateway/ui/mpesa.tpl',
      1 => 1719267615,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_6679f12abba449_80262228 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container-fluid">
<form class="form-horizontal" method="post" role="form" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
paymentgateway/mpesa" >
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="card card-primary card-hovered card-stacked mb30">
                <div class="card-header">M-Pesa</div>
                <div class="card-body">
                    <div class="form-group">
                        <label class="col-md-2 control-label">Consumer Key</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="mpesa_consumer_key" name="mpesa_consumer_key" placeholder="xxxxxxxxxxxxxxxxx" value="<?php echo $_smarty_tpl->tpl_vars['_c']->value['mpesa_consumer_key'];?>
">
                            <small class="form-text text-muted"><a href="https://developer.safaricom.co.ke/MyApps" target="_blank">https://developer.safaricom.co.ke/MyApps</a></small>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Consumer Secret</label>
                        <div class="col-md-6">
                            <input type="password" class="form-control" id="mpesa_consumer_secret" name="mpesa_consumer_secret" placeholder="xxxxxxxxxxxxxxxxx" value="<?php echo $_smarty_tpl->tpl_vars['_c']->value['mpesa_consumer_secret'];?>
">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Business Shortcode</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="mpesa_business_code" name="mpesa_business_code" placeholder="xxxxxxx" maxlength="7" value="<?php echo $_smarty_tpl->tpl_vars['_c']->value['mpesa_business_code'];?>
">
                        </div>
                    </div>
					<div class="form-group">
                        <label class="col-md-2 control-label">Pass Key</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="mpesa_pass_key" name="mpesa_pass_key" placeholder="bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919" maxlength="" value="<?php echo $_smarty_tpl->tpl_vars['_c']->value['mpesa_pass_key'];?>
">
                        </div>
                    </div>
					<div class="form-group">
                        <label class="col-md-2 control-label">M-Pesa Environment</label>
                        <div class="col-md-6">
                            <select class="form-control" name="mpesa_env">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['env']->value, 'environment');
$_smarty_tpl->tpl_vars['environment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['environment']->value) {
$_smarty_tpl->tpl_vars['environment']->do_else = false;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['environment']->value['id'];?>
"
                                    <?php if ($_smarty_tpl->tpl_vars['environment']->value['id'] == $_smarty_tpl->tpl_vars['_c']->value['mpesa_env']) {?>selected<?php }?>
                                    ><?php echo $_smarty_tpl->tpl_vars['environment']->value['id'];?>
 - <?php echo $_smarty_tpl->tpl_vars['environment']->value['name'];?>
</option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                            <small class="form-text text-muted"><font color="red"><b>Sandbox</b></font> is for testing purpose, please switch to <font color="green"><b>Live</b></font> in production.</small>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label">Url Notification</label>
                        <div class="col-md-6">
                            <input type="text" readonly class="form-control" onclick="this.select()" value="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
callback/mpesa">
                            <p class="help-block">CallBack URL</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button class="btn btn-primary waves-effect waves-light" type="submit">Save</button>
                        </div>
                    </div>
                        <pre>/ip hotspot walled-garden
                   add dst-host=safaricom.co.ke
                   add dst-host=*.safaricom.co.ke</pre>
                </div>
            </div>

        </div>
    </div>
</form>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

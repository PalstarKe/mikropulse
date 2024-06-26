<?php
/* Smarty version 4.3.1, created on 2024-06-25 03:45:36
  from '/home/codevibe/azerin.codevibeisp.co.ke/ui/ui/recharge.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_667a13303d19d5_59262483',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '521a461487df8d91f1658222153fc679978cc02f' => 
    array (
      0 => '/home/codevibe/azerin.codevibeisp.co.ke/ui/ui/recharge.tpl',
      1 => 1719136873,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_667a13303d19d5_59262483 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <div class="card card-primary card-hovered card-stacked mb30">
                            <div class="card-header">
                                <h3 class="card-title"><?php echo Lang::T('Recharge Account');?>
</h3></div>
                            <div class="card-body">
                                <form class="form-horizontal" method="post" role="form" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
plan/recharge-confirm">
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label"><?php echo Lang::T('Select Account');?>
</label>
                                        <div class="col-md-6">
                                            <select <?php if ($_smarty_tpl->tpl_vars['cust']->value) {
} else { ?>id="personSelect"<?php }?> class="form-select select2" style="height: 52px; background-color: white;"
                                                name="id_customer" style="width: 100%" data-placeholder="<?php echo Lang::T('Select a customer');?>
...">
                                                <?php if ($_smarty_tpl->tpl_vars['cust']->value) {?>
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['cust']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['cust']->value['username'];?>
 &bull; <?php echo $_smarty_tpl->tpl_vars['cust']->value['fullname'];?>
 &bull; <?php echo $_smarty_tpl->tpl_vars['cust']->value['email'];?>
</option>
                                                <?php }?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label"><?php echo Lang::T('Type');?>
</label>
                                        <div class="col-md-6">
                                            <label><input type="radio" id="Hot" name="type" value="Hotspot"> <?php echo Lang::T('Hotspot Plans');?>
</label>
                                            <label><input type="radio" id="POE" name="type" value="PPPOE"> <?php echo Lang::T('PPPOE Plans');?>
</label>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label"><?php echo Lang::T('Routers');?>
</label>
                                        <div class="col-md-6">
                                            <select id="server" data-type="server" name="server" class="form-control select2" style="height: 52px; background-color: white;">
                                                <option value=''><?php echo Lang::T('Select Routers');?>
</option>
                                            </select>
                                        </div>
                                    </div>
                
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label"><?php echo Lang::T('Service Plan');?>
</label>
                                        <div class="col-md-6">
                                            <select id="plan" name="plan" class="form-control select2" style="height: 52px; background-color: white;">
                                                <option value=''><?php echo Lang::T('Select Plans');?>
</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label"><?php echo Lang::T('Using');?>
</label>
                                        <div class="col-md-6">
                                            <select name="using" class="form-control select2" style="height: 52px; background-color: white;">
                                                <option value="cash"><?php echo Lang::T('Cash');?>
</option>
                                                <?php if ($_smarty_tpl->tpl_vars['_c']->value['enable_balance'] == 'yes') {?>
                                                    <option value="balance"><?php echo Lang::T('Customer Balance');?>
</option>
                                                <?php }?>
                                                <option value="zero"><?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];?>
 0</option>
                                            </select>
                                        </div>
                                        <p class="help-block col-md-4">Postpaid Recharge for the first time use <?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];?>
 0</p>
                                    </div>
                                    <center>
                                        <div class="form-group row">
                                            <div class="col-lg-offset-2 col-lg-10">
                                                <button class="btn btn-success mb-3"
                                                    type="submit"><?php echo Lang::T('Recharge');?>
</button>
                                                Or <a class="btn btn-outline-primary href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
customers/list"><?php echo Lang::T('Cancel');?>
</a>
                                            </div>
                                        </div>
                                    </center>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

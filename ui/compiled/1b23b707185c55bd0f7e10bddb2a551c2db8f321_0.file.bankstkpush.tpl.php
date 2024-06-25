<?php
/* Smarty version 4.3.1, created on 2024-06-25 01:22:07
  from '/home/codevibe/azerin.codevibeisp.co.ke/system/paymentgateway/ui/bankstkpush.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6679f18f6af157_81471083',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b23b707185c55bd0f7e10bddb2a551c2db8f321' => 
    array (
      0 => '/home/codevibe/azerin.codevibeisp.co.ke/system/paymentgateway/ui/bankstkpush.tpl',
      1 => 1719267711,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_6679f18f6af157_81471083 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container-fluid">
<form class="form-horizontal" method="post" role="form" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
paymentgateway/BankStkPush" >
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="card card-primary card-hovered card-stacked mb30">
                <div class="card-header">Fill the details below to complete the bank stk Push</div>
                <div class="card-body">
                    <div class="form-group">
                        <label class="col-md-2 control-label">Enter Bank account number</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="kopokopo_app_key" name="account" placeholder="*************************" value="<?php echo $_smarty_tpl->tpl_vars['_c']->value['Stkbankacc'];?>
">
                           
                        </div>
                    </div>
                   
					<div class="form-group">
                        <label class="col-md-2 control-label">Bank Name</label>
                        <div class="col-md-6">
                          <select class="form-control" name="bankname" id="bankstk">
                            <option value="Equity"  <?php if ($_smarty_tpl->tpl_vars['_c']->value['Stkbankname'] == 'Equity') {?>selected<?php }?>>Equity bank</option>
                            <option value="KCB" <?php if ($_smarty_tpl->tpl_vars['_c']->value['Stkbankname'] == 'KCB') {?>selected<?php }?>>Kenya Commercial Bank</option>
                            <option value="Coop" <?php if ($_smarty_tpl->tpl_vars['_c']->value['Stkbankname'] == 'Coop') {?>selected<?php }?>>Cooperative Bank of Kenya</option>
                            <option value="Absa" <?php if ($_smarty_tpl->tpl_vars['_c']->value['Stkbankname'] == 'Absa') {?>selected<?php }?>>Absa Bank Kenya</option>
                            <option value="DTB" <?php if ($_smarty_tpl->tpl_vars['_c']->value['Stkbankname'] == 'Dtb') {?>selected<?php }?>>Diamond Trust Bank (DTB)</option>
                            <option value="NCBA" <?php if ($_smarty_tpl->tpl_vars['_c']->value['Stkbankname'] == 'NCBA') {?>selected<?php }?>>NCBA Bank</option>
                            
                            
                            
                            
                            
                            
                            
                            
                          </select>

                        </div>
                    </div>
<pre>After aplying these changes, the funds shall be going to the saved bank account, please make sure the bank name and account matches</pre>
                   
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button class="btn btn-primary waves-effect waves-light" type="submit">Save</button>
                        </div>
                    </div>
                        
            </div>

        </div>
    </div>
</form>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

<?php
/* Smarty version 4.3.1, created on 2024-06-24 23:07:53
  from '/home/codevibe/azerin.codevibeisp.co.ke/ui/ui/paymentgateway.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6679d219899801_60102696',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2e526ce4c20ba3d98c9edfd1a2a92b113ffa8ec' => 
    array (
      0 => '/home/codevibe/azerin.codevibeisp.co.ke/ui/ui/paymentgateway.tpl',
      1 => 1713583244,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_6679d219899801_60102696 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <div class="container-fluid">
                <form method="post">
                    <div class="row">
                        <div class="col-md-12 col-md-offset-3">
                            <div class="card card-info card-hovered">
                                <div class="card-header">
                                    <h3 class="card-title"><?php echo Lang::T('Payment Gateway');?>
</h3>
                                </div>
                                <div class="table-responsive card-body">
                                    <table class="table table-striped table-condensed">
                                        <tbody>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pgs']->value, 'pg');
$_smarty_tpl->tpl_vars['pg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pg']->value) {
$_smarty_tpl->tpl_vars['pg']->do_else = false;
?>
                                                <tr>
                                                    <td width="12" align="center" valign="center"><input type="checkbox" name="pgs[]"
                                                            <?php if (in_array($_smarty_tpl->tpl_vars['pg']->value,$_smarty_tpl->tpl_vars['actives']->value)) {?>checked<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['pg']->value;?>
"></td>
                                                    <td><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
paymentgateway/<?php echo $_smarty_tpl->tpl_vars['pg']->value;?>
"
                                                            class="btn btn-block btn-<?php if (in_array($_smarty_tpl->tpl_vars['pg']->value,$_smarty_tpl->tpl_vars['actives']->value)) {?>info<?php } else { ?>default<?php }?> text-left"><?php echo ucwords($_smarty_tpl->tpl_vars['pg']->value);?>
</a>
                                                    </td>
                                                    <td width="12"><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
paymentgateway/delete/<?php echo $_smarty_tpl->tpl_vars['pg']->value;?>
"
                                                            onclick="return confirm('<?php echo Lang::T('Delete');?>
 <?php echo $_smarty_tpl->tpl_vars['pg']->value;?>
?')" class="btn btn-danger"><i
                                                                class="fa fa-trash"></i></a></td>
                                                </tr>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="card-footer"><button type="submit" class="btn btn-primary btn-block" name="save"
                                        value="actives"><?php echo Lang::T('Save Changes');?>
</button></div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
<?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

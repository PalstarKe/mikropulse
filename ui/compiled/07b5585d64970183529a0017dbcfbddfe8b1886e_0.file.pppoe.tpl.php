<?php
/* Smarty version 4.3.1, created on 2024-06-25 03:04:04
  from '/home/codevibe/azerin.codevibeisp.co.ke/ui/ui/pppoe.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_667a0974ad5d59_70245853',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '07b5585d64970183529a0017dbcfbddfe8b1886e' => 
    array (
      0 => '/home/codevibe/azerin.codevibeisp.co.ke/ui/ui/pppoe.tpl',
      1 => 1713583601,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header.tpl' => 1,
    'file:pagination.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_667a0974ad5d59_70245853 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card card-hovered mb20 card-primary">
                            <div class="card-header">
                                <h3 class="card-title"><?php echo Lang::T('PPPOE Plans');?>
</h3>
                                <div class="btn-group pull-right">
                                    <a class="btn btn-primary" title="save" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
services/sync/pppoe"
                                        onclick="return confirm('This will sync/send PPPOE plan to Mikrotik?')"><span
                                            class="fa fa-refresh" aria-hidden="true"></span> sync</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="md-whiteframe-z1 mb20 text-center row">
                                    <div class="col-md-8 mb-3">
                                        <form id="site-search" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
services/pppoe/">
                                            <div class="input-group">
                                                <div class="input-group-text">
                                                    <span class="fa fa-search"></span>
                                                </div>
                                                <input type="text" name="name" class="form-control"
                                                    placeholder="<?php echo Lang::T('Search by Name');?>
...">
                                                <button class="btn btn-success input-group-btn" type="submit"><?php echo Lang::T('Search');?>
</button>
                                                <!-- <div class="input-group-btn">
                                                </div> -->
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
services/pppoe-add" class="btn btn-primary btn-block"><i
                                                class="fa fa-add"> </i> <?php echo Lang::T('New Service Plan');?>
</a>
                                    </div>&nbsp;
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-condensed">
                                        <thead>
                                            <tr>
                                                <th><?php echo Lang::T('Plan Name');?>
</th>
                                                <th><?php echo Lang::T('Plan Type');?>
</th>
                                                <th><?php echo Lang::T('Bandwidth Plans');?>
</th>
                                                <th><?php echo Lang::T('Plan Price');?>
</th>
                                                <th><?php echo Lang::T('Plan Validity');?>
</th>
                                                <th><?php echo Lang::T('IP Pool');?>
</th>
                                                <th><?php echo Lang::T('Expired IP Pool');?>
</th>
                                                <th><?php echo Lang::T('Routers');?>
</th>
                                                <th><?php echo Lang::T('Manage');?>
</th>
                                                <th>ID</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['d']->value, 'ds');
$_smarty_tpl->tpl_vars['ds']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
$_smarty_tpl->tpl_vars['ds']->do_else = false;
?>
                                                <tr <?php if ($_smarty_tpl->tpl_vars['ds']->value['enabled'] != 1) {?>class="danger" title="disabled"<?php }?>>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['name_plan'];?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['plan_type'];?>
 <?php if ($_smarty_tpl->tpl_vars['ds']->value['prepaid'] != 'yes') {?><b>Postpaid</b><?php } else { ?>Prepaid<?php }?></td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['name_bw'];?>
</td>
                                                    <td><?php echo Lang::moneyFormat($_smarty_tpl->tpl_vars['ds']->value['price']);?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['validity'];?>
 <?php echo $_smarty_tpl->tpl_vars['ds']->value['validity_unit'];?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['pool'];?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['pool_expired'];
if ($_smarty_tpl->tpl_vars['ds']->value['list_expired']) {?>
                                                        <?php if ($_smarty_tpl->tpl_vars['ds']->value['pool_expired']) {?> |
                                                            <?php }
echo $_smarty_tpl->tpl_vars['ds']->value['list_expired'];?>

                                                        <?php }?></td>
                                                    <td>
                                                        <?php if ($_smarty_tpl->tpl_vars['ds']->value['is_radius']) {?>
                                                            <span class="label label-primary">RADIUS</span>
                                                        <?php } else { ?>
                                                            <?php if ($_smarty_tpl->tpl_vars['ds']->value['routers'] != '') {?>
                                                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
routers/edit/0&name=<?php echo $_smarty_tpl->tpl_vars['ds']->value['routers'];?>
"><?php echo $_smarty_tpl->tpl_vars['ds']->value['routers'];?>
</a>
                                                            <?php }?>
                                                        <?php }?>
                                                    </td>
                                                    <td>
                                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
services/pppoe-edit/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
"
                                                            class="btn btn-info btn-xs mb-1"><?php echo Lang::T('Edit');?>
</a>
                                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
services/pppoe-delete/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
"
                                                            onclick="return confirm('<?php echo Lang::T('Delete');?>
?')" id="<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
"
                                                            class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
                                                    </td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
</td>
                                                </tr>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </tbody>
                                    </table>
                                </div>
                                <?php $_smarty_tpl->_subTemplateRender("file:pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

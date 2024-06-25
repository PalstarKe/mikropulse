<?php
/* Smarty version 4.3.1, created on 2024-06-24 23:28:27
  from '/home/codevibe/azerin.codevibeisp.co.ke/ui/ui/logs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6679d6eb9d6af7_11670715',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f95b0b05d900f58cb120c81ab25138b08ff74a8' => 
    array (
      0 => '/home/codevibe/azerin.codevibeisp.co.ke/ui/ui/logs.tpl',
      1 => 1713583134,
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
function content_6679d6eb9d6af7_11670715 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card card-hovered mb20 card-primary">
                            <div class="card-header">
                                Activity Log
                                <?php if (in_array($_smarty_tpl->tpl_vars['_admin']->value['user_type'],array('SuperAdmin','Admin'))) {?>
                                    <div class="btn-group pull-right">
                                        <a class="btn btn-primary btn-xs" title="save" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
logs/list-csv"
                                            onclick="return confirm('This will export to CSV?')"><span class="fa fa-download"
                                                aria-hidden="true"></span> CSV</a>
                                    </div>
                                <?php }?>
                            </div>
                            <div class="card-body">
                                <div class="text-center" style="padding: 15px">
                                    <div class="col-md-12 mb-3">
                                        <form id="site-search" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
logs/list/">
                                            <div class="input-group">
                                                <div class="input-group-text">
                                                    <span class="fa fa-search"></span>
                                                </div>
                                                <input type="text" name="q" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['q']->value;?>
"
                                                    placeholder="<?php echo Lang::T('Search by Name');?>
...">
                                                    <button class="btn btn-success input-group-btn" type="submit"><?php echo Lang::T('Search');?>
</button>
                                                <!-- <div class="input-group-btn">
                                                </div> -->
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-md-12">
                                        <form class="form-inline" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
logs/list/">
                                            <div class="input-group has-error">
                                                <span class="input-group-text">Keep Logs </span>
                                                <input type="text" name="keep" class="form-control" placeholder="90" value="90">
                                                <span class="input-group-text">Days</span>
                                                <button type="submit" class="btn btn-danger input-group-btn"
                                                    onclick="return confirm('Clear old logs?')">Clean Logs</button>
                                            </div>
                                        </form>
                                    </div>&nbsp;
                                </div>
                                <br>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-condensed table-hover border-primary">
                                        <tbody>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['d']->value, 'ds');
$_smarty_tpl->tpl_vars['ds']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
$_smarty_tpl->tpl_vars['ds']->do_else = false;
?>
                                                <tr>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
</td>
                                                    <td><?php echo Lang::dateTimeFormat($_smarty_tpl->tpl_vars['ds']->value['date']);?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['type'];?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['ip'];?>
</td>
                                                    <td style="overflow-x: scroll;"><?php echo nl2br($_smarty_tpl->tpl_vars['ds']->value['description']);?>
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

<?php
/* Smarty version 4.3.1, created on 2024-06-25 02:17:12
  from '/home/codevibe/azerin.codevibeisp.co.ke/system/plugin/ui/radon.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6679fe786e1161_11462978',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85bd42940a31059b2fa3e24d32c3d2514c0243f5' => 
    array (
      0 => '/home/codevibe/azerin.codevibeisp.co.ke/system/plugin/ui/radon.tpl',
      1 => 1717970897,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_6679fe786e1161_11462978 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container-fluid">
<div class="row">
    <div class="col-sm-12">
        <div class="card card-hovered mb20 card-primary">
            <div class="card-header">
				<div class="btn-group pull-right">
                    <form action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
plugin/radon_users" method="post">
					<input type="hidden" name="sync" value="true">
					<button type="submit" class="btn btn-primary btn-xs" title="sync"
                        onclick="return confirm('This will sync Customer active with Mikrotik?')"><span
                            class="glyphicon glyphicon-refresh" aria-hidden="true"></span> sync</a>
                </div>Online User : <?php echo $_smarty_tpl->tpl_vars['totalCount']->value;?>
                
            </div>
            <div class="card-body">
                <div class="md-whiteframe-z1 mb20 text-center" style="padding: 15px">
                    <div class="col-md-8">
                        <form id="site-search" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
plugin/radon_users">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <span class="fa fa-search"></span>
                                </div>
                                <input type="text" name="search" class="form-control"
                                    placeholder="<?php echo Lang::T('Search by Username');?>
..." value="<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
">
                                <div class="input-group-btn">
                                    <button class="btn btn-success" type="submit"><?php echo Lang::T('Search');?>
</button>
                                </div>
                            </div>
                        </form>
                    </div>&nbsp;
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th><?php echo Lang::T('Number');?>
</th>
                                <th><?php echo Lang::T('Username');?>
</th>
                                <th><?php echo Lang::T('NAS');?>
</th>
                                <th><?php echo Lang::T('Type');?>
</th>
                                <th><?php echo Lang::T('IP Address');?>
</th>
                                <th><?php echo Lang::T('MAC Address');?>
</th>
                                <th><?php echo Lang::T('Uptime');?>
</th>
                                <th><?php echo Lang::T('Upload');?>
</th>
                                <th><?php echo Lang::T('Download');?>
</th>
                                <th><?php echo Lang::T('Manage');?>
</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $_smarty_tpl->_assignInScope('no', 1);?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['useron']->value, 'userson');
$_smarty_tpl->tpl_vars['userson']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['userson']->value) {
$_smarty_tpl->tpl_vars['userson']->do_else = false;
?>
                                <tr>
                                    <td><?php echo $_smarty_tpl->tpl_vars['no']->value++;?>
</td>
                                    <td><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
customers/viewu/<?php echo $_smarty_tpl->tpl_vars['userson']->value['username'];?>
"><?php echo $_smarty_tpl->tpl_vars['userson']->value['username'];?>
</a>
                                    </td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['userson']->value['nasipaddress'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['userson']->value['calledstationid'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['userson']->value['framedipaddress'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['userson']->value['callingstationid'];?>
</td>
                                    <td><?php echo radon_secondsToTime($_smarty_tpl->tpl_vars['userson']->value['acctsessiontime']);?>
</td>
                                    <td><?php echo radon_formatBytes($_smarty_tpl->tpl_vars['userson']->value['acctinputoctets']);?>
</td>
                                    <td><?php echo radon_formatBytes($_smarty_tpl->tpl_vars['userson']->value['acctoutputoctets']);?>
</td>
                                    <td>
                                        <div class="btn-group pull-right">
                                            <form action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
plugin/radon_users" method="post">
                                                <input type="hidden" name="kill" value="true">
                                                <input type="hidden" name="d" value="<?php echo $_smarty_tpl->tpl_vars['userson']->value['username'];?>
">
                                                <input type="hidden" name="dd" value="<?php echo $_smarty_tpl->tpl_vars['userson']->value['nasipaddress'];?>
">
                                                <button type="submit" class="btn btn-danger btn-xs" title="Disconnect"
                                                    onclick="return confirm('Disconnect User?')"><span
                                                        class="glyphicon glyphicon-alert"
                                                        aria-hidden="true"></span>&nbsp;<?php echo Lang::T('Disconnect');?>
</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </tbody>
                    </table>
                </div>
                &nbsp; <?php echo $_smarty_tpl->tpl_vars['paginator']->value['contents'];?>

            </div>
        </div>
    </div>
</div>
<?php if ($_smarty_tpl->tpl_vars['output']->value != '') {?>
<div class="card card-primary card-hovered card-stacked mb30">
    <div class="card-header">Results</div>
        <div class="card-body">
            <pre>
            <?php if ($_smarty_tpl->tpl_vars['returnCode']->value === 0) {?>
                <p>Disconnect User successfully!</p>
                <?php } else { ?>
                <p>Disconnect User failed. Return code: <?php echo $_smarty_tpl->tpl_vars['returnCode']->value;?>
 : <?php echo $_smarty_tpl->tpl_vars['output']->value;?>
 </p>
            <?php }?>
            </pre>
        </div>
    </div>
</div>
<?php }?>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

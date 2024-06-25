<?php
/* Smarty version 4.3.1, created on 2024-06-24 23:09:26
  from '/home/codevibe/azerin.codevibeisp.co.ke/ui/ui/customers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6679d276067d64_02617048',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8bf85c7fbbd1fc2eb636b4c5d4457f129340052b' => 
    array (
      0 => '/home/codevibe/azerin.codevibeisp.co.ke/ui/ui/customers.tpl',
      1 => 1719250198,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_6679d276067d64_02617048 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <div class="container-fluid">
                <style>
                    .dataTables_wrapper .dataTables_paginate .paginate_button {
                        display: inline-block;
                        padding: 5px 10px;
                        margin-right: 5px;
                        border: 1px solid #ccc;
                        background-color: #fff;
                        color: #333;
                        cursor: pointer;
                    }
                </style>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card card-hovered mb20 card-primary">
                            <div class="card-header">
                                <?php if (in_array($_smarty_tpl->tpl_vars['_admin']->value['user_type'],array('SuperAdmin','Admin'))) {?>
                                <div class="btn-group pull-right">
                                    <a class="btn btn-primary btn-xs" title="save" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
customers/csv"
                                        onclick="return confirm('This will export to CSV?')"><span class="fa fa-download"
                                            aria-hidden="true"></span> CSV</a>
                                </div>
                                <?php }?>
                                <?php echo Lang::T('Manage Contact');?>

                            </div>
                            <div class="card-body">
                                <div class="md-whiteframe-z1 mb20 text-center" style="padding: 15px">
                                    <div class="col-md-8">
                
                                    </div>
                                    <div class="col-md-4">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
customers/add" class="btn btn-primary btn-block"><i class="fa fa-plus">
                                            </i> <?php echo Lang::T('Add New Client');?>
</a>
                                    </div>&nbsp;
                                </div>
                                <div class="table-responsive table_mobile">
                                    <table id="customerTable" class="table table-bordered table-striped table-condensed">
                                        <thead>
                                            <tr>
                                                <th><?php echo Lang::T('Full Name');?>
</th>
                                                <th><?php echo Lang::T('Username');?>
</th>
                                                <th><?php echo Lang::T('Account Type');?>
</th>
                                                <th><?php echo Lang::T('Area');?>
</th>
                                                <!--<th><?php echo Lang::T('Contact');?>
</th>-->
                                                <th><?php echo Lang::T('Package');?>
</th>
                                                <th><?php echo Lang::T('Service Type');?>
</th>
                                                <th><?php echo Lang::T('Created On');?>
</th>
                                                <th><?php echo Lang::T('Manage');?>
</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['d']->value, 'ds');
$_smarty_tpl->tpl_vars['ds']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
$_smarty_tpl->tpl_vars['ds']->do_else = false;
?>
                                            <tr>
                                                <td onclick="window.location.href = '<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
customers/view/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
'"
                                                    style="cursor: pointer;"><?php echo $_smarty_tpl->tpl_vars['ds']->value['fullname'];?>
</td>
                                                <td onclick="window.location.href = '<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
customers/view/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
'"
                                                    style="cursor:pointer;"><?php echo $_smarty_tpl->tpl_vars['ds']->value['username'];?>
</td>
                                              
                                                <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['account_type'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['address'];?>
</td>
                                                <!--<td align="center">
                                                    <?php if ($_smarty_tpl->tpl_vars['ds']->value['phonenumber']) {?>
                                                    <a href="tel:<?php echo $_smarty_tpl->tpl_vars['ds']->value['phonenumber'];?>
" class="btn btn-default btn-xs"
                                                       title="<?php echo $_smarty_tpl->tpl_vars['ds']->value['phonenumber'];?>
"><i class="fa fa-earphone"></i></a>
                                                    <?php }?>
                                                </td>-->
                                                <td align="center" api-get-text="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
autoload/customer_is_active/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
">
                                                    <span class="label label-default">&bull;</span>
                                                </td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['service_type'];?>
</td>
                                                <td><?php echo Lang::dateTimeFormat($_smarty_tpl->tpl_vars['ds']->value['created_at']);?>
</td>
                                                <td align="center">
                                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
customers/view/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
"
                                                        style="margin: 0px; color:black"
                                                        class="btn btn-success btn-xs">&nbsp;&nbsp;<?php echo Lang::T('View');?>
&nbsp;&nbsp;</a>
                                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
customers/edit/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
"
                                                        style="margin: 0px; color:black"
                                                        class="btn btn-info btn-xs">&nbsp;&nbsp;<?php echo Lang::T('Edit');?>
&nbsp;&nbsp;</a>
                                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
plan/recharge/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
" style="margin: 0px;color:black;"
                                                        class="btn btn-warning btn-xs"><?php echo Lang::T('Recharge');?>
</a>
                                                </td>
                                            </tr>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.6.0.min.js"><?php echo '</script'; ?>
>
                <?php echo '<script'; ?>
 src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
                <?php echo '<script'; ?>
>
                    var $j = jQuery.noConflict();
                    $j(document).ready(function () {
                        $j('#customerTable').DataTable({
                            "pagingType": "full_numbers"
                        });
                    });
                <?php echo '</script'; ?>
>
            </div>
<?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

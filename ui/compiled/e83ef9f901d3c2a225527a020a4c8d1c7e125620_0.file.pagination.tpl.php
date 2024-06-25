<?php
/* Smarty version 4.3.1, created on 2024-06-24 23:09:54
  from '/home/codevibe/azerin.codevibeisp.co.ke/ui/ui/pagination.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6679d29290d807_54609001',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e83ef9f901d3c2a225527a020a4c8d1c7e125620' => 
    array (
      0 => '/home/codevibe/azerin.codevibeisp.co.ke/ui/ui/pagination.tpl',
      1 => 1718522094,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6679d29290d807_54609001 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['paginator']->value) {?>
    <nav aria-label="Page navigation example" style="margin-top: 6px;">
        <ul class="pagination justify-content-end" style="border-radius: 6px;">
            <li style="background: #D7DAE3;" <?php if (empty($_smarty_tpl->tpl_vars['paginator']->value['prev'])) {?>class="disabled page-item" <?php }?>>
                <a class="page-link" href="<?php echo $_smarty_tpl->tpl_vars['paginator']->value['url'];
echo $_smarty_tpl->tpl_vars['paginator']->value['prev'];?>
" aria-label="Previous">
                    <span aria-hidden="true"><?php echo Lang::T('Prev');?>
</span>
                </a>
            </li>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['paginator']->value['pages'], 'page');
$_smarty_tpl->tpl_vars['page']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->do_else = false;
?>
                <li class="page-item <?php if ($_smarty_tpl->tpl_vars['paginator']->value['page'] == $_smarty_tpl->tpl_vars['page']->value) {?>active<?php } elseif ($_smarty_tpl->tpl_vars['page']->value == '...') {?>disabled<?php }?>"><a class="page-link"
                        href="<?php echo $_smarty_tpl->tpl_vars['paginator']->value['url'];
echo $_smarty_tpl->tpl_vars['page']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a></li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <li style="background: #D7DAE3;" <?php if ($_smarty_tpl->tpl_vars['paginator']->value['page'] >= $_smarty_tpl->tpl_vars['paginator']->value['count']) {?>class="disabled page-item" <?php }?>>
                <a class="page-link" href="<?php echo $_smarty_tpl->tpl_vars['paginator']->value['url'];
echo $_smarty_tpl->tpl_vars['paginator']->value['next'];?>
" aria-label="Next">
                    <span aria-hidden="true"><?php echo Lang::T('Next');?>
</span>
                </a>
            </li>
        </ul>
    </nav>
<?php }
}
}

<?php
/* Smarty version 3.1.29, created on 2016-08-22 11:06:12
  from "/home/mundhaka/public_html/gmark/application/views/templates/login/loginpage.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57badca476dee1_34684398',
  'file_dependency' => 
  array (
    'f47e911528ce5021182df28b43fc1cd5f6b920ed' => 
    array (
      0 => '/home/mundhaka/public_html/gmark/application/views/templates/login/loginpage.tpl',
      1 => 1471863968,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index.tpl' => 1,
    'file:login/loginform.tpl' => 1,
  ),
),false)) {
function content_57badca476dee1_34684398 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php $_smarty_tpl->tpl_vars["content"] = new Smarty_Variable("content", null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "content", 0);
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "container", array (
  0 => 'block_10182612557badca47683b1_26235785',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:index.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'container'}  file:login/loginpage.tpl */
function block_10182612557badca47683b1_26235785($_smarty_tpl, $_blockParentStack) {
?>

    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:login/loginform.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php
}
/* {/block 'container'} */
}

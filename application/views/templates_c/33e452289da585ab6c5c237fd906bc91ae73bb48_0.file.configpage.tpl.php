<?php
/* Smarty version 3.1.29, created on 2016-08-23 23:34:17
  from "/home/mundhaka/public_html/gmark/application/views/templates/config/configpage.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57bcdd7958b744_40169034',
  'file_dependency' => 
  array (
    '33e452289da585ab6c5c237fd906bc91ae73bb48' => 
    array (
      0 => '/home/mundhaka/public_html/gmark/application/views/templates/config/configpage.tpl',
      1 => 1471995232,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index.tpl' => 1,
    'file:nav/navbar.tpl' => 1,
    'file:config/config.tpl' => 1,
  ),
),false)) {
function content_57bcdd7958b744_40169034 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php $_smarty_tpl->tpl_vars["nav"] = new Smarty_Variable("nav", null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "nav", 0);
$_smarty_tpl->tpl_vars["content"] = new Smarty_Variable("content", null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "content", 0);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:nav/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "container", array (
  0 => 'block_155843535357bcdd795853c3_20933686',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:index.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'container'}  file:config/configpage.tpl */
function block_155843535357bcdd795853c3_20933686($_smarty_tpl, $_blockParentStack) {
?>

    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:config/config.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php
}
/* {/block 'container'} */
}

<?php
/* Smarty version 3.1.29, created on 2016-08-16 15:57:28
  from "/home/mundhaka/public_html/gmark/application/views/templates/container.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57b337e805d8f0_29303305',
  'file_dependency' => 
  array (
    'ee5a7bc8149b1d89cc7503e354a488488a1016a7' => 
    array (
      0 => '/home/mundhaka/public_html/gmark/application/views/templates/container.tpl',
      1 => 1471363044,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index.tpl' => 1,
    'file:header.tpl' => 1,
  ),
),false)) {
function content_57b337e805d8f0_29303305 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php $_smarty_tpl->tpl_vars["header"] = new Smarty_Variable("header", null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "header", 0);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "container", array (
  0 => 'block_212456345457b337e804b3a3_06734624',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:index.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'container'}  file:container.tpl */
function block_212456345457b337e804b3a3_06734624($_smarty_tpl, $_blockParentStack) {
?>

    <h2>hhhhhhhhhhhhhhhhhh</h2>
<?php
}
/* {/block 'container'} */
}

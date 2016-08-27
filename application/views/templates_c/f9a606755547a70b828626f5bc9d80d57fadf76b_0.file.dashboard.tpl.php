<?php
/* Smarty version 3.1.29, created on 2016-08-27 20:58:07
  from "/home/mundhaka/public_html/gmark/application/views/templates/dashboard/dashboard.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57c1fedfa62a20_49474045',
  'file_dependency' => 
  array (
    'f9a606755547a70b828626f5bc9d80d57fadf76b' => 
    array (
      0 => '/home/mundhaka/public_html/gmark/application/views/templates/dashboard/dashboard.tpl',
      1 => 1472331483,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index.tpl' => 1,
    'file:nav/navbar.tpl' => 1,
  ),
),false)) {
function content_57c1fedfa62a20_49474045 ($_smarty_tpl) {
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
  0 => 'block_4360478957c1fedfa5ab07_29682391',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:index.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'container'}  file:dashboard/dashboard.tpl */
function block_4360478957c1fedfa5ab07_29682391($_smarty_tpl, $_blockParentStack) {
?>

    <h1>tableau de bord</h1>
<?php
}
/* {/block 'container'} */
}

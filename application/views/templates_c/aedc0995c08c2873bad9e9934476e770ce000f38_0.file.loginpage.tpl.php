<?php
/* Smarty version 3.1.29, created on 2016-08-16 17:22:49
  from "/home/mundhaka/public_html/gmark/application/views/templates/loginpage.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57b34be9358116_57398081',
  'file_dependency' => 
  array (
    'aedc0995c08c2873bad9e9934476e770ce000f38' => 
    array (
      0 => '/home/mundhaka/public_html/gmark/application/views/templates/loginpage.tpl',
      1 => 1471368110,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index.tpl' => 1,
    'file:header.tpl' => 1,
    'file:loginform.tpl' => 1,
  ),
),false)) {
function content_57b34be9358116_57398081 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php $_smarty_tpl->tpl_vars["header"] = new Smarty_Variable("header", null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "header", 0);
$_smarty_tpl->tpl_vars["content"] = new Smarty_Variable("content", null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "content", 0);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "container", array (
  0 => 'block_72242705057b34be9352f53_53469387',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:index.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'container'}  file:loginpage.tpl */
function block_72242705057b34be9352f53_53469387($_smarty_tpl, $_blockParentStack) {
?>

    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:loginform.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php
}
/* {/block 'container'} */
}

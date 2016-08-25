<?php
/* Smarty version 3.1.29, created on 2016-08-24 18:44:13
  from "/home/mundhaka/public_html/gmark/application/views/templates/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57bdeafda79ec7_03389302',
  'file_dependency' => 
  array (
    'eb83ba435aa9e313fc47d0b9ddd518c0b600fa31' => 
    array (
      0 => '/home/mundhaka/public_html/gmark/application/views/templates/index.tpl',
      1 => 1472064133,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57bdeafda79ec7_03389302 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['title']->value)===null||$tmp==='' ? 'gestion de notes' : $tmp);?>
</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
        <meta content="chrome=1" http-equiv="X-UA-Compatible">
        <meta content="Gmark est puissante application de gestion de notes" name="description">
        <meta content="noindex, follow" name="robots">
        <meta content="width=device-width, minimum-scale=1, maximum-scale=1" name="viewport">
        <link rel = "stylesheet" type = "text/css" href ="<?php echo $_smarty_tpl->tpl_vars['css_url']->value;?>
style.css">
        <link rel = "stylesheet" type = "text/css" href ="<?php echo $_smarty_tpl->tpl_vars['css_url']->value;?>
custom.css">
        <link rel = "stylesheet" type = "text/css" href ="<?php echo $_smarty_tpl->tpl_vars['css_url']->value;?>
bootstrap.css">
        <link rel = "stylesheet" type = "text/css" href ="<?php echo $_smarty_tpl->tpl_vars['css_url']->value;?>
bootstrap.min.css">
        <link rel = "stylesheet" type = "text/css" href ="<?php echo $_smarty_tpl->tpl_vars['css_url']->value;?>
bootstrap-theme.css">
        <link rel = "stylesheet" type = "text/css" href ="<?php echo $_smarty_tpl->tpl_vars['css_url']->value;?>
bootstrap-theme.min.css">
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['js_url']->value;?>
modernizr.custom.min.js"><?php echo '</script'; ?>
>
    </head>
    <body>
        
        <?php if (isset($_smarty_tpl->tpl_vars['header']->value) && $_smarty_tpl->tpl_vars['header']->value === 'header') {?>
            <div class="header"> 
            <?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "header", array (
  0 => 'block_189228558557bdeafda2aae9_54359288',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

        </div>
    <?php }?>

    
    <?php if (isset($_smarty_tpl->tpl_vars['nav']->value) && $_smarty_tpl->tpl_vars['nav']->value === 'nav') {?>
        <div class="nav">
        <?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "nav", array (
  0 => 'block_63073936457bdeafda3df66_62315479',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

    </div>
<?php }?>


<div class="main" id="container">
    <?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "container", array (
  0 => 'block_172694739457bdeafda47c72_04147819',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

</div>


<?php if (isset($_smarty_tpl->tpl_vars['footer']->value) && $_smarty_tpl->tpl_vars['footer']->value === 'footer') {?>
    <div class="footer">
    <?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "footer", array (
  0 => 'block_26235533057bdeafda6c2c1_99688704',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

</div> 
<?php }?>

    <?php echo '<script'; ?>
 src="{$js_url}jquery-2.1.6.min.js"><?php echo '</script'; ?>
>

</body>
</html><?php }
/* {block 'header'}  file:index.tpl */
function block_189228558557bdeafda2aae9_54359288($_smarty_tpl, $_blockParentStack) {
}
/* {/block 'header'} */
/* {block 'nav'}  file:index.tpl */
function block_63073936457bdeafda3df66_62315479($_smarty_tpl, $_blockParentStack) {
}
/* {/block 'nav'} */
/* {block 'asideleft'}  file:index.tpl */
function block_63609238057bdeafda4f2e2_72017622($_smarty_tpl, $_blockParentStack) {
}
/* {/block 'asideleft'} */
/* {block 'content'}  file:index.tpl */
function block_194419282957bdeafda57fa3_35862057($_smarty_tpl, $_blockParentStack) {
}
/* {/block 'content'} */
/* {block 'asideright'}  file:index.tpl */
function block_33975767557bdeafda60859_54982556($_smarty_tpl, $_blockParentStack) {
}
/* {/block 'asideright'} */
/* {block 'container'}  file:index.tpl */
function block_172694739457bdeafda47c72_04147819($_smarty_tpl, $_blockParentStack) {
?>

        
        <?php if (isset($_smarty_tpl->tpl_vars['asideleft']->value) && $_smarty_tpl->tpl_vars['asideleft']->value === 'asideleft') {?>
            <div class="aside-left span3">
            <?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "asideleft", array (
  0 => 'block_63609238057bdeafda4f2e2_72017622',
  1 => false,
  3 => 0,
  2 => 0,
), $_blockParentStack);
?>

        </div>
    <?php }?>

    
    <?php if (isset($_smarty_tpl->tpl_vars['content']->value) && $_smarty_tpl->tpl_vars['content']->value === 'content') {?>
        <div class="content span6">
        <?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "content", array (
  0 => 'block_194419282957bdeafda57fa3_35862057',
  1 => false,
  3 => 0,
  2 => 0,
), $_blockParentStack);
?>

    </div>
<?php }?>


<?php if (isset($_smarty_tpl->tpl_vars['asideright']->value) && $_smarty_tpl->tpl_vars['asideright']->value === 'asideright') {?>
    <div class="aside-right span3">
    <?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "asideright", array (
  0 => 'block_33975767557bdeafda60859_54982556',
  1 => false,
  3 => 0,
  2 => 0,
), $_blockParentStack);
?>

</div>
<?php }
}
/* {/block 'container'} */
/* {block 'footer'}  file:index.tpl */
function block_26235533057bdeafda6c2c1_99688704($_smarty_tpl, $_blockParentStack) {
}
/* {/block 'footer'} */
}

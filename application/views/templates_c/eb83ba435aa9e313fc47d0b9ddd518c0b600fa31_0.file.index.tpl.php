<?php
/* Smarty version 3.1.29, created on 2016-08-27 16:47:36
  from "/home/mundhaka/public_html/gmark/application/views/templates/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57c1c428e4e708_52918522',
  'file_dependency' => 
  array (
    'eb83ba435aa9e313fc47d0b9ddd518c0b600fa31' => 
    array (
      0 => '/home/mundhaka/public_html/gmark/application/views/templates/index.tpl',
      1 => 1472316451,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57c1c428e4e708_52918522 ($_smarty_tpl) {
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
  0 => 'block_105682358257c1c428e05c96_33680014',
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
  0 => 'block_84757659357c1c428e1cc27_86691756',
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
  0 => 'block_196335619357c1c428e22071_15197836',
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
  0 => 'block_70829613357c1c428e47037_87579448',
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
function block_105682358257c1c428e05c96_33680014($_smarty_tpl, $_blockParentStack) {
}
/* {/block 'header'} */
/* {block 'nav'}  file:index.tpl */
function block_84757659357c1c428e1cc27_86691756($_smarty_tpl, $_blockParentStack) {
}
/* {/block 'nav'} */
/* {block 'asideleft'}  file:index.tpl */
function block_30891168057c1c428e29865_03938740($_smarty_tpl, $_blockParentStack) {
}
/* {/block 'asideleft'} */
/* {block 'content'}  file:index.tpl */
function block_132747248557c1c428e32533_26589666($_smarty_tpl, $_blockParentStack) {
}
/* {/block 'content'} */
/* {block 'asideright'}  file:index.tpl */
function block_119106546157c1c428e3add1_18826940($_smarty_tpl, $_blockParentStack) {
}
/* {/block 'asideright'} */
/* {block 'container'}  file:index.tpl */
function block_196335619357c1c428e22071_15197836($_smarty_tpl, $_blockParentStack) {
?>

        
        <?php if (isset($_smarty_tpl->tpl_vars['asideleft']->value) && $_smarty_tpl->tpl_vars['asideleft']->value === 'asideleft') {?>
            <div class="aside-left span3">
            <?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "asideleft", array (
  0 => 'block_30891168057c1c428e29865_03938740',
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
  0 => 'block_132747248557c1c428e32533_26589666',
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
  0 => 'block_119106546157c1c428e3add1_18826940',
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
function block_70829613357c1c428e47037_87579448($_smarty_tpl, $_blockParentStack) {
}
/* {/block 'footer'} */
}

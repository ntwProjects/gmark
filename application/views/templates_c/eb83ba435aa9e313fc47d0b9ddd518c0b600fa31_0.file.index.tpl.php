<?php
/* Smarty version 3.1.29, created on 2016-08-24 14:59:14
  from "/home/mundhaka/public_html/gmark/application/views/templates/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57bdb642472119_20717178',
  'file_dependency' => 
  array (
    'eb83ba435aa9e313fc47d0b9ddd518c0b600fa31' => 
    array (
      0 => '/home/mundhaka/public_html/gmark/application/views/templates/index.tpl',
      1 => 1472050746,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57bdb642472119_20717178 ($_smarty_tpl) {
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
  0 => 'block_48152260357bdb642432214_68024642',
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
  0 => 'block_35460957757bdb642440882_09627926',
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
  0 => 'block_119716985357bdb642447f56_87341008',
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
  0 => 'block_154669484157bdb64246aa20_12017834',
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
function block_48152260357bdb642432214_68024642($_smarty_tpl, $_blockParentStack) {
}
/* {/block 'header'} */
/* {block 'nav'}  file:index.tpl */
function block_35460957757bdb642440882_09627926($_smarty_tpl, $_blockParentStack) {
}
/* {/block 'nav'} */
/* {block 'asideleft'}  file:index.tpl */
function block_164366097157bdb64244ea08_05195294($_smarty_tpl, $_blockParentStack) {
}
/* {/block 'asideleft'} */
/* {block 'content'}  file:index.tpl */
function block_151404236757bdb642457429_56074873($_smarty_tpl, $_blockParentStack) {
}
/* {/block 'content'} */
/* {block 'asideright'}  file:index.tpl */
function block_78047842557bdb6424601b6_41241086($_smarty_tpl, $_blockParentStack) {
}
/* {/block 'asideright'} */
/* {block 'container'}  file:index.tpl */
function block_119716985357bdb642447f56_87341008($_smarty_tpl, $_blockParentStack) {
?>

        
        <?php if (isset($_smarty_tpl->tpl_vars['asideleft']->value) && $_smarty_tpl->tpl_vars['asideleft']->value === 'asideleft') {?>
            <div class="aside-left span3">
            <?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "asideleft", array (
  0 => 'block_164366097157bdb64244ea08_05195294',
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
  0 => 'block_151404236757bdb642457429_56074873',
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
  0 => 'block_78047842557bdb6424601b6_41241086',
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
function block_154669484157bdb64246aa20_12017834($_smarty_tpl, $_blockParentStack) {
}
/* {/block 'footer'} */
}

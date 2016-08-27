<?php
/* Smarty version 3.1.29, created on 2016-08-27 20:14:34
  from "/home/mundhaka/public_html/gmark/application/views/templates/basedata/modality/steppayement.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57c1f4aaa457f7_62551237',
  'file_dependency' => 
  array (
    '6a1ba5a909ca01fc9cb5dc4e3c68b7567612e9e4' => 
    array (
      0 => '/home/mundhaka/public_html/gmark/application/views/templates/basedata/modality/steppayement.tpl',
      1 => 1472317054,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57c1f4aaa457f7_62551237 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, false);
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "content", array (
  0 => 'block_84241947457c1f4aaa410a9_63986383',
  1 => false,
  3 => 0,
  2 => 0,
));
}
/* {block 'content'}  file:basedata/modality/steppayement.tpl */
function block_84241947457c1f4aaa410a9_63986383($_smarty_tpl, $_blockParentStack) {
?>

    <div class="col-lg-6">
     <fieldset class="scheduler-border">
            <legend class="scheduler-border">Payement par Echelonnement</legend>
            <div class="control-group">
                <label class="control-label input-label" for="startTime">Start :</label>
                <div class="controls bootstrap-timepicker">
                    <input type="text" class="datetime" type="text" id="startTime" name="startTime" placeholder="Start Time" />
                    <i class="icon-time"></i>
                </div>
            </div>
        </fieldset>
    </div>
<?php
}
/* {/block 'content'} */
}

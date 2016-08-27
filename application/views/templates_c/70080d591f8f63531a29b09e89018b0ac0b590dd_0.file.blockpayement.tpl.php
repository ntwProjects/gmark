<?php
/* Smarty version 3.1.29, created on 2016-08-27 20:14:34
  from "/home/mundhaka/public_html/gmark/application/views/templates/basedata/modality/blockpayement.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57c1f4aaa34d77_58969365',
  'file_dependency' => 
  array (
    '70080d591f8f63531a29b09e89018b0ac0b590dd' => 
    array (
      0 => '/home/mundhaka/public_html/gmark/application/views/templates/basedata/modality/blockpayement.tpl',
      1 => 1472317054,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57c1f4aaa34d77_58969365 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, false);
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "content", array (
  0 => 'block_161161918357c1f4aaa2e622_27978860',
  1 => false,
  3 => 0,
  2 => 0,
));
}
/* {block 'content'}  file:basedata/modality/blockpayement.tpl */
function block_161161918357c1f4aaa2e622_27978860($_smarty_tpl, $_blockParentStack) {
?>

    <div class="col-lg-6">
        <fieldset class="scheduler-border">
            <legend class="scheduler-border">Payement par block</legend>
            <div class="control-group">
                <p class="inline-small-label">
                    <label for="libelle"><span class="">Libellé</span></label>
                    <input type="text" name="lib" id="login" class="" value="">
                </p>
                <p class="inline-small-label">
                    <label for="description"><span class="">Description</span></label>
                    <input type="text" name="desc" id="pass" class="full-width" value="">
                </p>
                
                <button type="submit" class="btn btn-primary full-width">Enregistrer</button>      
                <button type="reset" class="btn btn-danger float-right">Annuler</button>
            </div>

        </fieldset> 
    </div> 
<?php
}
/* {/block 'content'} */
}

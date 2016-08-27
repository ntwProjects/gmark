<?php
/* Smarty version 3.1.29, created on 2016-08-27 21:06:44
  from "/home/mundhaka/public_html/gmark/application/views/templates/basedata/basedatapage.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57c200e4ce0282_26123016',
  'file_dependency' => 
  array (
    '65cf3ed276980833802e4e6d7e60d4e73f5a7dae' => 
    array (
      0 => '/home/mundhaka/public_html/gmark/application/views/templates/basedata/basedatapage.tpl',
      1 => 1472332000,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index.tpl' => 1,
    'file:nav/navbar.tpl' => 1,
    'file:basedata/modality/blockpayement.tpl' => 1,
    'file:basedata/modality/steppayement.tpl' => 1,
  ),
),false)) {
function content_57c200e4ce0282_26123016 ($_smarty_tpl) {
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
  0 => 'block_86592149557c200e4cd1344_86879323',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:index.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'container'}  file:basedata/basedatapage.tpl */
function block_86592149557c200e4cd1344_86879323($_smarty_tpl, $_blockParentStack) {
?>

    <div class="tabbed">
        <input name="tabbed" id="tabbed1" type="radio" checked>
        <section>
            <h1>
                <label for="tabbed1">Tab 1</label>
            </h1>
            <div>
                <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:basedata/modality/blockpayement.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            </div>
        </section>
        <input name="tabbed" id="tabbed2" type="radio">
        <section>
            <h1>
                <label for="tabbed2">Tab 2</label>
            </h1>
            <div>
                <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:basedata/modality/steppayement.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            </div>
        </section>
        <input name="tabbed" id="tabbed3" type="radio">
        <section>
            <h1>
                <label for="tabbed3">Tab 3</label>
            </h1>
            <div>
                Everyone has the right to life, liberty and security of person.
            </div>
        </section>
        <input name="tabbed" id="tabbed4" type="radio">
        <section>
            <h1>
                <label for="tabbed4">Tab 4</label>
            </h1>
            <div>
                No one shall be held in slavery or servitude; slavery and the slave trade shall be prohibited in all their forms.
            </div>
        </section>
        <input name="tabbed" id="tabbed5" type="radio">
        <section>
            <h1>
                <label for="tabbed5">tab 5</label>
            </h1>
            <div>
                No one shall be subjected to torture or to cruel, inhuman or degrading treatment or punishment.
            </div>
        </section>
        <input name="tabbed" id="tabbed6" type="radio">
        <section>
            <h1>
                <label for="tabbed6">tab 6</label>
            </h1>
            <div>
                Everyone has the right to recognition everywhere as a person before the law.
            </div>
        </section>
    </div>
<?php
}
/* {/block 'container'} */
}

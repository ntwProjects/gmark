<?php
/* Smarty version 3.1.29, created on 2016-08-18 10:33:16
  from "/home/mundhaka/public_html/gmark/application/views/templates/loginform.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57b58eec48ba13_70606520',
  'file_dependency' => 
  array (
    'e68e34f0fa7b09c1d79d069ac1902f5bd71f38f4' => 
    array (
      0 => '/home/mundhaka/public_html/gmark/application/views/templates/loginform.tpl',
      1 => 1471516393,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57b58eec48ba13_70606520 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, false);
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "content", array (
  0 => 'block_11053454557b58eec47c4c8_47341570',
  1 => false,
  3 => 0,
  2 => 0,
));
}
/* {block 'content'}  file:loginform.tpl */
function block_11053454557b58eec47c4c8_47341570($_smarty_tpl, $_blockParentStack) {
?>

    <section class="clearfix col-lg-4"></section>
    <section id="login-block" class="col-lg-5">
        <div class="block-border"><div class="block-content">

                <!--
                IE7 compatibility: if you want to remove the <h1>,
                add style="zoom:1" to the above .block-content div
                -->
                <h1><?php echo $_smarty_tpl->tpl_vars['loginTitle']->value;?>
</h1>
                <div class="block-header">Veuillez vous authentifier</div>

                <form class="form with-margin" name="login-form" id="login-form" method="post" action="">
                    <input type="hidden" name="a" id="a" value="send">
                    <p class="inline-small-label">
                        <label for="login"><span class="big">Pseudo</span></label>
                        <input type="text" name="login" id="login" class="full-width" value="">
                    </p>
                    <p class="inline-small-label">
                        <label for="pass"><span class="big">Mot de passe</span></label>
                        <input type="password" name="pass" id="pass" class="full-width" value="">
                    </p>

                    <button type="submit" class="float-right">Se connecter</button>
                    <p class="input-height">
                        <input type="checkbox" name="keep-logged" id="keep-logged" value="1" class="mini-switch" checked="checked">
                        
                        <label for="keep-logged" class="inline">Garder ma session ouverte</label>
                    </p>
                </form>
                <div class="row">
                    <form class="form" id="password-recovery" method="post" action="">
                        <fieldset class="grey-bg no-margin collapse">
                            <legend class="lost-pass"><a href="javascript:void(0)">Mot de passe perdu?</a></legend>
                            <p class="input-with-button">
                                <label for="recovery-mail">Entrer votre E-mail</label>
                                <input type="text" name="recovery-mail" id="recovery-mail" value="">
                                <button type="button">Envoyer</button>
                            </p>
                        </fieldset>
                    </form>
                    <div class="container_12">
                        <div class="float-left">
                            <button type="button" onClick="document.location.href = '../#pages';">S'enrégistrer</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
}
/* {/block 'content'} */
}

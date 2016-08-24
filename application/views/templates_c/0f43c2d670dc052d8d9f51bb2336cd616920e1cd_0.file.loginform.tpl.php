<?php
/* Smarty version 3.1.29, created on 2016-08-23 16:06:10
  from "/home/mundhaka/public_html/gmark/application/views/templates/login/loginform.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57bc7472207151_47453455',
  'file_dependency' => 
  array (
    '0f43c2d670dc052d8d9f51bb2336cd616920e1cd' => 
    array (
      0 => '/home/mundhaka/public_html/gmark/application/views/templates/login/loginform.tpl',
      1 => 1471968357,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57bc7472207151_47453455 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, false);
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "content", array (
  0 => 'block_2634994957bc74721ea4b7_77113040',
  1 => false,
  3 => 0,
  2 => 0,
));
}
/* {block 'content'}  file:login/loginform.tpl */
function block_2634994957bc74721ea4b7_77113040($_smarty_tpl, $_blockParentStack) {
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

                    <button type="submit" class="btn btn-primary float-right">Se connecter</button>
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
                                <button type="button" class="btn btn-primary">Envoyer</button>
                            </p>
                        </fieldset>
                    </form>

                </div>
                <div class="registration-button">
                    <div class="float-left">
                        <?php echo $_smarty_tpl->tpl_vars['url']->value;?>

                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
}
/* {/block 'content'} */
}

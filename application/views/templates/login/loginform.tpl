{block name="content"}
    <section class="clearfix col-lg-4"></section>
    <section id="login-block" class="col-lg-5">
        <div class="block-border"><div class="block-content">

                <!--
                IE7 compatibility: if you want to remove the <h1>,
                add style="zoom:1" to the above .block-content div
                -->
                <h1>{$loginTitle}</h1>
                <div class="block-header">Veuillez vous authentifier</div>

                <form class="form with-margin" name="login-form" id="login-form" method="post" action="{$login}">
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
                        {$register}
                    </div>
                </div>
            </div>
        </div>
    </section>
{/block}
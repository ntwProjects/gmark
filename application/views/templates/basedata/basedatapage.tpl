{extends file="index.tpl"}
{assign var="nav" value="nav"}
{assign var="content" value="content"}
{include file="nav/navbar.tpl"}
{block name="container"}
    <div class="tabbed">
        <input name="tabbed" id="tabbed1" type="radio" checked>
        <section>
            <h1>
                <label for="tabbed1">Tab 1</label>
            </h1>
            <div>
                {include file="basedata/modality/blockpayement.tpl"}
            </div>
        </section>
        <input name="tabbed" id="tabbed2" type="radio">
        <section>
            <h1>
                <label for="tabbed2">Tab 2</label>
            </h1>
            <div>
                {include file="basedata/modality/steppayement.tpl"}
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
{/block}
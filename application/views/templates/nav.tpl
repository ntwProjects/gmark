{extends file="index.tpl"}

{block name="content"}

    <h5>content</h5>

{/block}


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>{$title|default:'gestion de notes'}</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
        <link rel = "stylesheet" type = "text/css" href ="{$css_url}css/style.css">
    </head>
    <body>
        {*en-tête*}
        {if isset($header) && $header === 'header'}
            <div class="header"> 
            {block name="header"}{/block}
        </div>
    {/if}

    {*navigation*}
    {if isset($nav) && $nav === 'nav'}
        <div class="nav">
        {block name="nav"}{/block}
    </div>
{/if}

{*container*}
{if isset($container) && $container === 'container'}
    <div class="container span12" id="container">
        {block name="container"}
            {*asideleft*}
            {if isset($asideleft) && $asideleft === 'asideleft'}
                <div class="aside-left span3">
                {block name="asideleft"}{/block}
            </div>
        {/if}

        {*content*}
        {if isset($content) && $content === 'content'}
            <div class="content span6">
            {block name="content"}{/block}
        </div>
    {/if}

    {*asideright*}
    {if isset($asideright) && $asideright === 'asideright'}
        <div class="aside-right span3">
        {block name="asideright"}{/block}
    </div>
{/if}
{/block}
</div>

{/if}

{*footer*}
{if isset($footer) && $footer==='footer'}
    <div class="footer">
    {block name="footer"}{/block}
</div> 
{/if}
</body>
</html>
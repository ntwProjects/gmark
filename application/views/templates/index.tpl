<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>{$title|default:'gestion de notes'}</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
        <meta content="chrome=1" http-equiv="X-UA-Compatible">
        <meta content="Gmark est puissante application de gestion de notes" name="description">
        <meta content="noindex, follow" name="robots">
        <meta content="width=device-width, minimum-scale=1, maximum-scale=1" name="viewport">
        <link rel = "stylesheet" type = "text/css" href ="{$css_url}style.css">
        <link rel = "stylesheet" type = "text/css" href ="{$css_url}custom.css">
        <link rel = "stylesheet" type = "text/css" href ="{$css_url}bootstrap.css">
        <link rel = "stylesheet" type = "text/css" href ="{$css_url}bootstrap.min.css">
        <link rel = "stylesheet" type = "text/css" href ="{$css_url}bootstrap-theme.css">
        <link rel = "stylesheet" type = "text/css" href ="{$css_url}bootstrap-theme.min.css">
        <script src="{$js_url}modernizr.custom.min.js"></script>
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
<div class="main" id="container">
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

{*footer*}
{if isset($footer) && $footer==='footer'}
    <div class="footer">
    {block name="footer"}{/block}
</div> 
{/if}
{literal}
    <script src="{$js_url}jquery-2.1.6.min.js"></script>
{/literal}
</body>
</html>
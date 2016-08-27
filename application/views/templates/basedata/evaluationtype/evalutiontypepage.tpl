{*{extends file="index.tpl"}*}
{assign var="nav" value="nav"}
{*{assign var="content" value="content"}*}
{include file="nav/navbar.tpl"}
{block name="container"}
    {include file="modality/blockpayement.tpl"}
    {include file="modality/steppayement.tpl"}
{/block}
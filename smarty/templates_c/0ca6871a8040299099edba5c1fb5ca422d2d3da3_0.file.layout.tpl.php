<?php
/* Smarty version 3.1.30, created on 2020-12-22 17:25:39
  from "C:\xampp\htdocs\project_nhac-master\smarty\templates\layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5fe21e03a06426_36159499',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ca6871a8040299099edba5c1fb5ca422d2d3da3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project_nhac-master\\smarty\\templates\\layout.tpl',
      1 => 1514976060,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:body.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fe21e03a06426_36159499 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:body.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

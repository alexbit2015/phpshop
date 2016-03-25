<?php
/* Smarty version 3.1.29, created on 2016-03-21 14:06:37
  from "F:\WEBSERVERS\OpenServer\domains\phpshop\core\views\default\header.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56efd5bd3db7e5_42634588',
  'file_dependency' => 
  array (
    '36d0ca3e81715ce556043f3e1a1cdcb726b91b24' => 
    array (
      0 => 'F:\\WEBSERVERS\\OpenServer\\domains\\phpshop\\core\\views\\default\\header.tpl',
      1 => 1458558317,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:leftcolumn.tpl' => 1,
  ),
),false)) {
function content_56efd5bd3db7e5_42634588 ($_smarty_tpl) {
?>
<html>
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/main.css" type="text/css" />
    </head>
    <body>
        <div id="header">
            <h1>My Shop - интернет магазин</h1>
        </div>
        
        
        
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:leftcolumn.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        
        
        
        <div id="centerColumn">
            CenterColumn
<?php }
}

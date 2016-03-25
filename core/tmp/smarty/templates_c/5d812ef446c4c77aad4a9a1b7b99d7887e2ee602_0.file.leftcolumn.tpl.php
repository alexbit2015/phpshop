<?php
/* Smarty version 3.1.29, created on 2016-03-21 17:40:30
  from "F:\WEBSERVERS\OpenServer\domains\phpshop\core\views\default\leftcolumn.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56f007de3fbd72_21854148',
  'file_dependency' => 
  array (
    '5d812ef446c4c77aad4a9a1b7b99d7887e2ee602' => 
    array (
      0 => 'F:\\WEBSERVERS\\OpenServer\\domains\\phpshop\\core\\views\\default\\leftcolumn.tpl',
      1 => 1458571130,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56f007de3fbd72_21854148 ($_smarty_tpl) {
?>

        
        
        
        <div id="leftColumn">
            
            <div id="leftMenu">
                <div class="menuCaption">Меню:</div>
                <?php
$_from = $_smarty_tpl->tpl_vars['rsCategories']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_item_0_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$__foreach_item_0_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?> 
                    <a href="#"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a><br/>
                <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_local_item;
}
if ($__foreach_item_0_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_item;
}
?>
            </div>
            
        </div><?php }
}

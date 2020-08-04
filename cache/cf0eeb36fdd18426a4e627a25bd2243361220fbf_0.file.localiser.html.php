<?php
/* Smarty version 3.1.30, created on 2020-08-03 23:43:27
  from "C:\Ampps\www\SAMANE\projet-samane\src\view\ville\localiser.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f28a11f9bcc82_18221957',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf0eeb36fdd18426a4e627a25bd2243361220fbf' => 
    array (
      0 => 'C:\\Ampps\\www\\SAMANE\\projet-samane\\src\\view\\ville\\localiser.html',
      1 => 1596498202,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f28a11f9bcc82_18221957 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTG-8">
        <title>Geolocalisation</title>
    </head>
    <body>
        Ville chargee et c'est : <?php echo $_smarty_tpl->tpl_vars['nomVille']->value;?>
 !
        <br/>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['villes']->value, 'ville');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ville']->value) {
?>
        <p><?php echo $_smarty_tpl->tpl_vars['ville']->value;?>
</p>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


    </body>
</html><?php }
}

<?php /* Smarty version Smarty-3.1.8, created on 2012-08-24 02:19:09
         compiled from "C:/AppServ/www/xsphp//tpls\demo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:120605036e49daaef15-42580343%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '413e51028b8585db512dbe9cfce0260486242968' => 
    array (
      0 => 'C:/AppServ/www/xsphp//tpls\\demo.tpl',
      1 => 1345772887,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '120605036e49daaef15-42580343',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'var' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5036e49dcdd891_08947093',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5036e49dcdd891_08947093')) {function content_5036e49dcdd891_08947093($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_funone')) include 'C:/AppServ/www/xsphp/plugins\\modifier.funone.php';
if (!is_callable('smarty_function_funtwo')) include 'C:/AppServ/www/xsphp/plugins\\function.funtwo.php';
if (!is_callable('smarty_block_funthree')) include 'C:/AppServ/www/xsphp/plugins\\block.funthree.php';
?><?php echo smarty_modifier_funone($_smarty_tpl->tpl_vars['var']->value);?>
 <br>

<?php echo smarty_function_funtwo(array('color'=>"green",'size'=>"7",'content'=>"1111111111111"),$_smarty_tpl);?>
 <br>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('funthree', array('color'=>"blue",'size'=>"2")); $_block_repeat=true; echo smarty_block_funthree(array('color'=>"blue",'size'=>"2"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	2222222222222222 

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_funthree(array('color'=>"blue",'size'=>"2"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<br>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.18, created on 2017-07-30 05:17:45
         compiled from "E:\net\ecshop\content\system\templates\library\widget_admin_dashboard_loglist.lbi.php" */ ?>
<?php /*%%SmartyHeaderCode:23777597d6bf9bf0e63-14146998%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf6c60507ad2d690845e49bc62c67379ea6ef0a6' => 
    array (
      0 => 'E:\\net\\ecshop\\content\\system\\templates\\library\\widget_admin_dashboard_loglist.lbi.php',
      1 => 1498202359,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23777597d6bf9bf0e63-14146998',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'log_lists' => 0,
    'log' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_597d6bf9dfc5d1_42327211',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_597d6bf9dfc5d1_42327211')) {function content_597d6bf9dfc5d1_42327211($_smarty_tpl) {?><?php if (!is_callable('smarty_block_t')) include 'E:\\net\\ecshop\\content\\system\\smarty\\block.t.php';
?>
<div class="move-mod-group" id="widget_admin_dashboard_loglist">
	<div class="heading clearfix move-mod-head">
		<h3 class="pull-left"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h3>
	</div>
	<table class="table table-striped table-bordered mediaTable ecjiaf-wwb">
		<tbody>
			<?php  $_smarty_tpl->tpl_vars['log'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['log']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['log_lists']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['log']->key => $_smarty_tpl->tpl_vars['log']->value) {
$_smarty_tpl->tpl_vars['log']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['log']->key;
?>
			<tr>
				<td><?php echo RC_Time::local_date('Y-m-d H:i:s',$_smarty_tpl->tpl_vars['log']->value['log_time']);?>
 <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
管理员<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['log']->value['user_name'], ENT_QUOTES, 'UTF-8', true);?>
, <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
在<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php echo RC_Ip::area($_smarty_tpl->tpl_vars['log']->value['ip_address']);?>
 <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
IP下<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php echo $_smarty_tpl->tpl_vars['log']->value['log_info'];?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
。<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
			</tr>
			<?php }
if (!$_smarty_tpl->tpl_vars['log']->_loop) {
?>
			<tr>
				<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
暂无操作日志<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
	<div class="ecjiaf-tar"><a href="<?php echo RC_Uri::url('@admin_logs/init');?>
" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
查看更多<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
查看更多<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></div>
</div><?php }} ?>

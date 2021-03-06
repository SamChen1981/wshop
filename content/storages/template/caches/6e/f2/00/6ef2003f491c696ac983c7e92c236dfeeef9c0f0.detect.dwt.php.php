<?php /*%%SmartyHeaderCode:19719597d619f33fe21-78893234%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ef2003f491c696ac983c7e92c236dfeeef9c0f0' => 
    array (
      0 => 'E:\\net\\ecshop\\content\\apps\\installer\\templates\\front\\detect.dwt.php',
      1 => 1498202368,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19719597d619f33fe21-78893234',
  'variables' => 
  array (
    'front_url' => 1,
    'system_statics_url' => 1,
    'logo_pic' => 1,
    'path_error' => 1,
    'sys_info' => 1,
    'list' => 1,
    'item' => 1,
    'has_unwritable_tpl' => 1,
    'version' => 1,
    'build' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_597d61a0376cc6_13335861',
  'cache_lifetime' => 1800,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_597d61a0376cc6_13335861')) {function content_597d61a0376cc6_13335861($_smarty_tpl) {?><!DOCTYPE html>
<html>
	<head lang="zh-CN">
	    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>ECJIA到家安装程序</title>
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['front_url']->value;?>
/css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['front_url']->value;?>
/css/grid.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['front_url']->value;?>
/css/style.css" />
		
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['system_statics_url']->value;?>
/styles/ecjia.ui.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['front_url']->value;?>
/css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['system_statics_url']->value;?>
/lib/bootstrap/css/bootstrap-responsive.min.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['system_statics_url']->value;?>
/lib/fontello/css/fontello.css" />
	</head>
	<body id="maincontainer" style="height:auto;">
		<div class="ecjia-install-patch">
		    <h2><img src="<?php echo $_smarty_tpl->tpl_vars['logo_pic']->value;?>
"/>ECJIA到家</h2>
		  	<ol class="path">
		        <li><span>1</span>欢迎使用</li>
		        <li class="current"><span>2</span>检查环境</li>
		        <li><span>3</span>初始化配置</li>
		        <li><span>4</span>开始安装</li>
		        <li><span>5</span>安装成功</li>
		    </ol>
		</div>
		<div class="container">
		    <div class="row">
		        <div class="col-mb-12 col-tb-8 col-tb-offset-2">
			        <?php if ($_smarty_tpl->tpl_vars['path_error']->value) {?>
					<div class="staticalert alert alert-error ui_showmessage path_error"><?php echo $_smarty_tpl->tpl_vars['path_error']->value;?>
</div>
					<?php }?>
		            <div class="column-14 start-06 ecjia-install">
						<form method="post" action='<?php echo RC_Uri::url("installer/index/deploy");?>
' name="check_form" onsubmit="return ecjia.front.install.check();">
							<div class="ecjia-install-body">
								<h4>系统环境</h4>
								<div class="span8">
									<table class="table">
						                <thead>
						                    <tr>
						                        <th width="200px;">检查项目</th>
						                        <th width="200px;">当前环境</th>
						                        <th>ECJIA到家建议</th>
						                        <th>功能影响</th>
						                    </tr>
						                </thead>
						                <tbody>
											<tr>
												<td>服务器操作系统</td>
											    <td><?php echo $_smarty_tpl->tpl_vars['sys_info']->value['os'];?>
</td>
											    <td>Windows_NT/Linux/Freebsd/Darwin</td>
											    <td><?php echo $_smarty_tpl->tpl_vars['sys_info']->value['os_info'];?>
</td>
											</tr>
											  
											<tr>
											    <td>WEB服务器</td>
											    <td><?php echo $_smarty_tpl->tpl_vars['sys_info']->value['web_server'];?>
</td>
											    <td>推荐Apache/Nginx/IIS</td>
											    <td><?php echo $_smarty_tpl->tpl_vars['sys_info']->value['web_server_info'];?>
</td>
											</tr>
											  
											<tr>
											    <td>PHP版本</td>
											    <td><?php echo $_smarty_tpl->tpl_vars['sys_info']->value['php_ver'];?>
</td>
											    <td>5.4及以上</td>
											    <td><?php if ($_smarty_tpl->tpl_vars['sys_info']->value['php_ver']>='5.4') {?><i class="fontello-icon-ok"></i><?php } else { ?><i class="fontello-icon-cancel"></i><?php }?></td>
											</tr>
											  
											<tr>
												<td>MySQLi扩展</td>
											    <td><?php echo $_smarty_tpl->tpl_vars['sys_info']->value['mysqli'];?>
</td>
											    <td>必须开启，请使用MySQL5.5以上版本</td>
											    <td><?php echo $_smarty_tpl->tpl_vars['sys_info']->value['mysqli'];?>
</td>
											</tr>
											
											<tr>
												<td>PDO扩展</td>
											    <td><?php echo $_smarty_tpl->tpl_vars['sys_info']->value['pdo'];?>
</td>
											    <td>必须开启</td>
											    <td><?php echo $_smarty_tpl->tpl_vars['sys_info']->value['pdo'];?>
</td>
											</tr>
											  
											<tr>
											    <td>OpenSSL</td>
											    <td><?php echo $_smarty_tpl->tpl_vars['sys_info']->value['openssl'];?>
</td>
											    <td>必须开启</td>
											    <td><?php echo $_smarty_tpl->tpl_vars['sys_info']->value['openssl'];?>
</td>
											</tr>	
											  
											<tr>
											    <td>Socket支持</td>
											    <td><?php echo $_smarty_tpl->tpl_vars['sys_info']->value['socket'];?>
</td>
											    <td>必须开启</td>
											    <td><?php echo $_smarty_tpl->tpl_vars['sys_info']->value['socket'];?>
</td>
											</tr>
											  
											<tr>
											    <td>GD扩展</td>
											    <td><?php echo $_smarty_tpl->tpl_vars['sys_info']->value['gd'];?>
</td>
											    <td>必须开启</td>
											    <td><?php echo $_smarty_tpl->tpl_vars['sys_info']->value['gd_info'];?>
</td>
											</tr>
											  
											<tr>
											    <td>CURL扩展</td>
											    <td><?php echo $_smarty_tpl->tpl_vars['sys_info']->value['curl'];?>
</td>
											    <td>必须开启</td>
											    <td><?php echo $_smarty_tpl->tpl_vars['sys_info']->value['curl'];?>
</td>
											</tr>
											
											<tr>
											    <td>Fileinfo扩展</td>
											    <td><?php echo $_smarty_tpl->tpl_vars['sys_info']->value['fileinfo'];?>
</td>
											    <td>必须开启</td>
											    <td><?php echo $_smarty_tpl->tpl_vars['sys_info']->value['fileinfo'];?>
</td>
											</tr>	
											  
											<tr>
											    <td>ZLIB扩展</td>
											    <td><?php echo $_smarty_tpl->tpl_vars['sys_info']->value['zlib'];?>
</td>
											    <td>必须开启</td>
											    <td><?php echo $_smarty_tpl->tpl_vars['sys_info']->value['zlib'];?>
</td>
											</tr>
											  
											<tr>
											    <td>DNS解析</td>
											    <td><?php echo $_smarty_tpl->tpl_vars['sys_info']->value['php_dns'];?>
</td>
											    <td>建议设置正确</td>
											    <td><?php echo $_smarty_tpl->tpl_vars['sys_info']->value['php_dns'];?>
</td>
											</tr>
											  
											<tr>
											    <td>安全模式</td>
											    <td><?php echo $_smarty_tpl->tpl_vars['sys_info']->value['safe_mode'];?>
</td>
											    <td>否</td>
											    <td><?php if ($_smarty_tpl->tpl_vars['sys_info']->value['safe_mode']=='否') {?><i class="fontello-icon-ok"></i><?php } else { ?><i class="fontello-icon-cancel"></i><?php }?></td>
											</tr>
											  
											<tr>
											    <td>文件上传大小</td>
											    <td><?php echo $_smarty_tpl->tpl_vars['sys_info']->value['max_filesize'];?>
</td>
											    <td>2M及以上</td>
											    <td><?php echo $_smarty_tpl->tpl_vars['sys_info']->value['filesize'];?>
</td>
											</tr>						                
						                </tbody>
					           		</table>	
								</div>
								
								<h4>目录权限检测</h4>
								<div class="span8">
									<table class="table">
						                <thead>
						                    <tr>
						                       <th width="200px;">目录文件</th>
								   			   <th width="200px;">当前状态</th>
								    		   <th>所需状态</th>
						                    </tr>
						                </thead>
						                <tbody>
						                     <!-- <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?> -->
											 <tr>
											    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['item'];?>
</td>
											    <td><?php if ($_smarty_tpl->tpl_vars['item']->value['m']>0) {?><i class="fontello-icon-ok"></i>可写<?php } else { ?><i class="fontello-icon-cancel"></i>不可写<?php }?></td>
											    <td><i class="fontello-icon-ok"></i>可写</td>
											 </tr>
											 <!-- <?php } ?> -->
						                </tbody>
					            	</table>	
								</div>
								
								<h4>模板可写性检查</h4>
								<div class="span8">
									<?php if ($_smarty_tpl->tpl_vars['has_unwritable_tpl']->value=='no') {?>
									<p>所有模板，全部可写</p>
									<?php } else { ?>
									<p style="color:red;">模板无法写入，请检查目录权限</p>
									<?php }?>
								</div>
						    </div> 
							<p class="submit">
								<input type="submit" class="btn primary configuration_system_btn <?php if ($_smarty_tpl->tpl_vars['sys_info']->value['is_right']!=1) {?>disabled<?php }?>" value="开始下一步：配置系统 &raquo;" />
							</p>
						</form>
					</div>
				</div>
			</div>
		</div>
		
		<div class="ecjia-install-foot">
			<div class="container">
				<div class="row">
					<div class="col-mb-12 col-tb-8 col-tb-offset-2 ecjiaf-pr">
						<p>版权所有 © 2013-2017 上海商创网络科技有限公司，并保留所有权利。<span>v<?php echo $_smarty_tpl->tpl_vars['version']->value;?>
<br><?php echo $_smarty_tpl->tpl_vars['build']->value;?>
</span></p>
					</div>
				</div>
			</div>
		</div>
		
		<script src="<?php echo $_smarty_tpl->tpl_vars['system_statics_url']->value;?>
/js/jquery.min.js" type="text/javascript"></script>
		<script src="<?php echo $_smarty_tpl->tpl_vars['system_statics_url']->value;?>
/lib/ecjia-js/ecjia.js" type="text/javascript"></script>
		<script src="<?php echo $_smarty_tpl->tpl_vars['system_statics_url']->value;?>
/lib/smoke/smoke.min.js" type="text/javascript"></script>
		
		<script src="<?php echo $_smarty_tpl->tpl_vars['front_url']->value;?>
/js/ecjia-front.js" type="text/javascript"></script>
		<script src="<?php echo $_smarty_tpl->tpl_vars['front_url']->value;?>
/js/install.js" type="text/javascript"></script>
	</body>
</html>
<?php }} ?>

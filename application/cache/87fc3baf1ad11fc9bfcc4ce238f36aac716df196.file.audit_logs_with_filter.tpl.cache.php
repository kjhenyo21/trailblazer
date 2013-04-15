<?php /* Smarty version Smarty-3.1.7, created on 2013-04-15 16:03:05
         compiled from "C:\xampp\htdocs\trailblazer\application/views\system_audit\audit_logs_with_filter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:796516c07ee8ecbb0-33416827%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87fc3baf1ad11fc9bfcc4ce238f36aac716df196' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trailblazer\\application/views\\system_audit\\audit_logs_with_filter.tpl',
      1 => 1366034448,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '796516c07ee8ecbb0-33416827',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_516c07eec16dc',
  'variables' => 
  array (
    'logs' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_516c07eec16dc')) {function content_516c07eec16dc($_smarty_tpl) {?>				<div id="audit-logs">
					<?php if (($_smarty_tpl->tpl_vars['logs']->value)){?>
						<table id="table" class="table table-striped" style="text-align: left; color: black">
							<thead>
								<th style="text-align: center">Date</th>
								<th style="text-align: center">Time</th>
								<th style="text-align: center">User</th>
								<th style="text-align: center">Action</th>
								<th style="text-align: center">Transaction Date</th>
								<th style="text-align: center">Account</th>
							</thead>
							<tbody>			
								<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['logs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
									<tr>
										<td style="text-align: center; vertical-align: center"><?php echo $_smarty_tpl->tpl_vars['i']->value['date'];?>
</td>
										<td style="text-align: center; vertical-align: center"><?php echo $_smarty_tpl->tpl_vars['i']->value['time'];?>
</td>
										<td style="text-align: center; vertical-align: center"><?php echo $_smarty_tpl->tpl_vars['i']->value['user'];?>
</td>
										<td style="text-align: center; vertical-align: center"><?php echo $_smarty_tpl->tpl_vars['i']->value['action'];?>
</td>
										<td style="text-align: center; vertical-align: center"><?php echo $_smarty_tpl->tpl_vars['i']->value['trans_date'];?>
</td>
										<td style="text-align: left; vertical-align: center"><?php echo $_smarty_tpl->tpl_vars['i']->value['account'];?>
</td>
									</tr>
								<?php } ?>
							</tbody>
						</table>
					<?php }else{ ?>
					<table class="table table-striped">
						<thead>
							<th style="text-align: center">Date</th>
								<th style="text-align: center">Time</th>
								<th style="text-align: center">User</th>
								<th style="text-align: center">Action</th>
								<th style="text-align: center">Transaction Date</th>
								<th style="text-align: center">Account</th>
						</thead>
						</table>
						<table class="table table-striped">
							<tbody>
								<tr>
									<td><div style="font-style: italic">No logs to display.</div> </td>
								</tr>
							</tbody>
						</table>
					<?php }?>
				</div><?php }} ?>
<?php /* Smarty version Smarty-3.1.7, created on 2013-04-15 16:06:39
         compiled from "C:\xampp\htdocs\trailblazer\application/views\system_audit\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30037516c073fa45204-94163716%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82e4816c4908ff009e336b62546191bcb1a37f9c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trailblazer\\application/views\\system_audit\\index.tpl',
      1 => 1366034734,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30037516c073fa45204-94163716',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_516c07401fc0b',
  'variables' => 
  array (
    'logs' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_516c07401fc0b')) {function content_516c07401fc0b($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'C:\\xampp\\htdocs\\trailblazer\\application\\libraries\\smarty\\plugins\\function.url.php';
?><!--
 * Trailblazer Digital Accounting Audit Trail Program
 * @author Kristian Jacob Abad Lora <kjalora92@yahoo.com>
 * @date-created October 31, 2012
-->
	<head>
		<title>Trailblazer - System Audit</title>
	</head>
	
	<body>
		<!-- Main -->
		<br>
		<div id="main-wrapper" style="width: 950px; padding: 40px 10px;">
			<div id="navi" style="float: right; font-size: 14pt">
				<a href="#" onclick="history.go(-1);return false;"><i class="icon-arrow-left"></i></a>
				<span> | </span>
				<a href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
audit_trail"><i class="icon-home"></i></a>
			</div>
			<div id="system_log" style="margin: 0 auto; text-align: center">
				<h2>System Audit</h2>
				<br>
				<div id=group-filter style="margin: 0 auto; text-align: left; font-size: 9pt">
					<form class="form-inline" id="form-filter">
						<span>Filter by:</span>
						<select id="filter-type" style="font-size: 10pt; height: auto; width: 80px">
							<option onClick="hideFilters(); return false;" selected="selected"></option>
							<option onClick="showDateFilter(); return false;">Date</option>
							<option onClick="showUserFilter(); return false;">User</option>
						</select>
						<span id="filter-date" style="margin: 0 10px; display: none">
							<span>From</span>
							<input type="text" class="date input-small" id="date-from" style="font-size: 10pt; height: auto; width: 80px">
							<span>To</span>
							<input type="text" class="date input-small" id="date-to" style="font-size: 10pt; height: auto; width: 80px">
						</span>
						<span id="filter-user" style="margin: 0 10px; display: none">
							<span>User</span>
							<input type="text" class="span2 input-small" id="user" style="font-size: 10pt; height: auto">
						</span>
						<a id="filter-go" class="btn btn-small" style="display: none" onClick="goFilter(); return false;">Go</a>
					</form>
				</div>
				<div id="audit-logs">
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
				</div>
			</div>
		</div>
		<link href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/stylesheets/bootstrap.css" rel="stylesheet"></link>
		<link href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/stylesheets/bootstrap-responsive.css" rel="stylesheet"></link>
		<link href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/stylesheets/main.css" rel="stylesheet"></link>
		<link href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/stylesheets/forms.css" rel="stylesheet"></link>
		<link href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/stylesheets/datepicker.css" rel="stylesheet"></link>
		<script src="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/scripts/jquery.js" type="text/javascript"></script>
		<script src="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/scripts/bootstrap.min.js" type="text/javascript"></script>		
		<script src="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/scripts/bootstrap-datepicker.js" type="text/javascript"></script>
		<script>
			$('.link').tooltip({
				animation: true,
				placement: 'top'
			});
			
			$('.date').datepicker({
				format: 'yyyy-mm-dd'
			});
			
			$('select#filter-type').val('');
			$('#date-from').val('');
			$('#date-to').val('');
			$('#user').val('');
			
			function showDateFilter() {
				$('#filter-user').hide();
				$('#filter-date').show();
				$('#filter-go').show();
			}

			function showUserFilter() {
				$('#filter-user').show();
				$('#filter-date').hide();
				$('#filter-go').show();
			}

			function hideFilters() {
				$('#filter-user').hide();
				$('#filter-date').hide();
				$('#filter-go').hide();
			}
			
			function goFilter() {
				type = $('select#filter-type option:selected').val();
				if (type == 'Date') {
					from = $('#date-from').val();
					to = $('#date-to').val();
					$('#audit-logs').load('system_audit/audit_logs_by_date?from=' + from + '&to=' + to);
				} else if (type == 'User') {
					user = $('#user').val();
					$('#audit-logs').load('system_audit/audit_logs_by_user?user=' + user);
				}
			}
		</script><?php }} ?>
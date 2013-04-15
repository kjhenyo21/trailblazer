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
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_516c09eb69699',
  'has_nocache_code' => false,
  'cache_lifetime' => 1,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_516c09eb69699')) {function content_516c09eb69699($_smarty_tpl) {?>  <!--
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
				<a href="http://localhost/trailblazer/audit_trail"><i class="icon-home"></i></a>
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
																	<tr>
										<td style="text-align: center; vertical-align: center">2010-01-04</td>
										<td style="text-align: center; vertical-align: center">09:02:46</td>
										<td style="text-align: center; vertical-align: center">cashier1</td>
										<td style="text-align: center; vertical-align: center">add</td>
										<td style="text-align: center; vertical-align: center">2010-01-04</td>
										<td style="text-align: left; vertical-align: center">Sales</td>
									</tr>
																	<tr>
										<td style="text-align: center; vertical-align: center">2010-01-04</td>
										<td style="text-align: center; vertical-align: center">09:02:46</td>
										<td style="text-align: center; vertical-align: center">admin</td>
										<td style="text-align: center; vertical-align: center">add</td>
										<td style="text-align: center; vertical-align: center">2010-01-04</td>
										<td style="text-align: left; vertical-align: center">Purchases</td>
									</tr>
																	<tr>
										<td style="text-align: center; vertical-align: center">2010-01-05</td>
										<td style="text-align: center; vertical-align: center">02:49:38</td>
										<td style="text-align: center; vertical-align: center">cashier1</td>
										<td style="text-align: center; vertical-align: center">add</td>
										<td style="text-align: center; vertical-align: center">2010-01-05</td>
										<td style="text-align: left; vertical-align: center">Sales</td>
									</tr>
																	<tr>
										<td style="text-align: center; vertical-align: center">2010-01-05</td>
										<td style="text-align: center; vertical-align: center">02:49:39</td>
										<td style="text-align: center; vertical-align: center">kjhenyo</td>
										<td style="text-align: center; vertical-align: center">add</td>
										<td style="text-align: center; vertical-align: center">2010-01-05</td>
										<td style="text-align: left; vertical-align: center">Freight-In</td>
									</tr>
																	<tr>
										<td style="text-align: center; vertical-align: center">2010-01-08</td>
										<td style="text-align: center; vertical-align: center">02:49:39</td>
										<td style="text-align: center; vertical-align: center">cashier1</td>
										<td style="text-align: center; vertical-align: center">add</td>
										<td style="text-align: center; vertical-align: center">2010-01-08</td>
										<td style="text-align: left; vertical-align: center">Sales</td>
									</tr>
																	<tr>
										<td style="text-align: center; vertical-align: center">2010-01-08</td>
										<td style="text-align: center; vertical-align: center">02:49:39</td>
										<td style="text-align: center; vertical-align: center">admin</td>
										<td style="text-align: center; vertical-align: center">add</td>
										<td style="text-align: center; vertical-align: center">2010-01-08</td>
										<td style="text-align: left; vertical-align: center">Electricity</td>
									</tr>
																	<tr>
										<td style="text-align: center; vertical-align: center">2010-01-08</td>
										<td style="text-align: center; vertical-align: center">03:40:22</td>
										<td style="text-align: center; vertical-align: center">john</td>
										<td style="text-align: center; vertical-align: center">change</td>
										<td style="text-align: center; vertical-align: center">2010-01-08</td>
										<td style="text-align: left; vertical-align: center">Sales</td>
									</tr>
																	<tr>
										<td style="text-align: center; vertical-align: center">2010-01-09</td>
										<td style="text-align: center; vertical-align: center">03:44:19</td>
										<td style="text-align: center; vertical-align: center">admin</td>
										<td style="text-align: center; vertical-align: center">add</td>
										<td style="text-align: center; vertical-align: center">2010-01-09</td>
										<td style="text-align: left; vertical-align: center">Stall Rent</td>
									</tr>
																	<tr>
										<td style="text-align: center; vertical-align: center">2010-02-04</td>
										<td style="text-align: center; vertical-align: center">09:02:46</td>
										<td style="text-align: center; vertical-align: center">cashier1</td>
										<td style="text-align: center; vertical-align: center">add</td>
										<td style="text-align: center; vertical-align: center">2010-02-04</td>
										<td style="text-align: left; vertical-align: center">Sales</td>
									</tr>
																	<tr>
										<td style="text-align: center; vertical-align: center">2010-02-04</td>
										<td style="text-align: center; vertical-align: center">09:02:46</td>
										<td style="text-align: center; vertical-align: center">admin</td>
										<td style="text-align: center; vertical-align: center">add</td>
										<td style="text-align: center; vertical-align: center">2010-02-04</td>
										<td style="text-align: left; vertical-align: center">Purchases</td>
									</tr>
																	<tr>
										<td style="text-align: center; vertical-align: center">2010-02-05</td>
										<td style="text-align: center; vertical-align: center">02:49:38</td>
										<td style="text-align: center; vertical-align: center">cashier1</td>
										<td style="text-align: center; vertical-align: center">add</td>
										<td style="text-align: center; vertical-align: center">2010-02-05</td>
										<td style="text-align: left; vertical-align: center">Sales</td>
									</tr>
																	<tr>
										<td style="text-align: center; vertical-align: center">2010-02-05</td>
										<td style="text-align: center; vertical-align: center">02:49:39</td>
										<td style="text-align: center; vertical-align: center">kjhenyo</td>
										<td style="text-align: center; vertical-align: center">add</td>
										<td style="text-align: center; vertical-align: center">2010-02-05</td>
										<td style="text-align: left; vertical-align: center">Freight-In</td>
									</tr>
																	<tr>
										<td style="text-align: center; vertical-align: center">2010-02-08</td>
										<td style="text-align: center; vertical-align: center">02:49:39</td>
										<td style="text-align: center; vertical-align: center">cashier1</td>
										<td style="text-align: center; vertical-align: center">add</td>
										<td style="text-align: center; vertical-align: center">2010-02-08</td>
										<td style="text-align: left; vertical-align: center">Sales</td>
									</tr>
																	<tr>
										<td style="text-align: center; vertical-align: center">2010-02-08</td>
										<td style="text-align: center; vertical-align: center">02:49:39</td>
										<td style="text-align: center; vertical-align: center">admin</td>
										<td style="text-align: center; vertical-align: center">add</td>
										<td style="text-align: center; vertical-align: center">2010-02-08</td>
										<td style="text-align: left; vertical-align: center">Electricity</td>
									</tr>
																	<tr>
										<td style="text-align: center; vertical-align: center">2010-02-08</td>
										<td style="text-align: center; vertical-align: center">03:40:22</td>
										<td style="text-align: center; vertical-align: center">john</td>
										<td style="text-align: center; vertical-align: center">change</td>
										<td style="text-align: center; vertical-align: center">2010-02-08</td>
										<td style="text-align: left; vertical-align: center">Sales</td>
									</tr>
																	<tr>
										<td style="text-align: center; vertical-align: center">2010-02-09</td>
										<td style="text-align: center; vertical-align: center">03:44:19</td>
										<td style="text-align: center; vertical-align: center">admin</td>
										<td style="text-align: center; vertical-align: center">add</td>
										<td style="text-align: center; vertical-align: center">2010-02-09</td>
										<td style="text-align: left; vertical-align: center">Stall Rent</td>
									</tr>
															</tbody>
						</table>
									</div>
			</div>
		</div>
		<link href="http://localhost/trailblazer/assets/stylesheets/bootstrap.css" rel="stylesheet"></link>
		<link href="http://localhost/trailblazer/assets/stylesheets/bootstrap-responsive.css" rel="stylesheet"></link>
		<link href="http://localhost/trailblazer/assets/stylesheets/main.css" rel="stylesheet"></link>
		<link href="http://localhost/trailblazer/assets/stylesheets/forms.css" rel="stylesheet"></link>
		<link href="http://localhost/trailblazer/assets/stylesheets/datepicker.css" rel="stylesheet"></link>
		<script src="http://localhost/trailblazer/assets/scripts/jquery.js" type="text/javascript"></script>
		<script src="http://localhost/trailblazer/assets/scripts/bootstrap.min.js" type="text/javascript"></script>		
		<script src="http://localhost/trailblazer/assets/scripts/bootstrap-datepicker.js" type="text/javascript"></script>
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
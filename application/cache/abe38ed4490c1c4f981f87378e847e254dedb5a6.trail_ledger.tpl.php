<?php /*%%SmartyHeaderCode:2273351482ff7a49822-97291323%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'abe38ed4490c1c4f981f87378e847e254dedb5a6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trailblazer\\application/views\\audit_trail\\trail_ledger.tpl',
      1 => 1364037634,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2273351482ff7a49822-97291323',
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_514e7301d701f',
  'has_nocache_code' => false,
  'cache_lifetime' => 1,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_514e7301d701f')) {function content_514e7301d701f($_smarty_tpl) {?>  <!--
 * Lalaine's Bookstore Computerized AIS
 * @author Kristian Jacob Abad Lora <kjalora92@yahoo.com>
 * @date-created October 31, 2012
-->
<!DOCTYPE html>
	<head>
		<title>Trailblazer - Trailing the Ledger</title>
	</head>
	
	<body>
		<!-- Main -->
		<br>
		<div id="main-wrapper" style="width: 700px">
			<div id="navi" style="float: right; font-size: 14pt">
				<a href="#" onclick="history.go(-1);return false;"><i class="icon-arrow-left"></i></a>
				<span> | </span>
				<a href="http://localhost/trailblazer/audit_trail"><i class="icon-home"></i></a>
			</div>
			<div style="margin: 0 auto; text-align: center">
				<h2>General Ledger</h2>
				<div class="ledger-subhead"><h4>Account: Sales 201</h4></div>
				<div class="ledger-subhead">Month/Year: January 2010</div>
				<br>
				<table id="table" style="text-align: left; color: black">
					<thead>
						<th>Date</th>
						<th>Description</th>
						<th>Reference</th>
						<th>Debit</th>
						<th>Credit</th>
					</thead>
					<tbody>
																																				<tr>
										<td style="text-align: right">January 02</td>
										<td>6253-6255</td>
										<td><a href="http://localhost/trailblazer/audit_trail/trail_journal?ref=CRJ-1-2010&acct=Sales&fs=Income Statement&fs_amt=2656.00&fs_file=is-1-2010.is&ledger=General Ledger&lg_ref=201&lg_desc=6253-6255&lg_debit=&lg_credit=1338.00&jl_ref=CRJ-1-2010">CRJ-1-2010</a></td>
																					<td class="amount"></td>
																															<td class="amount">Php 1,338.00</td>
																			</tr>
																																								<tr>
										<td style="text-align: right">04</td>
										<td>6256-6260</td>
										<td><a href="http://localhost/trailblazer/audit_trail/trail_journal?ref=CRJ-1-2010&acct=Sales&fs=Income Statement&fs_amt=2656.00&fs_file=is-1-2010.is&ledger=General Ledger&lg_ref=201&lg_desc=6256-6260&lg_debit=&lg_credit=587.00&jl_ref=CRJ-1-2010">CRJ-1-2010</a></td>
																					<td class="amount"></td>
																															<td class="amount">Php 587.00</td>
																			</tr>
																																								<tr>
										<td style="text-align: right">05</td>
										<td>6261-6264</td>
										<td><a href="http://localhost/trailblazer/audit_trail/trail_journal?ref=CRJ-1-2010&acct=Sales&fs=Income Statement&fs_amt=2656.00&fs_file=is-1-2010.is&ledger=General Ledger&lg_ref=201&lg_desc=6261-6264&lg_debit=&lg_credit=731.00&jl_ref=CRJ-1-2010">CRJ-1-2010</a></td>
																					<td class="amount"></td>
																															<td class="amount">Php 731.00</td>
																			</tr>
																																		</tbody>
				</table>
				<div id="source-file">Source File: D:\Kristian Lora\My Documents\Lalaine's Bookstore\ledgers\general_ledgers\gl-1-2010.lg</div>
			</div>
		</div>
	
	<link href="http://localhost/trailblazer/assets/stylesheets/bootstrap.css" rel="stylesheet"></link>
	<link href="http://localhost/trailblazer/assets/stylesheets/bootstrap-responsive.css" rel="stylesheet"></link>
	<link href="http://localhost/trailblazer/assets/stylesheets/main.css" rel="stylesheet"></link>
	<script src="http://localhost/trailblazer/assets/scripts/jquery.js" type="text/javascript"></script>
	<script src="http://localhost/trailblazer/assets/scripts/bootstrap.js" type="text/javascript"></script>
</html><?php }} ?>
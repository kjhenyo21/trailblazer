<?php /*%%SmartyHeaderCode:88625148672100ba70-18825362%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a215d0267e6460a25bd3495987273bfbb43672e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trailblazer\\application/views\\audit_trail\\trail_journal.tpl',
      1 => 1364161278,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '88625148672100ba70-18825362',
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_514f81384038a',
  'has_nocache_code' => false,
  'cache_lifetime' => 1,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_514f81384038a')) {function content_514f81384038a($_smarty_tpl) {?>  <!--
 * Trailblazer Digital Accounting Audit Trail Program
 * @author Kristian Jacob Abad Lora <kjalora92@yahoo.com>
 * @date-created October 31, 2012
-->
	<head>
		<title>Trailblazer - Trailing the Journal</title>
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
				<h2>Cash Receipts Journal</h2>
				<br>
				<table id="table" style="text-align: left; color: black">
					<thead>
						<th style="text-align: center; vertical-align: center">Date</th>
						<th style="text-align: center; vertical-align: center">Description</th>
						<th style="text-align: center; vertical-align: center">Reference</th>
						<th style="text-align: center; vertical-align: center">Cash (Dr)</th>
						<th style="text-align: center; vertical-align: center">Other (Dr)</th>
						<th style="text-align: center; vertical-align: center">Sales (Cr)</th>
					</thead>
					<tbody>
																																				<tr>
										<td style="text-align: right">January 02</td>
										<td>6253-6255</td>
										<td><a href="http://localhost/trailblazer/audit_trail/trail_trans?ref=ST-1-2010&acct=Sales&fs=Income Statement&fs_amt=2656.00&fs_file=is-1-2010.is&ledger=General Ledger&lg_ref=201&lg_desc=6253-6255&lg_debit=&lg_credit=1338.00&journal=Cash Receipts Journal&jl_ref=CRJ-1-2010">ST-1-2010</a></td>
																					<td class="amount">Php 1,338.00</td>
																															<td class="amount"></td>
																															<td class="amount">Php 1,338.00</td>
																			</tr>
																																								<tr>
										<td style="text-align: right">04</td>
										<td>6256-6260</td>
										<td><a href="http://localhost/trailblazer/audit_trail/trail_trans?ref=ST-1-2010&acct=Sales&fs=Income Statement&fs_amt=2656.00&fs_file=is-1-2010.is&ledger=General Ledger&lg_ref=201&lg_desc=6253-6255&lg_debit=&lg_credit=1338.00&journal=Cash Receipts Journal&jl_ref=CRJ-1-2010">ST-1-2010</a></td></td>
																					<td class="amount">587.00</td>
																															<td class="amount"></td>
																															<td class="amount">587.00</td>
																			</tr>
																																								<tr>
										<td style="text-align: right">05</td>
										<td>6261-6264</td>
										<td><a href="http://localhost/trailblazer/audit_trail/trail_trans?ref=ST-1-2010&acct=Sales&fs=Income Statement&fs_amt=2656.00&fs_file=is-1-2010.is&ledger=General Ledger&lg_ref=201&lg_desc=6253-6255&lg_debit=&lg_credit=1338.00&journal=Cash Receipts Journal&jl_ref=CRJ-1-2010">ST-1-2010</a></td></td>
																					<td class="amount">731.00</td>
																															<td class="amount"></td>
																															<td class="amount">731.00</td>
																			</tr>
																																		</tbody>
				</table>
				<div id="source-file">Source File: D:\Kristian Lora\My Documents\Lalaine's Bookstore\journals\cash_receipts\crj-1-2010.jl</div>
			</div>
		</div>
	
	<link href="http://localhost/trailblazer/assets/stylesheets/bootstrap.css" rel="stylesheet"></link>
	<link href="http://localhost/trailblazer/assets/stylesheets/bootstrap-responsive.css" rel="stylesheet"></link>
	<link href="http://localhost/trailblazer/assets/stylesheets/main.css" rel="stylesheet"></link>
	<script src="http://localhost/trailblazer/assets/scripts/jquery.js" type="text/javascript"></script>
	<script src="http://localhost/trailblazer/assets/scripts/bootstrap.js" type="text/javascript"></script>
</html><?php }} ?>
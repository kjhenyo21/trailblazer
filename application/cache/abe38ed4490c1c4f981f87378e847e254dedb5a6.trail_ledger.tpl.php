<?php /*%%SmartyHeaderCode:21618515287d4227846-80967059%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'abe38ed4490c1c4f981f87378e847e254dedb5a6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trailblazer\\application/views\\audit_trail\\trail_ledger.tpl',
      1 => 1364475448,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21618515287d4227846-80967059',
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_51546c6e3b09d',
  'has_nocache_code' => false,
  'cache_lifetime' => 1,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51546c6e3b09d')) {function content_51546c6e3b09d($_smarty_tpl) {?>  <!--
 * Trailblazer Digital Accounting Audit Trail Program
 * @author Kristian Jacob Abad Lora <kjalora92@yahoo.com>
 * @date-created October 31, 2012
-->
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
				<div class="ledger-subhead"><h4>Account: Freight-In 604</h4></div>
				<div class="ledger-subhead">Month/Year: January 2010</div>
				<br>
									<table id="table" class="table table-striped" style="text-align: left; color: black">
						<thead>
							<th style="text-align: center; vertical-align: center">Date</th>
							<th style="text-align: center; vertical-align: center">Description</th>
							<th style="text-align: center; vertical-align: center">Reference</th>
							<th style="text-align: center; vertical-align: center">Debit</th>
							<th style="text-align: center; vertical-align: center">Credit</th>
						</thead>
						<tbody>
														
																								<tr>
										<td style="text-align: right">January 08</td>
										<td style="text-align: center;">4367332</td>
										<td style="text-align: center;"><a href="http://localhost/trailblazer/audit_trail/trail_journal?ref=CDJ-1-2010&acct=Freight-In&fs=Income Statement&fs_amt=1380.00&fs_file=is-1-2010.is&ledger=General Ledger&lg_ref=604&lg_desc=4367332&lg_debit=&lg_credit=1380&lg_total_amt=1380&jl_ref=CDJ-1-2010">CDJ-1-2010</a></td>
																					<td class="amount"></td>
																															<td class="amount">Php 1,380.00</td>
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
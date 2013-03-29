<?php /*%%SmartyHeaderCode:31701515289bfb0b223-35774772%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a215d0267e6460a25bd3495987273bfbb43672e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trailblazer\\application/views\\audit_trail\\trail_journal.tpl',
      1 => 1364480912,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31701515289bfb0b223-35774772',
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_51551c3db0e88',
  'has_nocache_code' => false,
  'cache_lifetime' => 1,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51551c3db0e88')) {function content_51551c3db0e88($_smarty_tpl) {?>  <!--
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
				<h2>Cash Disbursements Journal</h2>
				<br>
									<table id="table" class="table table-striped" style="text-align: left; color: black">
						<thead>
															<th style="text-align: center; vertical-align: center">Date</th>
								<th style="text-align: center; vertical-align: center">Account</th>
								<th style="text-align: center; vertical-align: center">Description</th>
								<th style="text-align: center; vertical-align: center">Reference</th>
								<th style="text-align: center; vertical-align: center">Purchases (Dr)</th>
								<th style="text-align: center; vertical-align: center">Other (Dr)</th>
								<th style="text-align: center; vertical-align: center">Cash (Cr)</th>
													</thead>
						<tbody>
																																									<tr>
																							<td style="text-align: right">January 04</td>
												<td>Electricity</td>
												<td>26743</td>
												<td style="text-align: center;">ET-1-2010</a></td>
																									<td class="amount"></td>
																																					<td class="amount">Php 417.80</td>
																																					<td class="amount">Php 417.80</td>
																																	</tr>
																																																											<tr>
																							<td style="text-align: right">04</td>
												<td>Registration</td>
												<td>54773</td>
												<td style="text-align: center;">ET-1-2010</a></td>
																									<td class="amount"></td>
																																					<td class="amount">1,000.00</td>
																																					<td class="amount">1,000.00</td>
																																	</tr>
																																																											<tr>
																							<td style="text-align: right">05</td>
												<td>Communications</td>
												<td>prepaid card</td>
												<td style="text-align: center;">ET-1-2010</a></td>
																									<td class="amount"></td>
																																					<td class="amount">300.00</td>
																																					<td class="amount">300.00</td>
																																	</tr>
																																																											<tr>
																							<td style="text-align: right">06</td>
												<td>Stall Rent</td>
												<td>86</td>
												<td style="text-align: center;">ET-1-2010</a></td>
																									<td class="amount"></td>
																																					<td class="amount">11,460.00</td>
																																					<td class="amount">11,460.00</td>
																																	</tr>
																																																											<tr>
																							<td style="text-align: right">08</td>
												<td>Freight-In</td>
												<td>4367332</td>
												<td style="text-align: center;">ET-1-2010</a></td>
																									<td class="amount"></td>
																																					<td class="amount">1,380.00</td>
																																					<td class="amount">1,380.00</td>
																																	</tr>
																																																											<tr>
																							<td style="text-align: right">11</td>
												<td>Purchases</td>
												<td>18373</td>
												<td style="text-align: center;">PT-1-2010</a></td>
																									<td class="amount">12,717.00</td>
																																					<td class="amount"></td>
																																					<td class="amount">12,717.00</td>
																																	</tr>
																																																											<tr>
																							<td style="text-align: right; font-weight: bold">12</td>
												<td style="font-weight: bold">Purchases</td>
												<td style="font-weight: bold">25626</td>
												<td style="text-align: center; font-weight: bold"><a href="http://localhost/trailblazer/audit_trail/trail_trans?ref=PT-1-2010&acct=Purchases&fs=Income Statement&fs_amt=29738.36&fs_file=is-2010.is&ledger=General Ledger&lg_ref=501&lg_desc=25626&lg_debit=2152.18&lg_credit=&lg_amt=2152.18&lg_total_amt=29738.36&journal=Cash Disbursements Journal&jl_ref=CDJ-1-2010&jl_desc=25626&jl_amt=2152.18">PT-1-2010</a></td>
																									<td class="amount" style="font-weight: bold">2,152.18</td>
																																					<td class="amount" style="font-weight: bold"></td>
																																					<td class="amount" style="font-weight: bold">2,152.18</td>
																																	</tr>
																																																											<tr>
																							<td style="text-align: right">15</td>
												<td>Salaries</td>
												<td>first half</td>
												<td style="text-align: center;">ET-1-2010</a></td>
																									<td class="amount"></td>
																																					<td class="amount">5,400.00</td>
																																					<td class="amount">5,400.00</td>
																																	</tr>
																																																											<tr>
																							<td style="text-align: right">18</td>
												<td>Other Taxes/Licenses</td>
												<td>24962</td>
												<td style="text-align: center;">ET-1-2010</a></td>
																									<td class="amount"></td>
																																					<td class="amount">3,650.31</td>
																																					<td class="amount">3,650.31</td>
																																	</tr>
																																																											<tr>
																							<td style="text-align: right">29</td>
												<td>Salaries</td>
												<td>second half</td>
												<td style="text-align: center;">ET-1-2010</a></td>
																									<td class="amount"></td>
																																					<td class="amount">5,400.00</td>
																																					<td class="amount">5,400.00</td>
																																	</tr>
																																																											<tr>
																							<td style="text-align: right">29</td>
												<td>Honorarium</td>
												<td>hired person</td>
												<td style="text-align: center;">ET-1-2010</a></td>
																									<td class="amount"></td>
																																					<td class="amount">1,600.00</td>
																																					<td class="amount">1,600.00</td>
																																	</tr>
																																						</tbody>
					</table>
								<div id="source-file">Source File: D:\Kristian Lora\My Documents\Lalaine's Bookstore\journals\cash_disbursements\cdj-1-2010.jl</div>
			</div>
		</div>
	
	<link href="http://localhost/trailblazer/assets/stylesheets/bootstrap.css" rel="stylesheet"></link>
	<link href="http://localhost/trailblazer/assets/stylesheets/bootstrap-responsive.css" rel="stylesheet"></link>
	<link href="http://localhost/trailblazer/assets/stylesheets/main.css" rel="stylesheet"></link>
	<script src="http://localhost/trailblazer/assets/scripts/jquery.js" type="text/javascript"></script>
	<script src="http://localhost/trailblazer/assets/scripts/bootstrap.js" type="text/javascript"></script>
</html><?php }} ?>
<?php /*%%SmartyHeaderCode:21618515287d4227846-80967059%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'abe38ed4490c1c4f981f87378e847e254dedb5a6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trailblazer\\application/views\\audit_trail\\trail_ledger.tpl',
      1 => 1366031245,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21618515287d4227846-80967059',
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_516c03b67ecaa',
  'has_nocache_code' => false,
  'cache_lifetime' => 1,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_516c03b67ecaa')) {function content_516c03b67ecaa($_smarty_tpl) {?>  <!--
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
				<div class="ledger-subhead"><h4>Account: Sales 401</h4></div>
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
										<td style="text-align: right">January 02</td>
										<td style="text-align: center;">6253-6255</td>
										<td style="text-align: center;"><a href="http://localhost/trailblazer/audit_trail/trail_journal?ref=CRJ-1-2010&acct=Sales&fs=Income Statement&fs_amt=48659.27&fs_file=is-1-2010.is&ledger=General Ledger&lg_ref=401&lg_desc=6253-6255&lg_debit=&lg_credit=1338&lg_total_amt=48659.27&lg_total_amt_disp=48659.27&jl_ref=CRJ-1-2010">CRJ-1-2010</a></td>
																					<td class="amount"></td>
																															<td class="amount">Php 1,338.00</td>
																			</tr>
																																																								<tr>
										<td style="text-align: right">04</td>
										<td style="text-align: center;">6256-6260</td>
										<td style="text-align: center;"><a href="http://localhost/trailblazer/audit_trail/trail_journal?ref=CRJ-1-2010&acct=Sales&fs=Income Statement&fs_amt=48659.27&fs_file=is-1-2010.is&ledger=General Ledger&lg_ref=401&lg_desc=6256-6260&lg_debit=&lg_credit=587&lg_total_amt=48659.27&lg_total_amt_disp=48659.27&jl_ref=CRJ-1-2010">CRJ-1-2010</a></td>
																					<td class="amount"></td>
																															<td class="amount">587.00</td>
																			</tr>
																																																								<tr>
										<td style="text-align: right">05</td>
										<td style="text-align: center;">6261-6264</td>
										<td style="text-align: center;"><a href="http://localhost/trailblazer/audit_trail/trail_journal?ref=CRJ-1-2010&acct=Sales&fs=Income Statement&fs_amt=48659.27&fs_file=is-1-2010.is&ledger=General Ledger&lg_ref=401&lg_desc=6261-6264&lg_debit=&lg_credit=731&lg_total_amt=48659.27&lg_total_amt_disp=48659.27&jl_ref=CRJ-1-2010">CRJ-1-2010</a></td>
																					<td class="amount"></td>
																															<td class="amount">731.00</td>
																			</tr>
																																																								<tr>
										<td style="text-align: right">06</td>
										<td style="text-align: center;">6265-6269</td>
										<td style="text-align: center;"><a href="http://localhost/trailblazer/audit_trail/trail_journal?ref=CRJ-1-2010&acct=Sales&fs=Income Statement&fs_amt=48659.27&fs_file=is-1-2010.is&ledger=General Ledger&lg_ref=401&lg_desc=6265-6269&lg_debit=&lg_credit=284&lg_total_amt=48659.27&lg_total_amt_disp=48659.27&jl_ref=CRJ-1-2010">CRJ-1-2010</a></td>
																					<td class="amount"></td>
																															<td class="amount">284.00</td>
																			</tr>
																																																								<tr>
										<td style="text-align: right">07</td>
										<td style="text-align: center;">6270-6279</td>
										<td style="text-align: center;"><a href="http://localhost/trailblazer/audit_trail/trail_journal?ref=CRJ-1-2010&acct=Sales&fs=Income Statement&fs_amt=48659.27&fs_file=is-1-2010.is&ledger=General Ledger&lg_ref=401&lg_desc=6270-6279&lg_debit=&lg_credit=4819&lg_total_amt=48659.27&lg_total_amt_disp=48659.27&jl_ref=CRJ-1-2010">CRJ-1-2010</a></td>
																					<td class="amount"></td>
																															<td class="amount">4,819.00</td>
																			</tr>
																																																								<tr>
										<td style="text-align: right">08</td>
										<td style="text-align: center;">6280-6289</td>
										<td style="text-align: center;"><a href="http://localhost/trailblazer/audit_trail/trail_journal?ref=CRJ-1-2010&acct=Sales&fs=Income Statement&fs_amt=48659.27&fs_file=is-1-2010.is&ledger=General Ledger&lg_ref=401&lg_desc=6280-6289&lg_debit=&lg_credit=8440.40&lg_total_amt=48659.27&lg_total_amt_disp=48659.27&jl_ref=CRJ-1-2010">CRJ-1-2010</a></td>
																					<td class="amount"></td>
																															<td class="amount">8,440.40</td>
																			</tr>
																																																								<tr>
										<td style="text-align: right">09</td>
										<td style="text-align: center;">6290-6360</td>
										<td style="text-align: center;"><a href="http://localhost/trailblazer/audit_trail/trail_journal?ref=CRJ-1-2010&acct=Sales&fs=Income Statement&fs_amt=48659.27&fs_file=is-1-2010.is&ledger=General Ledger&lg_ref=401&lg_desc=6290-6360&lg_debit=&lg_credit=2591&lg_total_amt=48659.27&lg_total_amt_disp=48659.27&jl_ref=CRJ-1-2010">CRJ-1-2010</a></td>
																					<td class="amount"></td>
																															<td class="amount">2,591.00</td>
																			</tr>
																																																								<tr>
										<td style="text-align: right">12</td>
										<td style="text-align: center;">6301-6302</td>
										<td style="text-align: center;"><a href="http://localhost/trailblazer/audit_trail/trail_journal?ref=CRJ-1-2010&acct=Sales&fs=Income Statement&fs_amt=48659.27&fs_file=is-1-2010.is&ledger=General Ledger&lg_ref=401&lg_desc=6301-6302&lg_debit=&lg_credit=146&lg_total_amt=48659.27&lg_total_amt_disp=48659.27&jl_ref=CRJ-1-2010">CRJ-1-2010</a></td>
																					<td class="amount"></td>
																															<td class="amount">146.00</td>
																			</tr>
																																																								<tr>
										<td style="text-align: right">13</td>
										<td style="text-align: center;">6303</td>
										<td style="text-align: center;"><a href="http://localhost/trailblazer/audit_trail/trail_journal?ref=CRJ-1-2010&acct=Sales&fs=Income Statement&fs_amt=48659.27&fs_file=is-1-2010.is&ledger=General Ledger&lg_ref=401&lg_desc=6303&lg_debit=&lg_credit=45&lg_total_amt=48659.27&lg_total_amt_disp=48659.27&jl_ref=CRJ-1-2010">CRJ-1-2010</a></td>
																					<td class="amount"></td>
																															<td class="amount">45.00</td>
																			</tr>
																																																								<tr>
										<td style="text-align: right">14</td>
										<td style="text-align: center;">6304-6311</td>
										<td style="text-align: center;"><a href="http://localhost/trailblazer/audit_trail/trail_journal?ref=CRJ-1-2010&acct=Sales&fs=Income Statement&fs_amt=48659.27&fs_file=is-1-2010.is&ledger=General Ledger&lg_ref=401&lg_desc=6304-6311&lg_debit=&lg_credit=2463&lg_total_amt=48659.27&lg_total_amt_disp=48659.27&jl_ref=CRJ-1-2010">CRJ-1-2010</a></td>
																					<td class="amount"></td>
																															<td class="amount">2,463.00</td>
																			</tr>
																																																								<tr>
										<td style="text-align: right">15</td>
										<td style="text-align: center;">6312-6317</td>
										<td style="text-align: center;"><a href="http://localhost/trailblazer/audit_trail/trail_journal?ref=CRJ-1-2010&acct=Sales&fs=Income Statement&fs_amt=48659.27&fs_file=is-1-2010.is&ledger=General Ledger&lg_ref=401&lg_desc=6312-6317&lg_debit=&lg_credit=428&lg_total_amt=48659.27&lg_total_amt_disp=48659.27&jl_ref=CRJ-1-2010">CRJ-1-2010</a></td>
																					<td class="amount"></td>
																															<td class="amount">428.00</td>
																			</tr>
																																																								<tr>
										<td style="text-align: right">16</td>
										<td style="text-align: center;">6318-6321</td>
										<td style="text-align: center;"><a href="http://localhost/trailblazer/audit_trail/trail_journal?ref=CRJ-1-2010&acct=Sales&fs=Income Statement&fs_amt=48659.27&fs_file=is-1-2010.is&ledger=General Ledger&lg_ref=401&lg_desc=6318-6321&lg_debit=&lg_credit=1157&lg_total_amt=48659.27&lg_total_amt_disp=48659.27&jl_ref=CRJ-1-2010">CRJ-1-2010</a></td>
																					<td class="amount"></td>
																															<td class="amount">1,157.00</td>
																			</tr>
																																																								<tr>
										<td style="text-align: right">18</td>
										<td style="text-align: center;">6322-6328</td>
										<td style="text-align: center;"><a href="http://localhost/trailblazer/audit_trail/trail_journal?ref=CRJ-1-2010&acct=Sales&fs=Income Statement&fs_amt=48659.27&fs_file=is-1-2010.is&ledger=General Ledger&lg_ref=401&lg_desc=6322-6328&lg_debit=&lg_credit=1213&lg_total_amt=48659.27&lg_total_amt_disp=48659.27&jl_ref=CRJ-1-2010">CRJ-1-2010</a></td>
																					<td class="amount"></td>
																															<td class="amount">1,213.00</td>
																			</tr>
																																																								<tr>
										<td style="text-align: right">19</td>
										<td style="text-align: center;">6329-6336</td>
										<td style="text-align: center;"><a href="http://localhost/trailblazer/audit_trail/trail_journal?ref=CRJ-1-2010&acct=Sales&fs=Income Statement&fs_amt=48659.27&fs_file=is-1-2010.is&ledger=General Ledger&lg_ref=401&lg_desc=6329-6336&lg_debit=&lg_credit=4755.87&lg_total_amt=48659.27&lg_total_amt_disp=48659.27&jl_ref=CRJ-1-2010">CRJ-1-2010</a></td>
																					<td class="amount"></td>
																															<td class="amount">4,755.87</td>
																			</tr>
																																																								<tr>
										<td style="text-align: right">20</td>
										<td style="text-align: center;">6337-6345</td>
										<td style="text-align: center;"><a href="http://localhost/trailblazer/audit_trail/trail_journal?ref=CRJ-1-2010&acct=Sales&fs=Income Statement&fs_amt=48659.27&fs_file=is-1-2010.is&ledger=General Ledger&lg_ref=401&lg_desc=6337-6345&lg_debit=&lg_credit=1737&lg_total_amt=48659.27&lg_total_amt_disp=48659.27&jl_ref=CRJ-1-2010">CRJ-1-2010</a></td>
																					<td class="amount"></td>
																															<td class="amount">1,737.00</td>
																			</tr>
																																																								<tr>
										<td style="text-align: right">21</td>
										<td style="text-align: center;">6346-6350</td>
										<td style="text-align: center;"><a href="http://localhost/trailblazer/audit_trail/trail_journal?ref=CRJ-1-2010&acct=Sales&fs=Income Statement&fs_amt=48659.27&fs_file=is-1-2010.is&ledger=General Ledger&lg_ref=401&lg_desc=6346-6350&lg_debit=&lg_credit=3010&lg_total_amt=48659.27&lg_total_amt_disp=48659.27&jl_ref=CRJ-1-2010">CRJ-1-2010</a></td>
																					<td class="amount"></td>
																															<td class="amount">3,010.00</td>
																			</tr>
																																																								<tr>
										<td style="text-align: right">21</td>
										<td style="text-align: center;">6351-6352</td>
										<td style="text-align: center;"><a href="http://localhost/trailblazer/audit_trail/trail_journal?ref=CRJ-1-2010&acct=Sales&fs=Income Statement&fs_amt=48659.27&fs_file=is-1-2010.is&ledger=General Ledger&lg_ref=401&lg_desc=6351-6352&lg_debit=&lg_credit=402&lg_total_amt=48659.27&lg_total_amt_disp=48659.27&jl_ref=CRJ-1-2010">CRJ-1-2010</a></td>
																					<td class="amount"></td>
																															<td class="amount">402.00</td>
																			</tr>
																																																								<tr>
										<td style="text-align: right">21</td>
										<td style="text-align: center;">6353-6362</td>
										<td style="text-align: center;"><a href="http://localhost/trailblazer/audit_trail/trail_journal?ref=CRJ-1-2010&acct=Sales&fs=Income Statement&fs_amt=48659.27&fs_file=is-1-2010.is&ledger=General Ledger&lg_ref=401&lg_desc=6353-6362&lg_debit=&lg_credit=700&lg_total_amt=48659.27&lg_total_amt_disp=48659.27&jl_ref=CRJ-1-2010">CRJ-1-2010</a></td>
																					<td class="amount"></td>
																															<td class="amount">700.00</td>
																			</tr>
																																																								<tr>
										<td style="text-align: right">22</td>
										<td style="text-align: center;">6363-6366</td>
										<td style="text-align: center;"><a href="http://localhost/trailblazer/audit_trail/trail_journal?ref=CRJ-1-2010&acct=Sales&fs=Income Statement&fs_amt=48659.27&fs_file=is-1-2010.is&ledger=General Ledger&lg_ref=401&lg_desc=6363-6366&lg_debit=&lg_credit=2149&lg_total_amt=48659.27&lg_total_amt_disp=48659.27&jl_ref=CRJ-1-2010">CRJ-1-2010</a></td>
																					<td class="amount"></td>
																															<td class="amount">2,149.00</td>
																			</tr>
																																																								<tr>
										<td style="text-align: right">22</td>
										<td style="text-align: center;">6367-6373</td>
										<td style="text-align: center;"><a href="http://localhost/trailblazer/audit_trail/trail_journal?ref=CRJ-1-2010&acct=Sales&fs=Income Statement&fs_amt=48659.27&fs_file=is-1-2010.is&ledger=General Ledger&lg_ref=401&lg_desc=6367-6373&lg_debit=&lg_credit=2930&lg_total_amt=48659.27&lg_total_amt_disp=48659.27&jl_ref=CRJ-1-2010">CRJ-1-2010</a></td>
																					<td class="amount"></td>
																															<td class="amount">2,930.00</td>
																			</tr>
																																																								<tr>
										<td style="text-align: right">25</td>
										<td style="text-align: center;">6374-6377</td>
										<td style="text-align: center;"><a href="http://localhost/trailblazer/audit_trail/trail_journal?ref=CRJ-1-2010&acct=Sales&fs=Income Statement&fs_amt=48659.27&fs_file=is-1-2010.is&ledger=General Ledger&lg_ref=401&lg_desc=6374-6377&lg_debit=&lg_credit=353&lg_total_amt=48659.27&lg_total_amt_disp=48659.27&jl_ref=CRJ-1-2010">CRJ-1-2010</a></td>
																					<td class="amount"></td>
																															<td class="amount">353.00</td>
																			</tr>
																																																								<tr>
										<td style="text-align: right">26</td>
										<td style="text-align: center;">6378-6388</td>
										<td style="text-align: center;"><a href="http://localhost/trailblazer/audit_trail/trail_journal?ref=CRJ-1-2010&acct=Sales&fs=Income Statement&fs_amt=48659.27&fs_file=is-1-2010.is&ledger=General Ledger&lg_ref=401&lg_desc=6378-6388&lg_debit=&lg_credit=2178&lg_total_amt=48659.27&lg_total_amt_disp=48659.27&jl_ref=CRJ-1-2010">CRJ-1-2010</a></td>
																					<td class="amount"></td>
																															<td class="amount">2,178.00</td>
																			</tr>
																																																								<tr>
										<td style="text-align: right">27</td>
										<td style="text-align: center;">6389-6394</td>
										<td style="text-align: center;"><a href="http://localhost/trailblazer/audit_trail/trail_journal?ref=CRJ-1-2010&acct=Sales&fs=Income Statement&fs_amt=48659.27&fs_file=is-1-2010.is&ledger=General Ledger&lg_ref=401&lg_desc=6389-6394&lg_debit=&lg_credit=100&lg_total_amt=48659.27&lg_total_amt_disp=48659.27&jl_ref=CRJ-1-2010">CRJ-1-2010</a></td>
																					<td class="amount"></td>
																															<td class="amount">100.00</td>
																			</tr>
																																																								<tr>
										<td style="text-align: right">28</td>
										<td style="text-align: center;">6395-6400</td>
										<td style="text-align: center;"><a href="http://localhost/trailblazer/audit_trail/trail_journal?ref=CRJ-1-2010&acct=Sales&fs=Income Statement&fs_amt=48659.27&fs_file=is-1-2010.is&ledger=General Ledger&lg_ref=401&lg_desc=6395-6400&lg_debit=&lg_credit=452&lg_total_amt=48659.27&lg_total_amt_disp=48659.27&jl_ref=CRJ-1-2010">CRJ-1-2010</a></td>
																					<td class="amount"></td>
																															<td class="amount">452.00</td>
																			</tr>
																																																								<tr>
										<td style="text-align: right">28</td>
										<td style="text-align: center;">6401-6403</td>
										<td style="text-align: center;"><a href="http://localhost/trailblazer/audit_trail/trail_journal?ref=CRJ-1-2010&acct=Sales&fs=Income Statement&fs_amt=48659.27&fs_file=is-1-2010.is&ledger=General Ledger&lg_ref=401&lg_desc=6401-6403&lg_debit=&lg_credit=455&lg_total_amt=48659.27&lg_total_amt_disp=48659.27&jl_ref=CRJ-1-2010">CRJ-1-2010</a></td>
																					<td class="amount"></td>
																															<td class="amount">455.00</td>
																			</tr>
																																																								<tr>
										<td style="text-align: right">29</td>
										<td style="text-align: center;">6405-6414</td>
										<td style="text-align: center;"><a href="http://localhost/trailblazer/audit_trail/trail_journal?ref=CRJ-1-2010&acct=Sales&fs=Income Statement&fs_amt=48659.27&fs_file=is-1-2010.is&ledger=General Ledger&lg_ref=401&lg_desc=6405-6414&lg_debit=&lg_credit=4496&lg_total_amt=48659.27&lg_total_amt_disp=48659.27&jl_ref=CRJ-1-2010">CRJ-1-2010</a></td>
																					<td class="amount"></td>
																															<td class="amount">4,496.00</td>
																			</tr>
																																																								<tr>
										<td style="text-align: right">30</td>
										<td style="text-align: center;">6415-6418</td>
										<td style="text-align: center;"><a href="http://localhost/trailblazer/audit_trail/trail_journal?ref=CRJ-1-2010&acct=Sales&fs=Income Statement&fs_amt=48659.27&fs_file=is-1-2010.is&ledger=General Ledger&lg_ref=401&lg_desc=6415-6418&lg_debit=&lg_credit=699&lg_total_amt=48659.27&lg_total_amt_disp=48659.27&jl_ref=CRJ-1-2010">CRJ-1-2010</a></td>
																					<td class="amount"></td>
																															<td class="amount">699.00</td>
																			</tr>
																																						<tr id="total-ledger-bal">
								<td></td>
								<td></td>
								<td style="font-weight: bold; text-align: right">TOTAL</td>
								<td class="amount" style="font-weight: bold">Php 0.00</td>
								<td class="amount" style="font-weight: bold">Php 48,659.27</td>
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
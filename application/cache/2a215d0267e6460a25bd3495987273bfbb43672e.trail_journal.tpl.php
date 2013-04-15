<?php /*%%SmartyHeaderCode:31701515289bfb0b223-35774772%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a215d0267e6460a25bd3495987273bfbb43672e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trailblazer\\application/views\\audit_trail\\trail_journal.tpl',
      1 => 1366031696,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31701515289bfb0b223-35774772',
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_516c03c973863',
  'has_nocache_code' => false,
  'cache_lifetime' => 1,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_516c03c973863')) {function content_516c03c973863($_smarty_tpl) {?>  <!--
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
									<table id="table" class="table table-striped" style="text-align: left; color: black">
						<thead>
															<th style="text-align: center; vertical-align: center">Date</th>
								<th style="text-align: center; vertical-align: center">Account</th>
								<th style="text-align: center; vertical-align: center">Particular</th>
								<th style="text-align: center; vertical-align: center">Reference</th>
								<th style="text-align: center; vertical-align: center">Cash (Dr)</th>
								<th style="text-align: center; vertical-align: center">Other (Cr)</th>
								<th style="text-align: center; vertical-align: center">Sales (Cr)</th>
													</thead>
						<tbody>
																																									<tr>
																							<td style="text-align: right">January 02</td>
												<td>Sales</td>
												<td>6253-6255</td>
												<td style="text-align: center">ST-1-2010</td>
																									<td class="amount">Php 1,338.00</td>
																																					<td class="amount"></td>
																																					<td class="amount">Php 1,338.00</td>
																																	</tr>
																																																											<tr>
																							<td style="text-align: right">04</td>
												<td>Sales</td>
												<td>6256-6260</td>
												<td style="text-align: center;">ST-1-2010</a></td>
																									<td class="amount">587.00</td>
																																					<td class="amount"></td>
																																					<td class="amount">587.00</td>
																																	</tr>
																																																											<tr>
																							<td style="text-align: right">05</td>
												<td>Sales</td>
												<td>6261-6264</td>
												<td style="text-align: center;">ST-1-2010</a></td>
																									<td class="amount">731.00</td>
																																					<td class="amount"></td>
																																					<td class="amount">731.00</td>
																																	</tr>
																																																											<tr>
																							<td style="text-align: right">06</td>
												<td>Sales</td>
												<td>6265-6269</td>
												<td style="text-align: center;">ST-1-2010</a></td>
																									<td class="amount">284.00</td>
																																					<td class="amount"></td>
																																					<td class="amount">284.00</td>
																																	</tr>
																																																											<tr>
																							<td style="text-align: right; font-weight: bold">07</td>
												<td style="font-weight: bold">Sales</td>
												<td style="font-weight: bold">6270-6279</td>
												<td style="text-align: center; font-weight: bold"><a href="http://localhost/trailblazer/audit_trail/trail_trans?ref=ST-1-2010&acct=Sales&fs=Income Statement&fs_amt=48659.27&fs_file=is-1-2010.is&ledger=General Ledger&lg_ref=401&lg_desc=6270-6279&lg_debit=&lg_credit=4819&lg_amt=4819&lg_total_amt=48659.27&lg_total_amt_disp=48659.27&journal=Cash Receipts Journal&jl_ref=CRJ-1-2010&jl_desc=6270-6279&jl_amt=4819&jl_total_amt_disp=48659.27">ST-1-2010</a></td>
																									<td class="amount" style="font-weight: bold">4,819.00</td>
																																					<td class="amount" style="font-weight: bold"></td>
																																					<td class="amount" style="font-weight: bold">4,819.00</td>
																																	</tr>
																																																											<tr>
																							<td style="text-align: right">08</td>
												<td>Sales</td>
												<td>6280-6289</td>
												<td style="text-align: center;">ST-1-2010</a></td>
																									<td class="amount">8,440.40</td>
																																					<td class="amount"></td>
																																					<td class="amount">8,440.40</td>
																																	</tr>
																																																											<tr>
																							<td style="text-align: right">09</td>
												<td>Sales</td>
												<td>6290-6360</td>
												<td style="text-align: center;">ST-1-2010</a></td>
																									<td class="amount">2,591.00</td>
																																					<td class="amount"></td>
																																					<td class="amount">2,591.00</td>
																																	</tr>
																																																											<tr>
																							<td style="text-align: right">12</td>
												<td>Sales</td>
												<td>6301-6302</td>
												<td style="text-align: center;">ST-1-2010</a></td>
																									<td class="amount">146.00</td>
																																					<td class="amount"></td>
																																					<td class="amount">146.00</td>
																																	</tr>
																																																											<tr>
																							<td style="text-align: right">13</td>
												<td>Sales</td>
												<td>6303</td>
												<td style="text-align: center;">ST-1-2010</a></td>
																									<td class="amount">45.00</td>
																																					<td class="amount"></td>
																																					<td class="amount">45.00</td>
																																	</tr>
																																																											<tr>
																							<td style="text-align: right">14</td>
												<td>Sales</td>
												<td>6304-6311</td>
												<td style="text-align: center;">ST-1-2010</a></td>
																									<td class="amount">2,463.00</td>
																																					<td class="amount"></td>
																																					<td class="amount">2,463.00</td>
																																	</tr>
																																																											<tr>
																							<td style="text-align: right">15</td>
												<td>Sales</td>
												<td>6312-6317</td>
												<td style="text-align: center;">ST-1-2010</a></td>
																									<td class="amount">428.00</td>
																																					<td class="amount"></td>
																																					<td class="amount">428.00</td>
																																	</tr>
																																																											<tr>
																							<td style="text-align: right">16</td>
												<td>Sales</td>
												<td>6318-6321</td>
												<td style="text-align: center;">ST-1-2010</a></td>
																									<td class="amount">1,157.00</td>
																																					<td class="amount"></td>
																																					<td class="amount">1,157.00</td>
																																	</tr>
																																																											<tr>
																							<td style="text-align: right">18</td>
												<td>Sales</td>
												<td>6322-6328</td>
												<td style="text-align: center;">ST-1-2010</a></td>
																									<td class="amount">1,213.00</td>
																																					<td class="amount"></td>
																																					<td class="amount">1,213.00</td>
																																	</tr>
																																																											<tr>
																							<td style="text-align: right">19</td>
												<td>Sales</td>
												<td>6329-6336</td>
												<td style="text-align: center;">ST-1-2010</a></td>
																									<td class="amount">4,755.87</td>
																																					<td class="amount"></td>
																																					<td class="amount">4,755.87</td>
																																	</tr>
																																																											<tr>
																							<td style="text-align: right">20</td>
												<td>Sales</td>
												<td>6337-6345</td>
												<td style="text-align: center;">ST-1-2010</a></td>
																									<td class="amount">1,737.00</td>
																																					<td class="amount"></td>
																																					<td class="amount">1,737.00</td>
																																	</tr>
																																																											<tr>
																							<td style="text-align: right">21</td>
												<td>Sales</td>
												<td>6346-6350</td>
												<td style="text-align: center;">ST-1-2010</a></td>
																									<td class="amount">3,010.00</td>
																																					<td class="amount"></td>
																																					<td class="amount">3,010.00</td>
																																	</tr>
																																																											<tr>
																							<td style="text-align: right">21</td>
												<td>Sales</td>
												<td>6351-6352</td>
												<td style="text-align: center;">ST-1-2010</a></td>
																									<td class="amount">402.00</td>
																																					<td class="amount"></td>
																																					<td class="amount">402.00</td>
																																	</tr>
																																																											<tr>
																							<td style="text-align: right">21</td>
												<td>Sales</td>
												<td>6353-6362</td>
												<td style="text-align: center;">ST-1-2010</a></td>
																									<td class="amount">700.00</td>
																																					<td class="amount"></td>
																																					<td class="amount">700.00</td>
																																	</tr>
																																																											<tr>
																							<td style="text-align: right">22</td>
												<td>Sales</td>
												<td>6363-6366</td>
												<td style="text-align: center;">ST-1-2010</a></td>
																									<td class="amount">2,149.00</td>
																																					<td class="amount"></td>
																																					<td class="amount">2,149.00</td>
																																	</tr>
																																																											<tr>
																							<td style="text-align: right">22</td>
												<td>Sales</td>
												<td>6367-6373</td>
												<td style="text-align: center;">ST-1-2010</a></td>
																									<td class="amount">2,930.00</td>
																																					<td class="amount"></td>
																																					<td class="amount">2,930.00</td>
																																	</tr>
																																																											<tr>
																							<td style="text-align: right">25</td>
												<td>Sales</td>
												<td>6374-6377</td>
												<td style="text-align: center;">ST-1-2010</a></td>
																									<td class="amount">353.00</td>
																																					<td class="amount"></td>
																																					<td class="amount">353.00</td>
																																	</tr>
																																																											<tr>
																							<td style="text-align: right">26</td>
												<td>Sales</td>
												<td>6378-6388</td>
												<td style="text-align: center;">ST-1-2010</a></td>
																									<td class="amount">2,178.00</td>
																																					<td class="amount"></td>
																																					<td class="amount">2,178.00</td>
																																	</tr>
																																																											<tr>
																							<td style="text-align: right">27</td>
												<td>Sales</td>
												<td>6389-6394</td>
												<td style="text-align: center;">ST-1-2010</a></td>
																									<td class="amount">100.00</td>
																																					<td class="amount"></td>
																																					<td class="amount">100.00</td>
																																	</tr>
																																																											<tr>
																							<td style="text-align: right">28</td>
												<td>Sales</td>
												<td>6395-6400</td>
												<td style="text-align: center;">ST-1-2010</a></td>
																									<td class="amount">452.00</td>
																																					<td class="amount"></td>
																																					<td class="amount">452.00</td>
																																	</tr>
																																																											<tr>
																							<td style="text-align: right">28</td>
												<td>Sales</td>
												<td>6401-6403</td>
												<td style="text-align: center;">ST-1-2010</a></td>
																									<td class="amount">455.00</td>
																																					<td class="amount"></td>
																																					<td class="amount">455.00</td>
																																	</tr>
																																																											<tr>
																							<td style="text-align: right">29</td>
												<td>Sales</td>
												<td>6405-6414</td>
												<td style="text-align: center;">ST-1-2010</a></td>
																									<td class="amount">4,496.00</td>
																																					<td class="amount"></td>
																																					<td class="amount">4,496.00</td>
																																	</tr>
																																																											<tr>
																							<td style="text-align: right">30</td>
												<td>Sales</td>
												<td>6415-6418</td>
												<td style="text-align: center;">ST-1-2010</a></td>
																									<td class="amount">699.00</td>
																																					<td class="amount"></td>
																																					<td class="amount">699.00</td>
																																	</tr>
																																							<tr id="total-journal-bal">
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td class="amount" style="font-weight: bold">Php 48,659.27</td>
								<td class="amount" style="font-weight: bold">Php 0.00</td>
								<td class="amount" style="font-weight: bold">Php 48,659.27</td>
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
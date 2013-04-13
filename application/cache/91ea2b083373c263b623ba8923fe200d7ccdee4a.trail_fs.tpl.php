<?php /*%%SmartyHeaderCode:13820515287ce641271-12826943%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '91ea2b083373c263b623ba8923fe200d7ccdee4a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trailblazer\\application/views\\audit_trail\\trail_fs.tpl',
      1 => 1364527059,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13820515287ce641271-12826943',
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_51695ba2adf0f',
  'has_nocache_code' => false,
  'cache_lifetime' => 1,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51695ba2adf0f')) {function content_51695ba2adf0f($_smarty_tpl) {?>  <!--
 * Trailblazer Digital Accounting Audit Trail Program
 * @author Kristian Jacob Abad Lora <kjalora92@yahoo.com>
 * @date-created October 31, 2012
-->
	<head>
		<title>Trailblazer - Financial Statement</title>
	</head>
	
	<body>
		<!-- Main -->
		<br>
		<div id="main-wrapper" style="width: 700px">
			<div id="navi">
				<a href="http://localhost/trailblazer/audit_trail"><i class="icon-arrow-left"></i></a>
				<span> | </span>
				<a href="http://localhost/trailblazer/audit_trail"><i class="icon-home"></i></a>
			</div>
			<br>
			<div style="margin: 0 auto; text-align: center">
				<h2>Income Statement</h2>
									<div id="date-heading">For the period of January 2010</div>
								<div style="margin-bottom: 20px; font-style: italic">In Philippine Peso</div>
				<table id="table" style="text-align: left; color: black">
					<thead>
						<th style="width: 250px"></th>
						<th style="width: 100px"></th>
						<th style="width: 100px"></th>
					</thead>
					<tbody>
																																													<tr>
										<td style="font-style: italic">Revenue:</td>
									</tr>
																																<tr>
										<td><a href="http://localhost/trailblazer/audit_trail/trail_ledger?acct=Sales&month=1&year=2010&fs=Income Statement&fs_amt=48659.27&fs_file=is-1-2010.is">Sales</a></td>
																				
											<td></td>
											<td class="amount">48,659.27</td>										
																			</tr>
																																<tr style="font-weight: bold">
										<td>Total Revenue</td>
										<td></td>
										<td class="amount">48,659.27</td>
									</tr>
																																									<tr style="height: 10px"></tr>
									<tr>
										<td style="font-style: italic">Less: Expenses:</td>
									</tr>
																																<tr>
										<td><a href="http://localhost/trailblazer/audit_trail/trail_ledger?acct=Freight-in&month=1&year=2010&fs=Income Statement&fs_amt=1380&fs_file=is-1-2010.is">Freight-in</a></td>
																					<td class="amount">1,380.00</td>
											<td></td>										
																			</tr>
																																<tr>
										<td><a href="http://localhost/trailblazer/audit_trail/trail_ledger?acct=Electricity&month=1&year=2010&fs=Income Statement&fs_amt=417.80&fs_file=is-1-2010.is">Electricity</a></td>
																					<td class="amount">417.80</td>
											<td></td>										
																			</tr>
																																<tr>
										<td><a href="http://localhost/trailblazer/audit_trail/trail_ledger?acct=Communications&month=1&year=2010&fs=Income Statement&fs_amt=300&fs_file=is-1-2010.is">Communications</a></td>
																					<td class="amount">300.00</td>
											<td></td>										
																			</tr>
																																<tr>
										<td><a href="http://localhost/trailblazer/audit_trail/trail_ledger?acct=Purchases&month=1&year=2010&fs=Income Statement&fs_amt=14869.18&fs_file=is-1-2010.is">Purchases</a></td>
																					<td class="amount">14,869.18</td>
											<td></td>										
																			</tr>
																																<tr>
										<td><a href="http://localhost/trailblazer/audit_trail/trail_ledger?acct=Stall Rent&month=1&year=2010&fs=Income Statement&fs_amt=11460&fs_file=is-1-2010.is">Stall Rent</a></td>
																					<td class="amount">11,460.00</td>
											<td></td>										
																			</tr>
																																<tr>
										<td><a href="http://localhost/trailblazer/audit_trail/trail_ledger?acct=Other Taxes/Licenses&month=1&year=2010&fs=Income Statement&fs_amt=3650.31&fs_file=is-1-2010.is">Other Taxes/Licenses</a></td>
																					<td class="amount">3,650.31</td>
											<td></td>										
																			</tr>
																																<tr>
										<td><a href="http://localhost/trailblazer/audit_trail/trail_ledger?acct=Registration&month=1&year=2010&fs=Income Statement&fs_amt=1000&fs_file=is-1-2010.is">Registration</a></td>
																					<td class="amount">1,000.00</td>
											<td></td>										
																			</tr>
																																<tr>
										<td><a href="http://localhost/trailblazer/audit_trail/trail_ledger?acct=Salaries&month=1&year=2010&fs=Income Statement&fs_amt=10800&fs_file=is-1-2010.is">Salaries</a></td>
																					<td class="amount">10,800.00</td>
											<td></td>										
																			</tr>
																																<tr>
										<td><a href="http://localhost/trailblazer/audit_trail/trail_ledger?acct=Honorarium&month=1&year=2010&fs=Income Statement&fs_amt=1600&fs_file=is-1-2010.is">Honorarium</a></td>
																					<td class="amount">1,600.00</td>
											<td></td>										
																			</tr>
																																<tr style="font-weight: bold">
										<td>Total Expenses</td>
										<td></td>
										<td class="amount">45,537.29</td>
									</tr>
																																<tr style="height: 10px"></tr>
									<tr style="font-weight: bold">
										<td>Net Income</td>
										<td></td>
										<td class="amount">3,121.98</td>
									</tr>
																										</tbody>
				</table>
				<div id="source-file">Source File: D:\Kristian Lora\My Documents\Trailblazer Test\financial_statements\income_statements\is-1-2010.is</div>
			</div>
		</div>
	<link href="http://localhost/trailblazer/assets/stylesheets/bootstrap.css" rel="stylesheet"></link>
	<link href="http://localhost/trailblazer/assets/stylesheets/bootstrap-responsive.css" rel="stylesheet"></link>
	<link href="http://localhost/trailblazer/assets/stylesheets/main.css" rel="stylesheet"></link>
	<script src="http://localhost/trailblazer/assets/scripts/jquery.js" type="text/javascript"></script>
	<script src="http://localhost/trailblazer/assets/scripts/bootstrap.js" type="text/javascript"></script>
	<script>
		
	</script>
</html><?php }} ?>
<!--
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
				<a href="{url}audit_trail"><i class="icon-home"></i></a>
			</div>
			<div style="margin: 0 auto; text-align: center">
				<h2>{$doc}</h2>
				<br>
				{if ($info)}
					<table id="table" class="table table-striped" style="text-align: left; color: black">
						<thead>
							{if ($doc == "Cash Receipts Journal")}
								<th style="text-align: center; vertical-align: center">Date</th>
								<th style="text-align: center; vertical-align: center">Account</th>
								<th style="text-align: center; vertical-align: center">Particular</th>
								<th style="text-align: center; vertical-align: center">Reference</th>
								<th style="text-align: center; vertical-align: center">Cash (Dr)</th>
								<th style="text-align: center; vertical-align: center">Other (Cr)</th>
								<th style="text-align: center; vertical-align: center">Sales (Cr)</th>
							{else if ($doc == "Cash Disbursements Journal")}
								<th style="text-align: center; vertical-align: center">Date</th>
								<th style="text-align: center; vertical-align: center">Account</th>
								<th style="text-align: center; vertical-align: center">Particular</th>
								<th style="text-align: center; vertical-align: center">Reference</th>
								<th style="text-align: center; vertical-align: center">Purchases (Dr)</th>
								<th style="text-align: center; vertical-align: center">Other (Dr)</th>
								<th style="text-align: center; vertical-align: center">Cash (Cr)</th>
							{/if}
						</thead>
						<tbody>
							{$row = 0}
							{foreach $info as $i}
								{if ($lg_desc == $i['desc'])}
									{if $row == 0}
										<tr>
											{if ($doc == "Cash Receipts Journal")}
												<td style="text-align: right; font-weight: bold">{$month} {$i['day']}</td>
												<td style="font-weight: bold">{$i['acct']}</td>
												<td style="font-weight: bold">{$i['desc']}</td>
												<td style="text-align: center; font-weight: bold"><a href="{url}audit_trail/trail_trans?ref={$i['ref']}&acct={$acct}&fs={$fs}&fs_amt={$fs_amt}&fs_file={$fs_file}&ledger={$ledger}&lg_ref={$lg_ref}&lg_desc={$lg_desc}&lg_debit={$lg_debit}&lg_credit={$lg_credit}&lg_amt={$lg_amt}&lg_total_amt={$lg_total_amt}&lg_total_amt_disp={$lg_total_amt_disp}&journal={$doc}&jl_ref={$jl_ref}&jl_desc={$i['desc']}&jl_amt={$i['cash']}&jl_total_amt_disp={$jl_total_amt_disp}">{$i['ref']}</a></td>
												{if $i['cash'] != ""}
													<td class="amount" style="font-weight: bold">Php {$i['cash']|number_format:2:".":","}</td>
												{else}
													<td class="amount" style="font-weight: bold">{$i['cash']}</td>
												{/if}
												{if $i['other'] != ""}
													<td class="amount" style="font-weight: bold">Php {$i['other']|number_format:2:".":","}</td>
												{else}
													<td class="amount" style="font-weight: bold">{$i['other']}</td>
												{/if}
												{if $i['sales'] != ""}
													<td class="amount" style="font-weight: bold">Php {$i['sales']|number_format:2:".":","}</td>
												{else}
													<td class="amount" style="font-weight: bold">{$i['sales']}</td>
												{/if}
											{else if ($doc == "Cash Disbursements Journal")}
												<td style="text-align: right; font-weight: bold">{$month} {$i['day']}</td>
												<td style="font-weight: bold">{$i['acct']}</td>
												<td style="font-weight: bold">{$i['desc']}</td>
												<td style="text-align: center; font-weight: bold"><a href="{url}audit_trail/trail_trans?ref={$i['ref']}&acct={$acct}&fs={$fs}&fs_amt={$fs_amt}&fs_file={$fs_file}&ledger={$ledger}&lg_ref={$lg_ref}&lg_desc={$lg_desc}&lg_debit={$lg_debit}&lg_credit={$lg_credit}&lg_amt={$lg_amt}&lg_total_amt={$lg_total_amt}&lg_total_amt_disp={$lg_total_amt_disp}&journal={$doc}&jl_ref={$jl_ref}&jl_desc={$i['desc']}&jl_amt={$i['cash']}&jl_total_amt_disp={$jl_total_amt_disp}">{$i['ref']}</a></td>
												{if $i['purch'] != ""}
													<td class="amount" style="font-weight: bold">Php {$i['purch']|number_format:2:".":","}</td>
												{else}
													<td class="amount" style="font-weight: bold">{$i['purch']}</td>
												{/if}
												{if $i['other'] != ""}
													<td class="amount" style="font-weight: bold">Php {$i['other']|number_format:2:".":","}</td>
												{else}
													<td class="amount" style="font-weight: bold">{$i['other']}</td>
												{/if}
												{if $i['cash'] != ""}
													<td class="amount" style="font-weight: bold">Php {$i['cash']|number_format:2:".":","}</td>
												{else}
													<td class="amount" style="font-weight: bold">{$i['cash']}</td>
												{/if}
											{/if}
										</tr>
									{else}
										<tr>
											{if ($doc == "Cash Receipts Journal")}
												<td style="text-align: right; font-weight: bold">{$i['day']}</td>
												<td style="font-weight: bold">{$i['acct']}</td>
												<td style="font-weight: bold">{$i['desc']}</td>
												<td style="text-align: center; font-weight: bold"><a href="{url}audit_trail/trail_trans?ref={$i['ref']}&acct={$acct}&fs={$fs}&fs_amt={$fs_amt}&fs_file={$fs_file}&ledger={$ledger}&lg_ref={$lg_ref}&lg_desc={$lg_desc}&lg_debit={$lg_debit}&lg_credit={$lg_credit}&lg_amt={$lg_amt}&lg_total_amt={$lg_total_amt}&lg_total_amt_disp={$lg_total_amt_disp}&journal={$doc}&jl_ref={$jl_ref}&jl_desc={$i['desc']}&jl_amt={$i['cash']}&jl_total_amt_disp={$jl_total_amt_disp}">{$i['ref']}</a></td>
												{if $i['cash'] != ""}
													<td class="amount" style="font-weight: bold">{$i['cash']|number_format:2:".":","}</td>
												{else}
													<td class="amount" style="font-weight: bold">{$i['cash']}</td>
												{/if}
												{if $i['other'] != ""}
													<td class="amount" style="font-weight: bold">{$i['other']|number_format:2:".":","}</td>
												{else}
													<td class="amount" style="font-weight: bold">{$i['other']}</td>
												{/if}
												{if $i['sales'] != ""}
													<td class="amount" style="font-weight: bold">{$i['sales']|number_format:2:".":","}</td>
												{else}
													<td class="amount" style="font-weight: bold">{$i['sales']}</td>
												{/if}
											{else if ($doc == "Cash Disbursements Journal")}
												<td style="text-align: right; font-weight: bold">{$i['day']}</td>
												<td style="font-weight: bold">{$i['acct']}</td>
												<td style="font-weight: bold">{$i['desc']}</td>
												<td style="text-align: center; font-weight: bold"><a href="{url}audit_trail/trail_trans?ref={$i['ref']}&acct={$acct}&fs={$fs}&fs_amt={$fs_amt}&fs_file={$fs_file}&ledger={$ledger}&lg_ref={$lg_ref}&lg_desc={$lg_desc}&lg_debit={$lg_debit}&lg_credit={$lg_credit}&lg_amt={$lg_amt}&lg_total_amt={$lg_total_amt}&lg_total_amt_disp={$lg_total_amt_disp}&journal={$doc}&jl_ref={$jl_ref}&jl_desc={$i['desc']}&jl_amt={$i['cash']}&jl_total_amt_disp={$jl_total_amt_disp}">{$i['ref']}</a></td>
												{if $i['purch'] != ""}
													<td class="amount" style="font-weight: bold">{$i['purch']|number_format:2:".":","}</td>
												{else}
													<td class="amount" style="font-weight: bold">{$i['purch']}</td>
												{/if}
												{if $i['other'] != ""}
													<td class="amount" style="font-weight: bold">{$i['other']|number_format:2:".":","}</td>
												{else}
													<td class="amount" style="font-weight: bold">{$i['other']}</td>
												{/if}
												{if $i['cash'] != ""}
													<td class="amount" style="font-weight: bold">{$i['cash']|number_format:2:".":","}</td>
												{else}
													<td class="amount" style="font-weight: bold">{$i['cash']}</td>
												{/if}
											{/if}
										</tr>
									{/if}
								{else}
									{if $row == 0}
										<tr>
											{if ($doc == "Cash Receipts Journal")}
												<td style="text-align: right">{$month} {$i['day']}</td>
												<td>{$i['acct']}</td>
												<td>{$i['desc']}</td>
												<td style="text-align: center">{$i['ref']}</td>
												{if $i['cash'] != ""}
													<td class="amount">Php {$i['cash']|number_format:2:".":","}</td>
												{else}
													<td class="amount">{$i['cash']}</td>
												{/if}
												{if $i['other'] != ""}
													<td class="amount">Php {$i['other']|number_format:2:".":","}</td>
												{else}
													<td class="amount">{$i['other']}</td>
												{/if}
												{if $i['sales'] != ""}
													<td class="amount">Php {$i['sales']|number_format:2:".":","}</td>
												{else}
													<td class="amount">{$i['sales']}</td>
												{/if}
											{else if ($doc == "Cash Disbursements Journal")}
												<td style="text-align: right">{$month} {$i['day']}</td>
												<td>{$i['acct']}</td>
												<td>{$i['desc']}</td>
												<td style="text-align: center;">{$i['ref']}</a></td>
												{if $i['purch'] != ""}
													<td class="amount">Php {$i['purch']|number_format:2:".":","}</td>
												{else}
													<td class="amount">{$i['purch']}</td>
												{/if}
												{if $i['other'] != ""}
													<td class="amount">Php {$i['other']|number_format:2:".":","}</td>
												{else}
													<td class="amount">{$i['other']}</td>
												{/if}
												{if $i['cash'] != ""}
													<td class="amount">Php {$i['cash']|number_format:2:".":","}</td>
												{else}
													<td class="amount">{$i['cash']}</td>
												{/if}
											{/if}
										</tr>
									{else}
										<tr>
											{if ($doc == "Cash Receipts Journal")}
												<td style="text-align: right">{$i['day']}</td>
												<td>{$i['acct']}</td>
												<td>{$i['desc']}</td>
												<td style="text-align: center;">{$i['ref']}</a></td>
												{if $i['cash'] != ""}
													<td class="amount">{$i['cash']|number_format:2:".":","}</td>
												{else}
													<td class="amount">{$i['cash']}</td>
												{/if}
												{if $i['other'] != ""}
													<td class="amount">{$i['other']|number_format:2:".":","}</td>
												{else}
													<td class="amount">{$i['other']}</td>
												{/if}
												{if $i['sales'] != ""}
													<td class="amount">{$i['sales']|number_format:2:".":","}</td>
												{else}
													<td class="amount">{$i['sales']}</td>
												{/if}
											{else if ($doc == "Cash Disbursements Journal")}
												<td style="text-align: right">{$i['day']}</td>
												<td>{$i['acct']}</td>
												<td>{$i['desc']}</td>
												<td style="text-align: center;">{$i['ref']}</a></td>
												{if $i['purch'] != ""}
													<td class="amount">{$i['purch']|number_format:2:".":","}</td>
												{else}
													<td class="amount">{$i['purch']}</td>
												{/if}
												{if $i['other'] != ""}
													<td class="amount">{$i['other']|number_format:2:".":","}</td>
												{else}
													<td class="amount">{$i['other']}</td>
												{/if}
												{if $i['cash'] != ""}
													<td class="amount">{$i['cash']|number_format:2:".":","}</td>
												{else}
													<td class="amount">{$i['cash']}</td>
												{/if}
											{/if}
										</tr>
									{/if}
								{/if}
								{$row = $row + 1}
							{/foreach}
							<tr id="total-journal-bal">
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td class="amount" style="font-weight: bold">Php {$jl_total_dr_disp|number_format:2:".":","}</td>
								<td class="amount" style="font-weight: bold">Php {$jl_total_other_disp|number_format:2:".":","}</td>
								<td class="amount" style="font-weight: bold">Php {$jl_total_cr_disp|number_format:2:".":","}</td>
							</tr>
						</tbody>
					</table>
				{else}
					<table class="table table-striped" style="text-align: left; color: black">
						{if ($doc == "Cash Receipts Journal")}
							<th style="text-align: center; vertical-align: center">Date</th>
							<th style="text-align: center; vertical-align: center">Account</th>
							<th style="text-align: center; vertical-align: center">Description</th>
							<th style="text-align: center; vertical-align: center">Reference</th>
							<th style="text-align: center; vertical-align: center">Cash (Dr)</th>
							<th style="text-align: center; vertical-align: center">Other (Dr)</th>
							<th style="text-align: center; vertical-align: center">Sales (Cr)</th>
						{else if ($doc == "Cash Disbursements Journal")}
							<th style="text-align: center; vertical-align: center">Date</th>
							<th style="text-align: center; vertical-align: center">Account</th>
							<th style="text-align: center; vertical-align: center">Description</th>
							<th style="text-align: center; vertical-align: center">Reference</th>
							<th style="text-align: center; vertical-align: center">Purchases (Dr)</th>
							<th style="text-align: center; vertical-align: center">Other (Dr)</th>
							<th style="text-align: center; vertical-align: center">Cash (Cr)</th>
						{/if}
					</table>
					<table class="table table-hover">
						<tbody>
							<div style="font-style: italic; text-align: left">{$error_msg} The audit trail ends here. Click <a href="{url}audit_trail/summary?acct={$acct}&fs={$fs}&fs_amt={$fs_amt}&fs_file={$fs_file}&ledger={$ledger}&lg_ref={$lg_ref}&lg_desc={$lg_desc}&lg_debit={$lg_debit}&lg_credit={$lg_credit}&lg_amt={$lg_amt}&lg_total_amt={$lg_total_amt}">here</a> to view results.</div>
						</tbody>
					</table>
				{/if}
				<div id="source-file">Source File: {$source}</div>
			</div>
		</div>
	
	<link href="{url}assets/stylesheets/bootstrap.css" rel="stylesheet"></link>
	<link href="{url}assets/stylesheets/bootstrap-responsive.css" rel="stylesheet"></link>
	<link href="{url}assets/stylesheets/main.css" rel="stylesheet"></link>
	<script src="{url}assets/scripts/jquery.js" type="text/javascript"></script>
	<script src="{url}assets/scripts/bootstrap.js" type="text/javascript"></script>
</html>
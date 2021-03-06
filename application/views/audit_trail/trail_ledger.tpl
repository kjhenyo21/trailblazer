<!--
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
				<a href="{url}audit_trail"><i class="icon-home"></i></a>
			</div>
			<div style="margin: 0 auto; text-align: center">
				<h2>{$doc}</h2>
				<div class="ledger-subhead"><h4>Account: {$acct} {$detail['acct_no']}</h4></div>
				<div class="ledger-subhead">Month/Year: {$month} {$year}</div>
				<br>
				{if ($info)}
					<table id="table" class="table table-striped" style="text-align: left; color: black">
						<thead>
							<th style="text-align: center; vertical-align: center">Date</th>
							<th style="text-align: center; vertical-align: center">Description</th>
							<th style="text-align: center; vertical-align: center">Reference</th>
							<th style="text-align: center; vertical-align: center">Debit</th>
							<th style="text-align: center; vertical-align: center">Credit</th>
						</thead>
						<tbody>
							{$row = 0}							
							{$curr_month = ""}						
							{foreach $info as $i}
								{if ($curr_month != $i['month'])}
									{$row = 0}									
								{/if}
								{if $row == 0}
									<tr>
										<td style="text-align: right">{$month} {$i['day']}</td>
										<td style="text-align: center;">{$i['desc']}</td>
										<td style="text-align: center;"><a href="{url}audit_trail/trail_journal?ref={$i['ref']}&acct={$acct}&fs={$fs}&fs_amt={$fs_amt}&fs_file={$fs_file}&ledger={$doc}&lg_ref={$detail['acct_no']}&lg_desc={$i['desc']}&lg_debit={$i['debit']}&lg_credit={$i['credit']}&lg_total_amt={$lg_total_amt}&lg_total_amt_disp={$lg_total_amt_disp}&jl_ref={$i['ref']}">{$i['ref']}</a></td>
										{if $i['debit'] != ""}
											<td class="amount">Php {$i['debit']|number_format:2:".":","}</td>
										{else}
											<td class="amount">{$i['debit']}</td>
										{/if}
										{if $i['credit'] != ""}
											<td class="amount">Php {$i['credit']|number_format:2:".":","}</td>
										{else}
											<td class="amount">Php 0.00</td>
										{/if}
									</tr>
								{else}
									<tr>
										<td style="text-align: right">{$i['day']}</td>
										<td style="text-align: center;">{$i['desc']}</td>
										<td style="text-align: center;"><a href="{url}audit_trail/trail_journal?ref={$i['ref']}&acct={$acct}&fs={$fs}&fs_amt={$fs_amt}&fs_file={$fs_file}&ledger={$doc}&lg_ref={$detail['acct_no']}&lg_desc={$i['desc']}&lg_debit={$i['debit']}&lg_credit={$i['credit']}&lg_total_amt={$lg_total_amt}&lg_total_amt_disp={$lg_total_amt_disp}&jl_ref={$i['ref']}">{$i['ref']}</a></td>
										{if $i['debit'] != ""}
											<td class="amount">{$i['debit']|number_format:2:".":","}</td>
										{else}
											<td class="amount">{$i['debit']}</td>
										{/if}
										{if $i['credit'] != ""}
											<td class="amount">{$i['credit']|number_format:2:".":","}</td>
										{else}
											<td class="amount">0.00</td>
										{/if}
									</tr>
								{/if}
								{$row = $row + 1}
								{$curr_month = $i['month']}
							{/foreach}
							<tr id="total-ledger-bal">
								<td></td>
								<td></td>
								<td style="font-weight: bold; text-align: right">TOTAL</td>
								<td class="amount" style="font-weight: bold">Php {$lg_total_dr_disp|number_format:2:".":","}</td>
								<td class="amount" style="font-weight: bold">Php {$lg_total_cr_disp|number_format:2:".":","}</td>
							</tr>
						</tbody>
					</table>
				{else}
					<table class="table table-striped" style="text-align: left; color: black">
						<thead>
							<th style="text-align: center; vertical-align: center">Date</th>
							<th style="text-align: center; vertical-align: center">Description</th>
							<th style="text-align: center; vertical-align: center">Reference</th>
							<th style="text-align: center; vertical-align: center">Debit</th>
							<th style="text-align: center; vertical-align: center">Credit</th>
						</thead>
					</table>
					<table class="table table-hover">
						<tbody>
							<div style="font-style: italic; text-align: left">{$error_msg} The audit trail ends here. Click <a href="{url}audit_trail/summary?acct={$acct}&fs={$fs}&fs_amt={$fs_amt}&fs_file={$fs_file}">here</a> to view results.</div>
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
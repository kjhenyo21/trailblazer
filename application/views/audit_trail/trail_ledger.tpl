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
				<div class="ledger-subhead"><h4>Account: {$detail['acct_name']} {$detail['acct_no']}</h4></div>
				<div class="ledger-subhead">Month/Year: {$month} {$year}</div>
				<br>
				<table id="table" style="text-align: left; color: black">
					<thead>
						<th style="text-align: center; vertical-align: center">Date</th>
						<th style="text-align: center; vertical-align: center">Description</th>
						<th style="text-align: center; vertical-align: center">Reference</th>
						<th style="text-align: center; vertical-align: center">Debit</th>
						<th style="text-align: center; vertical-align: center">Credit</th>
					</thead>
					<tbody>
						{$row = 0}
						{if ($info)}
							{foreach $info as $i}
								{if $row == 0}
									<tr>
										<td style="text-align: right">{$month} {$i['day']}</td>
										<td>{$i['desc']}</td>
										<td><a href="{url}audit_trail/trail_journal?ref={$i['ref']}&acct={$acct}&fs={$fs}&fs_amt={$fs_amt}&fs_file={$fs_file}&ledger={$doc}&lg_ref={$detail['acct_no']}&lg_desc={$i['desc']}&lg_debit={$i['debit']}&lg_credit={$i['credit']}&jl_ref={$i['ref']}">{$i['ref']}</a></td>
										{if $i['debit'] != ""}
											<td class="amount">Php {$i['debit']|number_format:2:".":","}</td>
										{else}
											<td class="amount">{$i['debit']}</td>
										{/if}
										{if $i['credit'] != ""}
											<td class="amount">Php {$i['credit']|number_format:2:".":","}</td>
										{else}
											<td class="amount">{$i['credit']}</td>
										{/if}
									</tr>
								{else}
									<tr>
										<td style="text-align: right">{$i['day']}</td>
										<td>{$i['desc']}</td>
										<td><a href="{url}audit_trail/trail_journal?ref={$i['ref']}&acct={$acct}&fs={$fs}&fs_amt={$fs_amt}&fs_file={$fs_file}&ledger={$doc}&lg_ref={$detail['acct_no']}&lg_desc={$i['desc']}&lg_debit={$i['debit']}&lg_credit={$i['credit']}&jl_ref={$i['ref']}">{$i['ref']}</a></td>
										{if $i['debit'] != ""}
											<td class="amount">Php {$i['debit']|number_format:2:".":","}</td>
										{else}
											<td class="amount">{$i['debit']}</td>
										{/if}
										{if $i['credit'] != ""}
											<td class="amount">Php {$i['credit']|number_format:2:".":","}</td>
										{else}
											<td class="amount">{$i['credit']}</td>
										{/if}
									</tr>
								{/if}
								{$row = $row + 1}
							{/foreach}
						{else}
						{/if}
					</tbody>
				</table>
				<div id="source-file">Source File: {$source}</div>
			</div>
		</div>
	
	<link href="{url}assets/stylesheets/bootstrap.css" rel="stylesheet"></link>
	<link href="{url}assets/stylesheets/bootstrap-responsive.css" rel="stylesheet"></link>
	<link href="{url}assets/stylesheets/main.css" rel="stylesheet"></link>
	<script src="{url}assets/scripts/jquery.js" type="text/javascript"></script>
	<script src="{url}assets/scripts/bootstrap.js" type="text/javascript"></script>
</html>
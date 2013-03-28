<!--
 * Trailblazer Digital Accounting Audit Trail Program
 * @author Kristian Jacob Abad Lora <kjalora92@yahoo.com>
 * @date-created October 31, 2012
-->
	<head>
		<title>Trailblazer - Trailing the Transactions</title>
	</head>
	
	<body>
		<div id="transDetailsModal">
		</div>
		<!-- Main -->
		<br>
		<div id="main-wrapper" style="width: 900px">
			<div id="navi" style="float: right; font-size: 14pt">
				<a href="#" onclick="history.go(-1);return false;"><i class="icon-arrow-left"></i></a>
				<span> | </span>
				<a href="{url}audit_trail"><i class="icon-home"></i></a>
			</div>
			<div style="margin: 0 auto; text-align: center">
				<h2>{$doc}</h2>
				<br>
				{$row = 0}
				{if ($info)}
					<table id="table" class="table table-hover" style="text-align: left; color: black">
						<thead>
							{if ($headings)}
								{foreach $headings as $h}
									<th style="text-align: center">{$h}</th>
								{/foreach}
							{/if}
							<th>Audit Trail Results</th>
							<!--<th></th>-->
						</thead>
						<tbody>
							{foreach $info as $i}
								{$url = "or_no={$i[1]}&amt={$i[2]}&name={$i[3]}&address={$i[4]}&contact={$i[5]}"}
								{if $row == 0}
									<tr>
										<td style="text-align: center; vertical-align: center">{$i[0]}</td>
										<td style="text-align: center; vertical-align: center"><a href="#trans-details{$i[1]}" data-toggle="modal" onClick="getDetails('{$url}'); return false;">{$i[1]}</a></td>
										<td class="amount" style="text-align: right;">Php {$i[2]|number_format:2:".":","}</td>
										<td style="text-align: center; vertical-align: center">{$i[3]}</td>
										<td style="text-align: center; vertical-align: center">{$i[4]}</td>
										<td style="text-align: center; vertical-align: center">{$i[5]}</td>
										<td style="text-align: center; vertical-align: center; width: 30px"><a href="{url}audit_trail/summary?ref={$ref}&or_no={$i[1]}&acct={$acct}&fs={$fs}&fs_amt={$fs_amt}&fs_file={$fs_file}&ledger={$ledger}&lg_ref={$lg_ref}&lg_desc={$lg_desc}&lg_debit={$lg_debit}&lg_credit={$lg_credit}&lg_total_amt={$lg_total_amt}&journal={$journal}&jl_ref={$jl_ref}&jl_desc={$jl_desc}&jl_amt={$jl_amt}&trans={$doc}&trans_amt={$i[2]}&trans_total_amt={$trans_total_amt}">View</a></td>
										<!--<td style="text-align: center; vertical-align: center; width: 30px"><a>System Audit</a></td>-->
									</tr>
								{else}
									<tr style="vertical-align: center;">
										<td style="text-align: center; vertical-align: center important!;">{$i[0]}</td>
										<td style="text-align: center; vertical-align: center;"><a href="#trans-details{$i[1]}" data-toggle="modal" onClick="getDetails('{$url}'); return false;">{$i[1]}</a></td>
										<td class="amount" style="text-align: right;">{$i[2]|number_format:2:".":","}</td>
										<td style="text-align: center; vertical-align: center;">{$i[3]}</td>
										<td style="text-align: center; vertical-align: center;">{$i[4]}</td>
										<td style="text-align: center; vertical-align: center;">{$i[5]}</td>
										<td style="text-align: center; vertical-align: center; width: 30px"><a href="{url}audit_trail/summary?ref={$ref}&or_no={$i[1]}&acct={$acct}&fs={$fs}&fs_amt={$fs_amt}&fs_file={$fs_file}&ledger={$ledger}&lg_ref={$lg_ref}&lg_desc={$lg_desc}&lg_debit={$lg_debit}&lg_credit={$lg_credit}&lg_total_amt={$lg_total_amt}&journal={$journal}&jl_ref={$jl_ref}&jl_desc={$jl_desc}&jl_amt={$jl_amt}&trans={$doc}&trans_amt={$i[2]}&trans_total_amt={$trans_total_amt}">View</a></td>
										<!--<td style="text-align: center; vertical-align: center;"><a>System Audit</a></td>-->
									</tr>
								{/if}
								{$row = $row + 1}
							{/foreach}
						</tbody>
					</table>
				{else}
					<table id="table" class="table table-striped" style="text-align: left; color: black">
						<thead>
							<th style="text-align: center">Date</th>
							<th style="text-align: center">OR No</th>
							<th style="text-align: center">Amount</th>
							<th style="text-align: center">Name</th>
							<th style="text-align: center">Contact</th>
							<th style="text-align: center">Address</th>
							<th>Audit Trail Results</th>
							<!--<th></th>-->
						</thead>
					</table>
					<table class="table table-striped">
						<tbody>
							<tr>
								<td><div style="font-style: italic; text-align: left">{$error_msg} The audit trail ends here. Click <a href="{url}audit_trail/summary?acct={$acct}&fs={$fs}&fs_amt={$fs_amt}&fs_file={$fs_file}&ledger={$ledger}&lg_ref={$lg_ref}&lg_desc={$lg_desc}&lg_debit={$lg_debit}&lg_credit={$lg_credit}&lg_amt={$lg_amt}&lg_total_amt={$lg_total_amt}&journal={$journal}&jl_ref={$jl_ref}&jl_desc={$jl_desc}&jl_amt={$jl_amt}">here</a> to view results.</div></td>
							</tr>
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
	<script>
		function getDetails(url) {	
			url = url.replace(/\s/g,"%20");
			console.log(url);
			$('#transDetailsModal').load('load_trans_details/index?' + url);
			$('#trans-details').modal('show');
			$('body').append("<div id='backdrop' class='modal-backdrop fade in'></div>");
		}
		
		function closeIt() {
			$('#trans-details').remove();
			$('#backdrop').remove();
		}
		
		function textIt(name, contact_no, date, or_no, amt_due) {
			var ref = Math.floor(Math.random() * 9000) + 1000;
			var message = "Good day, " + name + "! This is Trailblazer - an automated accounting audit trail. We would just like you to confirm if you have made a transaction with Lalaine's Bookstore amounting to Php" + amt_due + " last " + date + " with OR No: " + or_no + ". Please reply TRAIL<space><Ref No><space><Yes or No> to this number. Your Ref No is " + ref + ". We will be waiting for your reply. Help us fight agaist fraud!";
			$.ajax({
				url: 'http://localhost:8011/send/sms/0' + contact_no + '/' + message + '/',
				type: "GET",
				dataType: "text",
				async: false,
				success: function() {
				},
				error: function(data, status, error){
					alert('Message sent!');
					//if (data.readyState == 4) 
					//	alert('Message sent!');
					//else if (data.readyState == 0) 
					//	alert('Message sending failed! Make sure that your GSM modem is properly inserted to your PC and/or that you have opened FrontlineSMS.');
				}
			});
			$.ajax({
				url: 'index/textPerson?ref=' + ref + '&name=' + name + '&contact=' + contact_no + '&date=' + date + '&or_no=' + or_no + '&amt=' + amt_due,
				type: "GET",
				async: false
			});
		}
	</script>
</html>
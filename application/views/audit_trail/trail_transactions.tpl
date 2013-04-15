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
		<!-- Modal for Sampling-->
		<div id="sample-selection-modal" class="modal hide fade" style="margin-top: -200px; width: 480px">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true" onClick="closeSelectSample(); return false;">&times;</button>
				<h3>Select a Sample</h3>
			</div>
			<div class="modal-body" style="font-size: 10pt">
				<p>This sytem employs Pareto's Principle of Distribution in selecting a sample. To be able to select a sample, sample size must be determined first. You can set the size either based upon your judgement or let the system do it:</p>
				<form id="sample-selection-form" class="form-horizontal" style="margin-bottom: 0px">
					<fieldset>
						<div style="margin: 0 35px">
							<div class="field-group" id="group-options">
								<label class="radio">
									<input type="radio" name="optionsSetSize" id="optionsSetSizeBySystem" value="standard" onClick="setAuto();" checked>
									Let the system do it, please
								</label>
								<label class="radio">
									<input type="radio" name="optionsSetSize" id="optionsSetSizeManually" value="manual" onClick="setManual();">
									Set manually
								</label>
								<span class="control" style="margin-left: 5px">
									<input type="text" class="span1" name="sampleSize" id="sampleSize" style="font-size: 10pt; height: 11pt !important; text-align: right" disabled="disabled"/>
								</span>
							</div>
						</div>
					</fieldset>
				</form>
			</div>
			<div class="modal-footer" style="text-align: center">
				<a class="btn btn-small btn-primary" id="set" onClick="selectSample(); return false;">Go</a>
				<button class="btn btn-small" data-dismiss="modal" onClick="closeSelectSample(); return false;">Cancel</button>
			</div>
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
				{$url2 = "&doc=$doc&ref=$ref&acct=$acct&fs=$fs&fs_amt=$fs_amt&fs_file=$fs_file&ledger=$ledger&lg_ref=$lg_ref&lg_desc=$lg_desc&lg_debit=$lg_debit&lg_credit=$lg_credit&lg_amt=$lg_amt&lg_total_amt=$lg_total_amt&journal=$journal&jl_ref=$jl_ref&jl_desc=$jl_desc&jl_amt=$jl_amt&trans=$doc&trans_total_amt=$trans_total_amt"}
				<div id="trans-table">
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
								<tr id=total-trans-amt>
									<td></td>
									<td style="font-weight: bold; text-align: right">TOTAL</td>
									<td class="amount" style="font-weight: bold">Php {$trans_total_amt|number_format:2:".":","}</td>								
									<td></td>
									<td></td>
									<td><a href="#select-sample-modal" class="btn btn-primary btn-small" data-toggle="modal" style="text-align: center" onClick="openSelectSample(); return false;">Select a Sample</a></td>
									<td></td>
								</tr>
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
				</div>
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

		function setAuto() {
			$('#sampleSize').attr('disabled', 'disabled');
			$('#sampleSize').val('');
		}
		
		function setManual() {
			$('#sampleSize').removeAttr('disabled');
		}
		
		function openSelectSample() {
			$('#sample-selection-modal').removeClass('hide');
			$('#sample-selection-modal').addClass('in');
			$('body').append('<div id="backdrop-sample" class="modal-backdrop fade in"></div>');
		}
		
		function closeSelectSample() {
			$('#sample-selection-modal').removeClass('in');
			$('#sample-selection-modal').addClass('hide');
			$('#backdrop-sample').remove();
			$('#sampleSize').val('');
		}
		
		function selectSample() {
			medium = $('input[name=optionsSetSize]:checked', '#sample-selection-form').val()
			sampleSize = $('#sampleSize').val();
			console.log(medium);
			headings = "";
			url2 = '{$url2}'.replace(/ /g, "%20");
			{foreach $headings as $h}
				headings += "&headings[]={$h}";
			{/foreach}
			headings = headings.replace(/ /g, "%20");
			console.log(headings);
			closeSelectSample();
			$('#trans-table').load('load_trans_sample?medium=' + medium + '&from=' + {$from} + '&to=' + {$to} +'&pop=' + {$sizeOfTrans} + '&size=' + sampleSize + headings + url2 + '&trans_total_amt=' + {$trans_total_amt});
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
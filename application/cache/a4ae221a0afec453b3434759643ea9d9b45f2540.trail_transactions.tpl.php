<?php /*%%SmartyHeaderCode:43005152921ea15cb2-80609588%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4ae221a0afec453b3434759643ea9d9b45f2540' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trailblazer\\application/views\\audit_trail\\trail_transactions.tpl',
      1 => 1366032658,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '43005152921ea15cb2-80609588',
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_516c069eca720',
  'has_nocache_code' => false,
  'cache_lifetime' => 1,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_516c069eca720')) {function content_516c069eca720($_smarty_tpl) {?>  <!--
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
				<a href="http://localhost/trailblazer/audit_trail"><i class="icon-home"></i></a>
			</div>
			<div style="margin: 0 auto; text-align: center">
				<h2>Sale Transactions</h2>
				<br>
												<div id="trans-table">
											<table id="table" class="table table-hover" style="text-align: left; color: black">
							<thead>
																											<th style="text-align: center">Date</th>
																			<th style="text-align: center">OR No</th>
																			<th style="text-align: center">Amount Due</th>
																			<th style="text-align: center">Name</th>
																			<th style="text-align: center">Address</th>
																			<th style="text-align: center">Contact</th>
																									<th>Audit Trail Results</th>
								<!--<th></th>-->
							</thead>
							<tbody>
																																				<tr>
											<td style="text-align: center; vertical-align: center">2010-01-07</td>
											<td style="text-align: center; vertical-align: center"><a href="#trans-details6270" data-toggle="modal" onClick="getDetails('or_no=6270&amt=360&name=&address=&contact='); return false;">6270</a></td>
											<td class="amount" style="text-align: right;">Php 360.00</td>
											<td style="text-align: center; vertical-align: center"></td>
											<td style="text-align: center; vertical-align: center"></td>
											<td style="text-align: center; vertical-align: center"></td>
											<td style="text-align: center; vertical-align: center; width: 30px"><a href="http://localhost/trailblazer/audit_trail/summary?ref=ST-1-2010&or_no=6270&acct=Sales&fs=Income Statement&fs_amt=48659.27&fs_file=is-1-2010.is&ledger=General Ledger&lg_ref=401&lg_desc=6270-6279&lg_debit=&lg_credit=4819&lg_total_amt=48659.27&journal=Cash Receipts Journal&jl_ref=CRJ-1-2010&jl_desc=6270-6279&jl_amt=4819&trans=Sale Transactions&trans_amt=360&trans_total_amt=4819">View</a></td>
											<!--<td style="text-align: center; vertical-align: center; width: 30px"><a>System Audit</a></td>-->
										</tr>
																																																						<tr style="vertical-align: center;">
											<td style="text-align: center; vertical-align: center important!;">2010-01-07</td>
											<td style="text-align: center; vertical-align: center;"><a href="#trans-details6271" data-toggle="modal" onClick="getDetails('or_no=6271&amt=560&name=Loricar Orais&address=Lupa, Naval, Biliran&contact=9993844812'); return false;">6271</a></td>
											<td class="amount" style="text-align: right;">560.00</td>
											<td style="text-align: center; vertical-align: center;">Loricar Orais</td>
											<td style="text-align: center; vertical-align: center;">Lupa, Naval, Biliran</td>
											<td style="text-align: center; vertical-align: center;">9993844812</td>
											<td style="text-align: center; vertical-align: center; width: 30px"><a href="http://localhost/trailblazer/audit_trail/summary?ref=ST-1-2010&or_no=6271&acct=Sales&fs=Income Statement&fs_amt=48659.27&fs_file=is-1-2010.is&ledger=General Ledger&lg_ref=401&lg_desc=6270-6279&lg_debit=&lg_credit=4819&lg_total_amt=48659.27&journal=Cash Receipts Journal&jl_ref=CRJ-1-2010&jl_desc=6270-6279&jl_amt=4819&trans=Sale Transactions&trans_amt=560&trans_total_amt=4819">View</a></td>
											<!--<td style="text-align: center; vertical-align: center;"><a>System Audit</a></td>-->
										</tr>
																																																						<tr style="vertical-align: center;">
											<td style="text-align: center; vertical-align: center important!;">2010-01-07</td>
											<td style="text-align: center; vertical-align: center;"><a href="#trans-details6272" data-toggle="modal" onClick="getDetails('or_no=6272&amt=360&name=&address=&contact='); return false;">6272</a></td>
											<td class="amount" style="text-align: right;">360.00</td>
											<td style="text-align: center; vertical-align: center;"></td>
											<td style="text-align: center; vertical-align: center;"></td>
											<td style="text-align: center; vertical-align: center;"></td>
											<td style="text-align: center; vertical-align: center; width: 30px"><a href="http://localhost/trailblazer/audit_trail/summary?ref=ST-1-2010&or_no=6272&acct=Sales&fs=Income Statement&fs_amt=48659.27&fs_file=is-1-2010.is&ledger=General Ledger&lg_ref=401&lg_desc=6270-6279&lg_debit=&lg_credit=4819&lg_total_amt=48659.27&journal=Cash Receipts Journal&jl_ref=CRJ-1-2010&jl_desc=6270-6279&jl_amt=4819&trans=Sale Transactions&trans_amt=360&trans_total_amt=4819">View</a></td>
											<!--<td style="text-align: center; vertical-align: center;"><a>System Audit</a></td>-->
										</tr>
																																																						<tr style="vertical-align: center;">
											<td style="text-align: center; vertical-align: center important!;">2010-01-07</td>
											<td style="text-align: center; vertical-align: center;"><a href="#trans-details6273" data-toggle="modal" onClick="getDetails('or_no=6273&amt=885&name=Samuel Castro&address=Naval, Biliran&contact=9053525992'); return false;">6273</a></td>
											<td class="amount" style="text-align: right;">885.00</td>
											<td style="text-align: center; vertical-align: center;">Samuel Castro</td>
											<td style="text-align: center; vertical-align: center;">Naval, Biliran</td>
											<td style="text-align: center; vertical-align: center;">9053525992</td>
											<td style="text-align: center; vertical-align: center; width: 30px"><a href="http://localhost/trailblazer/audit_trail/summary?ref=ST-1-2010&or_no=6273&acct=Sales&fs=Income Statement&fs_amt=48659.27&fs_file=is-1-2010.is&ledger=General Ledger&lg_ref=401&lg_desc=6270-6279&lg_debit=&lg_credit=4819&lg_total_amt=48659.27&journal=Cash Receipts Journal&jl_ref=CRJ-1-2010&jl_desc=6270-6279&jl_amt=4819&trans=Sale Transactions&trans_amt=885&trans_total_amt=4819">View</a></td>
											<!--<td style="text-align: center; vertical-align: center;"><a>System Audit</a></td>-->
										</tr>
																																																						<tr style="vertical-align: center;">
											<td style="text-align: center; vertical-align: center important!;">2010-01-07</td>
											<td style="text-align: center; vertical-align: center;"><a href="#trans-details6274" data-toggle="modal" onClick="getDetails('or_no=6274&amt=628&name=Febreth Acedillo&address=Caneja St., Naval, Biliran&contact=9173485321'); return false;">6274</a></td>
											<td class="amount" style="text-align: right;">628.00</td>
											<td style="text-align: center; vertical-align: center;">Febreth Acedillo</td>
											<td style="text-align: center; vertical-align: center;">Caneja St., Naval, Biliran</td>
											<td style="text-align: center; vertical-align: center;">9173485321</td>
											<td style="text-align: center; vertical-align: center; width: 30px"><a href="http://localhost/trailblazer/audit_trail/summary?ref=ST-1-2010&or_no=6274&acct=Sales&fs=Income Statement&fs_amt=48659.27&fs_file=is-1-2010.is&ledger=General Ledger&lg_ref=401&lg_desc=6270-6279&lg_debit=&lg_credit=4819&lg_total_amt=48659.27&journal=Cash Receipts Journal&jl_ref=CRJ-1-2010&jl_desc=6270-6279&jl_amt=4819&trans=Sale Transactions&trans_amt=628&trans_total_amt=4819">View</a></td>
											<!--<td style="text-align: center; vertical-align: center;"><a>System Audit</a></td>-->
										</tr>
																																																						<tr style="vertical-align: center;">
											<td style="text-align: center; vertical-align: center important!;">2010-01-07</td>
											<td style="text-align: center; vertical-align: center;"><a href="#trans-details6275" data-toggle="modal" onClick="getDetails('or_no=6275&amt=89&name=&address=&contact='); return false;">6275</a></td>
											<td class="amount" style="text-align: right;">89.00</td>
											<td style="text-align: center; vertical-align: center;"></td>
											<td style="text-align: center; vertical-align: center;"></td>
											<td style="text-align: center; vertical-align: center;"></td>
											<td style="text-align: center; vertical-align: center; width: 30px"><a href="http://localhost/trailblazer/audit_trail/summary?ref=ST-1-2010&or_no=6275&acct=Sales&fs=Income Statement&fs_amt=48659.27&fs_file=is-1-2010.is&ledger=General Ledger&lg_ref=401&lg_desc=6270-6279&lg_debit=&lg_credit=4819&lg_total_amt=48659.27&journal=Cash Receipts Journal&jl_ref=CRJ-1-2010&jl_desc=6270-6279&jl_amt=4819&trans=Sale Transactions&trans_amt=89&trans_total_amt=4819">View</a></td>
											<!--<td style="text-align: center; vertical-align: center;"><a>System Audit</a></td>-->
										</tr>
																																																						<tr style="vertical-align: center;">
											<td style="text-align: center; vertical-align: center important!;">2010-01-07</td>
											<td style="text-align: center; vertical-align: center;"><a href="#trans-details6276" data-toggle="modal" onClick="getDetails('or_no=6276&amt=390&name=Elaine Pahang&address=Talisay City&contact=9332567821'); return false;">6276</a></td>
											<td class="amount" style="text-align: right;">390.00</td>
											<td style="text-align: center; vertical-align: center;">Elaine Pahang</td>
											<td style="text-align: center; vertical-align: center;">Talisay City</td>
											<td style="text-align: center; vertical-align: center;">9332567821</td>
											<td style="text-align: center; vertical-align: center; width: 30px"><a href="http://localhost/trailblazer/audit_trail/summary?ref=ST-1-2010&or_no=6276&acct=Sales&fs=Income Statement&fs_amt=48659.27&fs_file=is-1-2010.is&ledger=General Ledger&lg_ref=401&lg_desc=6270-6279&lg_debit=&lg_credit=4819&lg_total_amt=48659.27&journal=Cash Receipts Journal&jl_ref=CRJ-1-2010&jl_desc=6270-6279&jl_amt=4819&trans=Sale Transactions&trans_amt=390&trans_total_amt=4819">View</a></td>
											<!--<td style="text-align: center; vertical-align: center;"><a>System Audit</a></td>-->
										</tr>
																																																						<tr style="vertical-align: center;">
											<td style="text-align: center; vertical-align: center important!;">2010-01-07</td>
											<td style="text-align: center; vertical-align: center;"><a href="#trans-details6277" data-toggle="modal" onClick="getDetails('or_no=6277&amt=141&name=&address=&contact='); return false;">6277</a></td>
											<td class="amount" style="text-align: right;">141.00</td>
											<td style="text-align: center; vertical-align: center;"></td>
											<td style="text-align: center; vertical-align: center;"></td>
											<td style="text-align: center; vertical-align: center;"></td>
											<td style="text-align: center; vertical-align: center; width: 30px"><a href="http://localhost/trailblazer/audit_trail/summary?ref=ST-1-2010&or_no=6277&acct=Sales&fs=Income Statement&fs_amt=48659.27&fs_file=is-1-2010.is&ledger=General Ledger&lg_ref=401&lg_desc=6270-6279&lg_debit=&lg_credit=4819&lg_total_amt=48659.27&journal=Cash Receipts Journal&jl_ref=CRJ-1-2010&jl_desc=6270-6279&jl_amt=4819&trans=Sale Transactions&trans_amt=141&trans_total_amt=4819">View</a></td>
											<!--<td style="text-align: center; vertical-align: center;"><a>System Audit</a></td>-->
										</tr>
																																																						<tr style="vertical-align: center;">
											<td style="text-align: center; vertical-align: center important!;">2010-01-07</td>
											<td style="text-align: center; vertical-align: center;"><a href="#trans-details6278" data-toggle="modal" onClick="getDetails('or_no=6278&amt=638&name=&address=&contact='); return false;">6278</a></td>
											<td class="amount" style="text-align: right;">638.00</td>
											<td style="text-align: center; vertical-align: center;"></td>
											<td style="text-align: center; vertical-align: center;"></td>
											<td style="text-align: center; vertical-align: center;"></td>
											<td style="text-align: center; vertical-align: center; width: 30px"><a href="http://localhost/trailblazer/audit_trail/summary?ref=ST-1-2010&or_no=6278&acct=Sales&fs=Income Statement&fs_amt=48659.27&fs_file=is-1-2010.is&ledger=General Ledger&lg_ref=401&lg_desc=6270-6279&lg_debit=&lg_credit=4819&lg_total_amt=48659.27&journal=Cash Receipts Journal&jl_ref=CRJ-1-2010&jl_desc=6270-6279&jl_amt=4819&trans=Sale Transactions&trans_amt=638&trans_total_amt=4819">View</a></td>
											<!--<td style="text-align: center; vertical-align: center;"><a>System Audit</a></td>-->
										</tr>
																																																						<tr style="vertical-align: center;">
											<td style="text-align: center; vertical-align: center important!;">2010-01-07</td>
											<td style="text-align: center; vertical-align: center;"><a href="#trans-details6279" data-toggle="modal" onClick="getDetails('or_no=6279&amt=768&name=Sharmaine Naquila&address=Naval, Biliran&contact=9435734322'); return false;">6279</a></td>
											<td class="amount" style="text-align: right;">768.00</td>
											<td style="text-align: center; vertical-align: center;">Sharmaine Naquila</td>
											<td style="text-align: center; vertical-align: center;">Naval, Biliran</td>
											<td style="text-align: center; vertical-align: center;">9435734322</td>
											<td style="text-align: center; vertical-align: center; width: 30px"><a href="http://localhost/trailblazer/audit_trail/summary?ref=ST-1-2010&or_no=6279&acct=Sales&fs=Income Statement&fs_amt=48659.27&fs_file=is-1-2010.is&ledger=General Ledger&lg_ref=401&lg_desc=6270-6279&lg_debit=&lg_credit=4819&lg_total_amt=48659.27&journal=Cash Receipts Journal&jl_ref=CRJ-1-2010&jl_desc=6270-6279&jl_amt=4819&trans=Sale Transactions&trans_amt=768&trans_total_amt=4819">View</a></td>
											<!--<td style="text-align: center; vertical-align: center;"><a>System Audit</a></td>-->
										</tr>
																																		<tr id=total-trans-amt>
									<td></td>
									<td style="font-weight: bold; text-align: right">TOTAL</td>
									<td class="amount" style="font-weight: bold">Php 4,819.00</td>								
									<td></td>
									<td></td>
									<td><a href="#select-sample-modal" class="btn btn-primary btn-small" data-toggle="modal" style="text-align: center" onClick="openSelectSample(); return false;">Select a Sample</a></td>
									<td></td>
								</tr>
							</tbody>
						</table>
									</div>
				<div id="source-file">Source File: D:\Kristian Lora\My Documents\Lalaine's Bookstore\transaction_files\sale_transactions\st-1-2010.tf</div>
			</div>
		</div>
	<link href="http://localhost/trailblazer/assets/stylesheets/bootstrap.css" rel="stylesheet"></link>
	<link href="http://localhost/trailblazer/assets/stylesheets/bootstrap-responsive.css" rel="stylesheet"></link>
	<link href="http://localhost/trailblazer/assets/stylesheets/main.css" rel="stylesheet"></link>
	<script src="http://localhost/trailblazer/assets/scripts/jquery.js" type="text/javascript"></script>
	<script src="http://localhost/trailblazer/assets/scripts/bootstrap.js" type="text/javascript"></script>
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
			url2 = '&doc=Sale Transactions&ref=ST-1-2010&acct=Sales&fs=Income Statement&fs_amt=48659.27&fs_file=is-1-2010.is&ledger=General Ledger&lg_ref=401&lg_desc=6270-6279&lg_debit=&lg_credit=4819&lg_amt=4819&lg_total_amt=48659.27&journal=Cash Receipts Journal&jl_ref=CRJ-1-2010&jl_desc=6270-6279&jl_amt=4819&trans=Sale Transactions&trans_total_amt=4819'.replace(/ /g, "%20");
							headings += "&headings[]=Date";
							headings += "&headings[]=OR No";
							headings += "&headings[]=Amount Due";
							headings += "&headings[]=Name";
							headings += "&headings[]=Address";
							headings += "&headings[]=Contact";
						headings = headings.replace(/ /g, "%20");
			console.log(headings);
			closeSelectSample();
			$('#trans-table').load('load_trans_sample?medium=' + medium + '&from=' + 6270 + '&to=' + 6279 +'&pop=' + 10 + '&size=' + sampleSize + headings + url2 + '&trans_total_amt=' + 4819);
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
</html><?php }} ?>
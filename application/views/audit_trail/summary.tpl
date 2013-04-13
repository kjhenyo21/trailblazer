<!--
 * Trailblazer Digital Accounting Audit Trail Program
 * @author Kristian Jacob Abad Lora <kjalora92@yahoo.com>
 * @date-created October 31, 2012
-->
	<head>
		<title>Trailblazer - The Trail</title>
	</head>
	
	<body>
		<div id="transDetailsModal">
		</div>
		<!-- Modal for Downloading Summary File -->
		<div id="dloadModal" class="modal hide fade" style="margin-top: -150px">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3>Download has finished!</h3>
			</div>
			<div id="dload-modal-body" class="modal-body">
			</div>
			<div class="modal-footer">
				<a type="button" class="btn btn-primary" id="locateFileButton">Yes</a>
				<a type="button" class="btn" data-dismiss="modal" aria-hidden="true" onClick="closeDloadModal(); return false;">No</a>
			</div>
		</div>
		<!-- Main -->
		<br>
		<div id="main-wrapper" style="width: 950px; padding: 40px 10px;">
			<div id="navi" style="float: right; font-size: 14pt">
				<a href="#" onclick="history.go(-1);return false;"><i class="icon-arrow-left"></i></a>
				<span> | </span>
				<a href="{url}audit_trail"><i class="icon-home"></i></a>
			</div>
			<div id="summary-container" style="height: 300px; margin: 0 auto; text-align: center">
				<h2>Audit Trail Summary</h2>
				<br>
				<br>
				<div class="sub-summary-container">
					<div><strong>{$fs}</strong></div>
					<div>Account: {$acct}</div>
					<div>Amount: Php {$fs_amt|number_format:2:".":","}</div>
				</div>
				{if ($ledger)}
					<div class="arrow">
						<img src="{url}assets/images/arrow-left-small.PNG"></img>
					</div>
					<div class="sub-summary-container">
						<strong>{$ledger}</strong>
						<div>Account: {$acct}</div>
						<div>Acct. #: {$lg_ref}</div>
						{if ($lg_debit != '')}
							<div>Debit: Php {$lg_debit|number_format:2:".":","}</div>
						{else}
							<div>Debit: Php 0.00</div>
						{/if}
						{if ($lg_credit != '')}
							<div>Credit: Php {$lg_credit|number_format:2:".":","}</div>
						{else}
							<div>Credit: Php 0.00</div>
						{/if}
					</div>
				{/if}
				{if ($journal)}
					<div class="arrow">
						<img src="{url}assets/images/arrow-left-small.PNG"></img>
					</div>
					<div class="sub-summary-container">
						<strong>{$journal}</strong>
						<div>Ref. #: {$jl_ref}</div>
						<div>Desc.: {$lg_desc}</div>
						<div>Amount: Php {$jl_amt|number_format:2:".":","}</div>
					</div>
				{/if}
				{if ($trans)}
					<div class="arrow">
						<img src="{url}assets/images/arrow-left-small.PNG"></img>
					</div>
					<div class="sub-summary-container">
						{foreach $info as $i}
							<strong>{$trans}</strong>
							<!--{$url = "or_no={$i[1]}&amt={$i[2]}&name={$i[3]}&address={$i[4]}&contact={$i[5]}"}-->
							<div>Date: {$i[0]}</div>
							<div>OR No.: <a href="#trans-details{$i[1]}" data-toggle="modal" onClick="getDetails('{$url}'); return false;">{$i[1]}</a></div>
							<div>Amount: Php {$i[2]|number_format:2:".":","}</div>
							<div>Name: {$i[3]}</div>
							<div>Contact: {$i[5]}</div>
						{/foreach}
					</div>
				{/if}
				{if (($ledger == false) || ($journal == false) || ($trans == false)) }
					<div class="arrow">
						<img src="{url}assets/images/arrow-left-small.PNG"></img>
					</div>
					<div class="dead-end">
						<i class="icon-exclamation-sign"></i>
					</div>
				{/if}
			</div>
			
			<div class="results-container">
				<h3>Results</h3>
				{if ($fs)}
					{if ($fs_lg_result_stat === -1)}
					{else if ($fs_lg_result_stat === 0)}
						<table style="margin-bottom: 5px">
							<td><i class="icon-remove" style="color: red"></i></td>
							<td>{$fs_lg_result}</td>
						</table>
					{else}					
						<table style="margin-bottom: 5px">						
							<td><i class="icon-ok" style="color: green"></i></td>
							<td>{$fs_lg_result}</td>
						</table>
					{/if}
				{/if}
				{if ($ledger)}
					{if ($lg_jl_result_stat === -1)}
					{else if ($lg_jl_result_stat === 0)}
						<table style="margin-bottom: 5px">
							<td><i class="icon-remove" style="color: red"></i></td>
							<td>{$lg_jl_result}</td>
						</table>
					{else}
						<table style="margin-bottom: 5px">
							<td><i class="icon-ok" style="color: green"></i></td>
							<td>{$lg_jl_result}</td>
						</table>
					{/if}
				{/if}
				{if ($journal)}
					{if ($jl_trans_result_stat === -1)}
					{else if ($jl_trans_result_stat === 0)}
						<table style="margin-bottom: 5px">
							<td><i class="icon-remove" style="color: red"></i></td>
							<td>{$jl_trans_result}</td>
						</table>
					{else}
						<table style="margin-bottom: 5px">
							<td><i class="icon-ok" style="color: green"></i></td>
							<td>{$jl_trans_result}</td>
						</table>
					{/if}
				{/if}
				{if ($trans)}
					{if ($trans_dets_result_stat) === -1}
					{else if ($trans_dets_result_stat) === 0}
						<table style="margin-bottom: 5px">
							<td><i class="icon-remove" style="color: red"></i></td>
							<td>{$trans_dets_result}</td>
						</table>
					{else}					
						<table style="margin-bottom: 5px">
							<td><i class="icon-ok" style="color: green"></i></td>
							<td>{$trans_dets_result}</td>
						</table>
					{/if}
				{/if}
				{if (($ledger == false) || ($journal == false) || ($trans == false)) }
					<table style="margin-bottom: 5px">
						<td><i class="icon-remove" style="color: red"></i></td>
						<td>Transactions can't be traced fully.</td>
					</table>
				{else}
					<table style="margin-bottom: 5px">
						<td><i class="icon-ok" style="color: green"></i></td>
						<td>Transactions are traceable from the financial statement to the transaction file.</td>
					</table>
				{/if}
				
				{if ($numerical_errors == 0)}
					<table>
						<td><i class="icon-ok" style="color: green"></i></td>
						<td><strong>Overall: TRAIL SUCCESSFUL!</strong></td>
					</table>
				{else if (($ledger == false) || ($journal == false) || ($trans == false))}
					<table>
						<td><i class="icon-remove" style="color: red"></i></td>
						<td><strong>Overall: TRAIL UNSUCCESSFUL!</strong></td>
					</table>
				{else}
					<table>
						<td><i class="icon-warning-sign" style="color: orange"></i></td>
						<td><strong>Conclusion: Trail PARTIALLY Successful: Transactions are traceable but there are figures that do not match.</strong></td>
					</table>
				{/if}
			</div>
		</div>
		<div class="control-group" style="text-align: center; margin-top: 15px;">
			<a type='button' id="save" class="btn btn-primary" onClick="downloadFile(); return false;">Save the Trail</a>
			<a type='button' class="btn" onclick='printSummary(); return false'>Print the Trail</a>
			<!--<a type='button' id="open" class="btn">Open</a>-->
			<a type="button" class="btn" onclick="history.go(-1);return false;">Back</a>
			<a href="{$firstPageURL}" type="button" class="btn">Back to First Step</a>
		</div>
	<link href="{url}assets/stylesheets/bootstrap.css" rel="stylesheet"></link>
	<link href="{url}assets/stylesheets/bootstrap-responsive.css" rel="stylesheet"></link>
	<link href="{url}assets/stylesheets/main.css" rel="stylesheet"></link>
	<link href="{url}assets/stylesheets/print.css" rel="stylesheet"  media="print"></link>
	<script src="{url}assets/scripts/jquery.js" type="text/javascript"></script>
	<script src="{url}assets/scripts/bootstrap.js" type="text/javascript"></script>
	<script src="{url}assets/scripts/html2canvas.js" type="text/javascript"></script>
	<script src="{url}assets/scripts/jquery.plugin.html2canvas.js" type="text/javascript"></script>
	<script>
		var target = $('#main-wrapper');
		var summaryFilePath;
		var summaryDownloadedFilePath;
		
		html2canvas(target, {
			onrendered: function(canvas) {
				var datas = canvas.toDataURL("image/png;base64;");
				//$('#save').attr("href", "{url}audit_trail/summary/save?data=" + data);
				//data = data.replace("image/png","image/octet-stream"); 
				//window.open(data,"","width=700,height=700");
				//document.body.innerHTML="<br/><br/><br/><br/><br/><br/><img src="+data+" />";
				jQuery.ajax({
					url: '{url}audit_trail/summary/save',
					type: 'POST',
					dataType: 'text',
					data: {
						data: datas
					},
					complete: function(data, status) {
						if(status=='success') {
							console.log(data.responseText);
							//alert('saved!');
							//$('#save').attr("href", '{url}audit_trail/summary/download?data=' + data.responseText);
							summaryFilePath = data.responseText;
						}
						//alert('Error has been occurred');
					}
				});
			}
		});

		function downloadFile() {
			jQuery.ajax({
				url: '{url}audit_trail/summary/download?data=' + summaryFilePath,
				type: 'GET',
				dataType: 'text',
				success: function(data) {
					summaryDownloadedFilePath = data;
					$('#content').remove();
					$('#dload-modal-body').append('<p id="content">Your downloaded file has been saved to ' + data + '. Do you want to locate the file?</p>');
					$('#dloadModal').removeClass('hide');
					$('#dloadModal').addClass('in');
					$('body').append('<div id="backdropping" class="modal-backdrop fade in"></div>');
					$('#locateFileButton').attr("href", "{url}audit_trail/summary/open?path=" + summaryDownloadedFilePath);
				}
			});
		}
		
		function locateFile() {
			window.location='{url}audit_trail/summary/open?path=' + summaryDownloadedFilePath;
			jQuery.ajax({
				url: 'summary/open?path=' + summaryDownloadedFilePath,
				type: 'GET',
				success: function() {
				}
			});
		}
		
		function printSummary() {
			var w = window.open('{url}files/' + summaryFilePath);
			w.print();
		}
		
		function capture() {
			$('#summary-container').html2canvas({
				onrendered: function (canvas) {
					//Set hidden field's value to image data (base-64 string)
					$('#img_val').val(canvas.toDataURL("image/png"));
					//Submit the form manually
					document.getElementById("myForm").submit();
				}
			});
		}
			
		function saveAs(fileUrl, fileName) {
		   var save = document.createElement("a");
		   save.href = fileUrl;
		   save.target = "_blank";
		   save.download = fileName || fileUrl;

		   var evt = document.createEvent('MouseEvents');
		   evt.initMouseEvent('click', true, true, 
							  window, 1, 0, 0, 0, 0, 
							  false, false, false, false, 0, null);

		   save.dispatchEvent(evt);
		   (window.URL || window.webkitURL).revokeObjectURL(save.href)
		}


	
		function saveImage (imgOrURL) {
			console.log(imgOrURL);
			if (typeof imgOrURL == 'object')
				imgURL = imgOrURL.src;
			$.ajax({
				url: 'summary/save?url=' + imgURL,
				type: "GET",
				async: false
			});
		}
		
		function getDetails(url) {	
			url = url.replace(/\s/g,"%20");
			console.log(url);
			$('#transDetailsModal').load('load_trans_details/index?' + url);
			$('#trans-details').show();
			$('body').append("<div id='backdrop' class='modal-backdrop fade in'></div>");
		}
		
		function closeIt() {
			$('#trans-details').hide();
			$('#backdrop').remove();
		}
		
		function closeDloadModal() {
			$('#dloadModal').addClass('hide');
			$('#dloadModal').removeClass('in');
			$('#backdropping').remove();
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
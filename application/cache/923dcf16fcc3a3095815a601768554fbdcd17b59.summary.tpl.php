<?php /*%%SmartyHeaderCode:426551529573306f26-90970638%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '923dcf16fcc3a3095815a601768554fbdcd17b59' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trailblazer\\application/views\\audit_trail\\summary.tpl',
      1 => 1364792761,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '426551529573306f26-90970638',
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_516c0090035ea',
  'has_nocache_code' => false,
  'cache_lifetime' => 1,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_516c0090035ea')) {function content_516c0090035ea($_smarty_tpl) {?>  <!--
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
				<a href="http://localhost/trailblazer/audit_trail"><i class="icon-home"></i></a>
			</div>
			<div id="summary-container" style="height: 300px; margin: 0 auto; text-align: center">
				<h2>Audit Trail Summary</h2>
				<br>
				<br>
				<div class="sub-summary-container">
					<div><strong>Income Statement</strong></div>
					<div>Account: Sales</div>
					<div>Amount: Php 48,659.27</div>
				</div>
									<div class="arrow">
						<img src="http://localhost/trailblazer/assets/images/arrow-left-small.PNG"></img>
					</div>
					<div class="sub-summary-container">
						<strong>General Ledger</strong>
						<div>Account: Sales</div>
						<div>Acct. #: 401</div>
													<div>Debit: Php 0.00</div>
																			<div>Credit: Php 587.00</div>
											</div>
													<div class="arrow">
						<img src="http://localhost/trailblazer/assets/images/arrow-left-small.PNG"></img>
					</div>
					<div class="sub-summary-container">
						<strong>Cash Receipts Journal</strong>
						<div>Ref. #: CRJ-1-2010</div>
						<div>Desc.: 6256-6260</div>
						<div>Amount: Php 587.00</div>
					</div>
													<div class="arrow">
						<img src="http://localhost/trailblazer/assets/images/arrow-left-small.PNG"></img>
					</div>
					<div class="sub-summary-container">
													<strong>Sale Transactions</strong>
							<!---->
							<div>Date: 2010-01-04</div>
							<div>OR No.: <a href="#trans-details6256" data-toggle="modal" onClick="getDetails('or_no=6256&amt=210&name=Eriberta Canada&address=Carcar&contact=9053171598'); return false;">6256</a></div>
							<div>Amount: Php 210.00</div>
							<div>Name: Eriberta Canada</div>
							<div>Contact: 9053171598</div>
											</div>
											</div>
			
			<div class="results-container">
				<h3>Results</h3>
														
						<table style="margin-bottom: 5px">						
							<td><i class="icon-ok" style="color: green"></i></td>
							<td>The amount of Sales Account selected from the Income Statement MATCHES the total amount of the ledger entries in the General Ledger.</td>
						</table>
																								<table style="margin-bottom: 5px">
							<td><i class="icon-ok" style="color: green"></i></td>
							<td>The amount of the entry selected from the General Ledger MATCHES the amount of the journal entry highlighted in the Cash Receipts Journal.</td>
						</table>
																								<table style="margin-bottom: 5px">
							<td><i class="icon-ok" style="color: green"></i></td>
							<td>The amount of the entry selected from the Cash Receipts Journal MATCHES the amount of the entry displayed in the Sale Transactions File.</td>
						</table>
																							
						<table style="margin-bottom: 5px">
							<td><i class="icon-ok" style="color: green"></i></td>
							<td>The amount of the entry selected from the Sale Transactions MATCHES the amount of the entry displayed in the Sale Transactions Details.</td>
						</table>
																		<table style="margin-bottom: 5px">
						<td><i class="icon-ok" style="color: green"></i></td>
						<td>Transactions are traceable from the financial statement to the transaction file.</td>
					</table>
								
									<table>
						<td><i class="icon-ok" style="color: green"></i></td>
						<td><strong>Overall: TRAIL SUCCESSFUL!</strong></td>
					</table>
							</div>
		</div>
		<div class="control-group" style="text-align: center; margin-top: 15px;">
			<a type='button' id="save" class="btn btn-primary" onClick="downloadFile(); return false;">Save the Trail</a>
			<a type='button' class="btn" onclick='printSummary(); return false'>Print the Trail</a>
			<!--<a type='button' id="open" class="btn">Open</a>-->
			<a type="button" class="btn" onclick="history.go(-1);return false;">Back</a>
			<a href="http://localhost/trailblazer/audit_trail/index/readFile?file=C:\fakepath\is-1-2010.is&doc=Income%20Statement&items=undefined" type="button" class="btn">Back to First Step</a>
		</div>
	<link href="http://localhost/trailblazer/assets/stylesheets/bootstrap.css" rel="stylesheet"></link>
	<link href="http://localhost/trailblazer/assets/stylesheets/bootstrap-responsive.css" rel="stylesheet"></link>
	<link href="http://localhost/trailblazer/assets/stylesheets/main.css" rel="stylesheet"></link>
	<link href="http://localhost/trailblazer/assets/stylesheets/print.css" rel="stylesheet"  media="print"></link>
	<script src="http://localhost/trailblazer/assets/scripts/jquery.js" type="text/javascript"></script>
	<script src="http://localhost/trailblazer/assets/scripts/bootstrap.js" type="text/javascript"></script>
	<script src="http://localhost/trailblazer/assets/scripts/html2canvas.js" type="text/javascript"></script>
	<script src="http://localhost/trailblazer/assets/scripts/jquery.plugin.html2canvas.js" type="text/javascript"></script>
	<script>
		var target = $('#main-wrapper');
		var summaryFilePath;
		var summaryDownloadedFilePath;
		
		html2canvas(target, {
			onrendered: function(canvas) {
				var datas = canvas.toDataURL("image/png;base64;");
				//$('#save').attr("href", "http://localhost/trailblazer/audit_trail/summary/save?data=" + data);
				//data = data.replace("image/png","image/octet-stream"); 
				//window.open(data,"","width=700,height=700");
				//document.body.innerHTML="<br/><br/><br/><br/><br/><br/><img src="+data+" />";
				jQuery.ajax({
					url: 'http://localhost/trailblazer/audit_trail/summary/save',
					type: 'POST',
					dataType: 'text',
					data: {
						data: datas
					},
					complete: function(data, status) {
						if(status=='success') {
							console.log(data.responseText);
							//alert('saved!');
							//$('#save').attr("href", 'http://localhost/trailblazer/audit_trail/summary/download?data=' + data.responseText);
							summaryFilePath = data.responseText;
						}
						//alert('Error has been occurred');
					}
				});
			}
		});

		function downloadFile() {
			jQuery.ajax({
				url: 'http://localhost/trailblazer/audit_trail/summary/download?data=' + summaryFilePath,
				type: 'GET',
				dataType: 'text',
				success: function(data) {
					summaryDownloadedFilePath = data;
					$('#content').remove();
					$('#dload-modal-body').append('<p id="content">Your downloaded file has been saved to ' + data + '. Do you want to locate the file?</p>');
					$('#dloadModal').removeClass('hide');
					$('#dloadModal').addClass('in');
					$('body').append('<div id="backdropping" class="modal-backdrop fade in"></div>');
					$('#locateFileButton').attr("href", "http://localhost/trailblazer/audit_trail/summary/open?path=" + summaryDownloadedFilePath);
				}
			});
		}
		
		function locateFile() {
			window.location='http://localhost/trailblazer/audit_trail/summary/open?path=' + summaryDownloadedFilePath;
			jQuery.ajax({
				url: 'summary/open?path=' + summaryDownloadedFilePath,
				type: 'GET',
				success: function() {
				}
			});
		}
		
		function printSummary() {
			var w = window.open('http://localhost/trailblazer/files/' + summaryFilePath);
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
</html><?php }} ?>
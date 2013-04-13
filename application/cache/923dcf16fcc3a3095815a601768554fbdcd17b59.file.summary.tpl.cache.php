<?php /* Smarty version Smarty-3.1.7, created on 2013-04-10 20:38:55
         compiled from "C:\xampp\htdocs\trailblazer\application/views\audit_trail\summary.tpl" */ ?>
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
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_515295739ffb5',
  'variables' => 
  array (
    'fs' => 0,
    'acct' => 0,
    'fs_amt' => 0,
    'ledger' => 0,
    'lg_ref' => 0,
    'lg_debit' => 0,
    'lg_credit' => 0,
    'journal' => 0,
    'jl_ref' => 0,
    'lg_desc' => 0,
    'jl_amt' => 0,
    'trans' => 0,
    'info' => 0,
    'i' => 0,
    'url' => 0,
    'fs_lg_result_stat' => 0,
    'fs_lg_result' => 0,
    'lg_jl_result_stat' => 0,
    'lg_jl_result' => 0,
    'jl_trans_result_stat' => 0,
    'jl_trans_result' => 0,
    'trans_dets_result_stat' => 0,
    'trans_dets_result' => 0,
    'numerical_errors' => 0,
    'firstPageURL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_515295739ffb5')) {function content_515295739ffb5($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'C:\\xampp\\htdocs\\trailblazer\\application\\libraries\\smarty\\plugins\\function.url.php';
?><!--
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
				<a href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
audit_trail"><i class="icon-home"></i></a>
			</div>
			<div id="summary-container" style="height: 300px; margin: 0 auto; text-align: center">
				<h2>Audit Trail Summary</h2>
				<br>
				<br>
				<div class="sub-summary-container">
					<div><strong><?php echo $_smarty_tpl->tpl_vars['fs']->value;?>
</strong></div>
					<div>Account: <?php echo $_smarty_tpl->tpl_vars['acct']->value;?>
</div>
					<div>Amount: Php <?php echo number_format($_smarty_tpl->tpl_vars['fs_amt']->value,2,".",",");?>
</div>
				</div>
				<?php if (($_smarty_tpl->tpl_vars['ledger']->value)){?>
					<div class="arrow">
						<img src="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/images/arrow-left-small.PNG"></img>
					</div>
					<div class="sub-summary-container">
						<strong><?php echo $_smarty_tpl->tpl_vars['ledger']->value;?>
</strong>
						<div>Account: <?php echo $_smarty_tpl->tpl_vars['acct']->value;?>
</div>
						<div>Acct. #: <?php echo $_smarty_tpl->tpl_vars['lg_ref']->value;?>
</div>
						<?php if (($_smarty_tpl->tpl_vars['lg_debit']->value!='')){?>
							<div>Debit: Php <?php echo number_format($_smarty_tpl->tpl_vars['lg_debit']->value,2,".",",");?>
</div>
						<?php }else{ ?>
							<div>Debit: Php 0.00</div>
						<?php }?>
						<?php if (($_smarty_tpl->tpl_vars['lg_credit']->value!='')){?>
							<div>Credit: Php <?php echo number_format($_smarty_tpl->tpl_vars['lg_credit']->value,2,".",",");?>
</div>
						<?php }else{ ?>
							<div>Credit: Php 0.00</div>
						<?php }?>
					</div>
				<?php }?>
				<?php if (($_smarty_tpl->tpl_vars['journal']->value)){?>
					<div class="arrow">
						<img src="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/images/arrow-left-small.PNG"></img>
					</div>
					<div class="sub-summary-container">
						<strong><?php echo $_smarty_tpl->tpl_vars['journal']->value;?>
</strong>
						<div>Ref. #: <?php echo $_smarty_tpl->tpl_vars['jl_ref']->value;?>
</div>
						<div>Desc.: <?php echo $_smarty_tpl->tpl_vars['lg_desc']->value;?>
</div>
						<div>Amount: Php <?php echo number_format($_smarty_tpl->tpl_vars['jl_amt']->value,2,".",",");?>
</div>
					</div>
				<?php }?>
				<?php if (($_smarty_tpl->tpl_vars['trans']->value)){?>
					<div class="arrow">
						<img src="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/images/arrow-left-small.PNG"></img>
					</div>
					<div class="sub-summary-container">
						<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
							<strong><?php echo $_smarty_tpl->tpl_vars['trans']->value;?>
</strong>
							<!--<?php $_smarty_tpl->tpl_vars['url'] = new Smarty_variable("or_no=".($_smarty_tpl->tpl_vars['i']->value[1])."&amt=".($_smarty_tpl->tpl_vars['i']->value[2])."&name=".($_smarty_tpl->tpl_vars['i']->value[3])."&address=".($_smarty_tpl->tpl_vars['i']->value[4])."&contact=".($_smarty_tpl->tpl_vars['i']->value[5]), null, 0);?>-->
							<div>Date: <?php echo $_smarty_tpl->tpl_vars['i']->value[0];?>
</div>
							<div>OR No.: <a href="#trans-details<?php echo $_smarty_tpl->tpl_vars['i']->value[1];?>
" data-toggle="modal" onClick="getDetails('<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
'); return false;"><?php echo $_smarty_tpl->tpl_vars['i']->value[1];?>
</a></div>
							<div>Amount: Php <?php echo number_format($_smarty_tpl->tpl_vars['i']->value[2],2,".",",");?>
</div>
							<div>Name: <?php echo $_smarty_tpl->tpl_vars['i']->value[3];?>
</div>
							<div>Contact: <?php echo $_smarty_tpl->tpl_vars['i']->value[5];?>
</div>
						<?php } ?>
					</div>
				<?php }?>
				<?php if ((($_smarty_tpl->tpl_vars['ledger']->value==false)||($_smarty_tpl->tpl_vars['journal']->value==false)||($_smarty_tpl->tpl_vars['trans']->value==false))){?>
					<div class="arrow">
						<img src="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/images/arrow-left-small.PNG"></img>
					</div>
					<div class="dead-end">
						<i class="icon-exclamation-sign"></i>
					</div>
				<?php }?>
			</div>
			
			<div class="results-container">
				<h3>Results</h3>
				<?php if (($_smarty_tpl->tpl_vars['fs']->value)){?>
					<?php if (($_smarty_tpl->tpl_vars['fs_lg_result_stat']->value===-1)){?>
					<?php }elseif(($_smarty_tpl->tpl_vars['fs_lg_result_stat']->value===0)){?>
						<table style="margin-bottom: 5px">
							<td><i class="icon-remove" style="color: red"></i></td>
							<td><?php echo $_smarty_tpl->tpl_vars['fs_lg_result']->value;?>
</td>
						</table>
					<?php }else{ ?>					
						<table style="margin-bottom: 5px">						
							<td><i class="icon-ok" style="color: green"></i></td>
							<td><?php echo $_smarty_tpl->tpl_vars['fs_lg_result']->value;?>
</td>
						</table>
					<?php }?>
				<?php }?>
				<?php if (($_smarty_tpl->tpl_vars['ledger']->value)){?>
					<?php if (($_smarty_tpl->tpl_vars['lg_jl_result_stat']->value===-1)){?>
					<?php }elseif(($_smarty_tpl->tpl_vars['lg_jl_result_stat']->value===0)){?>
						<table style="margin-bottom: 5px">
							<td><i class="icon-remove" style="color: red"></i></td>
							<td><?php echo $_smarty_tpl->tpl_vars['lg_jl_result']->value;?>
</td>
						</table>
					<?php }else{ ?>
						<table style="margin-bottom: 5px">
							<td><i class="icon-ok" style="color: green"></i></td>
							<td><?php echo $_smarty_tpl->tpl_vars['lg_jl_result']->value;?>
</td>
						</table>
					<?php }?>
				<?php }?>
				<?php if (($_smarty_tpl->tpl_vars['journal']->value)){?>
					<?php if (($_smarty_tpl->tpl_vars['jl_trans_result_stat']->value===-1)){?>
					<?php }elseif(($_smarty_tpl->tpl_vars['jl_trans_result_stat']->value===0)){?>
						<table style="margin-bottom: 5px">
							<td><i class="icon-remove" style="color: red"></i></td>
							<td><?php echo $_smarty_tpl->tpl_vars['jl_trans_result']->value;?>
</td>
						</table>
					<?php }else{ ?>
						<table style="margin-bottom: 5px">
							<td><i class="icon-ok" style="color: green"></i></td>
							<td><?php echo $_smarty_tpl->tpl_vars['jl_trans_result']->value;?>
</td>
						</table>
					<?php }?>
				<?php }?>
				<?php if (($_smarty_tpl->tpl_vars['trans']->value)){?>
					<?php if (($_smarty_tpl->tpl_vars['trans_dets_result_stat']->value)===-1){?>
					<?php }elseif(($_smarty_tpl->tpl_vars['trans_dets_result_stat']->value)===0){?>
						<table style="margin-bottom: 5px">
							<td><i class="icon-remove" style="color: red"></i></td>
							<td><?php echo $_smarty_tpl->tpl_vars['trans_dets_result']->value;?>
</td>
						</table>
					<?php }else{ ?>					
						<table style="margin-bottom: 5px">
							<td><i class="icon-ok" style="color: green"></i></td>
							<td><?php echo $_smarty_tpl->tpl_vars['trans_dets_result']->value;?>
</td>
						</table>
					<?php }?>
				<?php }?>
				<?php if ((($_smarty_tpl->tpl_vars['ledger']->value==false)||($_smarty_tpl->tpl_vars['journal']->value==false)||($_smarty_tpl->tpl_vars['trans']->value==false))){?>
					<table style="margin-bottom: 5px">
						<td><i class="icon-remove" style="color: red"></i></td>
						<td>Transactions can't be traced fully.</td>
					</table>
				<?php }else{ ?>
					<table style="margin-bottom: 5px">
						<td><i class="icon-ok" style="color: green"></i></td>
						<td>Transactions are traceable from the financial statement to the transaction file.</td>
					</table>
				<?php }?>
				
				<?php if (($_smarty_tpl->tpl_vars['numerical_errors']->value==0)){?>
					<table>
						<td><i class="icon-ok" style="color: green"></i></td>
						<td><strong>Overall: TRAIL SUCCESSFUL!</strong></td>
					</table>
				<?php }elseif((($_smarty_tpl->tpl_vars['ledger']->value==false)||($_smarty_tpl->tpl_vars['journal']->value==false)||($_smarty_tpl->tpl_vars['trans']->value==false))){?>
					<table>
						<td><i class="icon-remove" style="color: red"></i></td>
						<td><strong>Overall: TRAIL UNSUCCESSFUL!</strong></td>
					</table>
				<?php }else{ ?>
					<table>
						<td><i class="icon-warning-sign" style="color: orange"></i></td>
						<td><strong>Conclusion: Trail PARTIALLY Successful: Transactions are traceable but there are figures that do not match.</strong></td>
					</table>
				<?php }?>
			</div>
		</div>
		<div class="control-group" style="text-align: center; margin-top: 15px;">
			<a type='button' id="save" class="btn btn-primary" onClick="downloadFile(); return false;">Save the Trail</a>
			<a type='button' class="btn" onclick='printSummary(); return false'>Print the Trail</a>
			<!--<a type='button' id="open" class="btn">Open</a>-->
			<a type="button" class="btn" onclick="history.go(-1);return false;">Back</a>
			<a href="<?php echo $_smarty_tpl->tpl_vars['firstPageURL']->value;?>
" type="button" class="btn">Back to First Step</a>
		</div>
	<link href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/stylesheets/bootstrap.css" rel="stylesheet"></link>
	<link href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/stylesheets/bootstrap-responsive.css" rel="stylesheet"></link>
	<link href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/stylesheets/main.css" rel="stylesheet"></link>
	<link href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/stylesheets/print.css" rel="stylesheet"  media="print"></link>
	<script src="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/scripts/jquery.js" type="text/javascript"></script>
	<script src="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/scripts/bootstrap.js" type="text/javascript"></script>
	<script src="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/scripts/html2canvas.js" type="text/javascript"></script>
	<script src="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/scripts/jquery.plugin.html2canvas.js" type="text/javascript"></script>
	<script>
		var target = $('#main-wrapper');
		var summaryFilePath;
		var summaryDownloadedFilePath;
		
		html2canvas(target, {
			onrendered: function(canvas) {
				var datas = canvas.toDataURL("image/png;base64;");
				//$('#save').attr("href", "<?php echo smarty_function_url(array(),$_smarty_tpl);?>
audit_trail/summary/save?data=" + data);
				//data = data.replace("image/png","image/octet-stream"); 
				//window.open(data,"","width=700,height=700");
				//document.body.innerHTML="<br/><br/><br/><br/><br/><br/><img src="+data+" />";
				jQuery.ajax({
					url: '<?php echo smarty_function_url(array(),$_smarty_tpl);?>
audit_trail/summary/save',
					type: 'POST',
					dataType: 'text',
					data: {
						data: datas
					},
					complete: function(data, status) {
						if(status=='success') {
							console.log(data.responseText);
							//alert('saved!');
							//$('#save').attr("href", '<?php echo smarty_function_url(array(),$_smarty_tpl);?>
audit_trail/summary/download?data=' + data.responseText);
							summaryFilePath = data.responseText;
						}
						//alert('Error has been occurred');
					}
				});
			}
		});

		function downloadFile() {
			jQuery.ajax({
				url: '<?php echo smarty_function_url(array(),$_smarty_tpl);?>
audit_trail/summary/download?data=' + summaryFilePath,
				type: 'GET',
				dataType: 'text',
				success: function(data) {
					summaryDownloadedFilePath = data;
					$('#content').remove();
					$('#dload-modal-body').append('<p id="content">Your downloaded file has been saved to ' + data + '. Do you want to locate the file?</p>');
					$('#dloadModal').removeClass('hide');
					$('#dloadModal').addClass('in');
					$('body').append('<div id="backdropping" class="modal-backdrop fade in"></div>');
					$('#locateFileButton').attr("href", "<?php echo smarty_function_url(array(),$_smarty_tpl);?>
audit_trail/summary/open?path=" + summaryDownloadedFilePath);
				}
			});
		}
		
		function locateFile() {
			window.location='<?php echo smarty_function_url(array(),$_smarty_tpl);?>
audit_trail/summary/open?path=' + summaryDownloadedFilePath;
			jQuery.ajax({
				url: 'summary/open?path=' + summaryDownloadedFilePath,
				type: 'GET',
				success: function() {
				}
			});
		}
		
		function printSummary() {
			var w = window.open('<?php echo smarty_function_url(array(),$_smarty_tpl);?>
files/' + summaryFilePath);
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
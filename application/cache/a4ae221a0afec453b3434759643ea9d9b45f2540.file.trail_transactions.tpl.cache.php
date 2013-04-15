<?php /* Smarty version Smarty-3.1.7, created on 2013-04-15 15:42:39
         compiled from "C:\xampp\htdocs\trailblazer\application/views\audit_trail\trail_transactions.tpl" */ ?>
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
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5152921f55202',
  'variables' => 
  array (
    'doc' => 0,
    'info' => 0,
    'headings' => 0,
    'h' => 0,
    'i' => 0,
    'row' => 0,
    'url' => 0,
    'ref' => 0,
    'acct' => 0,
    'fs' => 0,
    'fs_amt' => 0,
    'fs_file' => 0,
    'ledger' => 0,
    'lg_ref' => 0,
    'lg_desc' => 0,
    'lg_debit' => 0,
    'lg_credit' => 0,
    'lg_total_amt' => 0,
    'journal' => 0,
    'jl_ref' => 0,
    'jl_desc' => 0,
    'jl_amt' => 0,
    'trans_total_amt' => 0,
    'error_msg' => 0,
    'lg_amt' => 0,
    'source' => 0,
    'url2' => 0,
    'from' => 0,
    'to' => 0,
    'sizeOfTrans' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5152921f55202')) {function content_5152921f55202($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'C:\\xampp\\htdocs\\trailblazer\\application\\libraries\\smarty\\plugins\\function.url.php';
?><!--
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
				<a href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
audit_trail"><i class="icon-home"></i></a>
			</div>
			<div style="margin: 0 auto; text-align: center">
				<h2><?php echo $_smarty_tpl->tpl_vars['doc']->value;?>
</h2>
				<br>
				<?php $_smarty_tpl->tpl_vars['row'] = new Smarty_variable(0, null, 0);?>
				<?php $_smarty_tpl->tpl_vars['url2'] = new Smarty_variable("&doc=".($_smarty_tpl->tpl_vars['doc']->value)."&ref=".($_smarty_tpl->tpl_vars['ref']->value)."&acct=".($_smarty_tpl->tpl_vars['acct']->value)."&fs=".($_smarty_tpl->tpl_vars['fs']->value)."&fs_amt=".($_smarty_tpl->tpl_vars['fs_amt']->value)."&fs_file=".($_smarty_tpl->tpl_vars['fs_file']->value)."&ledger=".($_smarty_tpl->tpl_vars['ledger']->value)."&lg_ref=".($_smarty_tpl->tpl_vars['lg_ref']->value)."&lg_desc=".($_smarty_tpl->tpl_vars['lg_desc']->value)."&lg_debit=".($_smarty_tpl->tpl_vars['lg_debit']->value)."&lg_credit=".($_smarty_tpl->tpl_vars['lg_credit']->value)."&lg_amt=".($_smarty_tpl->tpl_vars['lg_amt']->value)."&lg_total_amt=".($_smarty_tpl->tpl_vars['lg_total_amt']->value)."&journal=".($_smarty_tpl->tpl_vars['journal']->value)."&jl_ref=".($_smarty_tpl->tpl_vars['jl_ref']->value)."&jl_desc=".($_smarty_tpl->tpl_vars['jl_desc']->value)."&jl_amt=".($_smarty_tpl->tpl_vars['jl_amt']->value)."&trans=".($_smarty_tpl->tpl_vars['doc']->value)."&trans_total_amt=".($_smarty_tpl->tpl_vars['trans_total_amt']->value), null, 0);?>
				<div id="trans-table">
					<?php if (($_smarty_tpl->tpl_vars['info']->value)){?>
						<table id="table" class="table table-hover" style="text-align: left; color: black">
							<thead>
								<?php if (($_smarty_tpl->tpl_vars['headings']->value)){?>
									<?php  $_smarty_tpl->tpl_vars['h'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['h']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['headings']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['h']->key => $_smarty_tpl->tpl_vars['h']->value){
$_smarty_tpl->tpl_vars['h']->_loop = true;
?>
										<th style="text-align: center"><?php echo $_smarty_tpl->tpl_vars['h']->value;?>
</th>
									<?php } ?>
								<?php }?>
								<th>Audit Trail Results</th>
								<!--<th></th>-->
							</thead>
							<tbody>
								<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
									<?php $_smarty_tpl->tpl_vars['url'] = new Smarty_variable("or_no=".($_smarty_tpl->tpl_vars['i']->value[1])."&amt=".($_smarty_tpl->tpl_vars['i']->value[2])."&name=".($_smarty_tpl->tpl_vars['i']->value[3])."&address=".($_smarty_tpl->tpl_vars['i']->value[4])."&contact=".($_smarty_tpl->tpl_vars['i']->value[5]), null, 0);?>
									<?php if ($_smarty_tpl->tpl_vars['row']->value==0){?>
										<tr>
											<td style="text-align: center; vertical-align: center"><?php echo $_smarty_tpl->tpl_vars['i']->value[0];?>
</td>
											<td style="text-align: center; vertical-align: center"><a href="#trans-details<?php echo $_smarty_tpl->tpl_vars['i']->value[1];?>
" data-toggle="modal" onClick="getDetails('<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
'); return false;"><?php echo $_smarty_tpl->tpl_vars['i']->value[1];?>
</a></td>
											<td class="amount" style="text-align: right;">Php <?php echo number_format($_smarty_tpl->tpl_vars['i']->value[2],2,".",",");?>
</td>
											<td style="text-align: center; vertical-align: center"><?php echo $_smarty_tpl->tpl_vars['i']->value[3];?>
</td>
											<td style="text-align: center; vertical-align: center"><?php echo $_smarty_tpl->tpl_vars['i']->value[4];?>
</td>
											<td style="text-align: center; vertical-align: center"><?php echo $_smarty_tpl->tpl_vars['i']->value[5];?>
</td>
											<td style="text-align: center; vertical-align: center; width: 30px"><a href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
audit_trail/summary?ref=<?php echo $_smarty_tpl->tpl_vars['ref']->value;?>
&or_no=<?php echo $_smarty_tpl->tpl_vars['i']->value[1];?>
&acct=<?php echo $_smarty_tpl->tpl_vars['acct']->value;?>
&fs=<?php echo $_smarty_tpl->tpl_vars['fs']->value;?>
&fs_amt=<?php echo $_smarty_tpl->tpl_vars['fs_amt']->value;?>
&fs_file=<?php echo $_smarty_tpl->tpl_vars['fs_file']->value;?>
&ledger=<?php echo $_smarty_tpl->tpl_vars['ledger']->value;?>
&lg_ref=<?php echo $_smarty_tpl->tpl_vars['lg_ref']->value;?>
&lg_desc=<?php echo $_smarty_tpl->tpl_vars['lg_desc']->value;?>
&lg_debit=<?php echo $_smarty_tpl->tpl_vars['lg_debit']->value;?>
&lg_credit=<?php echo $_smarty_tpl->tpl_vars['lg_credit']->value;?>
&lg_total_amt=<?php echo $_smarty_tpl->tpl_vars['lg_total_amt']->value;?>
&journal=<?php echo $_smarty_tpl->tpl_vars['journal']->value;?>
&jl_ref=<?php echo $_smarty_tpl->tpl_vars['jl_ref']->value;?>
&jl_desc=<?php echo $_smarty_tpl->tpl_vars['jl_desc']->value;?>
&jl_amt=<?php echo $_smarty_tpl->tpl_vars['jl_amt']->value;?>
&trans=<?php echo $_smarty_tpl->tpl_vars['doc']->value;?>
&trans_amt=<?php echo $_smarty_tpl->tpl_vars['i']->value[2];?>
&trans_total_amt=<?php echo $_smarty_tpl->tpl_vars['trans_total_amt']->value;?>
">View</a></td>
											<!--<td style="text-align: center; vertical-align: center; width: 30px"><a>System Audit</a></td>-->
										</tr>
									<?php }else{ ?>
										<tr style="vertical-align: center;">
											<td style="text-align: center; vertical-align: center important!;"><?php echo $_smarty_tpl->tpl_vars['i']->value[0];?>
</td>
											<td style="text-align: center; vertical-align: center;"><a href="#trans-details<?php echo $_smarty_tpl->tpl_vars['i']->value[1];?>
" data-toggle="modal" onClick="getDetails('<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
'); return false;"><?php echo $_smarty_tpl->tpl_vars['i']->value[1];?>
</a></td>
											<td class="amount" style="text-align: right;"><?php echo number_format($_smarty_tpl->tpl_vars['i']->value[2],2,".",",");?>
</td>
											<td style="text-align: center; vertical-align: center;"><?php echo $_smarty_tpl->tpl_vars['i']->value[3];?>
</td>
											<td style="text-align: center; vertical-align: center;"><?php echo $_smarty_tpl->tpl_vars['i']->value[4];?>
</td>
											<td style="text-align: center; vertical-align: center;"><?php echo $_smarty_tpl->tpl_vars['i']->value[5];?>
</td>
											<td style="text-align: center; vertical-align: center; width: 30px"><a href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
audit_trail/summary?ref=<?php echo $_smarty_tpl->tpl_vars['ref']->value;?>
&or_no=<?php echo $_smarty_tpl->tpl_vars['i']->value[1];?>
&acct=<?php echo $_smarty_tpl->tpl_vars['acct']->value;?>
&fs=<?php echo $_smarty_tpl->tpl_vars['fs']->value;?>
&fs_amt=<?php echo $_smarty_tpl->tpl_vars['fs_amt']->value;?>
&fs_file=<?php echo $_smarty_tpl->tpl_vars['fs_file']->value;?>
&ledger=<?php echo $_smarty_tpl->tpl_vars['ledger']->value;?>
&lg_ref=<?php echo $_smarty_tpl->tpl_vars['lg_ref']->value;?>
&lg_desc=<?php echo $_smarty_tpl->tpl_vars['lg_desc']->value;?>
&lg_debit=<?php echo $_smarty_tpl->tpl_vars['lg_debit']->value;?>
&lg_credit=<?php echo $_smarty_tpl->tpl_vars['lg_credit']->value;?>
&lg_total_amt=<?php echo $_smarty_tpl->tpl_vars['lg_total_amt']->value;?>
&journal=<?php echo $_smarty_tpl->tpl_vars['journal']->value;?>
&jl_ref=<?php echo $_smarty_tpl->tpl_vars['jl_ref']->value;?>
&jl_desc=<?php echo $_smarty_tpl->tpl_vars['jl_desc']->value;?>
&jl_amt=<?php echo $_smarty_tpl->tpl_vars['jl_amt']->value;?>
&trans=<?php echo $_smarty_tpl->tpl_vars['doc']->value;?>
&trans_amt=<?php echo $_smarty_tpl->tpl_vars['i']->value[2];?>
&trans_total_amt=<?php echo $_smarty_tpl->tpl_vars['trans_total_amt']->value;?>
">View</a></td>
											<!--<td style="text-align: center; vertical-align: center;"><a>System Audit</a></td>-->
										</tr>
									<?php }?>
									<?php $_smarty_tpl->tpl_vars['row'] = new Smarty_variable($_smarty_tpl->tpl_vars['row']->value+1, null, 0);?>
								<?php } ?>
								<tr id=total-trans-amt>
									<td></td>
									<td style="font-weight: bold; text-align: right">TOTAL</td>
									<td class="amount" style="font-weight: bold">Php <?php echo number_format($_smarty_tpl->tpl_vars['trans_total_amt']->value,2,".",",");?>
</td>								
									<td></td>
									<td></td>
									<td><a href="#select-sample-modal" class="btn btn-primary btn-small" data-toggle="modal" style="text-align: center" onClick="openSelectSample(); return false;">Select a Sample</a></td>
									<td></td>
								</tr>
							</tbody>
						</table>
					<?php }else{ ?>
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
									<td><div style="font-style: italic; text-align: left"><?php echo $_smarty_tpl->tpl_vars['error_msg']->value;?>
 The audit trail ends here. Click <a href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
audit_trail/summary?acct=<?php echo $_smarty_tpl->tpl_vars['acct']->value;?>
&fs=<?php echo $_smarty_tpl->tpl_vars['fs']->value;?>
&fs_amt=<?php echo $_smarty_tpl->tpl_vars['fs_amt']->value;?>
&fs_file=<?php echo $_smarty_tpl->tpl_vars['fs_file']->value;?>
&ledger=<?php echo $_smarty_tpl->tpl_vars['ledger']->value;?>
&lg_ref=<?php echo $_smarty_tpl->tpl_vars['lg_ref']->value;?>
&lg_desc=<?php echo $_smarty_tpl->tpl_vars['lg_desc']->value;?>
&lg_debit=<?php echo $_smarty_tpl->tpl_vars['lg_debit']->value;?>
&lg_credit=<?php echo $_smarty_tpl->tpl_vars['lg_credit']->value;?>
&lg_amt=<?php echo $_smarty_tpl->tpl_vars['lg_amt']->value;?>
&lg_total_amt=<?php echo $_smarty_tpl->tpl_vars['lg_total_amt']->value;?>
&journal=<?php echo $_smarty_tpl->tpl_vars['journal']->value;?>
&jl_ref=<?php echo $_smarty_tpl->tpl_vars['jl_ref']->value;?>
&jl_desc=<?php echo $_smarty_tpl->tpl_vars['jl_desc']->value;?>
&jl_amt=<?php echo $_smarty_tpl->tpl_vars['jl_amt']->value;?>
">here</a> to view results.</div></td>
								</tr>
							</tbody>
						</table>
					<?php }?>
				</div>
				<div id="source-file">Source File: <?php echo $_smarty_tpl->tpl_vars['source']->value;?>
</div>
			</div>
		</div>
	<link href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/stylesheets/bootstrap.css" rel="stylesheet"></link>
	<link href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/stylesheets/bootstrap-responsive.css" rel="stylesheet"></link>
	<link href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/stylesheets/main.css" rel="stylesheet"></link>
	<script src="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/scripts/jquery.js" type="text/javascript"></script>
	<script src="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/scripts/bootstrap.js" type="text/javascript"></script>
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
			url2 = '<?php echo $_smarty_tpl->tpl_vars['url2']->value;?>
'.replace(/ /g, "%20");
			<?php  $_smarty_tpl->tpl_vars['h'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['h']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['headings']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['h']->key => $_smarty_tpl->tpl_vars['h']->value){
$_smarty_tpl->tpl_vars['h']->_loop = true;
?>
				headings += "&headings[]=<?php echo $_smarty_tpl->tpl_vars['h']->value;?>
";
			<?php } ?>
			headings = headings.replace(/ /g, "%20");
			console.log(headings);
			closeSelectSample();
			$('#trans-table').load('load_trans_sample?medium=' + medium + '&from=' + <?php echo $_smarty_tpl->tpl_vars['from']->value;?>
 + '&to=' + <?php echo $_smarty_tpl->tpl_vars['to']->value;?>
 +'&pop=' + <?php echo $_smarty_tpl->tpl_vars['sizeOfTrans']->value;?>
 + '&size=' + sampleSize + headings + url2 + '&trans_total_amt=' + <?php echo $_smarty_tpl->tpl_vars['trans_total_amt']->value;?>
);
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
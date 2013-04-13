<?php /*%%SmartyHeaderCode:402551529a0393d2d2-40820855%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be6ad58b9783ecd88ea9af6d9ba60c7d623d46b9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trailblazer\\application/views\\messages\\messages.tpl',
      1 => 1364287009,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '402551529a0393d2d2-40820855',
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5165af2142e8b',
  'has_nocache_code' => false,
  'cache_lifetime' => 1,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5165af2142e8b')) {function content_5165af2142e8b($_smarty_tpl) {?>  <!--
 * Trailblazer Digital Accounting Audit Trail Program
 * @author Kristian Jacob Abad Lora <kjalora92@yahoo.com>
 * @date-created October 31, 2012
-->
	<head>
		<title>Trailblazer - Messages</title>
	</head>
	
	<body>
		<!-- Modal for Removing a Message -->
		<div id="removeModal">
					</div>
		
		<!-- Modal for Clearing the Archive -->
		<div id="clearModal" class="modal hide fade" style="margin-top: -150px">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3>Clear Archive</h3>
			</div>
			<div class="modal-body">
				<p>Are you sure you want to clear the archive? You can always view the messages in the Messages Log File.</p>
			</div>
			<div class="modal-footer">
				<a href="#" class="btn" id="clearButton" onClick="clearIt(); return false;">Yes</a>
				<a href="" class="btn btn-primary" data-dismiss="modal" aria-hidden="true">No</a>
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
			<div id="messages" style="margin: 0 auto; text-align: center">
				<h2>Messages</h2>
				<br>
									<table class="table table-striped">
						<thead>
							<th style="text-align: center">Ref. #</th>
							<th style="text-align: center">Name</th>
							<th style="text-align: center">Contact</th>
							<th style="text-align: center">Transaction Date</th>
							<th style="text-align: center">OR #</th>
							<th style="text-align: center">Amount (Php)</th>
							<th style="text-align: center">Date Sent</th>
							<th style="text-align: center">Reply</th>
							<th style="text-align: center">Date Received</th>
							<th style="text-align: center">Confirmation Status</th>
							<th style="text-align: center">Date Confirmed</th>
							<th></th>
						</thead>
					</table>
					<table class="table table-striped">
						<tbody>
							<tr>
								<td><div style="font-style: italic">No message(s) to display.</div> </td>
							</tr>
						</tbody>
					</table>
								<div class="control-group" style="text-align: center; margin-top: 50px;">
											<a type="button" class="btn" disabled="disabled">Clear Archive</a>
										<a href="http://localhost/trailblazer/messages/log_messages" type="button" class="btn btn-primary">View Log File</a>
					<a href="http://localhost/trailblazer/audit_trail" type="button" class="btn">Back</a>
				</div>
			</div>
		</div>
	<link href="http://localhost/trailblazer/assets/stylesheets/bootstrap.css" rel="stylesheet"></link>
	<link href="http://localhost/trailblazer/assets/stylesheets/bootstrap-responsive.css" rel="stylesheet"></link>
	<link href="http://localhost/trailblazer/assets/stylesheets/main.css" rel="stylesheet"></link>
	<script src="http://localhost/trailblazer/assets/scripts/jquery.js" type="text/javascript"></script>
	<script src="http://localhost/trailblazer/assets/scripts/bootstrap.js" type="text/javascript"></script>
	<script src="http://localhost/trailblazer/assets/scripts/html2canvas.js" type="text/javascript"></script>
	<script src="http://localhost/trailblazer/assets/scripts/jquery.plugin.html2canvas.js" type="text/javascript"></script>
	<script src="http://localhost/trailblazer/assets/scripts/date-format.js" type="text/javascript"></script>
	<script>
		var now = new Date();
		var today = dateFormat(now, 'yyyy-mm-dd H:MM:ss');
		function removeMessage(id, ref) {
			$.ajax({
				url: 'messages/messages/removeMessage?id=' + id,
				type: "GET",
				success: function() {
					$('#remove'+ id).modal('hide');
					$('#messages').load('messages/message_items');
				}
			});
			
			$.ajax({
				url: 'messages/log_messages/writeToLog?data=' + today + ' admin deleted message with Ref. No. ' + ref,
				type: "GET",
				success: function() {
				}
			});
		}
		
		function clearIt() {
			$.ajax({
				url: 'messages/messages/clear',
				type: "GET",
				success: function() {
					$('#clearModal').modal('hide');
					$('#messages').load('messages/message_items');
				}
			});
			
			$.ajax({
				url: 'messages/log_messages/writeToLog?data=' + today + ' admin cleared messages archive',
				type: "GET",
				success: function() {
				}
			});
		}
	</script>
</html><?php }} ?>
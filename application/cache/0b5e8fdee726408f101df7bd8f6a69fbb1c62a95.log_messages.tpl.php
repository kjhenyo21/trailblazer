<?php /*%%SmartyHeaderCode:27926514e5ed83e4360-00774464%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b5e8fdee726408f101df7bd8f6a69fbb1c62a95' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trailblazer\\application/views\\messages\\log_messages.tpl',
      1 => 1364090903,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27926514e5ed83e4360-00774464',
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_514e601c4fb21',
  'variables' => 
  array (
    'contents' => 0,
    'c' => 0,
  ),
  'has_nocache_code' => false,
  'cache_lifetime' => 1,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_514e601c4fb21')) {function content_514e601c4fb21($_smarty_tpl) {?><!--
 * Lalaine's Bookstore Computerized AIS
 * @author Kristian Jacob Abad Lora <kjalora92@yahoo.com>
 * @date-created October 31, 2012
-->
<!DOCTYPE html>
	<head>
		<title>Trailblazer - Messages Log File</title>
	</head>
	
	<body>
		<!-- Modal for Clearing Log File -->
		<div id="clearModal" class="modal hide fade" style="margin-top: -150px">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3>Clear Archive</h3>
			</div>
			<div class="modal-body">
				<p>Are you sure you want to clear the log file?</p>
			</div>
			<div class="modal-footer">
				<a href="http://localhost/trailblazer/audit_trail/log_messages/clearLog" class="btn" id="clearButton">Yes</a>
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
				<h2>Messages Log File</h2>
				<br>
				<textarea id="log" style="width: 790px; height: 270px;" readonly="readonly">
											2013-03-23 21:23:05 sent a confirmation message to Kristian Lora at 09336925206 with Ref. No. 9371 on OR No. 6263 amounting to Php33

											 (0) replied 'no' on Ref. No.

											2013-03-23 21:24:20 Kristian Lora(09336925206) replied 'no' on Ref. No. 9371

											2013-03-23 21:41:51 ignored message with Ref. No. 9371

											2013-03-23 21:43:44 ignored message with Ref. No. 9371

											2013-03-23 21:50:08 ignored message with Ref. No. 9371

											2013-03-23 21:52:12 ignored message with Ref. No. 9371

											2013-03-23 21:53:48 ignored message with Ref. No. 9371

											2013-03-23 21:53:54 ignored message with Ref. No. 9371

											2013-03-23 21:56:57 ignored message with Ref. No. 9371

											2013-03-23 21:57:14 ignored message with Ref. No. 9371

											2013-03-24 6:31:44 ignored message with Ref. No. 9371

											2013-03-24 6:32:35 ignored message with Ref. No. 9371

											2013-03-24 10:04:33 deleted message with Ref. No. 9371

											2013-03-24 10:05:09 deleted message with Ref. No. 9371

											2013-03-24 10:06:32 deleted message with Ref. No. 9371
									</textarea>
			</div>
			<div class="control-group" style="text-align: center; margin-top: 50px;">
				<a href="http://localhost/trailblazer/messages/log_messages/saveLog" type="button" class="btn btn-primary">Save Log File</a>
				<a href="#clearModal" type="button" class="btn" data-toggle="modal">Clear Log File</a>
				<a href="http://localhost/trailblazer/messages" type="button" class="btn">Back</a>
			</div>
		</div>
	<link href="http://localhost/trailblazer/assets/stylesheets/bootstrap.min.css" rel="stylesheet"></link>
	<link href="http://localhost/trailblazer/assets/stylesheets/bootstrap-responsive.min.css" rel="stylesheet"></link>
	<link href="http://localhost/trailblazer/assets/stylesheets/main.css" rel="stylesheet"></link>
	<script src="http://localhost/trailblazer/assets/scripts/jquery.js" type="text/javascript"></script>
	<script src="http://localhost/trailblazer/assets/scripts/bootstrap.js" type="text/javascript"></script>
	<script src="http://localhost/trailblazer/assets/scripts/html2canvas.js" type="text/javascript"></script>
	<script src="http://localhost/trailblazer/assets/scripts/jquery.plugin.html2canvas.js" type="text/javascript"></script>
	<script>
		function clearIt() {
			$.ajax({
				url: 'messages/clear',
				type: "GET",
				success: function() {
					$('#clearModal').modal('hide');
					$('#messages').load('message_items');
				}
			});
		}
	</script>
</html><?php }} ?>
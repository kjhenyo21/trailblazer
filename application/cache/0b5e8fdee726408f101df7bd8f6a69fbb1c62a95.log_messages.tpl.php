<?php /*%%SmartyHeaderCode:37551529a110ecbb0-96590664%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b5e8fdee726408f101df7bd8f6a69fbb1c62a95' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trailblazer\\application/views\\messages\\log_messages.tpl',
      1 => 1364161125,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '37551529a110ecbb0-96590664',
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5152c8067bfe1',
  'has_nocache_code' => false,
  'cache_lifetime' => 1,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5152c8067bfe1')) {function content_5152c8067bfe1($_smarty_tpl) {?>  <!--
 * Trailblazer Digital Accounting Audit Trail Program
 * @author Kristian Jacob Abad Lora <kjalora92@yahoo.com>
 * @date-created October 31, 2012
-->
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
											2013-03-25 06:53:53 kjhenyo21 sent a confirmation message to Kristian Lora at 09336925206 with Ref. No. 8359 on OR No. 6263 amounting to Php33

											2013-03-25 06:57:23 Kristian Lora(09336925206) replied 'yes' on Ref. No. 8359

											2013-03-25 7:05:17 kjhenyo21 ignored message with Ref. No. 8359

											2013-03-25 07:09:14 confirmed message with Ref. No. 8359

											2013-03-25 7:11:00 kjhenyo21 ignored message with Ref. No. 8359

											2013-03-25 07:11:14 kjhenyo21 confirmed message with Ref. No. 8359

											2013-03-25 7:12:02 kjhenyo21 deleted message with Ref. No. 8359

											2013-03-25 07:48:22 kjhenyo21 sent a confirmation message to Karl Arevalo at 09332567821 with Ref. No. 2683 on OR No. 6264 amounting to Php5

											2013-03-25 07:50:28 Karl Arevalo(09332567821) replied 'no' on Ref. No. 2683

											2013-03-25 7:51:10 kjhenyo21 ignored message with Ref. No. 2683

											2013-03-25 7:51:34 kjhenyo21 ignored message with Ref. No. 2683

											2013-03-25 07:53:03 kjhenyo21 confirmed message with Ref. No. 2683

											2013-03-25 7:56:21 kjhenyo21 cleared messages archive

											2013-03-25 11:46:06 kjhenyo21 sent a confirmation message to Elaine Pahang at 09332567821 with Ref. No. 7214 on OR No. 6259 amounting to Php99.5

											2013-03-27 15:00:18 admin sent a confirmation message to Kristian Lora at 09336925206 with Ref. No. 3600 on OR No. 6263 amounting to Php33

											2013-03-27

											2013-03-27 15:00:10 admin ignored message with Ref. No. 3600

											2013-03-27 15:00:10 admin ignored message with Ref. No. 3600

											2013-03-27 15:04:18 admin confirmed message with Ref. No. 3600

											2013-03-27 15:09:46 admin sent a confirmation message to Kristian Lora at 09336925206 with Ref. No. 4073 on OR No. 6263 amounting to Php33

											2013-03-27

											2013-03-27 15:09:37 admin ignored message with Ref. No. 4073

											2013-03-27 15:16:43 Kristian Lora(09336925206) replied 'yes' on Ref. No. 4073

											2013-03-27 15:18:01 admin confirmed message with Ref. No. 4073

											2013-03-27 15:18:11 admin sent a confirmation message to Kristian Lora at 09336925206 with Ref. No. 5317 on OR No. 6263 amounting to Php33

											2013-03-27

											2013-03-27 15:20:48 admin confirmed message with Ref. No. 5317

											2013-03-27 15:24:45 admin confirmed message with Ref. No. 5317

											2013-03-27 17:38:35 admin sent a confirmation message to Bureau of Internal Revenue at 09336925206 with Ref. No. 7785 on OR No. 54773 amounting to Php1000

											2013-03-27 18:11:49 admin sent a confirmation message to Arle Casinto at 09277217911 with Ref. No. 4677 on OR No. 86 amounting to Php11460

											2013-03-27 18:11:36 admin ignored message with Ref. No. 4677
									</textarea>
			</div>
			<div class="control-group" style="text-align: center; margin-top: 50px;">
				<a href="http://localhost/trailblazer/messages/log_messages/saveLog" type="button" class="btn btn-primary">Save Log File</a>
				<a href="#clearModal" type="button" class="btn" data-toggle="modal">Clear Log File</a>
				<a type="button" class="btn" onClick="printIt(); return false;">Print Log File</a>
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
		
		function printIt() {    
			var divToPrint = document.getElementById('messages');
			var popupWin = window.open('', '_blank', 'width=300,height=300');
			popupWin.document.open();
			popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
			popupWin.document.close();
        }
 	</script>
</html><?php }} ?>
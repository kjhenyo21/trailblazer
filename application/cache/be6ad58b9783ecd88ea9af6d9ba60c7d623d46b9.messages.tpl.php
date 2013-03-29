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
  'unifunc' => 'content_5154f6bc5d5a0',
  'has_nocache_code' => false,
  'cache_lifetime' => 1,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5154f6bc5d5a0')) {function content_5154f6bc5d5a0($_smarty_tpl) {?>  <!--
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
												<div id="remove1" class="modal hide fade" style="margin-top: -150px">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h3>Remove Message</h3>
						</div>
						<div class="modal-body">
							<p>Are you sure you want to remove the message from the archive? You can always view it later in the Messages Log File.</p>
						</div>
						<div class="modal-footer">
							<a class="btn" id="removeButton1" href="#" data-url="http://localhost/trailblazer/audit_trail/messages/removeMessage?id=1&ref=7214" onClick="removeMessage(1, 7214); return false;">Yes</a>
							<a href="" class="btn btn-primary" data-dismiss="modal" aria-hidden="true">No</a>
						</div>
					</div>
									<div id="remove2" class="modal hide fade" style="margin-top: -150px">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h3>Remove Message</h3>
						</div>
						<div class="modal-body">
							<p>Are you sure you want to remove the message from the archive? You can always view it later in the Messages Log File.</p>
						</div>
						<div class="modal-footer">
							<a class="btn" id="removeButton2" href="#" data-url="http://localhost/trailblazer/audit_trail/messages/removeMessage?id=2&ref=3600" onClick="removeMessage(2, 3600); return false;">Yes</a>
							<a href="" class="btn btn-primary" data-dismiss="modal" aria-hidden="true">No</a>
						</div>
					</div>
									<div id="remove3" class="modal hide fade" style="margin-top: -150px">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h3>Remove Message</h3>
						</div>
						<div class="modal-body">
							<p>Are you sure you want to remove the message from the archive? You can always view it later in the Messages Log File.</p>
						</div>
						<div class="modal-footer">
							<a class="btn" id="removeButton3" href="#" data-url="http://localhost/trailblazer/audit_trail/messages/removeMessage?id=3&ref=4073" onClick="removeMessage(3, 4073); return false;">Yes</a>
							<a href="" class="btn btn-primary" data-dismiss="modal" aria-hidden="true">No</a>
						</div>
					</div>
									<div id="remove4" class="modal hide fade" style="margin-top: -150px">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h3>Remove Message</h3>
						</div>
						<div class="modal-body">
							<p>Are you sure you want to remove the message from the archive? You can always view it later in the Messages Log File.</p>
						</div>
						<div class="modal-footer">
							<a class="btn" id="removeButton4" href="#" data-url="http://localhost/trailblazer/audit_trail/messages/removeMessage?id=4&ref=5317" onClick="removeMessage(4, 5317); return false;">Yes</a>
							<a href="" class="btn btn-primary" data-dismiss="modal" aria-hidden="true">No</a>
						</div>
					</div>
									<div id="remove5" class="modal hide fade" style="margin-top: -150px">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h3>Remove Message</h3>
						</div>
						<div class="modal-body">
							<p>Are you sure you want to remove the message from the archive? You can always view it later in the Messages Log File.</p>
						</div>
						<div class="modal-footer">
							<a class="btn" id="removeButton5" href="#" data-url="http://localhost/trailblazer/audit_trail/messages/removeMessage?id=5&ref=7785" onClick="removeMessage(5, 7785); return false;">Yes</a>
							<a href="" class="btn btn-primary" data-dismiss="modal" aria-hidden="true">No</a>
						</div>
					</div>
									<div id="remove6" class="modal hide fade" style="margin-top: -150px">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h3>Remove Message</h3>
						</div>
						<div class="modal-body">
							<p>Are you sure you want to remove the message from the archive? You can always view it later in the Messages Log File.</p>
						</div>
						<div class="modal-footer">
							<a class="btn" id="removeButton6" href="#" data-url="http://localhost/trailblazer/audit_trail/messages/removeMessage?id=6&ref=4677" onClick="removeMessage(6, 4677); return false;">Yes</a>
							<a href="" class="btn btn-primary" data-dismiss="modal" aria-hidden="true">No</a>
						</div>
					</div>
									<div id="remove7" class="modal hide fade" style="margin-top: -150px">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h3>Remove Message</h3>
						</div>
						<div class="modal-body">
							<p>Are you sure you want to remove the message from the archive? You can always view it later in the Messages Log File.</p>
						</div>
						<div class="modal-footer">
							<a class="btn" id="removeButton7" href="#" data-url="http://localhost/trailblazer/audit_trail/messages/removeMessage?id=7&ref=3599" onClick="removeMessage(7, 3599); return false;">Yes</a>
							<a href="" class="btn btn-primary" data-dismiss="modal" aria-hidden="true">No</a>
						</div>
					</div>
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
									<table id="table" class="table table-hover" style="text-align: left; color: black">
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
							<th style="text-align: center">Status</th>
							<th style="text-align: center">Date Confirmed</th>
							<th></th>
						</thead>
						<tbody>			
															<tr>
									<td style="text-align: center; vertical-align: center">7214</td>
									<td style="text-align: center; vertical-align: center">Elaine Pahang</td>
									<td style="text-align: center; vertical-align: center">9332567821</td>
									<td style="text-align: center; vertical-align: center">2010-01-04</td>
									<td style="text-align: center; vertical-align: center">6259</td>
									<td class="amount" style="text-align: right;">99.50</td>
									<td style="text-align: center; vertical-align: center">2013-03-25 11:46:06</td>
																			<td style="text-align: center; vertical-align: center">--</td>
																												<td style="text-align: center; vertical-align: center">--</td>
																												<td style="text-align: center; font-weight: bold; color: orange; vertical-align: center">sent</td>
																												<td style="text-align: center; vertical-align: center">--</td>
																		<td><a href="#remove1" data-toggle="modal"><i class="icon-remove" style="color: red"></i></a></td>
								</tr>
															<tr>
									<td style="text-align: center; vertical-align: center">3600</td>
									<td style="text-align: center; vertical-align: center">Kristian Lora</td>
									<td style="text-align: center; vertical-align: center">9336925206</td>
									<td style="text-align: center; vertical-align: center">2010-01-05</td>
									<td style="text-align: center; vertical-align: center">6263</td>
									<td class="amount" style="text-align: right;">33.00</td>
									<td style="text-align: center; vertical-align: center">2013-03-27 15:00:18</td>
																			<td style="text-align: center; font-weight: bold; color: #289909; vertical-align: center">yes</td>
																												<td style="text-align: center; vertical-align: center">2013-03-27 15:03:34</td>
																												<td style="text-align: center; font-weight: bold; color: #289909; vertical-align: center">confirmed</td>
																												<td style="text-align: center; vertical-align: center">2013-03-27 15:04:18</td>
																		<td><a href="#remove2" data-toggle="modal"><i class="icon-remove" style="color: red"></i></a></td>
								</tr>
															<tr>
									<td style="text-align: center; vertical-align: center">4073</td>
									<td style="text-align: center; vertical-align: center">Kristian Lora</td>
									<td style="text-align: center; vertical-align: center">9336925206</td>
									<td style="text-align: center; vertical-align: center">2010-01-05</td>
									<td style="text-align: center; vertical-align: center">6263</td>
									<td class="amount" style="text-align: right;">33.00</td>
									<td style="text-align: center; vertical-align: center">2013-03-27 15:09:46</td>
																			<td style="text-align: center; font-weight: bold; color: #289909; vertical-align: center">yes</td>
																												<td style="text-align: center; vertical-align: center">2013-03-27 15:16:43</td>
																												<td style="text-align: center; font-weight: bold; color: #289909; vertical-align: center">confirmed</td>
																												<td style="text-align: center; vertical-align: center">2013-03-27 15:18:01</td>
																		<td><a href="#remove3" data-toggle="modal"><i class="icon-remove" style="color: red"></i></a></td>
								</tr>
															<tr>
									<td style="text-align: center; vertical-align: center">5317</td>
									<td style="text-align: center; vertical-align: center">Kristian Lora</td>
									<td style="text-align: center; vertical-align: center">9336925206</td>
									<td style="text-align: center; vertical-align: center">2010-01-05</td>
									<td style="text-align: center; vertical-align: center">6263</td>
									<td class="amount" style="text-align: right;">33.00</td>
									<td style="text-align: center; vertical-align: center">2013-03-27 15:18:11</td>
																			<td style="text-align: center; font-weight: bold; color: #289909; vertical-align: center">yes</td>
																												<td style="text-align: center; vertical-align: center">2013-03-27 15:23:38</td>
																												<td style="text-align: center; font-weight: bold; color: #289909; vertical-align: center">confirmed</td>
																												<td style="text-align: center; vertical-align: center">2013-03-27 15:24:45</td>
																		<td><a href="#remove4" data-toggle="modal"><i class="icon-remove" style="color: red"></i></a></td>
								</tr>
															<tr>
									<td style="text-align: center; vertical-align: center">7785</td>
									<td style="text-align: center; vertical-align: center">Bureau of Internal Revenue</td>
									<td style="text-align: center; vertical-align: center">9336925206</td>
									<td style="text-align: center; vertical-align: center">2010-01-04</td>
									<td style="text-align: center; vertical-align: center">54773</td>
									<td class="amount" style="text-align: right;">1,000.00</td>
									<td style="text-align: center; vertical-align: center">2013-03-27 17:38:35</td>
																			<td style="text-align: center; vertical-align: center">--</td>
																												<td style="text-align: center; vertical-align: center">--</td>
																												<td style="text-align: center; font-weight: bold; color: orange; vertical-align: center">sent</td>
																												<td style="text-align: center; vertical-align: center">--</td>
																		<td><a href="#remove5" data-toggle="modal"><i class="icon-remove" style="color: red"></i></a></td>
								</tr>
															<tr>
									<td style="text-align: center; vertical-align: center">4677</td>
									<td style="text-align: center; vertical-align: center">Arle Casinto</td>
									<td style="text-align: center; vertical-align: center">9277217911</td>
									<td style="text-align: center; vertical-align: center">2010-01-06</td>
									<td style="text-align: center; vertical-align: center">86</td>
									<td class="amount" style="text-align: right;">11,460.00</td>
									<td style="text-align: center; vertical-align: center">2013-03-27 18:11:49</td>
																			<td style="text-align: center; font-weight: bold; color: #289909; vertical-align: center">yes</td>
																												<td style="text-align: center; vertical-align: center">2013-03-27 18:14:43</td>
																												<td style="text-align: center; font-weight: bold; color: #289909; vertical-align: center">confirmed</td>
																												<td style="text-align: center; vertical-align: center">2013-03-28 01:38:45</td>
																		<td><a href="#remove6" data-toggle="modal"><i class="icon-remove" style="color: red"></i></a></td>
								</tr>
															<tr>
									<td style="text-align: center; vertical-align: center">3599</td>
									<td style="text-align: center; vertical-align: center">Yvette Doyongan</td>
									<td style="text-align: center; vertical-align: center">9179414753</td>
									<td style="text-align: center; vertical-align: center">2010-01-02</td>
									<td style="text-align: center; vertical-align: center">6254</td>
									<td class="amount" style="text-align: right;">36.00</td>
									<td style="text-align: center; vertical-align: center">2013-03-28 16:31:35</td>
																			<td style="text-align: center; vertical-align: center">--</td>
																												<td style="text-align: center; vertical-align: center">--</td>
																												<td style="text-align: center; font-weight: bold; color: orange; vertical-align: center">sent</td>
																												<td style="text-align: center; vertical-align: center">--</td>
																		<td><a href="#remove7" data-toggle="modal"><i class="icon-remove" style="color: red"></i></a></td>
								</tr>
													</tbody>
					</table>
								<div class="control-group" style="text-align: center; margin-top: 50px;">
											<a href="#clearModal" type="button" class="btn" data-toggle="modal">Clear Archive</a>
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
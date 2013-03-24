<?php /*%%SmartyHeaderCode:31477514e6bdf24c674-81304209%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b52350223175a4de7c7a83113928a18252d0d430' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trailblazer\\application/views\\messages\\message_items.tpl',
      1 => 1364090333,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31477514e6bdf24c674-81304209',
  'variables' => 
  array (
    'messages' => 0,
    'm' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_514e6bdf81202',
  'cache_lifetime' => 1,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_514e6bdf81202')) {function content_514e6bdf81202($_smarty_tpl) {?>			<div id="messages" style="margin: 0 auto; text-align: center">
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
										<a href="http://localhost/trailblazer/audit_trail/log_messages" type="button" class="btn btn-primary">View Log File</a>
					<a href="http://localhost/trailblazer/audit_trail" type="button" class="btn">Back</a>
				</div>
			</div><?php }} ?>
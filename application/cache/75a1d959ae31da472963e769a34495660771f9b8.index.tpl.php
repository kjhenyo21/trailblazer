<?php /*%%SmartyHeaderCode:1091514f34fd7837b0-32946381%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75a1d959ae31da472963e769a34495660771f9b8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trailblazer\\application/views\\file_directory\\index.tpl',
      1 => 1364147712,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1091514f34fd7837b0-32946381',
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_514f4072882e5',
  'has_nocache_code' => false,
  'cache_lifetime' => 1,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_514f4072882e5')) {function content_514f4072882e5($_smarty_tpl) {?>  <!--
 * WADWE Computerized AIS
 * @author Kristian Jacob Abad Lora <kjalora92@yahoo.com>
 * @date-created October 31, 2012
-->
	<head>
		<title>Trailblazer - File Directory</title>
	</head>
	
	<body>
		<!-- Modal for Non-Existing Paths Notification-->
					<div id="notif" class="modal hide fade in" style="margin-top: -100px; width: 480px">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true" onClick="closeNotif(); return false;">&times;</button>
					<h3 style="color: #DB1900">Paths Do Not Exist!</h3>
				</div>
				<div class="modal-body">
					<p>There are <span style="color: #DB1900; font-weight: bold">1</span> document path(s) that is/are no longer existing. Check this/these document(s) in your computer and update its/their path(s) in this system now or you may udpate it/them later at the Preferences tab.</p>
					<p><strong>Warning!</strong> Not updating the path of these documents will cause this application not to function properly.</p>
				</div>
				<div class="modal-footer">
					<div style="margin: 0 auto">
						<a href="http://localhost/trailblazer/preferences" class="btn btn-primary" type="button" id="update">OK, I'll update now</a>
						<button class="btn" data-dismiss="modal" id="closeNotif" onClick="closeNotif(); return false;">I'll update later</button>
					</div>
				</div>
			</div>
				
		<!-- Modal for Modified Files Notification-->
				
		<!-- Main -->
		<br>
		<div id="main-wrapper" style="width: 950px; padding: 40px 10px;">
			<div id="navi" style="float: right; font-size: 14pt">
				<a href="#" onclick="history.go(-1);return false;"><i class="icon-arrow-left"></i></a>
				<span> | </span>
				<a href="http://localhost/trailblazer/audit_trail"><i class="icon-home"></i></a>
			</div>
			<div id="files" style="margin: 0 auto; text-align: center">
				<h2>File Directory</h2>
				<br>
									<table id="table" class="table table-striped" style="text-align: left; color: black">
						<thead>
							<th style="text-align: center">Filename</th>
							<th style="text-align: center">Path</th>
							<th style="text-align: center">Date Created</th>
							<th style="text-align: center">Date Last Modified</th>
							<th style="text-align: center">Date Last Accessed</th>
							<th style="text-align: center">Size (Bytes)</th>
						</thead>
						<tbody>			
															<tr>
									<td style="text-align: center; vertical-align: center">crj-1-2010.jl</td>
									<td style="text-align: right; vertical-align: center">D:\Kristian Lora\My Documents\Lalaine's Bookstore\journals\cash_receipts</td>
									<td style="text-align: center; vertical-align: center">2013-03-18 21:23:38</td>
									<td style="text-align: center; vertical-align: center">2013-03-20 15:03:50</td>
									<td style="text-align: center; vertical-align: center">2013-03-18 21:23:38</td>
									<td style="text-align: center; vertical-align: center">141</td>
								</tr>
															<tr>
									<td style="text-align: center; vertical-align: center">gl-1-2010.lg</td>
									<td style="text-align: right; vertical-align: center">D:\Kristian Lora\My Documents\Lalaine's Bookstore\ledgers\general_ledgers</td>
									<td style="text-align: center; vertical-align: center">2013-03-18 21:23:45</td>
									<td style="text-align: center; vertical-align: center">2013-03-19 03:37:10</td>
									<td style="text-align: center; vertical-align: center">2013-03-18 20:41:01</td>
									<td style="text-align: center; vertical-align: center">197</td>
								</tr>
															<tr>
									<td style="text-align: center; vertical-align: center">is-1-2010.is</td>
									<td style="text-align: right; vertical-align: center">D:\Kristian Lora\My Documents\Lalaine's Bookstore\financial_statements\income_statements</td>
									<td style="text-align: center; vertical-align: center">2013-03-18 21:15:47</td>
									<td style="text-align: center; vertical-align: center">2013-03-20 17:21:23</td>
									<td style="text-align: center; vertical-align: center">2013-03-18 16:26:59</td>
									<td style="text-align: center; vertical-align: center">85</td>
								</tr>
															<tr>
									<td style="text-align: center; vertical-align: center">st-1-2010.tf</td>
									<td style="text-align: right; vertical-align: center">D:\Kristian Lora\My Documents\Lalaine's Bookstore\transaction_files\sale_transactions</td>
									<td style="text-align: center; vertical-align: center">2013-03-19 22:41:42</td>
									<td style="text-align: center; vertical-align: center">2013-03-24 22:58:19</td>
									<td style="text-align: center; vertical-align: center">2013-03-19 22:41:42</td>
									<td style="text-align: center; vertical-align: center">779</td>
								</tr>
															<tr>
									<td style="text-align: center; vertical-align: center">std-1-2010.tf</td>
									<td style="text-align: right; vertical-align: center">D:\Kristian Lora\My Documents\Lalaine's Bookstore\transaction_files\sale_transactions</td>
									<td style="text-align: center; vertical-align: center">2013-03-19 22:41:25</td>
									<td style="text-align: center; vertical-align: center">2013-03-20 15:24:34</td>
									<td style="text-align: center; vertical-align: center">2013-03-18 15:57:05</td>
									<td style="text-align: center; vertical-align: center">1037</td>
								</tr>
															<tr>
									<td style="text-align: center; vertical-align: center">st-1-2010_2.tf</td>
									<td style="text-align: right; vertical-align: center">D:\Kristian Lora\My Documents\Lalaine's Bookstore\transaction_files\sale_transactions\New Folder</td>
									<td style="text-align: center; vertical-align: center">2013-03-24 22:42:06</td>
									<td style="text-align: center; vertical-align: center">2013-03-25 01:41:25</td>
									<td style="text-align: center; vertical-align: center">2013-03-19 22:41:42</td>
									<td style="text-align: center; vertical-align: center">721</td>
								</tr>
															<tr>
									<td style="text-align: center; vertical-align: center">std-1-2010_2.tf</td>
									<td style="text-align: right; vertical-align: center">D:\Kristian Lora\My Documents\Lalaine's Bookstore\transaction_files\sale_transactions\New Folder</td>
									<td style="text-align: center; vertical-align: center">2013-03-24 22:42:06</td>
									<td style="text-align: center; vertical-align: center">2013-03-25 01:31:01</td>
									<td style="text-align: center; vertical-align: center">2013-03-18 15:57:05</td>
									<td style="text-align: center; vertical-align: center">606</td>
								</tr>
													</tbody>
					</table>
							</div>
		</div>
		<link href="http://localhost/trailblazer/assets/stylesheets/bootstrap.css" rel="stylesheet"></link>
		<link href="http://localhost/trailblazer/assets/stylesheets/bootstrap-responsive.css" rel="stylesheet"></link>
		<link href="http://localhost/trailblazer/assets/stylesheets/main.css" rel="stylesheet"></link>
		<link href="http://localhost/trailblazer/assets/stylesheets/forms.css" rel="stylesheet"></link>
		<script src="http://localhost/trailblazer/assets/scripts/jquery.js" type="text/javascript"></script>
		<script src="http://localhost/trailblazer/assets/scripts/bootstrap.min.js" type="text/javascript"></script>
		<script>
			$('.link').tooltip({
				animation: true,
				placement: 'top'
			});
			
			if ((1 > 0) || (0 > 0)) {
				$('body').append('<div id="backdropping" class="modal-backdrop fade in"></div> ');
				if (1 > 0)
					$('#notif').show();
				else if (0 > 0)
					$('#notif-mod').show();
			} else $('#backdropping').remove();
			
			function closeNotif() {
				$('#notif').removeClass('in');
				$('#notif').addClass('hide');
				$('#backdropping').remove();
			}			
			
			function closeNotifMod() {
				$('#notif-mod').removeClass('in');
				$('#notif-mod').addClass('hide');
				$('#backdropping').remove();
			}
			
			function updateSystem() {
				$.ajax({
					type: "POST",
					url: 'preferences/index/searchFiles',
					data: $("#pref").serialize(),				
					success: function(data){
						alert("Update succesfull!");
						closeNotifMod();
					},
					error: function(data) {
						alert("Update unsuccesfull!");
					}
				});
			}
			
		</script><?php }} ?>
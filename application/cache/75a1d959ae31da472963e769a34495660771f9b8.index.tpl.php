<?php /*%%SmartyHeaderCode:1788515281c9a63d97-79340784%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75a1d959ae31da472963e769a34495660771f9b8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trailblazer\\application/views\\file_directory\\index.tpl',
      1 => 1364789633,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1788515281c9a63d97-79340784',
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_51695407488c4',
  'has_nocache_code' => false,
  'cache_lifetime' => 1,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51695407488c4')) {function content_51695407488c4($_smarty_tpl) {?>  <!--
 * Trailblazer Digital Accounting Audit Trail Program
 * @author Kristian Jacob Abad Lora <kjalora92@yahoo.com>
 * @date-created October 31, 2012
-->
	<head>
		<title>Trailblazer - File Directory</title>
	</head>
	
	<body>
		<!-- Modal for Non-Existing Paths Notification-->
				
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
									<td style="text-align: center; vertical-align: center">is-1-2010.is</td>
									<td style="text-align: right; vertical-align: center">D:\Kristian Lora\My Documents\Trailblazer Test\financial_statements\income_statements</td>
									<td style="text-align: center; vertical-align: center">2013-04-13 18:20:32</td>
									<td style="text-align: center; vertical-align: center">2013-04-13 00:58:59</td>
									<td style="text-align: center; vertical-align: center">2013-04-13 00:58:59</td>
									<td style="text-align: center; vertical-align: center">291</td>
								</tr>
															<tr>
									<td style="text-align: center; vertical-align: center">gl-1-2010.lg</td>
									<td style="text-align: right; vertical-align: center">D:\Kristian Lora\My Documents\Trailblazer Test\ledgers\general_ledgers</td>
									<td style="text-align: center; vertical-align: center">2013-04-13 08:58:36</td>
									<td style="text-align: center; vertical-align: center">2013-04-13 20:05:08</td>
									<td style="text-align: center; vertical-align: center">2013-04-13 09:04:54</td>
									<td style="text-align: center; vertical-align: center">1841</td>
								</tr>
															<tr>
									<td style="text-align: center; vertical-align: center">crj-1-2010.jl</td>
									<td style="text-align: right; vertical-align: center">D:\Kristian Lora\My Documents\Trailblazer Test\journals\cash_receipts</td>
									<td style="text-align: center; vertical-align: center">2013-04-13 18:43:19</td>
									<td style="text-align: center; vertical-align: center">2013-04-13 18:57:22</td>
									<td style="text-align: center; vertical-align: center">2013-04-13 17:45:33</td>
									<td style="text-align: center; vertical-align: center">446</td>
								</tr>
															<tr>
									<td style="text-align: center; vertical-align: center">cdj-1-2010.jl</td>
									<td style="text-align: right; vertical-align: center">D:\Kristian Lora\My Documents\Trailblazer Test\journals\cash_disbursements</td>
									<td style="text-align: center; vertical-align: center">2013-04-13 18:43:27</td>
									<td style="text-align: center; vertical-align: center">2013-04-13 20:12:33</td>
									<td style="text-align: center; vertical-align: center">2013-04-13 17:22:10</td>
									<td style="text-align: center; vertical-align: center">677</td>
								</tr>
															<tr>
									<td style="text-align: center; vertical-align: center">st-1-2010.tf</td>
									<td style="text-align: right; vertical-align: center">D:\Kristian Lora\My Documents\Trailblazer Test\transaction_files\sale_transactions</td>
									<td style="text-align: center; vertical-align: center">2013-04-13 19:17:00</td>
									<td style="text-align: center; vertical-align: center">2013-04-13 17:35:55</td>
									<td style="text-align: center; vertical-align: center">2013-04-13 17:35:16</td>
									<td style="text-align: center; vertical-align: center">310</td>
								</tr>
															<tr>
									<td style="text-align: center; vertical-align: center">std-1-2010.tf</td>
									<td style="text-align: right; vertical-align: center">D:\Kristian Lora\My Documents\Trailblazer Test\transaction_files\sale_transactions</td>
									<td style="text-align: center; vertical-align: center">2013-04-13 19:17:00</td>
									<td style="text-align: center; vertical-align: center">2013-04-13 17:35:55</td>
									<td style="text-align: center; vertical-align: center">2013-04-13 17:35:16</td>
									<td style="text-align: center; vertical-align: center">322</td>
								</tr>
															<tr>
									<td style="text-align: center; vertical-align: center">pt-1-2010.tf</td>
									<td style="text-align: right; vertical-align: center">D:\Kristian Lora\My Documents\Lalaine's Bookstore\transaction_files\purchase_transactions</td>
									<td style="text-align: center; vertical-align: center">2013-03-27 08:55:14</td>
									<td style="text-align: center; vertical-align: center">2013-03-27 09:09:53</td>
									<td style="text-align: center; vertical-align: center">2013-03-27 08:55:14</td>
									<td style="text-align: center; vertical-align: center">231</td>
								</tr>
															<tr>
									<td style="text-align: center; vertical-align: center">pt-2-2010.tf</td>
									<td style="text-align: right; vertical-align: center">D:\Kristian Lora\My Documents\Lalaine's Bookstore\transaction_files\purchase_transactions</td>
									<td style="text-align: center; vertical-align: center">2013-03-29 11:03:43</td>
									<td style="text-align: center; vertical-align: center">2013-03-27 09:09:53</td>
									<td style="text-align: center; vertical-align: center">2013-03-27 08:55:14</td>
									<td style="text-align: center; vertical-align: center">231</td>
								</tr>
															<tr>
									<td style="text-align: center; vertical-align: center">ptd-1-2010.tf</td>
									<td style="text-align: right; vertical-align: center">D:\Kristian Lora\My Documents\Lalaine's Bookstore\transaction_files\purchase_transactions</td>
									<td style="text-align: center; vertical-align: center">2013-03-27 11:05:46</td>
									<td style="text-align: center; vertical-align: center">2013-03-27 11:05:47</td>
									<td style="text-align: center; vertical-align: center">2013-03-27 11:05:47</td>
									<td style="text-align: center; vertical-align: center">762</td>
								</tr>
															<tr>
									<td style="text-align: center; vertical-align: center">ptd-2-2010.tf</td>
									<td style="text-align: right; vertical-align: center">D:\Kristian Lora\My Documents\Lalaine's Bookstore\transaction_files\purchase_transactions</td>
									<td style="text-align: center; vertical-align: center">2013-03-29 11:03:43</td>
									<td style="text-align: center; vertical-align: center">2013-03-27 11:05:47</td>
									<td style="text-align: center; vertical-align: center">2013-03-27 11:05:47</td>
									<td style="text-align: center; vertical-align: center">762</td>
								</tr>
															<tr>
									<td style="text-align: center; vertical-align: center">et-1-2010.tf</td>
									<td style="text-align: right; vertical-align: center">D:\Kristian Lora\My Documents\Lalaine's Bookstore\transaction_files\expense_transactions</td>
									<td style="text-align: center; vertical-align: center">2013-03-27 11:20:46</td>
									<td style="text-align: center; vertical-align: center">2013-04-08 01:30:27</td>
									<td style="text-align: center; vertical-align: center">2013-03-27 11:20:46</td>
									<td style="text-align: center; vertical-align: center">735</td>
								</tr>
															<tr>
									<td style="text-align: center; vertical-align: center">etd-1-2010.tf</td>
									<td style="text-align: right; vertical-align: center">D:\Kristian Lora\My Documents\Lalaine's Bookstore\transaction_files\expense_transactions</td>
									<td style="text-align: center; vertical-align: center">2013-03-27 12:16:39</td>
									<td style="text-align: center; vertical-align: center">2013-04-01 12:14:47</td>
									<td style="text-align: center; vertical-align: center">2013-03-27 12:16:39</td>
									<td style="text-align: center; vertical-align: center">538</td>
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
			
			if ((0 > 0) || (0 > 0)) {
				$('body').append('<div id="backdropping" class="modal-backdrop fade in"></div> ');
				if (0 > 0)
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
			
			function restoreFile() {
				$.ajax({
					type: "POST",
					url: 'file_directory/index/restoreFiles',			
					success: function(data){
						alert("File(s) has/have been successfuly restored!");
						closeNotifMod();
					},
					error: function(data) {
						alert("Update unsuccesfull!");
					}
				});
			}
			
		</script><?php }} ?>
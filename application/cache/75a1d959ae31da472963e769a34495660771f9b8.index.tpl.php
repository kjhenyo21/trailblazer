<?php /*%%SmartyHeaderCode:1788515281c9a63d97-79340784%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75a1d959ae31da472963e769a34495660771f9b8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trailblazer\\application/views\\file_directory\\index.tpl',
      1 => 1364447336,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1788515281c9a63d97-79340784',
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5153d07711578',
  'has_nocache_code' => false,
  'cache_lifetime' => 1,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5153d07711578')) {function content_5153d07711578($_smarty_tpl) {?>  <!--
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
									<td style="text-align: center; vertical-align: center">crj-1-2010.jl</td>
									<td style="text-align: right; vertical-align: center">D:\Kristian Lora\My Documents\Lalaine's Bookstore\journals\cash_receipts</td>
									<td style="text-align: center; vertical-align: center">2013-03-18 21:23:38</td>
									<td style="text-align: center; vertical-align: center">2013-03-27 10:54:00</td>
									<td style="text-align: center; vertical-align: center">2013-03-18 21:23:38</td>
									<td style="text-align: center; vertical-align: center">1298</td>
								</tr>
															<tr>
									<td style="text-align: center; vertical-align: center">cdj-1-2010.jl</td>
									<td style="text-align: right; vertical-align: center">D:\Kristian Lora\My Documents\Lalaine's Bookstore\journals\cash_disbursements</td>
									<td style="text-align: center; vertical-align: center">2013-03-27 08:03:48</td>
									<td style="text-align: center; vertical-align: center">2013-03-27 17:11:50</td>
									<td style="text-align: center; vertical-align: center">2013-03-27 08:03:48</td>
									<td style="text-align: center; vertical-align: center">599</td>
								</tr>
															<tr>
									<td style="text-align: center; vertical-align: center">gl-1-2010.lg</td>
									<td style="text-align: right; vertical-align: center">D:\Kristian Lora\My Documents\Lalaine's Bookstore\ledgers\general_ledgers</td>
									<td style="text-align: center; vertical-align: center">2013-03-18 21:23:45</td>
									<td style="text-align: center; vertical-align: center">2013-03-28 01:37:23</td>
									<td style="text-align: center; vertical-align: center">2013-03-18 20:41:01</td>
									<td style="text-align: center; vertical-align: center">1795</td>
								</tr>
															<tr>
									<td style="text-align: center; vertical-align: center">is-1-2010.is</td>
									<td style="text-align: right; vertical-align: center">D:\Kristian Lora\My Documents\Lalaine's Bookstore\financial_statements\income_statements</td>
									<td style="text-align: center; vertical-align: center">2013-03-26 19:27:35</td>
									<td style="text-align: center; vertical-align: center">2013-03-27 17:01:38</td>
									<td style="text-align: center; vertical-align: center">2013-03-18 16:26:59</td>
									<td style="text-align: center; vertical-align: center">313</td>
								</tr>
															<tr>
									<td style="text-align: center; vertical-align: center">is-2010.is</td>
									<td style="text-align: right; vertical-align: center">D:\Kristian Lora\My Documents\Lalaine's Bookstore\financial_statements\income_statements</td>
									<td style="text-align: center; vertical-align: center">2013-03-18 21:15:47</td>
									<td style="text-align: center; vertical-align: center">2013-03-26 19:46:43</td>
									<td style="text-align: center; vertical-align: center">2013-03-18 16:26:59</td>
									<td style="text-align: center; vertical-align: center">95</td>
								</tr>
															<tr>
									<td style="text-align: center; vertical-align: center">new  3.txt</td>
									<td style="text-align: right; vertical-align: center">D:\Kristian Lora\My Documents\Lalaine's Bookstore\transaction_files\sale_transactions</td>
									<td style="text-align: center; vertical-align: center">2013-03-26 17:49:35</td>
									<td style="text-align: center; vertical-align: center">2013-03-26 17:49:35</td>
									<td style="text-align: center; vertical-align: center">2013-03-26 17:49:35</td>
									<td style="text-align: center; vertical-align: center">782</td>
								</tr>
															<tr>
									<td style="text-align: center; vertical-align: center">st-1-2010.tf</td>
									<td style="text-align: right; vertical-align: center">D:\Kristian Lora\My Documents\Lalaine's Bookstore\transaction_files\sale_transactions</td>
									<td style="text-align: center; vertical-align: center">2013-03-19 22:41:42</td>
									<td style="text-align: center; vertical-align: center">2013-03-27 11:20:09</td>
									<td style="text-align: center; vertical-align: center">2013-03-19 22:41:42</td>
									<td style="text-align: center; vertical-align: center">658</td>
								</tr>
															<tr>
									<td style="text-align: center; vertical-align: center">std-1-2010.tf</td>
									<td style="text-align: right; vertical-align: center">D:\Kristian Lora\My Documents\Lalaine's Bookstore\transaction_files\sale_transactions</td>
									<td style="text-align: center; vertical-align: center">2013-03-19 22:41:25</td>
									<td style="text-align: center; vertical-align: center">2013-03-27 09:34:41</td>
									<td style="text-align: center; vertical-align: center">2013-03-18 15:57:05</td>
									<td style="text-align: center; vertical-align: center">1060</td>
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
									<td style="text-align: center; vertical-align: center">ptd-1-2010.tf</td>
									<td style="text-align: right; vertical-align: center">D:\Kristian Lora\My Documents\Lalaine's Bookstore\transaction_files\purchase_transactions</td>
									<td style="text-align: center; vertical-align: center">2013-03-27 11:05:46</td>
									<td style="text-align: center; vertical-align: center">2013-03-27 11:05:47</td>
									<td style="text-align: center; vertical-align: center">2013-03-27 11:05:47</td>
									<td style="text-align: center; vertical-align: center">762</td>
								</tr>
															<tr>
									<td style="text-align: center; vertical-align: center">et-1-2010.tf</td>
									<td style="text-align: right; vertical-align: center">D:\Kristian Lora\My Documents\Lalaine's Bookstore\transaction_files\expense_transactions</td>
									<td style="text-align: center; vertical-align: center">2013-03-27 11:20:46</td>
									<td style="text-align: center; vertical-align: center">2013-03-27 18:36:04</td>
									<td style="text-align: center; vertical-align: center">2013-03-27 11:20:46</td>
									<td style="text-align: center; vertical-align: center">733</td>
								</tr>
															<tr>
									<td style="text-align: center; vertical-align: center">etd-1-2010.tf</td>
									<td style="text-align: right; vertical-align: center">D:\Kristian Lora\My Documents\Lalaine's Bookstore\transaction_files\expense_transactions</td>
									<td style="text-align: center; vertical-align: center">2013-03-27 12:16:39</td>
									<td style="text-align: center; vertical-align: center">2013-03-27 17:11:35</td>
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
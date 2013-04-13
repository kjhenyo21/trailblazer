<?php /* Smarty version Smarty-3.1.7, created on 2013-04-10 19:00:48
         compiled from "C:\xampp\htdocs\trailblazer\application/views\file_directory\index.tpl" */ ?>
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
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_515281ca0a35d',
  'variables' => 
  array (
    'nonExistentPaths' => 0,
    'noOfModFiles' => 0,
    'modFiles' => 0,
    'mf' => 0,
    'files' => 0,
    'f' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_515281ca0a35d')) {function content_515281ca0a35d($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'C:\\xampp\\htdocs\\trailblazer\\application\\libraries\\smarty\\plugins\\function.url.php';
?><!--
 * Trailblazer Digital Accounting Audit Trail Program
 * @author Kristian Jacob Abad Lora <kjalora92@yahoo.com>
 * @date-created October 31, 2012
-->
	<head>
		<title>Trailblazer - File Directory</title>
	</head>
	
	<body>
		<!-- Modal for Non-Existing Paths Notification-->
		<?php if (($_smarty_tpl->tpl_vars['nonExistentPaths']->value>0)){?>
			<div id="notif" class="modal hide fade in" style="margin-top: -100px; width: 480px">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true" onClick="closeNotif(); return false;">&times;</button>
					<h3 style="color: #DB1900">Paths Do Not Exist!</h3>
				</div>
				<div class="modal-body">
					<p>There are <span style="color: #DB1900; font-weight: bold"><?php echo $_smarty_tpl->tpl_vars['nonExistentPaths']->value;?>
</span> document path(s) that is/are no longer existing. Check this/these document(s) in your computer and update its/their path(s) in this system now or you may udpate it/them later at the Preferences tab.</p>
					<p><strong>Warning!</strong> Not updating the path of these documents will cause this application not to function properly.</p>
				</div>
				<div class="modal-footer">
					<div style="margin: 0 auto">
						<a href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
preferences" class="btn btn-primary" type="button" id="update">OK, I'll update now</a>
						<button class="btn" data-dismiss="modal" id="closeNotif" onClick="closeNotif(); return false;">I'll update later</button>
					</div>
				</div>
			</div>
		<?php }?>
		
		<!-- Modal for Modified Files Notification-->
		<?php if (($_smarty_tpl->tpl_vars['noOfModFiles']->value>0)){?>
			<div id="notif-mod" class="modal hide fade in" style="margin-top: -100px; width: 500px">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true" onClick="closeNotif(); return false;">&times;</button>
					<h3 style="color: #DB1900">File(s) Modified!</h3>
				</div>
				<div class="modal-body">
					<p><span style="color: #DB1900; font-weight: bold"><?php echo $_smarty_tpl->tpl_vars['noOfModFiles']->value;?>
</span> file(s) have been modified (hover on filename to know the filepath):</p>
					<pre style="padding: 5px 30px;"><?php  $_smarty_tpl->tpl_vars['mf'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mf']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['modFiles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['mf']->key => $_smarty_tpl->tpl_vars['mf']->value){
$_smarty_tpl->tpl_vars['mf']->_loop = true;
?><i class="icon-file"></i> <span class="link" data-original-title="<?php echo $_smarty_tpl->tpl_vars['mf']->value['path'];?>
"><?php echo $_smarty_tpl->tpl_vars['mf']->value['filename'];?>
   on   <?php echo $_smarty_tpl->tpl_vars['mf']->value['date_modified'];?>
</span><br><?php } ?></pre>
					<p>Do you want to update the system on these files now? This dialog will keep on popping up every time you reload this page to consistently remind you.</p>
				</div>
				<div class="modal-footer">
					<div style="margin: 0 auto">
						<a class="btn" type="button" id="update" onClick="updateSystem(); return false;">OK, I'll update now</a>
						<a class="btn btn-primary" type="button" id="update" onClick="restoreFile(); return false;">No, I'll restore the file(s)</a>
						<button class="btn" data-dismiss="modal" id="closeNotif" onClick="closeNotifMod(); return false;">I'll update later</button>
					</div>
				</div>
			</div>
		<?php }?>
		
		<!-- Main -->
		<br>
		<div id="main-wrapper" style="width: 950px; padding: 40px 10px;">
			<div id="navi" style="float: right; font-size: 14pt">
				<a href="#" onclick="history.go(-1);return false;"><i class="icon-arrow-left"></i></a>
				<span> | </span>
				<a href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
audit_trail"><i class="icon-home"></i></a>
			</div>
			<div id="files" style="margin: 0 auto; text-align: center">
				<h2>File Directory</h2>
				<br>
				<?php if (($_smarty_tpl->tpl_vars['files']->value)){?>
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
							<?php  $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f']->key => $_smarty_tpl->tpl_vars['f']->value){
$_smarty_tpl->tpl_vars['f']->_loop = true;
?>
								<tr>
									<td style="text-align: center; vertical-align: center"><?php echo $_smarty_tpl->tpl_vars['f']->value['filename'];?>
</td>
									<td style="text-align: right; vertical-align: center"><?php echo $_smarty_tpl->tpl_vars['f']->value['path'];?>
</td>
									<td style="text-align: center; vertical-align: center"><?php echo $_smarty_tpl->tpl_vars['f']->value['date_created'];?>
</td>
									<td style="text-align: center; vertical-align: center"><?php echo $_smarty_tpl->tpl_vars['f']->value['date_modified'];?>
</td>
									<td style="text-align: center; vertical-align: center"><?php echo $_smarty_tpl->tpl_vars['f']->value['date_accessed'];?>
</td>
									<td style="text-align: center; vertical-align: center"><?php echo $_smarty_tpl->tpl_vars['f']->value['size'];?>
</td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				<?php }else{ ?>
				<table class="table table-striped">
					<thead>
						<th style="text-align: center">Filename</th>
						<th style="text-align: center">Path</th>
						<th style="text-align: center">Date Created</th>
						<th style="text-align: center">Date Last Modified</th>
						<th style="text-align: center">Date Last Accessed</th>
						<th style="text-align: center">Size (Bytes)</th>
					</thead>
					</table>
					<table class="table table-striped">
						<tbody>
							<tr>
								<td><div style="font-style: italic">No file(s) to display.</div> </td>
							</tr>
						</tbody>
					</table>
				<?php }?>
			</div>
		</div>
		<link href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/stylesheets/bootstrap.css" rel="stylesheet"></link>
		<link href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/stylesheets/bootstrap-responsive.css" rel="stylesheet"></link>
		<link href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/stylesheets/main.css" rel="stylesheet"></link>
		<link href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/stylesheets/forms.css" rel="stylesheet"></link>
		<script src="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/scripts/jquery.js" type="text/javascript"></script>
		<script src="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/scripts/bootstrap.min.js" type="text/javascript"></script>
		<script>
			$('.link').tooltip({
				animation: true,
				placement: 'top'
			});
			
			if ((<?php echo $_smarty_tpl->tpl_vars['nonExistentPaths']->value;?>
 > 0) || (<?php echo $_smarty_tpl->tpl_vars['noOfModFiles']->value;?>
 > 0)) {
				$('body').append('<div id="backdropping" class="modal-backdrop fade in"></div> ');
				if (<?php echo $_smarty_tpl->tpl_vars['nonExistentPaths']->value;?>
 > 0)
					$('#notif').show();
				else if (<?php echo $_smarty_tpl->tpl_vars['noOfModFiles']->value;?>
 > 0)
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
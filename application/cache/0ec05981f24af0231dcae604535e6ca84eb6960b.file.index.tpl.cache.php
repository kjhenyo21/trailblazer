<?php /* Smarty version Smarty-3.1.7, created on 2013-04-10 20:52:46
         compiled from "C:\xampp\htdocs\trailblazer\application/views\audit_trail\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13767515281e1ed0ea7-49065407%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ec05981f24af0231dcae604535e6ca84eb6960b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trailblazer\\application/views\\audit_trail\\index.tpl',
      1 => 1365619852,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13767515281e1ed0ea7-49065407',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_515281e22cb10',
  'variables' => 
  array (
    'nonExistentPaths' => 0,
    'noOfNewAndIgnoredMessages' => 0,
    'noOfModFiles' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_515281e22cb10')) {function content_515281e22cb10($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'C:\\xampp\\htdocs\\trailblazer\\application\\libraries\\smarty\\plugins\\function.url.php';
?><!--
 * Trailblazer Digital Accounting Audit Trail Program
 * @author Kristian Jacob Abad Lora <kjalora92@yahoo.com>
 * @date-created October 31, 2012
-->
	<head>
		<title>Trailblazer - Home</title>
	</head>
	
	<body>
		<!-- Modal for Loading a File for Audit Trail-->
		<div id="load_file" class="modal hide fade" style="margin-top: -100px; width: 480px">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true" onClick="closeIt(); return false;">&times;</button>
				<h3>Load File</h3>
			</div>
			<div class="modal-body">
				<form id="load-file-form" class="form-horizontal" style="margin-bottom: 0px">
					<fieldset>
						<div style="margin: 0 35px">
							<div class="field-group" id="group-file">
								<label class="field-label" for="file">File</label>
								<div class="control">
									<input type="file" class="span3" id="file_upload" name="file_upload" onChange="onChangeFile(); return false;" placeholder="Enter file directory">
									<input type="hidden" class="span3" id="file" name="file">
								</div>
							</div>
							<div class="field-group" id="group-doc">
								<label class="field-label" for="doc">Statement</label>
								<div class="control">
									<select class="span3" id="doc" name="doc">
										<option></option>
										<option>Income Statement</option>
										<option>Balance Sheet</option>
									</select>
								</div>
							</div>
						</div>
					</fieldset>
				</form>
			</div>
			<div class="modal-footer" style="text-align: center">
				<a class="btn btn-small" type="submit" id="load" disabled="disabled">Load File</a>
				<button class="btn btn-small" data-dismiss="modal" id="close" onClick="closeIt(); return false;">Cancel</button>
			</div>
		</div>
		
		<!-- Modal for Notification-->
		<?php if (($_smarty_tpl->tpl_vars['nonExistentPaths']->value>0)){?>
			<div id="notif" class="modal hide fade in" style="margin-top: -100px; width: 480px">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true" onClick="closeNotif(); return false;">&times;</button>
					<h3 style="color: #DB1900">Paths Do Not Exist!</h3>
				</div>
				<div class="modal-body">
					<p>There are <span style="color: #DB1900; font-weight: bold"><?php echo $_smarty_tpl->tpl_vars['nonExistentPaths']->value;?>
</span> document path(s) that is/are no longer existing. Check these documents in your computer and update their paths in this system now or you may udpate them later at the Preferences tab.</p>
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
		
		<!-- Main -->
		<div class="container-fluid">
			<div class="row-fluid" id="main-wrapper-home">
				<div class="span3" id="left-col">
					<ul id="navi-menu" class="nav nav-list">
						<li class="active"><a href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
">Home <i class="icon-home"></i></a></li>				
						<li><a href="#load_file" data-toggle="modal" style="color: orange; font-weight: bold; font-style: italic">Start a Trail! <i class="icon-road"></i></a></li>				
						<?php if (($_smarty_tpl->tpl_vars['noOfNewAndIgnoredMessages']->value==0)){?>
							<li><a href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
messages">Messages <i class="icon-envelope"></i></a></li>
						<?php }else{ ?>
							<li class="alerta"><a href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
messages" class="link-alert" data-original-title="You have NEW and/or ignored messages! Check it out now!" style="color: white; float: right;"><i class="icon-exclamation-sign"></i>   Messages <i class="icon-envelope"></i></a></li>
						<?php }?>
						<li><a href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
profile">Profile <i class="icon-user"></i></a></li>
						<li><a href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
preferences">Preferences <i class="icon-wrench"></i></a></li>
						<?php if (($_smarty_tpl->tpl_vars['noOfModFiles']->value==0)){?>
							<li><a href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
file_directory">File Directory <i class="icon-th-list"></i></a></li>
						<?php }else{ ?>
							<li class="alerta"><a href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
file_directory" class="link-alert" data-original-title="Alert! There is/are file(s) that has/have been modified. Check it out now!" style="color: white; float: right;"><i class="icon-exclamation-sign"></i>  File Directory <i class="icon-th-list"></i></a></li>
						<?php }?>
						<!--<li><a href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
system_audit">System Audit <i class="icon-cog"></i></a></li>-->
						<li><a href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
index/logout">Logout <i class="icon-lock"></i></a></li>
					</ul>
				</div>
				<div class="span9" id="right-col">
					<h3>Welcome <i>Trailblazer!</i></h3>
					<p>Are you spending too much time in conducting audit trail of the transactions of your business? <i><strong>Trailblazer</strong></i> can help you!</p>
					<p><i><strong>Trailblazer</i></strong> is a stand-alone, external accounting audit trail system that enables one to trace transactions from financial statements down to the transaction file or source documents, if available. This process of audit trail is called <i>vouching</i>.</p>
					<p>Aside from the main process of audit trail, <i><strong>Trailblazer</i></strong> also has features like transactee (customer, supplier, etc) validation where one can automatically contact the transactee via SMS for further confirmation about the transaction in question.</p>
					<p><i><strong>Trailblazer</i></strong> is designed to speed up the manual audit trail process to aid you in detecting fraud in your business in a timely manner.</p>
					<center><a href="#load_file" data-toggle="modal" class="btn btn-small btn-primary"><strong>Start a Trail, NOW!</strong></a></center>
				</div>
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
			if (<?php echo $_smarty_tpl->tpl_vars['nonExistentPaths']->value;?>
 > 0) {
				$('body').append('<div id="backdropping" class="modal-backdrop fade in"></div> ');
				$('#notif').show();
			} else $('#backdropping').remove();
			
			$('.link').tooltip({
				placement: 'right'
			});
			
			$('.link-alert').tooltip({
				animation: true,
				placement: 'top',
				trigger: 'manual'
			});
			
			function closeNotif() {
				$('#notif').removeClass('in');
				$('#notif').addClass('hide');
				$('#backdropping').remove();
			}
			
			 
			value = $('#file_upload').val();
			console.log(value);
			if (value != '') {
				$('#file').val(value);
				$('#load').removeAttr("disabled");
				$('#load').addClass("btn-primary");
				var js = "loadIt(); return false;";
				var open = "(function(){";
				var close = "});";
				var newclick = eval( open + js + close );
				$("#load").get(0).onclick = newclick;
			} else {
				$('#file').val('');
				$('#load').attr("disabled", "disabled");
				$("#load").get(0).onclick = null;
			}

			function onChangeFile() {
				value = $('#file_upload').val();
				if (value != '') {
					$('#file').val(value);
					$('#load').removeAttr("disabled");
					$('#load').addClass("btn-primary");
					var js = "loadIt(); return false;";
					var open = "(function(){";
					var close = "});";
					var newclick = eval( open + js + close );
					$("#load").get(0).onclick = newclick;
				} else {
					$('#file').val('');
					$('#load').attr("disabled", "disabled");
					$("#load").get(0).onclick = null;
				}
			}
			
			
			function noOfItemsOnChange() {
				var noOfItems = $('#items').val();
				if (noOfItems == "Other") {
					$('#control-interest').remove();
					$('#group-interest').append('<div id="control-interest" class="control"><a class="link" data-original-title="The number of item transactions that you are interested to audit; must be greater than zero."><input type="text" class="span1" id="items" name="items"/></a></div>');
				}
				$('.link').tooltip({
					placement: 'right'
				});
			}
				
			function loadIt() {
				file = $('#file').val();
				doc = $('#doc').val();
				items = $('#items').val();
				
				if ((doc == '') || (items == '') || (items <= 0)) {
					if (doc == '') {
						$('#group-doc').addClass("error");
						$('.error-doc-empty').remove();
						$('#doc').after('<div id="error-text" class="error-doc-empty">Must not be empty!</div>');
					} else {
						$('.error-doc-empty').remove();
						$('#group-doc').removeClass("error");
					}
					
					if (items == '') {
						$('#group-interest').addClass("error");
						$('.error-items-empty').remove();
						$('.error-items-zero').remove();
						$('#items').after('<span id="error-text" class="error-items-empty">Must not be empty!</span>');
					} else {
						if (items <= 0) {
							$('#group-interest').addClass("error");
							$('.error-items-zero').remove();
							$('.error-items-empty').remove();
							$('#items').after('<span id="error-text" class="error-items-zero">Must be greater than zero!</span>');
						} else if (items > 0){
							$('.error-items-zero').remove();
							$('.error-items-empty').remove();
							$('#group-interest').removeClass("error");
						} else {
							$('.error-items-zero').remove();
							$('.error-items-empty').remove();
							$('#group-interest').removeClass("error");
						}
					}
				} else window.location.href = '<?php echo smarty_function_url(array(),$_smarty_tpl);?>
audit_trail/index/readFile?file=' + file + '&doc=' + doc + '&items=' + items;
			}
			
			function closeIt() {
				$('#file_upload').val('');
				$('#file').val('');
				$('#doc').val('');
				$('#control-interest').remove();
				$('#group-interest').append('<div id="control-interest" class="control"><a class="link" data-original-title="The number of item transactions that you are interested to audit; must be greater than zero."><select style="width: 80px" id="items" name="items" onChange="noOfItemsOnChange(); return false;"><option selected="selected">250</option><option>200</option><option>150</option>			<option>100</option><option>50</option><option>Other</option></select></a></div>');
				$('#load').attr("disabled", "disabled");
				$('#load').removeClass("btn-primary");
			}
			
			
		</script><?php }} ?>
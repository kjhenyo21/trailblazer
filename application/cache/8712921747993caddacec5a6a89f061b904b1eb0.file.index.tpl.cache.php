<?php /* Smarty version Smarty-3.1.7, created on 2013-04-10 19:17:59
         compiled from "C:\xampp\htdocs\trailblazer\application/views\preferences\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:73785152c134c9f228-83346293%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8712921747993caddacec5a6a89f061b904b1eb0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trailblazer\\application/views\\preferences\\index.tpl',
      1 => 1365614278,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '73785152c134c9f228-83346293',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5152c1354fd30',
  'variables' => 
  array (
    'response' => 0,
    'paths' => 0,
    'rowNo' => 0,
    'p' => 0,
    'nEPaths' => 0,
    'n' => 0,
    'ne' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5152c1354fd30')) {function content_5152c1354fd30($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'C:\\xampp\\htdocs\\trailblazer\\application\\libraries\\smarty\\plugins\\function.url.php';
?><!--
 * Trailblazer Digital Accounting Audit Trail Program
 * @author Kristian Jacob Abad Lora <kjalora92@yahoo.com>
 * @date-created October 31, 2012
-->
	<head>
		<title>Trailblazer - Preferences</title>
	</head>
	
	<body>
		<!-- Main -->
		<div id="main-wrapper-setup">
			<div id="form-container">
				<?php if (($_smarty_tpl->tpl_vars['response']->value!='')){?>
					<div id="response" class="alert alert-success" style="margin: 0 auto; text-align:center; width: 280px">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<i class="icon-thumbs-up"></i> <?php echo $_smarty_tpl->tpl_vars['response']->value;?>

					</div>
				<?php }?>
				<!-- Modal for Saving -->
				<div id="progressModal" class="modal hide fade" style="margin-top: -50px; margin-left: -150px; width: 30%; height: 60px; padding-top: 10px;">
					<div class="progress progress-striped active" style="height:30px; width: 90%; margin: 0 auto;">
						<div id="progressBar" class="bar" style="width:0%;"></div>
					</div>					
					<div style="text-align: center">Saving...</div>
				</div>

				<form id="pref" class="form-horizontal">
					<h4>Document Locations</h4>
					<table id="files" class="table table-hover" style="width: 100%">
						<thead>
							<th style="text-align: center">Document<span class="asterisk">*</span></th>
							<th style="text-align: center">Type<span class="asterisk">*</span></th>
							<th style="text-align: center">Path<span class="asterisk">*</span></th>
							<th style="text-align: center">File Extension<span class="asterisk">*</span></th>
							<th></th>
						</thead>
						<tbody>
							<?php if (($_smarty_tpl->tpl_vars['paths']->value)){?>
								<?php $_smarty_tpl->tpl_vars['rowNo'] = new Smarty_variable(0, null, 0);?>
								<?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['paths']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
									<tr id="row<?php echo $_smarty_tpl->tpl_vars['rowNo']->value;?>
">
										<td>
											<div class="table-column" id="group-doc<?php echo $_smarty_tpl->tpl_vars['rowNo']->value;?>
">
												<div id="control-doc<?php echo $_smarty_tpl->tpl_vars['rowNo']->value;?>
" class="control">
													<input type="text" class="doc<?php echo $_smarty_tpl->tpl_vars['rowNo']->value;?>
" id="doc<?php echo $_smarty_tpl->tpl_vars['rowNo']->value;?>
" name="doc[]" style="width: 230px; margin-left:-15px;" placeholder="e.g. Cash Receipts"  value="<?php echo $_smarty_tpl->tpl_vars['p']->value['document'];?>
"/>
												</div>
											</div>
										</td>
										<td>
											<div class="table-column" id="group-type<?php echo $_smarty_tpl->tpl_vars['rowNo']->value;?>
">
												<div class="control">
													<a class="link" data-original-title="Enter numeric value only: 1=Journals, 2=Ledgers, 3=Financial Statements, 4=Transaction Files, 5=Log Files"><input type="text" class="type<?php echo $_smarty_tpl->tpl_vars['rowNo']->value;?>
 span2" id="type<?php echo $_smarty_tpl->tpl_vars['rowNo']->value;?>
" name="type[]" style="width: 155px; float: left; text-align: right" value="<?php echo $_smarty_tpl->tpl_vars['p']->value['type'];?>
" placeholder="e.g. Journal, Ledger, etc"/></a>
												</div>
											</div>
										</td>
										<td>
											<?php if (($_smarty_tpl->tpl_vars['nEPaths']->value)){?>
												<?php $_smarty_tpl->tpl_vars['ne'] = new Smarty_variable(1, null, 0);?>
												<?php  $_smarty_tpl->tpl_vars['n'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['n']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['nEPaths']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['n']->key => $_smarty_tpl->tpl_vars['n']->value){
$_smarty_tpl->tpl_vars['n']->_loop = true;
?>
													<?php if (($_smarty_tpl->tpl_vars['n']->value==$_smarty_tpl->tpl_vars['p']->value['path'])){?>
														<?php $_smarty_tpl->tpl_vars['ne'] = new Smarty_variable($_smarty_tpl->tpl_vars['ne']->value*0, null, 0);?>
													<?php }?>
												<?php } ?>
												<?php if (($_smarty_tpl->tpl_vars['ne']->value==0)){?>
													<div class="table-column error" id="group-path<?php echo $_smarty_tpl->tpl_vars['rowNo']->value;?>
">
														<div class="control">
															<input type="text" class="span4" id="path<?php echo $_smarty_tpl->tpl_vars['rowNo']->value;?>
" name="path[]" value=
															"<?php echo $_smarty_tpl->tpl_vars['p']->value['path'];?>
" placeholder="Paste the full path of the directory here" onfocus="this.value = this.value;" >
														</div>
													</div>
												<?php }else{ ?>
													<div class="table-column" id="group-path<?php echo $_smarty_tpl->tpl_vars['rowNo']->value;?>
">
														<div class="control">
															<input type="text" class="span4" id="path<?php echo $_smarty_tpl->tpl_vars['rowNo']->value;?>
" name="path[]" value=
															"<?php echo $_smarty_tpl->tpl_vars['p']->value['path'];?>
" placeholder="Paste the full path of the directory here" onfocus="this.value = this.value;">
														</div>
													</div>
												<?php }?>
											<?php }else{ ?>
												<div class="table-column" id="group-path<?php echo $_smarty_tpl->tpl_vars['rowNo']->value;?>
">
													<div class="control">
														<input type="text" class="span4" id="path<?php echo $_smarty_tpl->tpl_vars['rowNo']->value;?>
" name="path[]" value=
														"<?php echo $_smarty_tpl->tpl_vars['p']->value['path'];?>
" placeholder="Paste the full path of the directory here" onfocus="this.value = this.value;">
													</div>
												</div>
											<?php }?>
										</div>
										</td>
											<td>
												<div class="table-column" id="group-ext<?php echo $_smarty_tpl->tpl_vars['rowNo']->value;?>
">
													<div class="control">
														<input type="text" class="span1" id="ext<?php echo $_smarty_tpl->tpl_vars['rowNo']->value;?>
" name="ext[]" value="<?php echo $_smarty_tpl->tpl_vars['p']->value['ext'];?>
" placeholder="ex: txt"/>
													</div>
												</div>
											</td>
											<td>
												<div class="table-column"></div>
											</td>
											<td>
												<div class="table-column">
													<div class="control"><a href="#" data-toggle="modal">
														<i class="icon-remove" id="remove<?php echo $_smarty_tpl->tpl_vars['rowNo']->value;?>
" style="color: red;" onClick="removeRow(this.id, <?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
)"></i></a>
													</div>
												</div>
											</td>
										</tr>
									<?php $_smarty_tpl->tpl_vars['rowNo'] = new Smarty_variable($_smarty_tpl->tpl_vars['rowNo']->value+1, null, 0);?>
								<?php } ?>
							<?php }?>
						</tbody>
					</table>
					<a href="#" onclick="addMoreDocument(); return false;">Add Document</a>
					<hr style="margin-bottom: 5px">
					<div style="font-style: italic; font-size: 8pt; color: red; margin-bottom: 20px">* - required fields</div>
					<div class="field-group" style="margin-bottom: 0px; text-align: center">
						<div class="control">
							<a id="submit" class="btn btn-primary">Save changes</a>
							<a href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
" type="button" id="back" class="btn">Back</a>
						</div>
					</div>
				</form>
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
		<link href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/stylesheets/datepicker.css" rel="stylesheet"></link>
		<link href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/stylesheets/bootstrap-combobox.css" rel="stylesheet"></link>
		<script src="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/scripts/jquery.js" type="text/javascript"></script>
		<script src="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/scripts/bootstrap.min.js" type="text/javascript"></script>
		<script src="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/scripts/bootstrap-datepicker.js" type="text/javascript"></script>
		<script src="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/scripts/bootstrap-combobox.js" type="text/javascript"></script>
		<script>
			var id = $('#id').val();
			var lname = $('#lname').val();
			var fname = $('#fname').val();
			var license_no = $('#license_no').val();
			var cname = $('#cname').val();
			var uname = $('#uname').val();
			var password = $('#password').val();
			var cpassword = $('#cpassword').val();
			var form = $('#setup');
			var rowNo = <?php echo $_smarty_tpl->tpl_vars['rowNo']->value;?>
;
			var rows = 0;
			
			
			/**function performClick(node) {
			   node.click();

			}			
			
			function onFileChange() {
				var d = document.getElementById("theFile").value;
				document.forms[0].path.value=document.getElementById("theFile").value;
			}*/
			
			$('.link').tooltip({
				animation: true,
				placement: 'right'
			});

			function addMoreDocument() {
				rowNo += 1;
				rows += 1;
				$('#files').append('<tr id="row' + rowNo + '"><td><div class="table-column" id="group-doc' + rowNo + '"><div id="control-doc' + rowNo + '" class="control"><select class="doc' + rowNo + '" id="doc' + rowNo + '" name="doc[]" onChange="docOnChange(this); return false;" placeholder="e.g. Cash Receipts"><option></option><option>Cash Receipts Journal</option><option>Cash Disbursements Journal</option><option>General Ledger</option><option>Sale Transactions</option><option>Purchase Transactions</option><option>Expense Transactions</option><option>Income Sheet</option><option>Balance Sheet</option><option>Other</option></select></div></div></td><td><div class="table-column" id="group-type"><div class="control"><select class="type' + rowNo + ' span2" id="type' + rowNo + '" name="type[]" style="width: 170px" placeholder="e.g. Journal, Ledger, etc" ><option></option><option value=1>Journals</option><option value=2>Ledgers</option><option value=3>Transaction Files</option><option value=4>Financial Statements</option><option value=5>Log Files</option></select></div></div></td><td><div class="table-column" id="group-path' + rowNo + '"><div class="control"><input type="text" class="span4" id="path' + rowNo + '" name="path[]" placeholder="Paste the full path of the directory here" onChange="pathOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column"><div class="control"><input type="text" class="span1" id="ext' + rowNo + '" name="ext[]" placeholder="ex: txt"></div></div></td><td><div class="table-column"></div></td><td><div class="table-column"><div class="control"><a href="#" data-toggle="modal"><i class="icon-remove" id="remove' + rowNo + '" style="color: red;" onClick="removeRow(this.id)"></i></a></div></div></td></tr>');
				$('#doc' + rowNo).combobox();
				$('#type' + rowNo).combobox();
				$('.add-on btn dropdown-toggle').remove();
			}
			
			 
			val = $('#path1').val();
			if (val != null) {
				$('#submit').removeAttr("disabled");
				$('#submit').addClass("btn-primary");
				var js = "submitIt(); return false;";
				var open = "(function(){";
				var close = "});";
				var newclick = eval( open + js + close );
				$("#submit").get(0).onclick = newclick;
			} else {
				$('#submit').attr("disabled", "disabled");
				$('#submit').removeClass("btn-primary");
				$("#submit").get(0).onclick = null;
			}

			function docOnChange(obj) {
				id = obj.id;
				//tb=document.createElement('INPUT');
				//tb.type='text';
				docVal=obj.options[obj.selectedIndex].text;
				//tb.value=obj.options[obj.selectedIndex].text;
				//parent = obj.parentNode;
				//obj.parentNode.insertBefore(tb,obj);
				//obj = obj.parentNode.removeChild(obj);
				
				//console.log(parent);
				console.log(docVal);
				if (docVal == "Other") {
					$('#control-' + id).remove();
					$('#group-' + id).append('<div id="control-' + id + '" class="control"> <input type="text" class="doc' + rowNo + '" id="doc' + rowNo + '" name="doc[]" style="width: 230px; margin-left:-15px;" placeholder="e.g. Cash Receipts"/></div>');
				}
			}
			
			
			function typeOnChange(id) {
				val = $('#'+id).val();
				console.log(id);
				if (val != '') {
					$('#submit').removeAttr("disabled");
					var js = "submitIt(); return false;";
					var open = "(function(){";
					var close = "});";
					var newclick = eval( open + js + close );
					$("#submit").get(0).onclick = newclick;
				} else {
					$('#submit').attr("disabled", "disabled");
					$("#submit").get(0).onclick = null;
				}
			}
			
			function pathOnChange(id) {
				val = $('#'+id).val();
				console.log(id);
				if (val != '') {
					$('#submit').removeAttr("disabled");
					$('#submit').addClass("btn-primary");
					$('#' + id).addClass("error");
					var js = "submitIt(); return false;";
					var open = "(function(){";
					var close = "});";
					var newclick = eval( open + js + close );
					$("#submit").get(0).onclick = newclick;
				} else {
					$('#submit').attr("disabled", "disabled");
					$('#submit').removeClass("btn-primary");
					$("#submit").get(0).onclick = null;
				}
				
				$.ajax({
					type: "POST",
					url: 'preferences/index/doesPathExist?path=' + val,
					dataType: 'text',
					success: function(data){
						console.log(data);
						if (data == "true") {
							$('#group-' + id).removeClass("error");
							$('#notify-' + id).remove();
						} else {
							$('#notify-' + id).remove();
							$('#group-' + id).addClass("error");
							$('#' + id).addClass("error");
							$('#group-' + id).append('<div id="notify-' + id + '" style="color: red; font-size: 9pt; font-style: italic; text-align: left; margin-left:15px">Path does not exist!</div>');
						}
					}
				});
			}
			
			function extOnChange(id) {
				val = $('#'+id).val();
				console.log(id);
				if (val != '') {
					$('#submit').removeAttr("disabled");
					var js = "submitIt(); return false;";
					var open = "(function(){";
					var close = "});";
					var newclick = eval( open + js + close );
					$("#submit").get(0).onclick = newclick;
				} else {
					$('#submit').attr("disabled", "disabled");
					$("#submit").get(0).onclick = null;
				}
			}
			
			
			//<?php if (($_smarty_tpl->tpl_vars['paths']->value)){?>
			//<?php $_smarty_tpl->tpl_vars['rowNo'] = new Smarty_variable(0, null, 0);?>
			//	<?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['paths']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
					//$('#doc<?php echo $_smarty_tpl->tpl_vars['rowNo']->value;?>
').combobox();
					//$('#type<?php echo $_smarty_tpl->tpl_vars['rowNo']->value;?>
').combobox();
			//		<?php $_smarty_tpl->tpl_vars['rowNo'] = new Smarty_variable($_smarty_tpl->tpl_vars['rowNo']->value+1, null, 0);?>
				<?php } ?>
			<?php }?>
			
			function removeRow(row, id) {
				no = row.substring(6);
				console.log(no);
				$('#row' + no).remove();
				rows--;
				$.ajax({
					type: "GET",
					url: 'preferences/index/removePath?id=' + id
				});
			}
			
			function submitIt() {
				error = 0;
				doc_id = 0;
				accomp = 0;
				pathsWithErrors = new Array();
				pathsWithNoErrors = new Array();
				
				$('#progressModal').removeClass('hide');
				$('#progressModal').addClass('in');
				$('body').append("<div id='backdrop' class='modal-backdrop fade in'></div>");
				
				$('input[name="doc[]"]').each(function() {
					if ($(this).val() == '') {
						$('#notify-doc' + doc_id).remove();
						$(this).parent().parent().addClass("error");
						$(this).parent().parent().append('<div id="notify-doc' + doc_id + '" style="color: red; font-size: 9pt; font-style: italic; text-align: left; margin-left:15px">Must not be empty!</div>');
						error++;
					} else {
						$(this).parent().parent().removeClass("error");
						$('#notify-doc' + doc_id).remove();
					}
					doc_id++;
				});
				
				type_id = 0;
				$('input[name="type[]"]').each(function() {
					if ($(this).val() == '') {
						$('#notify-type' + type_id).remove();
						$(this).parent().parent().addClass("error");
						$(this).parent().parent().append('<div id="notify-type' + type_id + '" style="color: red; font-size: 9pt; font-style: italic; text-align: left; margin-left:15px">Must not be empty!</div>');
						error++;
					} else {
						$(this).parent().parent().removeClass("error");
						$('#notify-type' + type_id).remove();
					}
					type_id++;
				});
				
				$('input[name="path[]"]').each(function() {
					id = $(this).attr('id');
					if ($(this).val() == '') {
						$('#notify-' + id).remove();
						$(this).parent().parent().addClass("error");
						$(this).parent().parent().append('<div id="notify-' + id + '" style="color: red; font-size: 9pt; font-style: italic; text-align: left; margin-left:15px">Must not be empty!</div>');
						error++;
					} else {
						$.ajax({
							type: "POST",
							url: 'preferences/index/doesPathExist?path=' + $(this).val(),
							dataType: 'text',
							async: false,
							success: function(data){
								console.log(data);
								accomp++;
								percentage = (accomp/rowNo)*100;
								console.log(accomp + '/' + rowNo);
								document.getElementById('progressBar').style.width = percentage+'%';
								if (data == "true") {
									pathsWithNoErrors.push(id);
									//$(this).parent().parent().removeClass("error");
									//$('#notify-' + id).remove();
								} else {
									error++;									
									pathsWithErrors.push(id);
									//console.log(id);
									//$('#notify-' + id).remove();
									//$(this).parent().parent().addClass("error");
									//$('#' + id).addClass("error");
									//$(this).parent().parent().append('<div id="notify-' + id + '" style="color: red; font-size: 9pt; font-style: italic; text-align: left; margin-left:15px">Must not be empty!</div>');
								}
								
							}
						});						
					}					
				});
				
				var length = pathsWithErrors.length;
				for (var i = 0; i < length; i++) {
					console.log(pathsWithErrors[i]);
					$('#notify-' + pathsWithErrors[i]).remove();
					$('#group-' + pathsWithErrors[i]).addClass("error");
					$('#' + pathsWithErrors[i]).addClass("error");
					$('#group-' + pathsWithErrors[i]).append('<div id="notify-' + pathsWithErrors[i] + '" style="color: red; font-size: 9pt; font-style: italic; text-align: left; margin-left:15px">Path does not exist!</div>');
				}
				pathsWithErrors = [];
				
				var length1 = pathsWithNoErrors.length;
				for (var j = 0; j < length1; j++) {
					$('#group-' + pathsWithNoErrors[j]).removeClass("error");
					$('#notify-' + pathsWithNoErrors[j]).remove();
				}
				pathsWithNoErrors = [];
				
				$('input[name="ext[]"]').each(function() {
					id = $(this).attr('id');
					if ($(this).val() == '') {
						$('#notify-' + id).remove();
						$(this).parent().parent().addClass("error");
						$(this).parent().parent().append('<div id="notify-' + id + '" style="color: red; font-size: 9pt; font-style: italic; text-align: left; margin-left:15px">Must not be empty!</div>');
						error++;
					} else {
						$(this).parent().parent().removeClass("error");
						$('#notify-' + id).remove();
					}
				});
				
				console.log("ERRORS: " + error);
				if (error == 0) {
					$.ajax({
						type: "POST",
						url: 'preferences/index/updatePreferences',
						data: $("#pref").serialize(),
						async: false,
						success: function(data){
							$('#response-validation').remove();
							$('#pref').prepend('<div id="response" class="alert alert-success" style="margin: 0 auto; text-align:center; width: 280px"><button type="button" class="close" data-dismiss="alert">&times;</button><i class="icon-thumbs-up"></i> <?php echo $_smarty_tpl->tpl_vars['response']->value;?>
</div>');
							window.location.href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
preferences?response=Profile has been successfully saved!";
						},
						error: function(data) {
							$('#response').remove();
							$('#response-validation').remove();
							$('#pref').prepend('<div id="response" class="alert alert-error" style="margin: 0 auto; text-align:center; width: 280px"><button type="button" class="close" data-dismiss="alert">&times;</button><i class="icon-thumbs-down"></i> Saving unsuccessful! </div>')
							$("html, body").animate({ scrollTop: 0 }, "slow");
							window.history.pushState("saving unsuccessful", "Preferences", "<?php echo smarty_function_url(array(),$_smarty_tpl);?>
preferences");
						}
					});
				} else {
					$('#response').remove();
					$('#response-validation').remove();
					setTimeout(function(){
						$('#progressModal').addClass('hide');
						$('#progressModal').removeClass('in');
						$('#backdrop').remove();
						document.getElementById('progressBar').style.width = '0%';
					}, 2000);
					$('#pref').prepend('<div id="response-validation" class="alert alert-error" style="margin: 0 auto; text-align:center; width: 280px"><button type="button" class="close" data-dismiss="alert">&times;</button><i class="icon-thumbs-down"></i> Cannot save while there are errors.</div>');
					$("html, body").animate({ scrollTop: 0 }, "slow");
				}
			}
		</script><?php }} ?>
<?php /*%%SmartyHeaderCode:73785152c134c9f228-83346293%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8712921747993caddacec5a6a89f061b904b1eb0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trailblazer\\application/views\\preferences\\index.tpl',
      1 => 1364445736,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '73785152c134c9f228-83346293',
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_51551d2ee1d2a',
  'has_nocache_code' => false,
  'cache_lifetime' => 1,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51551d2ee1d2a')) {function content_51551d2ee1d2a($_smarty_tpl) {?>  <!--
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
									<div id="response" class="alert alert-success" style="margin: 0 auto; text-align:center; width: 280px">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<i class="icon-thumbs-up"></i> Profile has been successfully saved!
					</div>
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
																																<tr id="row0">
										<td>
											<div class="table-column" id="group-doc0">
												<div id="control-doc0" class="control">
													<input type="text" class="doc0" id="doc0" name="doc[]" style="width: 230px; margin-left:-15px;" placeholder="e.g. Cash Receipts"  value="Cash Receipts Journal"/>
												</div>
											</div>
										</td>
										<td>
											<div class="table-column" id="group-type0">
												<div class="control">
													<a class="link" data-original-title="Enter numeric value only: 1=Journals, 2=Ledgers, 3=Financial Statements, 4=Transaction Files, 5=Log Files"><input type="text" class="type0 span2" id="type0" name="type[]" style="width: 155px; float: left; text-align: right" value="1" placeholder="e.g. Journal, Ledger, etc"/></a>
												</div>
											</div>
										</td>
										<td>
																							<div class="table-column" id="group-path0">
													<div class="control">
														<input type="text" class="span4" id="path0" name="path[]" value=
														"D:\Kristian Lora\My Documents\Lalaine's Bookstore\journals\cash_receipts" placeholder="Paste the full path of the directory here" onfocus="this.value = this.value;">
													</div>
												</div>
																					</div>
										</td>
											<td>
												<div class="table-column" id="group-ext0">
													<div class="control">
														<input type="text" class="span1" id="ext0" name="ext[]" value="jl" placeholder="ex: txt"/>
													</div>
												</div>
											</td>
											<td>
												<div class="table-column"></div>
											</td>
											<td>
												<div class="table-column">
													<div class="control"><a href="#" data-toggle="modal">
														<i class="icon-remove" id="remove0" style="color: red;" onClick="removeRow(this.id, 1)"></i></a>
													</div>
												</div>
											</td>
										</tr>
																										<tr id="row1">
										<td>
											<div class="table-column" id="group-doc1">
												<div id="control-doc1" class="control">
													<input type="text" class="doc1" id="doc1" name="doc[]" style="width: 230px; margin-left:-15px;" placeholder="e.g. Cash Receipts"  value="Cash Disbursements Journal"/>
												</div>
											</div>
										</td>
										<td>
											<div class="table-column" id="group-type1">
												<div class="control">
													<a class="link" data-original-title="Enter numeric value only: 1=Journals, 2=Ledgers, 3=Financial Statements, 4=Transaction Files, 5=Log Files"><input type="text" class="type1 span2" id="type1" name="type[]" style="width: 155px; float: left; text-align: right" value="1" placeholder="e.g. Journal, Ledger, etc"/></a>
												</div>
											</div>
										</td>
										<td>
																							<div class="table-column" id="group-path1">
													<div class="control">
														<input type="text" class="span4" id="path1" name="path[]" value=
														"D:\Kristian Lora\My Documents\Lalaine's Bookstore\journals\cash_disbursements" placeholder="Paste the full path of the directory here" onfocus="this.value = this.value;">
													</div>
												</div>
																					</div>
										</td>
											<td>
												<div class="table-column" id="group-ext1">
													<div class="control">
														<input type="text" class="span1" id="ext1" name="ext[]" value="jl" placeholder="ex: txt"/>
													</div>
												</div>
											</td>
											<td>
												<div class="table-column"></div>
											</td>
											<td>
												<div class="table-column">
													<div class="control"><a href="#" data-toggle="modal">
														<i class="icon-remove" id="remove1" style="color: red;" onClick="removeRow(this.id, 2)"></i></a>
													</div>
												</div>
											</td>
										</tr>
																										<tr id="row2">
										<td>
											<div class="table-column" id="group-doc2">
												<div id="control-doc2" class="control">
													<input type="text" class="doc2" id="doc2" name="doc[]" style="width: 230px; margin-left:-15px;" placeholder="e.g. Cash Receipts"  value="General Ledger"/>
												</div>
											</div>
										</td>
										<td>
											<div class="table-column" id="group-type2">
												<div class="control">
													<a class="link" data-original-title="Enter numeric value only: 1=Journals, 2=Ledgers, 3=Financial Statements, 4=Transaction Files, 5=Log Files"><input type="text" class="type2 span2" id="type2" name="type[]" style="width: 155px; float: left; text-align: right" value="2" placeholder="e.g. Journal, Ledger, etc"/></a>
												</div>
											</div>
										</td>
										<td>
																							<div class="table-column" id="group-path2">
													<div class="control">
														<input type="text" class="span4" id="path2" name="path[]" value=
														"D:\Kristian Lora\My Documents\Lalaine's Bookstore\ledgers\general_ledgers" placeholder="Paste the full path of the directory here" onfocus="this.value = this.value;">
													</div>
												</div>
																					</div>
										</td>
											<td>
												<div class="table-column" id="group-ext2">
													<div class="control">
														<input type="text" class="span1" id="ext2" name="ext[]" value="lg" placeholder="ex: txt"/>
													</div>
												</div>
											</td>
											<td>
												<div class="table-column"></div>
											</td>
											<td>
												<div class="table-column">
													<div class="control"><a href="#" data-toggle="modal">
														<i class="icon-remove" id="remove2" style="color: red;" onClick="removeRow(this.id, 3)"></i></a>
													</div>
												</div>
											</td>
										</tr>
																										<tr id="row3">
										<td>
											<div class="table-column" id="group-doc3">
												<div id="control-doc3" class="control">
													<input type="text" class="doc3" id="doc3" name="doc[]" style="width: 230px; margin-left:-15px;" placeholder="e.g. Cash Receipts"  value="Income Statement"/>
												</div>
											</div>
										</td>
										<td>
											<div class="table-column" id="group-type3">
												<div class="control">
													<a class="link" data-original-title="Enter numeric value only: 1=Journals, 2=Ledgers, 3=Financial Statements, 4=Transaction Files, 5=Log Files"><input type="text" class="type3 span2" id="type3" name="type[]" style="width: 155px; float: left; text-align: right" value="3" placeholder="e.g. Journal, Ledger, etc"/></a>
												</div>
											</div>
										</td>
										<td>
																							<div class="table-column" id="group-path3">
													<div class="control">
														<input type="text" class="span4" id="path3" name="path[]" value=
														"D:\Kristian Lora\My Documents\Lalaine's Bookstore\financial_statements\income_statements" placeholder="Paste the full path of the directory here" onfocus="this.value = this.value;">
													</div>
												</div>
																					</div>
										</td>
											<td>
												<div class="table-column" id="group-ext3">
													<div class="control">
														<input type="text" class="span1" id="ext3" name="ext[]" value="is" placeholder="ex: txt"/>
													</div>
												</div>
											</td>
											<td>
												<div class="table-column"></div>
											</td>
											<td>
												<div class="table-column">
													<div class="control"><a href="#" data-toggle="modal">
														<i class="icon-remove" id="remove3" style="color: red;" onClick="removeRow(this.id, 4)"></i></a>
													</div>
												</div>
											</td>
										</tr>
																										<tr id="row4">
										<td>
											<div class="table-column" id="group-doc4">
												<div id="control-doc4" class="control">
													<input type="text" class="doc4" id="doc4" name="doc[]" style="width: 230px; margin-left:-15px;" placeholder="e.g. Cash Receipts"  value="Sale Transactions"/>
												</div>
											</div>
										</td>
										<td>
											<div class="table-column" id="group-type4">
												<div class="control">
													<a class="link" data-original-title="Enter numeric value only: 1=Journals, 2=Ledgers, 3=Financial Statements, 4=Transaction Files, 5=Log Files"><input type="text" class="type4 span2" id="type4" name="type[]" style="width: 155px; float: left; text-align: right" value="4" placeholder="e.g. Journal, Ledger, etc"/></a>
												</div>
											</div>
										</td>
										<td>
																							<div class="table-column" id="group-path4">
													<div class="control">
														<input type="text" class="span4" id="path4" name="path[]" value=
														"D:\Kristian Lora\My Documents\Lalaine's Bookstore\transaction_files\sale_transactions" placeholder="Paste the full path of the directory here" onfocus="this.value = this.value;">
													</div>
												</div>
																					</div>
										</td>
											<td>
												<div class="table-column" id="group-ext4">
													<div class="control">
														<input type="text" class="span1" id="ext4" name="ext[]" value="tf" placeholder="ex: txt"/>
													</div>
												</div>
											</td>
											<td>
												<div class="table-column"></div>
											</td>
											<td>
												<div class="table-column">
													<div class="control"><a href="#" data-toggle="modal">
														<i class="icon-remove" id="remove4" style="color: red;" onClick="removeRow(this.id, 5)"></i></a>
													</div>
												</div>
											</td>
										</tr>
																										<tr id="row5">
										<td>
											<div class="table-column" id="group-doc5">
												<div id="control-doc5" class="control">
													<input type="text" class="doc5" id="doc5" name="doc[]" style="width: 230px; margin-left:-15px;" placeholder="e.g. Cash Receipts"  value="Purchase Transactions"/>
												</div>
											</div>
										</td>
										<td>
											<div class="table-column" id="group-type5">
												<div class="control">
													<a class="link" data-original-title="Enter numeric value only: 1=Journals, 2=Ledgers, 3=Financial Statements, 4=Transaction Files, 5=Log Files"><input type="text" class="type5 span2" id="type5" name="type[]" style="width: 155px; float: left; text-align: right" value="4" placeholder="e.g. Journal, Ledger, etc"/></a>
												</div>
											</div>
										</td>
										<td>
																							<div class="table-column" id="group-path5">
													<div class="control">
														<input type="text" class="span4" id="path5" name="path[]" value=
														"D:\Kristian Lora\My Documents\Lalaine's Bookstore\transaction_files\purchase_transactions" placeholder="Paste the full path of the directory here" onfocus="this.value = this.value;">
													</div>
												</div>
																					</div>
										</td>
											<td>
												<div class="table-column" id="group-ext5">
													<div class="control">
														<input type="text" class="span1" id="ext5" name="ext[]" value="gf" placeholder="ex: txt"/>
													</div>
												</div>
											</td>
											<td>
												<div class="table-column"></div>
											</td>
											<td>
												<div class="table-column">
													<div class="control"><a href="#" data-toggle="modal">
														<i class="icon-remove" id="remove5" style="color: red;" onClick="removeRow(this.id, 6)"></i></a>
													</div>
												</div>
											</td>
										</tr>
																										<tr id="row6">
										<td>
											<div class="table-column" id="group-doc6">
												<div id="control-doc6" class="control">
													<input type="text" class="doc6" id="doc6" name="doc[]" style="width: 230px; margin-left:-15px;" placeholder="e.g. Cash Receipts"  value="Expense Transactions"/>
												</div>
											</div>
										</td>
										<td>
											<div class="table-column" id="group-type6">
												<div class="control">
													<a class="link" data-original-title="Enter numeric value only: 1=Journals, 2=Ledgers, 3=Financial Statements, 4=Transaction Files, 5=Log Files"><input type="text" class="type6 span2" id="type6" name="type[]" style="width: 155px; float: left; text-align: right" value="4" placeholder="e.g. Journal, Ledger, etc"/></a>
												</div>
											</div>
										</td>
										<td>
																							<div class="table-column" id="group-path6">
													<div class="control">
														<input type="text" class="span4" id="path6" name="path[]" value=
														"D:\Kristian Lora\My Documents\Lalaine's Bookstore\transaction_files\expense_transactions" placeholder="Paste the full path of the directory here" onfocus="this.value = this.value;">
													</div>
												</div>
																					</div>
										</td>
											<td>
												<div class="table-column" id="group-ext6">
													<div class="control">
														<input type="text" class="span1" id="ext6" name="ext[]" value="tf" placeholder="ex: txt"/>
													</div>
												</div>
											</td>
											<td>
												<div class="table-column"></div>
											</td>
											<td>
												<div class="table-column">
													<div class="control"><a href="#" data-toggle="modal">
														<i class="icon-remove" id="remove6" style="color: red;" onClick="removeRow(this.id, 7)"></i></a>
													</div>
												</div>
											</td>
										</tr>
																														</tbody>
					</table>
					<a href="#" onclick="addMoreDocument(); return false;">Add Document</a>
					<hr style="margin-bottom: 5px">
					<div style="font-style: italic; font-size: 8pt; color: red; margin-bottom: 20px">* - required fields</div>
					<div class="field-group" style="margin-bottom: 0px; text-align: center">
						<div class="control">
							<a id="submit" class="btn btn-primary">Save changes</a>
							<a href="http://localhost/trailblazer/" type="button" id="back" class="btn">Back</a>
						</div>
					</div>
				</form>
			</div>
		</div>
		<link href="http://localhost/trailblazer/assets/stylesheets/bootstrap.css" rel="stylesheet"></link>
		<link href="http://localhost/trailblazer/assets/stylesheets/bootstrap-responsive.css" rel="stylesheet"></link>
		<link href="http://localhost/trailblazer/assets/stylesheets/main.css" rel="stylesheet"></link>
		<link href="http://localhost/trailblazer/assets/stylesheets/forms.css" rel="stylesheet"></link>
		<link href="http://localhost/trailblazer/assets/stylesheets/datepicker.css" rel="stylesheet"></link>
		<link href="http://localhost/trailblazer/assets/stylesheets/bootstrap-combobox.css" rel="stylesheet"></link>
		<script src="http://localhost/trailblazer/assets/scripts/jquery.js" type="text/javascript"></script>
		<script src="http://localhost/trailblazer/assets/scripts/bootstrap.min.js" type="text/javascript"></script>
		<script src="http://localhost/trailblazer/assets/scripts/bootstrap-datepicker.js" type="text/javascript"></script>
		<script src="http://localhost/trailblazer/assets/scripts/bootstrap-combobox.js" type="text/javascript"></script>
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
			var rowNo = 7;
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
			
			/**function pathOnChange(id) {
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
			}*/
			
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
			
			
			//			//			//						//$('#doc0').combobox();
					//$('#type0').combobox();
			//											//$('#doc1').combobox();
					//$('#type1').combobox();
			//											//$('#doc2').combobox();
					//$('#type2').combobox();
			//											//$('#doc3').combobox();
					//$('#type3').combobox();
			//											//$('#doc4').combobox();
					//$('#type4').combobox();
			//											//$('#doc5').combobox();
					//$('#type5').combobox();
			//											//$('#doc6').combobox();
					//$('#type6').combobox();
			//												
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
							$('#pref').prepend('<div id="response" class="alert alert-success" style="margin: 0 auto; text-align:center; width: 280px"><button type="button" class="close" data-dismiss="alert">&times;</button><i class="icon-thumbs-up"></i> Profile has been successfully saved!</div>');
							window.location.href="http://localhost/trailblazer/preferences?response=Profile has been successfully saved!";
						},
						error: function(data) {
							$('#response').remove();
							$('#response-validation').remove();
							$('#pref').prepend('<div id="response" class="alert alert-error" style="margin: 0 auto; text-align:center; width: 280px"><button type="button" class="close" data-dismiss="alert">&times;</button><i class="icon-thumbs-down"></i> Saving unsuccessful! </div>')
							$("html, body").animate({ scrollTop: 0 }, "slow");
							window.history.pushState("saving unsuccessful", "Preferences", "http://localhost/trailblazer/preferences");
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
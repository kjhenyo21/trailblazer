<!--
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
				{if ($response != '')}
					<div id="response" class="alert alert-success" style="margin: 0 auto; text-align:center; width: 280px">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<i class="icon-thumbs-up"></i> {$response}
					</div>
				{/if}
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
							{if ($paths)}
								{$rowNo = 0}
								{foreach $paths as $p}
									<tr id="row{$rowNo}">
										<td>
											<div class="table-column" id="group-doc{$rowNo}">
												<div id="control-doc{$rowNo}" class="control">
													<input type="text" class="doc{$rowNo}" id="doc{$rowNo}" name="doc[]" style="width: 230px; margin-left:-15px;" placeholder="e.g. Cash Receipts"  value="{$p['document']}"/>
												</div>
											</div>
										</td>
										<td>
											<div class="table-column" id="group-type{$rowNo}">
												<div class="control">
													<a class="link" data-original-title="Enter numeric value only: 1=Journals, 2=Ledgers, 3=Financial Statements, 4=Transaction Files, 5=Log Files"><input type="text" class="type{$rowNo} span2" id="type{$rowNo}" name="type[]" style="width: 155px; float: left; text-align: right" value="{$p['type']}" placeholder="e.g. Journal, Ledger, etc"/></a>
												</div>
											</div>
										</td>
										<td>
											{if ($nEPaths)}
												{$ne = 1}
												{foreach $nEPaths as $n}
													{if ($n == $p['path'])}
														{$ne = $ne * 0}
													{/if}
												{/foreach}
												{if ($ne == 0)}
													<div class="table-column error" id="group-path{$rowNo}">
														<div class="control">
															<input type="text" class="span4" id="path{$rowNo}" name="path[]" value=
															"{$p['path']}" placeholder="Paste the full path of the directory here" onfocus="this.value = this.value;" onChange="pathOnChange(this.id); return false;">
														</div>
													</div>
												{else}
													<div class="table-column" id="group-path{$rowNo}">
														<div class="control">
															<input type="text" class="span4" id="path{$rowNo}" name="path[]" value=
															"{$p['path']}" placeholder="Paste the full path of the directory here" onfocus="this.value = this.value;" onChange="pathOnChange(this.id); return false;">
														</div>
													</div>
												{/if}
											{else}
												<div class="table-column" id="group-path{$rowNo}">
													<div class="control">
														<input type="text" class="span4" id="path{$rowNo}" name="path[]" value=
														"{$p['path']}" placeholder="Paste the full path of the directory here" onfocus="this.value = this.value;" onChange="pathOnChange(this.id); return false;">
													</div>
												</div>
											{/if}
										</div>
										</td>
											<td>
												<div class="table-column" id="group-ext{$rowNo}">
													<div class="control">
														<input type="text" class="span1" id="ext{$rowNo}" name="ext[]" value="{$p['ext']}" placeholder="ex: txt"/>
													</div>
												</div>
											</td>
											<td>
												<div class="table-column"></div>
											</td>
											<td>
												<div class="table-column">
													<div class="control"><a href="#" data-toggle="modal">
														<i class="icon-remove" id="remove{$rowNo}" style="color: red;" onClick="removeRow(this.id, {$p['id']})"></i></a>
													</div>
												</div>
											</td>
										</tr>
									{$rowNo = $rowNo + 1}
								{/foreach}
							{/if}
						</tbody>
					</table>
					<a href="#" onclick="addMoreDocument(); return false;">Add Document</a>
					<hr style="margin-bottom: 5px">
					<div style="font-style: italic; font-size: 8pt; color: red; margin-bottom: 20px">* - required fields</div>
					<div class="field-group" style="margin-bottom: 0px; text-align: center">
						<div class="control">
							<a id="submit" class="btn" disabled="disabled">Save changes</a>
							<a href="{url}" type="button" id="back" class="btn">Back</a>
						</div>
					</div>
				</form>
			</div>
		</div>
		<link href="{url}assets/stylesheets/bootstrap.css" rel="stylesheet"></link>
		<link href="{url}assets/stylesheets/bootstrap-responsive.css" rel="stylesheet"></link>
		<link href="{url}assets/stylesheets/main.css" rel="stylesheet"></link>
		<link href="{url}assets/stylesheets/forms.css" rel="stylesheet"></link>
		<link href="{url}assets/stylesheets/datepicker.css" rel="stylesheet"></link>
		<link href="{url}assets/stylesheets/bootstrap-combobox.css" rel="stylesheet"></link>
		<script src="{url}assets/scripts/jquery.js" type="text/javascript"></script>
		<script src="{url}assets/scripts/bootstrap.min.js" type="text/javascript"></script>
		<script src="{url}assets/scripts/bootstrap-datepicker.js" type="text/javascript"></script>
		<script src="{url}assets/scripts/bootstrap-combobox.js" type="text/javascript"></script>
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
			var rowNo = {$rowNo};
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
			
			{literal} 
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
			{/literal}
			
			{if ($paths)}
			{$rowNo = 0}
				{foreach $paths as $p}
					//$('#doc{$rowNo}').combobox();
					//$('#type{$rowNo}').combobox();
					{$rowNo = $rowNo + 1}
				{/foreach}
			{/if}
			
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
					if ($(this).hasClass('error'))
						error++;
					else {
						if ($(this).val() == '') {
							$('#notify-' + id).remove();
							$(this).parent().parent().addClass("error");
							$(this).parent().parent().append('<div id="notify-' + id + '" style="color: red; font-size: 9pt; font-style: italic; text-align: left; margin-left:15px">Must not be empty!</div>');
							error++;
						} else {
							$(this).parent().parent().removeClass("error");
							$('#notify-' + id).remove();
						}
					}
					
				});
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
						success: function(data){
							$('#response-validation').remove();
							$('#pref').prepend('<div id="response" class="alert alert-success" style="margin: 0 auto; text-align:center; width: 280px"><button type="button" class="close" data-dismiss="alert">&times;</button><i class="icon-thumbs-up"></i> {$response}</div>');
							window.location.href="{url}preferences?response=Profile has been successfully saved!";
						},
						error: function(data) {
							$('#response').remove();
							$('#response-validation').remove();
							$('#pref').prepend('<div id="response" class="alert alert-error" style="margin: 0 auto; text-align:center; width: 280px"><button type="button" class="close" data-dismiss="alert">&times;</button><i class="icon-thumbs-down"></i> Saving unsuccessful! </div>')
							$("html, body").animate({ scrollTop: 0 }, "slow");
							window.history.pushState("saving unsuccessful", "Preferences", "{url}preferences");
						}
					});
				} else {
					$('#response').remove();
					$('#response-validation').remove();
					$('#pref').prepend('<div id="response-validation" class="alert alert-error" style="margin: 0 auto; text-align:center; width: 280px"><button type="button" class="close" data-dismiss="alert">&times;</button><i class="icon-thumbs-down"></i> Cannot save while there are errors.</div>');
					$("html, body").animate({ scrollTop: 0 }, "slow");
				}
			}
		</script>
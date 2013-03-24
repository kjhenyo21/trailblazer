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
				<form id="setup-pref" class="form-horizontal">
					<h4>Document Locations</h4>
					<table id="files" class="table table-hover" style="width: 100%">
						<thead>
							<th style="text-align: center">Document</th>
							<th style="text-align: center">Type</th>
							<th style="text-align: center">Path</th>
							<th style="text-align: center">File Extension</th>
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
													<select class="doc{$rowNo}" id="doc{$rowNo}" name="doc[]" placeholder="e.g. Cash Receipts" onChange="pathOnChange(this.id); docOnChange(this); return false;">
														<option></option>
														<option>Cash Receipts Journal</option>
														<option>Cash Disbursements Journal</option>
														<option>General Ledger</option>
														<option>Sale Transactions</option>
														<option>Purchase Transactions</option>
														<option>Expense Transactions</option>
														<option>Income Sheet</option>
														<option>Balance Sheet</option>
														<option>Other</option>
													</select>
												</div>
											</div>
										</td>
										<td>
											<div class="table-column" id="group-type">
												<div class="control">
													<select class="type{$rowNo} span2" id="type{$rowNo}" name="type[]" style="width: 170px" placeholder="e.g. Journal, Ledger, etc" onChange="pathOnChange(this.id); return false;">
														<option></option>
														<option value=1>Journals</option>
														<option value=2>Ledgers</option>
														<option value=3>Transaction Files</option>
														<option value=4>Financial Statements</option>
														<option value=5>Log Files</option>
													</select>
												</div>
											</div>
										</td>
										<td>
											<div class="table-column" id="group-path">
												<div class="control">
													<input type="text" class="span4" id="path{$rowNo}" name="path[]" value=
													"{$p['path']}" placeholder="Paste the full path of the directory here" onChange="pathOnChange(this.id); return false;">
												</div>
											</div>
										</div>
										</td>
											<td>
												<div class="table-column">
													<div class="control">
														<input type="text" class="span1" id="ext{$rowNo}" name="ext[]" value="{$p['ext']}" placeholder="ex: txt" onChange="pathOnChange(this.id); return false;">
													</div>
												</div>
											</td>
											<td>
												<div class="table-column"></div>
											</td>
											<td>
												<div class="table-column">
													<div class="control"><a href="#" data-toggle="modal">
														<i class="icon-remove" id="remove{$rowNo}" style="color: red;" onClick="removeRow(this.id)"></i></a>
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
					<hr>
					<div class="field-group" style="margin-bottom: 0px; text-align: center">
						<div class="control">
							<a id="submit" class="btn btn-primary" disabled="disabled">Save</a>
							<button type="reset" id="reset" class="btn">Reset</button>
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
			var rowNo = 0;
			var rows = 0;
			
			/**function performClick(node) {
			   node.click();

			}			
			
			function onFileChange() {
				var d = document.getElementById("theFile").value;
				document.forms[0].path.value=document.getElementById("theFile").value;
			}*/

			function addMoreDocument() {
				rowNo += 1;
				rows += 1;
				$('#files').append('<tr id="row' + rowNo + '"><td><div class="table-column" id="group-doc' + rowNo + '"><div id="control-doc' + rowNo + '" class="control"><select class="doc' + rowNo + '" id="doc' + rowNo + '" name="doc[]" placeholder="e.g. Cash Receipts" onChange="pathOnChange(this.id); docOnChange(this); return false;"><option></option><option>Cash Receipts Journal</option><option>Cash Disbursements Journal</option><option>General Ledger</option><option>Sale Transactions</option><option>Purchase Transactions</option><option>Expense Transactions</option><option>Income Sheet</option><option>Balance Sheet</option><option>Other</option></select></div></div></td><td><div class="table-column" id="group-type"><div class="control"><select class="type' + rowNo + ' span2" id="type' + rowNo + '" name="type[]" style="width: 170px" placeholder="e.g. Journal, Ledger, etc" onChange="pathOnChange(this.id); return false;"><option></option><option value=1>Journals</option><option value=2>Ledgers</option><option value=3>Transaction Files</option><option value=4>Financial Statements</option><option value=5>Log Files</option></select></div></div></td><td><div class="table-column" id="group-path"><div class="control"><input type="text" class="span4" id="path' + rowNo + '" name="path[]" placeholder="Paste the full path of the directory here" onChange="pathOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column"><div class="control"><input type="text" class="span1" id="ext' + rowNo + '" name="ext[]" placeholder="ex: txt" onChange="pathOnChange(this.id); return false;"></div></div></td><td><div class="table-column"></div></td><td><div class="table-column"><div class="control"><a href="#" data-toggle="modal"><i class="icon-remove" id="remove' + rowNo + '" style="color: red;" onClick="removeRow(this.id)"></i></a></div></div></td></tr>');
				$('#doc' + rowNo).combobox();
				$('#type' + rowNo).combobox();
				$('.add-on btn dropdown-toggle').remove();
			}
			
			{literal} 
			val = $('#path1').val();
			if (val != null) {
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
			
			function pathOnChange(id) {
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
					
					$('#doc{$rowNo}').combobox();
					$('#type{$rowNo}').combobox();
					{$rowNo = $rowNo + 1}
				{/foreach}
			{/if}
			
			function removeRow(row) {
				no = row.substring(6);
				console.log(no);
				$('#row' + no).remove();
				rows--;
			}
			
			function submitIt() {
				$.ajax({
					type: "POST",
					url: 'setup_preferences/savePreferences',
					data: $("#setup-pref").serialize(),				
					success: function(data){
						location.replace("{url}");
					}
				});
			}
		</script>
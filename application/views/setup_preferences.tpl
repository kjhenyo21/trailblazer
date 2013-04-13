<!--
 * Trailblazer Digital Accounting Audit Trail Program
 * @author Kristian Jacob Abad Lora <kjalora92@yahoo.com>
 * @date-created October 31, 2012
-->
	<head>
		<title>Setup Page - Preferences</title>
	</head>
	
	<body>
		<!-- Main -->
		<div id="main-wrapper-setup">
			<div id="form-container">
				<form id="setup-pref" class="form-horizontal">
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
						</tbody>
					</table>
					<a href="#" onclick="addMoreDocument(); return false;">Add Document</a>
					<hr style="margin-bottom: 5px">
					<div style="font-style: italic; font-size: 8pt; color: red; margin-bottom: 20px">* - required fields</div>
					<div class="field-group" style="margin-bottom: 0px; text-align: center">
						<div class="control">
							<a id="submit" class="btn" disabled="disabled">Save</a>
							<button type="reset" id="reset" class="btn" onClick="resetIt();">Reset</button>
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
		<script src="{url}assets/scripts/jquery.validate.min.js" type="text/javascript"></script>
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
			var errors = 0;

			function addMoreDocument() {
				rowNo += 1;
				rows += 1;
				$('#files').append('<tr id="row' + rowNo + '"><td><div class="table-column" id="group-doc' + rowNo + '"><div id="control-doc' + rowNo + '" class="control"><select class="doc' + rowNo + '" id="doc' + rowNo + '" name="doc[]" placeholder="e.g. Cash Receipts" onChange="docOnChange(this); return false;"><option></option><option>Cash Receipts Journal</option><option>Cash Disbursements Journal</option><option>General Ledger</option><option>Sale Transactions</option><option>Purchase Transactions</option><option>Expense Transactions</option><option>Income Sheet</option><option>Balance Sheet</option><option>Other</option></select></div></div></td><td><div class="table-column" id="group-type"><div class="control"><select class="type' + rowNo + ' span2" id="type' + rowNo + '" name="type[]" style="width: 170px" placeholder="e.g. Journal, Ledger, etc" ><option></option><option value=1>Journals</option><option value=2>Ledgers</option><option value=3>Transaction Files</option><option value=4>Financial Statements</option><option value=5>Log Files</option></select></div></div></td><td><div class="table-column" id="group-path' + rowNo + '"><div class="control"><input type="text" class="span4" id="path' + rowNo + '" name="path[]" placeholder="Paste the full path of the directory here" onChange="pathOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column"><div class="control"><input type="text" class="span1" id="ext' + rowNo + '" name="ext[]" placeholder="ex: txt" ></div></div></td><td><div class="table-column"></div></td><td><div class="table-column"><div class="control"><a href="#" data-toggle="modal"><i class="icon-remove" id="remove' + rowNo + '" style="color: red;" onClick="removeRow(this.id)"></i></a></div></div></td></tr>');
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
					url: 'setup_preferences/doesPathExist?path=' + val,
					dataType: 'text',
					success: function(data){
						console.log(data);
						if (data == "true") {
							$('#group-' + id).removeClass("error");
							$('#' + id).removeClass("error");
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
			{/literal}
			
			$('.doc').combobox();
			$('.type').combobox();
			
			function removeRow(row) {
				no = row.substring(6);
				console.log(no);
				$('#row' + no).remove();
				rows--;
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
						url: 'setup_preferences/savePreferences',
						data: $("#setup-pref").serialize(),				
						success: function(data){
							alert('Setup successful! You will now be directed to the Login Page.');
							location.replace("{url}");
						}
					});
				} else {
					$('#response').remove();
					$('#setup-pref').prepend('<div id="response" class="alert alert-error" style="margin: 0 auto; text-align:center; width: 280px"><button type="button" class="close" data-dismiss="alert">&times;</button><i class="icon-thumbs-down"></i> Cannot process while there are errors.</div>');
					$("html, body").animate({ scrollTop: 0 }, "slow");
				}
			}
			
			function resetIt() {
				$('#submit').attr("disabled", "disabled");
				$('#submit').removeClass("btn-primary");
				$("#submit").get(0).onclick = null;
			}
		</script>
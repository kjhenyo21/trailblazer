<?php /*%%SmartyHeaderCode:32387514e953def5aa4-24846542%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8712921747993caddacec5a6a89f061b904b1eb0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trailblazer\\application/views\\preferences\\index.tpl',
      1 => 1364108608,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32387514e953def5aa4-24846542',
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_514ea543763b2',
  'variables' => 
  array (
    'paths' => 0,
    'rowNo' => 0,
    'p' => 0,
  ),
  'has_nocache_code' => false,
  'cache_lifetime' => 1,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_514ea543763b2')) {function content_514ea543763b2($_smarty_tpl) {?><!--
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
																																<tr id="row0">
										<td>
											<div class="table-column" id="group-doc0">
												<div id="control-doc0" class="control">
													<select class="doc0" id="doc0" name="doc[]" placeholder="e.g. Cash Receipts" onChange="pathOnChange(this.id); docOnChange(this); return false;">
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
													<select class="type0 span2" id="type0" name="type[]" style="width: 170px" placeholder="e.g. Journal, Ledger, etc" onChange="pathOnChange(this.id); return false;">
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
													<input type="text" class="span4" id="path0" name="path[]" value=
													"D:\Kristian Lora\My Documents\Lalaine's Bookstore\journals\cash_receipts" placeholder="Paste the full path of the directory here" onChange="pathOnChange(this.id); return false;">
												</div>
											</div>
										</div>
										</td>
											<td>
												<div class="table-column">
													<div class="control">
														<input type="text" class="span1" id="ext0" name="ext[]" value="jl" placeholder="ex: txt" onChange="pathOnChange(this.id); return false;">
													</div>
												</div>
											</td>
											<td>
												<div class="table-column"></div>
											</td>
											<td>
												<div class="table-column">
													<div class="control"><a href="#" data-toggle="modal">
														<i class="icon-remove" id="remove0" style="color: red;" onClick="removeRow(this.id)"></i></a>
													</div>
												</div>
											</td>
										</tr>
																										<tr id="row1">
										<td>
											<div class="table-column" id="group-doc1">
												<div id="control-doc1" class="control">
													<select class="doc1" id="doc1" name="doc[]" placeholder="e.g. Cash Receipts" onChange="pathOnChange(this.id); docOnChange(this); return false;">
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
													<select class="type1 span2" id="type1" name="type[]" style="width: 170px" placeholder="e.g. Journal, Ledger, etc" onChange="pathOnChange(this.id); return false;">
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
													<input type="text" class="span4" id="path1" name="path[]" value=
													"D:\Kristian Lora\My Documents\Lalaine's Bookstore\journals\cash_reimbursements" placeholder="Paste the full path of the directory here" onChange="pathOnChange(this.id); return false;">
												</div>
											</div>
										</div>
										</td>
											<td>
												<div class="table-column">
													<div class="control">
														<input type="text" class="span1" id="ext1" name="ext[]" value="jl" placeholder="ex: txt" onChange="pathOnChange(this.id); return false;">
													</div>
												</div>
											</td>
											<td>
												<div class="table-column"></div>
											</td>
											<td>
												<div class="table-column">
													<div class="control"><a href="#" data-toggle="modal">
														<i class="icon-remove" id="remove1" style="color: red;" onClick="removeRow(this.id)"></i></a>
													</div>
												</div>
											</td>
										</tr>
																										<tr id="row2">
										<td>
											<div class="table-column" id="group-doc2">
												<div id="control-doc2" class="control">
													<select class="doc2" id="doc2" name="doc[]" placeholder="e.g. Cash Receipts" onChange="pathOnChange(this.id); docOnChange(this); return false;">
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
													<select class="type2 span2" id="type2" name="type[]" style="width: 170px" placeholder="e.g. Journal, Ledger, etc" onChange="pathOnChange(this.id); return false;">
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
													<input type="text" class="span4" id="path2" name="path[]" value=
													"D:\Kristian Lora\My Documents\Lalaine's Bookstore\ledgers\general_ledgers" placeholder="Paste the full path of the directory here" onChange="pathOnChange(this.id); return false;">
												</div>
											</div>
										</div>
										</td>
											<td>
												<div class="table-column">
													<div class="control">
														<input type="text" class="span1" id="ext2" name="ext[]" value="lg" placeholder="ex: txt" onChange="pathOnChange(this.id); return false;">
													</div>
												</div>
											</td>
											<td>
												<div class="table-column"></div>
											</td>
											<td>
												<div class="table-column">
													<div class="control"><a href="#" data-toggle="modal">
														<i class="icon-remove" id="remove2" style="color: red;" onClick="removeRow(this.id)"></i></a>
													</div>
												</div>
											</td>
										</tr>
																										<tr id="row3">
										<td>
											<div class="table-column" id="group-doc3">
												<div id="control-doc3" class="control">
													<select class="doc3" id="doc3" name="doc[]" placeholder="e.g. Cash Receipts" onChange="pathOnChange(this.id); docOnChange(this); return false;">
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
													<select class="type3 span2" id="type3" name="type[]" style="width: 170px" placeholder="e.g. Journal, Ledger, etc" onChange="pathOnChange(this.id); return false;">
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
													<input type="text" class="span4" id="path3" name="path[]" value=
													"D:\Kristian Lora\My Documents\Lalaine's Bookstore\financial_statements\income_statements" placeholder="Paste the full path of the directory here" onChange="pathOnChange(this.id); return false;">
												</div>
											</div>
										</div>
										</td>
											<td>
												<div class="table-column">
													<div class="control">
														<input type="text" class="span1" id="ext3" name="ext[]" value="is" placeholder="ex: txt" onChange="pathOnChange(this.id); return false;">
													</div>
												</div>
											</td>
											<td>
												<div class="table-column"></div>
											</td>
											<td>
												<div class="table-column">
													<div class="control"><a href="#" data-toggle="modal">
														<i class="icon-remove" id="remove3" style="color: red;" onClick="removeRow(this.id)"></i></a>
													</div>
												</div>
											</td>
										</tr>
																										<tr id="row4">
										<td>
											<div class="table-column" id="group-doc4">
												<div id="control-doc4" class="control">
													<select class="doc4" id="doc4" name="doc[]" placeholder="e.g. Cash Receipts" onChange="pathOnChange(this.id); docOnChange(this); return false;">
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
													<select class="type4 span2" id="type4" name="type[]" style="width: 170px" placeholder="e.g. Journal, Ledger, etc" onChange="pathOnChange(this.id); return false;">
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
													<input type="text" class="span4" id="path4" name="path[]" value=
													"D:\Kristian Lora\My Documents\Lalaine's Bookstore\financial_statements\balance_sheets" placeholder="Paste the full path of the directory here" onChange="pathOnChange(this.id); return false;">
												</div>
											</div>
										</div>
										</td>
											<td>
												<div class="table-column">
													<div class="control">
														<input type="text" class="span1" id="ext4" name="ext[]" value="bs" placeholder="ex: txt" onChange="pathOnChange(this.id); return false;">
													</div>
												</div>
											</td>
											<td>
												<div class="table-column"></div>
											</td>
											<td>
												<div class="table-column">
													<div class="control"><a href="#" data-toggle="modal">
														<i class="icon-remove" id="remove4" style="color: red;" onClick="removeRow(this.id)"></i></a>
													</div>
												</div>
											</td>
										</tr>
																										<tr id="row5">
										<td>
											<div class="table-column" id="group-doc5">
												<div id="control-doc5" class="control">
													<select class="doc5" id="doc5" name="doc[]" placeholder="e.g. Cash Receipts" onChange="pathOnChange(this.id); docOnChange(this); return false;">
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
													<select class="type5 span2" id="type5" name="type[]" style="width: 170px" placeholder="e.g. Journal, Ledger, etc" onChange="pathOnChange(this.id); return false;">
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
													<input type="text" class="span4" id="path5" name="path[]" value=
													"D:\Kristian Lora\My Documents\Lalaine's Bookstore\transaction_files\sale_transactions" placeholder="Paste the full path of the directory here" onChange="pathOnChange(this.id); return false;">
												</div>
											</div>
										</div>
										</td>
											<td>
												<div class="table-column">
													<div class="control">
														<input type="text" class="span1" id="ext5" name="ext[]" value="tf" placeholder="ex: txt" onChange="pathOnChange(this.id); return false;">
													</div>
												</div>
											</td>
											<td>
												<div class="table-column"></div>
											</td>
											<td>
												<div class="table-column">
													<div class="control"><a href="#" data-toggle="modal">
														<i class="icon-remove" id="remove5" style="color: red;" onClick="removeRow(this.id)"></i></a>
													</div>
												</div>
											</td>
										</tr>
																										<tr id="row6">
										<td>
											<div class="table-column" id="group-doc6">
												<div id="control-doc6" class="control">
													<select class="doc6" id="doc6" name="doc[]" placeholder="e.g. Cash Receipts" onChange="pathOnChange(this.id); docOnChange(this); return false;">
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
													<select class="type6 span2" id="type6" name="type[]" style="width: 170px" placeholder="e.g. Journal, Ledger, etc" onChange="pathOnChange(this.id); return false;">
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
													<input type="text" class="span4" id="path6" name="path[]" value=
													"D:\Kristian Lora\My Documents\Lalaine's Bookstore\transaction_files\purchase_transactions" placeholder="Paste the full path of the directory here" onChange="pathOnChange(this.id); return false;">
												</div>
											</div>
										</div>
										</td>
											<td>
												<div class="table-column">
													<div class="control">
														<input type="text" class="span1" id="ext6" name="ext[]" value="tf" placeholder="ex: txt" onChange="pathOnChange(this.id); return false;">
													</div>
												</div>
											</td>
											<td>
												<div class="table-column"></div>
											</td>
											<td>
												<div class="table-column">
													<div class="control"><a href="#" data-toggle="modal">
														<i class="icon-remove" id="remove6" style="color: red;" onClick="removeRow(this.id)"></i></a>
													</div>
												</div>
											</td>
										</tr>
																										<tr id="row7">
										<td>
											<div class="table-column" id="group-doc7">
												<div id="control-doc7" class="control">
													<select class="doc7" id="doc7" name="doc[]" placeholder="e.g. Cash Receipts" onChange="pathOnChange(this.id); docOnChange(this); return false;">
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
													<select class="type7 span2" id="type7" name="type[]" style="width: 170px" placeholder="e.g. Journal, Ledger, etc" onChange="pathOnChange(this.id); return false;">
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
													<input type="text" class="span4" id="path7" name="path[]" value=
													"D:\Kristian Lora\My Documents\Lalaine's Bookstore\transaction_files\expenses_transactions" placeholder="Paste the full path of the directory here" onChange="pathOnChange(this.id); return false;">
												</div>
											</div>
										</div>
										</td>
											<td>
												<div class="table-column">
													<div class="control">
														<input type="text" class="span1" id="ext7" name="ext[]" value="tf" placeholder="ex: txt" onChange="pathOnChange(this.id); return false;">
													</div>
												</div>
											</td>
											<td>
												<div class="table-column"></div>
											</td>
											<td>
												<div class="table-column">
													<div class="control"><a href="#" data-toggle="modal">
														<i class="icon-remove" id="remove7" style="color: red;" onClick="removeRow(this.id)"></i></a>
													</div>
												</div>
											</td>
										</tr>
																										<tr id="row8">
										<td>
											<div class="table-column" id="group-doc8">
												<div id="control-doc8" class="control">
													<select class="doc8" id="doc8" name="doc[]" placeholder="e.g. Cash Receipts" onChange="pathOnChange(this.id); docOnChange(this); return false;">
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
													<select class="type8 span2" id="type8" name="type[]" style="width: 170px" placeholder="e.g. Journal, Ledger, etc" onChange="pathOnChange(this.id); return false;">
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
													<input type="text" class="span4" id="path8" name="path[]" value=
													"fhsdhsdh" placeholder="Paste the full path of the directory here" onChange="pathOnChange(this.id); return false;">
												</div>
											</div>
										</div>
										</td>
											<td>
												<div class="table-column">
													<div class="control">
														<input type="text" class="span1" id="ext8" name="ext[]" value="sd" placeholder="ex: txt" onChange="pathOnChange(this.id); return false;">
													</div>
												</div>
											</td>
											<td>
												<div class="table-column"></div>
											</td>
											<td>
												<div class="table-column">
													<div class="control"><a href="#" data-toggle="modal">
														<i class="icon-remove" id="remove8" style="color: red;" onClick="removeRow(this.id)"></i></a>
													</div>
												</div>
											</td>
										</tr>
																										<tr id="row9">
										<td>
											<div class="table-column" id="group-doc9">
												<div id="control-doc9" class="control">
													<select class="doc9" id="doc9" name="doc[]" placeholder="e.g. Cash Receipts" onChange="pathOnChange(this.id); docOnChange(this); return false;">
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
													<select class="type9 span2" id="type9" name="type[]" style="width: 170px" placeholder="e.g. Journal, Ledger, etc" onChange="pathOnChange(this.id); return false;">
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
													<input type="text" class="span4" id="path9" name="path[]" value=
													"shssh" placeholder="Paste the full path of the directory here" onChange="pathOnChange(this.id); return false;">
												</div>
											</div>
										</div>
										</td>
											<td>
												<div class="table-column">
													<div class="control">
														<input type="text" class="span1" id="ext9" name="ext[]" value="dsg" placeholder="ex: txt" onChange="pathOnChange(this.id); return false;">
													</div>
												</div>
											</td>
											<td>
												<div class="table-column"></div>
											</td>
											<td>
												<div class="table-column">
													<div class="control"><a href="#" data-toggle="modal">
														<i class="icon-remove" id="remove9" style="color: red;" onClick="removeRow(this.id)"></i></a>
													</div>
												</div>
											</td>
										</tr>
																										<tr id="row10">
										<td>
											<div class="table-column" id="group-doc10">
												<div id="control-doc10" class="control">
													<select class="doc10" id="doc10" name="doc[]" placeholder="e.g. Cash Receipts" onChange="pathOnChange(this.id); docOnChange(this); return false;">
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
													<select class="type10 span2" id="type10" name="type[]" style="width: 170px" placeholder="e.g. Journal, Ledger, etc" onChange="pathOnChange(this.id); return false;">
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
													<input type="text" class="span4" id="path10" name="path[]" value=
													"shshs" placeholder="Paste the full path of the directory here" onChange="pathOnChange(this.id); return false;">
												</div>
											</div>
										</div>
										</td>
											<td>
												<div class="table-column">
													<div class="control">
														<input type="text" class="span1" id="ext10" name="ext[]" value="sg" placeholder="ex: txt" onChange="pathOnChange(this.id); return false;">
													</div>
												</div>
											</td>
											<td>
												<div class="table-column"></div>
											</td>
											<td>
												<div class="table-column">
													<div class="control"><a href="#" data-toggle="modal">
														<i class="icon-remove" id="remove10" style="color: red;" onClick="removeRow(this.id)"></i></a>
													</div>
												</div>
											</td>
										</tr>
																										<tr id="row11">
										<td>
											<div class="table-column" id="group-doc11">
												<div id="control-doc11" class="control">
													<select class="doc11" id="doc11" name="doc[]" placeholder="e.g. Cash Receipts" onChange="pathOnChange(this.id); docOnChange(this); return false;">
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
													<select class="type11 span2" id="type11" name="type[]" style="width: 170px" placeholder="e.g. Journal, Ledger, etc" onChange="pathOnChange(this.id); return false;">
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
													<input type="text" class="span4" id="path11" name="path[]" value=
													"shdsjh" placeholder="Paste the full path of the directory here" onChange="pathOnChange(this.id); return false;">
												</div>
											</div>
										</div>
										</td>
											<td>
												<div class="table-column">
													<div class="control">
														<input type="text" class="span1" id="ext11" name="ext[]" value="fg" placeholder="ex: txt" onChange="pathOnChange(this.id); return false;">
													</div>
												</div>
											</td>
											<td>
												<div class="table-column"></div>
											</td>
											<td>
												<div class="table-column">
													<div class="control"><a href="#" data-toggle="modal">
														<i class="icon-remove" id="remove11" style="color: red;" onClick="removeRow(this.id)"></i></a>
													</div>
												</div>
											</td>
										</tr>
																										<tr id="row12">
										<td>
											<div class="table-column" id="group-doc12">
												<div id="control-doc12" class="control">
													<select class="doc12" id="doc12" name="doc[]" placeholder="e.g. Cash Receipts" onChange="pathOnChange(this.id); docOnChange(this); return false;">
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
													<select class="type12 span2" id="type12" name="type[]" style="width: 170px" placeholder="e.g. Journal, Ledger, etc" onChange="pathOnChange(this.id); return false;">
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
													<input type="text" class="span4" id="path12" name="path[]" value=
													"shjehu" placeholder="Paste the full path of the directory here" onChange="pathOnChange(this.id); return false;">
												</div>
											</div>
										</div>
										</td>
											<td>
												<div class="table-column">
													<div class="control">
														<input type="text" class="span1" id="ext12" name="ext[]" value="rt" placeholder="ex: txt" onChange="pathOnChange(this.id); return false;">
													</div>
												</div>
											</td>
											<td>
												<div class="table-column"></div>
											</td>
											<td>
												<div class="table-column">
													<div class="control"><a href="#" data-toggle="modal">
														<i class="icon-remove" id="remove12" style="color: red;" onClick="removeRow(this.id)"></i></a>
													</div>
												</div>
											</td>
										</tr>
																										<tr id="row13">
										<td>
											<div class="table-column" id="group-doc13">
												<div id="control-doc13" class="control">
													<select class="doc13" id="doc13" name="doc[]" placeholder="e.g. Cash Receipts" onChange="pathOnChange(this.id); docOnChange(this); return false;">
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
													<select class="type13 span2" id="type13" name="type[]" style="width: 170px" placeholder="e.g. Journal, Ledger, etc" onChange="pathOnChange(this.id); return false;">
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
													<input type="text" class="span4" id="path13" name="path[]" value=
													"rsyhhe" placeholder="Paste the full path of the directory here" onChange="pathOnChange(this.id); return false;">
												</div>
											</div>
										</div>
										</td>
											<td>
												<div class="table-column">
													<div class="control">
														<input type="text" class="span1" id="ext13" name="ext[]" value="rt" placeholder="ex: txt" onChange="pathOnChange(this.id); return false;">
													</div>
												</div>
											</td>
											<td>
												<div class="table-column"></div>
											</td>
											<td>
												<div class="table-column">
													<div class="control"><a href="#" data-toggle="modal">
														<i class="icon-remove" id="remove13" style="color: red;" onClick="removeRow(this.id)"></i></a>
													</div>
												</div>
											</td>
										</tr>
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
			
			
															
					$('#doc0').combobox();
					$('#type0').combobox();
														
					$('#doc1').combobox();
					$('#type1').combobox();
														
					$('#doc2').combobox();
					$('#type2').combobox();
														
					$('#doc3').combobox();
					$('#type3').combobox();
														
					$('#doc4').combobox();
					$('#type4').combobox();
														
					$('#doc5').combobox();
					$('#type5').combobox();
														
					$('#doc6').combobox();
					$('#type6').combobox();
														
					$('#doc7').combobox();
					$('#type7').combobox();
														
					$('#doc8').combobox();
					$('#type8').combobox();
														
					$('#doc9').combobox();
					$('#type9').combobox();
														
					$('#doc10').combobox();
					$('#type10').combobox();
														
					$('#doc11').combobox();
					$('#type11').combobox();
														
					$('#doc12').combobox();
					$('#type12').combobox();
														
					$('#doc13').combobox();
					$('#type13').combobox();
															
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
						location.replace("http://localhost/trailblazer/");
					}
				});
			}
		</script><?php }} ?>
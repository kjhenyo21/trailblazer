<?php /*%%SmartyHeaderCode:157135152956bd4f6c3-56403837%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e16a3a7a926cc16081f55eb3dbf607705da8351' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trailblazer\\application/views\\audit_trail\\trans_details.tpl',
      1 => 1364354164,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '157135152956bd4f6c3-56403837',
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_515465c6e2b1b',
  'has_nocache_code' => false,
  'cache_lifetime' => 1,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_515465c6e2b1b')) {function content_515465c6e2b1b($_smarty_tpl) {?><!--
 * Trailblazer Digital Accounting Audit Trail Program
 * @author Kristian Jacob Abad Lora <kjalora92@yahoo.com>
 * @date-created October 31, 2012
-->
<!-- Modal for Loading Transaction Details-->
	<div id="trans-details" class="modal hide fade in" style="margin-top: -180px; width: 520px; display: block;" aria-hidden="false">
		<div class="modal-header">
			<div id="close"><a href="#" class="close" onClick="closeIt(); return false;">&times;</a></div>
			<h3>Transaction Details</h3>
		</div>
		<div class="modal-body"  style="height: 200px; position: relative">
			<div class="input" style="margin: 0 10px">
				<div>Name: Cebu Educational Supply</div>
				<div>Address: D. Del Rosario Street, Cebu City, Cebu</div>
				<div>Contact: </div>
				<div>Date: 2010-01-12</div>
				<div>OR No: 25626</div>
				<br>
				<div id="table-container" style="position: relative">
																	<table id="table" style="text-align: center; color: black">
							<thead>
								<th style="padding: 0 10px;">Item</th>
								<th>Quantity</th>
								<th>Unit Price</th>
								<th>Amount</th>
							</thead>
							<tbody>
																	<tr>
										<td style="padding: 0 10px;">80 leaves Advance composition notebook</td>
										<td>30</td>
										<td>12.75</td>
										<td>382.50</td>
									</tr>
																	<tr>
										<td style="padding: 0 10px;">Mongol 2 pencil (3/pack)</td>
										<td>20</td>
										<td>24.99</td>
										<td>499.80</td>
									</tr>
																	<tr>
										<td style="padding: 0 10px;">Superb Writer Semi-gel Pen</td>
										<td>50</td>
										<td>9.00</td>
										<td>450.00</td>
									</tr>
																	<tr>
										<td style="padding: 0 10px;">Intermediate Pad Paper Bestbuy (80 leaves)</td>
										<td>30</td>
										<td>24.00</td>
										<td>720.00</td>
									</tr>
																	<tr>
										<td style="padding: 0 10px;">Table bear stuffed toy</td>
										<td>2</td>
										<td>49.94</td>
										<td>99.88</td>
									</tr>
															</tbody>	
						</table>
									</div>
			</div>
			<br>
			<div style="font-size:8pt; font-style:italic">*Prices/Amount are in Philippine Peso</div>
		</div>
		<div class="modal-footer">
			<div style="text-align: center">
									<!--<a href="#" class="btn btn-small btn-primary" type="submit" id="call" disabled="disabled">Call</a>-->
					<a href="#" class="btn btn-small" type="button" id="text" disabled="disabled">Send SMS to Confirm</a>
								<button class="btn btn-small" data-dismiss="modal" id="close" onClick="closeIt(); return false;">Cancel</button>
			</div>
		</div>
	</div><?php }} ?>
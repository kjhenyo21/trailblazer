<!--
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
				<div>Name: {$name}</div>
				<div>Address: {$address}</div>
				<div>Contact: {$contact}</div>
				<div>Date: {$date}</div>
				<div>OR No: {$or_no}</div>
				<br>
				<div id="table-container" style="position: relative">
					{if ($details)}
						{$row = 0}
						<table id="table" style="text-align: center; color: black">
							<thead>
								<th style="padding: 0 10px;">Item</th>
								<th>Quantity</th>
								<th>Unit Price</th>
								<th>Amount</th>
							</thead>
							<tbody>
								{foreach $details as $d}
									<tr>
										<td style="padding: 0 10px;">{$d[2]}</td>
										<td>{$d[3]}</td>
										<td>{$d[4]|number_format:2:".":","}</td>
										<td>{$d[5]|number_format:2:".":","}</td>
									</tr>
								{/foreach}
							</tbody>	
						</table>
					{else}
						<table id="table" style="text-align: center; color: black">
							<thead>
								<th style="padding: 0 10px;">Item</th>
								<th>Quantity</th>
								<th>Unit Price</th>
								<th>Amount</th>
							</thead>
						</table>
						<table class="table table-hover">
							<tbody>
								<div style="font-style: italic; text-align: left">{$error_msg_det}</div>
							</tbody>
						</table>
					{/if}
				</div>
			</div>
			<br>
			<div style="font-size:8pt; font-style:italic">*Prices/Amount are in Philippine Peso</div>
		</div>
		<div class="modal-footer">
			<div style="text-align: center">
				{if ($contact == "" || $details == false)}
					<!--<a href="#" class="btn btn-small btn-primary" type="submit" id="call" disabled="disabled">Call</a>-->
					<a href="#" class="btn btn-small" type="button" id="text" disabled="disabled">Send SMS to Confirm</a>
				{else}
					<!--<a href="skype:+63{$contact}?call" class="btn btn-small btn-primary" type="submit" id="call">Call</a>-->
					<a href="#" class="btn btn-small btn-primary" type="button" id="text" onClick="textIt('{$name}', {$contact}, '{$date}', {$or_no}, {$amt_due}); return false;">Send SMS to Confirm</a>
				{/if}
				<button class="btn btn-small" data-dismiss="modal" id="close" onClick="closeIt(); return false;">Cancel</button>
			</div>
		</div>
	</div>
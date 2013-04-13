<?php /* Smarty version Smarty-3.1.7, created on 2013-04-10 20:48:51
         compiled from "C:\xampp\htdocs\trailblazer\application/views\audit_trail\trans_details.tpl" */ ?>
<?php /*%%SmartyHeaderCode:157135152956bd4f6c3-56403837%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e16a3a7a926cc16081f55eb3dbf607705da8351' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trailblazer\\application/views\\audit_trail\\trans_details.tpl',
      1 => 1364792920,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '157135152956bd4f6c3-56403837',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5152956c307af',
  'variables' => 
  array (
    'name' => 0,
    'address' => 0,
    'contact' => 0,
    'date' => 0,
    'or_no' => 0,
    'details' => 0,
    'd' => 0,
    'dets_total_amt' => 0,
    'error_msg_det' => 0,
    'amt_due' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5152956c307af')) {function content_5152956c307af($_smarty_tpl) {?><!--
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
				<div>Name: <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</div>
				<div>Address: <?php echo $_smarty_tpl->tpl_vars['address']->value;?>
</div>
				<div>Contact: <?php echo $_smarty_tpl->tpl_vars['contact']->value;?>
</div>
				<div>Date: <?php echo $_smarty_tpl->tpl_vars['date']->value;?>
</div>
				<div>OR No: <?php echo $_smarty_tpl->tpl_vars['or_no']->value;?>
</div>
				<br>
				<div id="table-container" style="position: relative">
					<?php if (($_smarty_tpl->tpl_vars['details']->value)){?>
						<?php $_smarty_tpl->tpl_vars['row'] = new Smarty_variable(0, null, 0);?>
						<table id="table" style="text-align: center; color: black">
							<thead>
								<th style="padding: 0 10px;">Item</th>
								<th style="width:5%">Qty</th>
								<th>Unit Price</th>
								<th style="width:25%">Amount</th>
							</thead>
							<tbody>
								<?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['details']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
$_smarty_tpl->tpl_vars['d']->_loop = true;
?>
									<tr>
										<td style="padding: 0 10px;"><?php echo $_smarty_tpl->tpl_vars['d']->value[2];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['d']->value[3];?>
</td>
										<td class="amount"><?php echo number_format($_smarty_tpl->tpl_vars['d']->value[4],2,".",",");?>
</td>
										<td class="amount"><?php echo number_format($_smarty_tpl->tpl_vars['d']->value[5],2,".",",");?>
</td>
									</tr>
								<?php } ?>
								<tr id=total-trans-amt>
									<td></td>
									<td></td>
									<td style="font-weight: bold; text-align: right">TOTAL</td>
									<td class="amount" style="font-weight: bold">Php <?php echo number_format($_smarty_tpl->tpl_vars['dets_total_amt']->value,2,".",",");?>
</td>								
								</tr>
							</tbody>
						</table>
					<?php }else{ ?>
						<table id="table" style="text-align: center; color: black">
							<thead>
								<th style="padding: 0 10px;">Item</th>
								<th>Qty</th>
								<th>Unit Price</th>
								<th>Amount</th>
							</thead>
						</table>
						<table class="table table-hover">
							<tbody>
								<div style="font-style: italic; text-align: left"><?php echo $_smarty_tpl->tpl_vars['error_msg_det']->value;?>
</div>
							</tbody>
						</table>
					<?php }?>
				</div>
			</div>
			<br>
			<div style="font-size:8pt; font-style:italic">*Prices/Amount are in Philippine Peso</div>
		</div>
		<div class="modal-footer">
			<div style="text-align: center">
				<?php if (($_smarty_tpl->tpl_vars['contact']->value==''||$_smarty_tpl->tpl_vars['details']->value==false)){?>
					<!--<a href="#" class="btn btn-small btn-primary" type="submit" id="call" disabled="disabled">Call</a>-->
					<a href="#" class="btn btn-small" type="button" id="text" disabled="disabled">Send SMS to Confirm</a>
				<?php }else{ ?>
					<!--<a href="skype:+63<?php echo $_smarty_tpl->tpl_vars['contact']->value;?>
?call" class="btn btn-small btn-primary" type="submit" id="call">Call</a>-->
					<a href="#" class="btn btn-small btn-primary" type="button" id="text" onClick="textIt('<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
', <?php echo $_smarty_tpl->tpl_vars['contact']->value;?>
, '<?php echo $_smarty_tpl->tpl_vars['date']->value;?>
', <?php echo $_smarty_tpl->tpl_vars['or_no']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['amt_due']->value;?>
); return false;">Send SMS to Confirm</a>
				<?php }?>
				<button class="btn btn-small" data-dismiss="modal" id="close" onClick="closeIt(); return false;">Cancel</button>
			</div>
		</div>
	</div><?php }} ?>
<?php /* Smarty version Smarty-3.1.7, created on 2013-04-15 15:42:58
         compiled from "C:\xampp\htdocs\trailblazer\application/views\audit_trail\trail_sample_transactions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8752516c03e2b64443-46400653%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b1bf4cbc50929cb6ffb1699443bc703528e2a64' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trailblazer\\application/views\\audit_trail\\trail_sample_transactions.tpl',
      1 => 1365439291,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8752516c03e2b64443-46400653',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
    'headings' => 0,
    'h' => 0,
    'i' => 0,
    'row' => 0,
    'url' => 0,
    'ref' => 0,
    'acct' => 0,
    'fs' => 0,
    'fs_amt' => 0,
    'fs_file' => 0,
    'ledger' => 0,
    'lg_ref' => 0,
    'lg_desc' => 0,
    'lg_debit' => 0,
    'lg_credit' => 0,
    'lg_total_amt' => 0,
    'journal' => 0,
    'jl_ref' => 0,
    'jl_desc' => 0,
    'jl_amt' => 0,
    'doc' => 0,
    'orig_trans_total_amt' => 0,
    'trans_total_amt' => 0,
    'error_msg' => 0,
    'lg_amt' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_516c03e3a5245',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_516c03e3a5245')) {function content_516c03e3a5245($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'C:\\xampp\\htdocs\\trailblazer\\application\\libraries\\smarty\\plugins\\function.url.php';
?>					<?php $_smarty_tpl->tpl_vars['row'] = new Smarty_variable(0, null, 0);?>
					<?php if (($_smarty_tpl->tpl_vars['info']->value)){?>
						<table id="table" class="table table-hover" style="text-align: left; color: black">
							<thead>
								<?php if (($_smarty_tpl->tpl_vars['headings']->value)){?>
									<?php  $_smarty_tpl->tpl_vars['h'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['h']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['headings']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['h']->key => $_smarty_tpl->tpl_vars['h']->value){
$_smarty_tpl->tpl_vars['h']->_loop = true;
?>
										<th style="text-align: center"><?php echo $_smarty_tpl->tpl_vars['h']->value;?>
</th>
									<?php } ?>
								<?php }?>
								<th>Audit Trail Results</th>
								<!--<th></th>-->
							</thead>
							<tbody>
								<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
									<?php $_smarty_tpl->tpl_vars['url'] = new Smarty_variable("or_no=".($_smarty_tpl->tpl_vars['i']->value[1])."&amt=".($_smarty_tpl->tpl_vars['i']->value[2])."&name=".($_smarty_tpl->tpl_vars['i']->value[3])."&address=".($_smarty_tpl->tpl_vars['i']->value[4])."&contact=".($_smarty_tpl->tpl_vars['i']->value[5]), null, 0);?>
									<?php if ($_smarty_tpl->tpl_vars['row']->value==0){?>
										<tr>
											<td style="text-align: center; vertical-align: center"><?php echo $_smarty_tpl->tpl_vars['i']->value[0];?>
</td>
											<td style="text-align: center; vertical-align: center"><a href="#trans-details<?php echo $_smarty_tpl->tpl_vars['i']->value[1];?>
" data-toggle="modal" onClick="getDetails('<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
'); return false;"><?php echo $_smarty_tpl->tpl_vars['i']->value[1];?>
</a></td>
											<td class="amount" style="text-align: right;">Php <?php echo number_format($_smarty_tpl->tpl_vars['i']->value[2],2,".",",");?>
</td>
											<td style="text-align: center; vertical-align: center"><?php echo $_smarty_tpl->tpl_vars['i']->value[3];?>
</td>
											<td style="text-align: center; vertical-align: center"><?php echo $_smarty_tpl->tpl_vars['i']->value[4];?>
</td>
											<td style="text-align: center; vertical-align: center"><?php echo $_smarty_tpl->tpl_vars['i']->value[5];?>
</td>
											<td style="text-align: center; vertical-align: center; width: 30px"><a href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
audit_trail/summary?ref=<?php echo $_smarty_tpl->tpl_vars['ref']->value;?>
&or_no=<?php echo $_smarty_tpl->tpl_vars['i']->value[1];?>
&acct=<?php echo $_smarty_tpl->tpl_vars['acct']->value;?>
&fs=<?php echo $_smarty_tpl->tpl_vars['fs']->value;?>
&fs_amt=<?php echo $_smarty_tpl->tpl_vars['fs_amt']->value;?>
&fs_file=<?php echo $_smarty_tpl->tpl_vars['fs_file']->value;?>
&ledger=<?php echo $_smarty_tpl->tpl_vars['ledger']->value;?>
&lg_ref=<?php echo $_smarty_tpl->tpl_vars['lg_ref']->value;?>
&lg_desc=<?php echo $_smarty_tpl->tpl_vars['lg_desc']->value;?>
&lg_debit=<?php echo $_smarty_tpl->tpl_vars['lg_debit']->value;?>
&lg_credit=<?php echo $_smarty_tpl->tpl_vars['lg_credit']->value;?>
&lg_total_amt=<?php echo $_smarty_tpl->tpl_vars['lg_total_amt']->value;?>
&journal=<?php echo $_smarty_tpl->tpl_vars['journal']->value;?>
&jl_ref=<?php echo $_smarty_tpl->tpl_vars['jl_ref']->value;?>
&jl_desc=<?php echo $_smarty_tpl->tpl_vars['jl_desc']->value;?>
&jl_amt=<?php echo $_smarty_tpl->tpl_vars['jl_amt']->value;?>
&trans=<?php echo $_smarty_tpl->tpl_vars['doc']->value;?>
&trans_amt=<?php echo $_smarty_tpl->tpl_vars['i']->value[2];?>
&trans_total_amt=<?php echo $_smarty_tpl->tpl_vars['orig_trans_total_amt']->value;?>
">View</a></td>
											<!--<td style="text-align: center; vertical-align: center; width: 30px"><a>System Audit</a></td>-->
										</tr>
									<?php }else{ ?>
										<tr style="vertical-align: center;">
											<td style="text-align: center; vertical-align: center important!;"><?php echo $_smarty_tpl->tpl_vars['i']->value[0];?>
</td>
											<td style="text-align: center; vertical-align: center;"><a href="#trans-details<?php echo $_smarty_tpl->tpl_vars['i']->value[1];?>
" data-toggle="modal" onClick="getDetails('<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
'); return false;"><?php echo $_smarty_tpl->tpl_vars['i']->value[1];?>
</a></td>
											<td class="amount" style="text-align: right;"><?php echo number_format($_smarty_tpl->tpl_vars['i']->value[2],2,".",",");?>
</td>
											<td style="text-align: center; vertical-align: center;"><?php echo $_smarty_tpl->tpl_vars['i']->value[3];?>
</td>
											<td style="text-align: center; vertical-align: center;"><?php echo $_smarty_tpl->tpl_vars['i']->value[4];?>
</td>
											<td style="text-align: center; vertical-align: center;"><?php echo $_smarty_tpl->tpl_vars['i']->value[5];?>
</td>
											<td style="text-align: center; vertical-align: center; width: 30px"><a href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
audit_trail/summary?ref=<?php echo $_smarty_tpl->tpl_vars['ref']->value;?>
&or_no=<?php echo $_smarty_tpl->tpl_vars['i']->value[1];?>
&acct=<?php echo $_smarty_tpl->tpl_vars['acct']->value;?>
&fs=<?php echo $_smarty_tpl->tpl_vars['fs']->value;?>
&fs_amt=<?php echo $_smarty_tpl->tpl_vars['fs_amt']->value;?>
&fs_file=<?php echo $_smarty_tpl->tpl_vars['fs_file']->value;?>
&ledger=<?php echo $_smarty_tpl->tpl_vars['ledger']->value;?>
&lg_ref=<?php echo $_smarty_tpl->tpl_vars['lg_ref']->value;?>
&lg_desc=<?php echo $_smarty_tpl->tpl_vars['lg_desc']->value;?>
&lg_debit=<?php echo $_smarty_tpl->tpl_vars['lg_debit']->value;?>
&lg_credit=<?php echo $_smarty_tpl->tpl_vars['lg_credit']->value;?>
&lg_total_amt=<?php echo $_smarty_tpl->tpl_vars['lg_total_amt']->value;?>
&journal=<?php echo $_smarty_tpl->tpl_vars['journal']->value;?>
&jl_ref=<?php echo $_smarty_tpl->tpl_vars['jl_ref']->value;?>
&jl_desc=<?php echo $_smarty_tpl->tpl_vars['jl_desc']->value;?>
&jl_amt=<?php echo $_smarty_tpl->tpl_vars['jl_amt']->value;?>
&trans=<?php echo $_smarty_tpl->tpl_vars['doc']->value;?>
&trans_amt=<?php echo $_smarty_tpl->tpl_vars['i']->value[2];?>
&trans_total_amt=<?php echo $_smarty_tpl->tpl_vars['orig_trans_total_amt']->value;?>
">View</a></td>
											<!--<td style="text-align: center; vertical-align: center;"><a>System Audit</a></td>-->
										</tr>
									<?php }?>
									<?php $_smarty_tpl->tpl_vars['row'] = new Smarty_variable($_smarty_tpl->tpl_vars['row']->value+1, null, 0);?>
								<?php } ?>
								<tr id=total-trans-amt>
									<td></td>
									<td style="font-weight: bold; text-align: right">TOTAL</td>
									<td class="amount" style="font-weight: bold">Php <?php echo number_format($_smarty_tpl->tpl_vars['trans_total_amt']->value,2,".",",");?>
</td>								
									<td></td>
									<td></td>
									<td><a href="#select-sample-modal" class="btn btn-primary btn-small" data-toggle="modal" style="text-align: center" onClick="openSelectSample(); return false;">Select a Sample</a></td>
									<td></td>
								</tr>
							</tbody>
						</table>
					<?php }else{ ?>
						<table id="table" class="table table-striped" style="text-align: left; color: black">
							<thead>
								<th style="text-align: center">Date</th>
								<th style="text-align: center">OR No</th>
								<th style="text-align: center">Amount</th>
								<th style="text-align: center">Name</th>
								<th style="text-align: center">Contact</th>
								<th style="text-align: center">Address</th>
								<th>Audit Trail Results</th>
								<!--<th></th>-->
							</thead>
						</table>
						<table class="table table-striped">
							<tbody>
								<tr>
									<td><div style="font-style: italic; text-align: left"><?php echo $_smarty_tpl->tpl_vars['error_msg']->value;?>
 The audit trail ends here. Click <a href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
audit_trail/summary?acct=<?php echo $_smarty_tpl->tpl_vars['acct']->value;?>
&fs=<?php echo $_smarty_tpl->tpl_vars['fs']->value;?>
&fs_amt=<?php echo $_smarty_tpl->tpl_vars['fs_amt']->value;?>
&fs_file=<?php echo $_smarty_tpl->tpl_vars['fs_file']->value;?>
&ledger=<?php echo $_smarty_tpl->tpl_vars['ledger']->value;?>
&lg_ref=<?php echo $_smarty_tpl->tpl_vars['lg_ref']->value;?>
&lg_desc=<?php echo $_smarty_tpl->tpl_vars['lg_desc']->value;?>
&lg_debit=<?php echo $_smarty_tpl->tpl_vars['lg_debit']->value;?>
&lg_credit=<?php echo $_smarty_tpl->tpl_vars['lg_credit']->value;?>
&lg_amt=<?php echo $_smarty_tpl->tpl_vars['lg_amt']->value;?>
&lg_total_amt=<?php echo $_smarty_tpl->tpl_vars['lg_total_amt']->value;?>
&journal=<?php echo $_smarty_tpl->tpl_vars['journal']->value;?>
&jl_ref=<?php echo $_smarty_tpl->tpl_vars['jl_ref']->value;?>
&jl_desc=<?php echo $_smarty_tpl->tpl_vars['jl_desc']->value;?>
&jl_amt=<?php echo $_smarty_tpl->tpl_vars['jl_amt']->value;?>
">here</a> to view results.</div></td>
								</tr>
							</tbody>
						</table>
					<?php }?><?php }} ?>
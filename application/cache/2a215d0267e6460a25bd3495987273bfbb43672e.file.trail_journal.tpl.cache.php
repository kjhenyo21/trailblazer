<?php /* Smarty version Smarty-3.1.7, created on 2013-04-13 13:05:04
         compiled from "C:\xampp\htdocs\trailblazer\application/views\audit_trail\trail_journal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31701515289bfb0b223-35774772%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a215d0267e6460a25bd3495987273bfbb43672e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trailblazer\\application/views\\audit_trail\\trail_journal.tpl',
      1 => 1365851102,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31701515289bfb0b223-35774772',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_515289c11d603',
  'variables' => 
  array (
    'doc' => 0,
    'info' => 0,
    'lg_desc' => 0,
    'i' => 0,
    'row' => 0,
    'month' => 0,
    'acct' => 0,
    'fs' => 0,
    'fs_amt' => 0,
    'fs_file' => 0,
    'ledger' => 0,
    'lg_ref' => 0,
    'lg_debit' => 0,
    'lg_credit' => 0,
    'lg_amt' => 0,
    'lg_total_amt' => 0,
    'jl_ref' => 0,
    'jl_total_dr_disp' => 0,
    'jl_total_other_disp' => 0,
    'jl_total_cr_disp' => 0,
    'error_msg' => 0,
    'source' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_515289c11d603')) {function content_515289c11d603($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'C:\\xampp\\htdocs\\trailblazer\\application\\libraries\\smarty\\plugins\\function.url.php';
?><!--
 * Trailblazer Digital Accounting Audit Trail Program
 * @author Kristian Jacob Abad Lora <kjalora92@yahoo.com>
 * @date-created October 31, 2012
-->
	<head>
		<title>Trailblazer - Trailing the Journal</title>
	</head>
	
	<body>
		<!-- Main -->
		<br>
		<div id="main-wrapper" style="width: 700px">
			<div id="navi" style="float: right; font-size: 14pt">
				<a href="#" onclick="history.go(-1);return false;"><i class="icon-arrow-left"></i></a>
				<span> | </span>
				<a href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
audit_trail"><i class="icon-home"></i></a>
			</div>
			<div style="margin: 0 auto; text-align: center">
				<h2><?php echo $_smarty_tpl->tpl_vars['doc']->value;?>
</h2>
				<br>
				<?php if (($_smarty_tpl->tpl_vars['info']->value)){?>
					<table id="table" class="table table-striped" style="text-align: left; color: black">
						<thead>
							<?php if (($_smarty_tpl->tpl_vars['doc']->value=="Cash Receipts Journal")){?>
								<th style="text-align: center; vertical-align: center">Date</th>
								<th style="text-align: center; vertical-align: center">Account</th>
								<th style="text-align: center; vertical-align: center">Particular</th>
								<th style="text-align: center; vertical-align: center">Reference</th>
								<th style="text-align: center; vertical-align: center">Cash (Dr)</th>
								<th style="text-align: center; vertical-align: center">Other (Dr)</th>
								<th style="text-align: center; vertical-align: center">Sales (Cr)</th>
							<?php }elseif(($_smarty_tpl->tpl_vars['doc']->value=="Cash Disbursements Journal")){?>
								<th style="text-align: center; vertical-align: center">Date</th>
								<th style="text-align: center; vertical-align: center">Account</th>
								<th style="text-align: center; vertical-align: center">Particular</th>
								<th style="text-align: center; vertical-align: center">Reference</th>
								<th style="text-align: center; vertical-align: center">Purchases (Dr)</th>
								<th style="text-align: center; vertical-align: center">Other (Dr)</th>
								<th style="text-align: center; vertical-align: center">Cash (Cr)</th>
							<?php }?>
						</thead>
						<tbody>
							<?php $_smarty_tpl->tpl_vars['row'] = new Smarty_variable(0, null, 0);?>
							<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
								<?php if (($_smarty_tpl->tpl_vars['lg_desc']->value==$_smarty_tpl->tpl_vars['i']->value['desc'])){?>
									<?php if ($_smarty_tpl->tpl_vars['row']->value==0){?>
										<tr>
											<?php if (($_smarty_tpl->tpl_vars['doc']->value=="Cash Receipts Journal")){?>
												<td style="text-align: right; font-weight: bold"><?php echo $_smarty_tpl->tpl_vars['month']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['i']->value['day'];?>
</td>
												<td style="font-weight: bold"><?php echo $_smarty_tpl->tpl_vars['i']->value['acct'];?>
</td>
												<td style="font-weight: bold"><?php echo $_smarty_tpl->tpl_vars['i']->value['desc'];?>
</td>
												<td style="text-align: center; font-weight: bold"><a href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
audit_trail/trail_trans?ref=<?php echo $_smarty_tpl->tpl_vars['i']->value['ref'];?>
&acct=<?php echo $_smarty_tpl->tpl_vars['acct']->value;?>
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
&journal=<?php echo $_smarty_tpl->tpl_vars['doc']->value;?>
&jl_ref=<?php echo $_smarty_tpl->tpl_vars['jl_ref']->value;?>
&jl_desc=<?php echo $_smarty_tpl->tpl_vars['i']->value['desc'];?>
&jl_amt=<?php echo $_smarty_tpl->tpl_vars['i']->value['cash'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['ref'];?>
</a></td>
												<?php if ($_smarty_tpl->tpl_vars['i']->value['cash']!=''){?>
													<td class="amount" style="font-weight: bold">Php <?php echo number_format($_smarty_tpl->tpl_vars['i']->value['cash'],2,".",",");?>
</td>
												<?php }else{ ?>
													<td class="amount" style="font-weight: bold"><?php echo $_smarty_tpl->tpl_vars['i']->value['cash'];?>
</td>
												<?php }?>
												<?php if ($_smarty_tpl->tpl_vars['i']->value['other']!=''){?>
													<td class="amount" style="font-weight: bold">Php <?php echo number_format($_smarty_tpl->tpl_vars['i']->value['other'],2,".",",");?>
</td>
												<?php }else{ ?>
													<td class="amount" style="font-weight: bold"><?php echo $_smarty_tpl->tpl_vars['i']->value['other'];?>
</td>
												<?php }?>
												<?php if ($_smarty_tpl->tpl_vars['i']->value['sales']!=''){?>
													<td class="amount" style="font-weight: bold">Php <?php echo number_format($_smarty_tpl->tpl_vars['i']->value['sales'],2,".",",");?>
</td>
												<?php }else{ ?>
													<td class="amount" style="font-weight: bold"><?php echo $_smarty_tpl->tpl_vars['i']->value['sales'];?>
</td>
												<?php }?>
											<?php }elseif(($_smarty_tpl->tpl_vars['doc']->value=="Cash Disbursements Journal")){?>
												<td style="text-align: right; font-weight: bold"><?php echo $_smarty_tpl->tpl_vars['month']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['i']->value['day'];?>
</td>
												<td style="font-weight: bold"><?php echo $_smarty_tpl->tpl_vars['i']->value['acct'];?>
</td>
												<td style="font-weight: bold"><?php echo $_smarty_tpl->tpl_vars['i']->value['desc'];?>
</td>
												<td style="text-align: center; font-weight: bold"><a href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
audit_trail/trail_trans?ref=<?php echo $_smarty_tpl->tpl_vars['i']->value['ref'];?>
&acct=<?php echo $_smarty_tpl->tpl_vars['acct']->value;?>
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
&journal=<?php echo $_smarty_tpl->tpl_vars['doc']->value;?>
&jl_ref=<?php echo $_smarty_tpl->tpl_vars['jl_ref']->value;?>
&jl_desc=<?php echo $_smarty_tpl->tpl_vars['i']->value['desc'];?>
&jl_amt=<?php echo $_smarty_tpl->tpl_vars['i']->value['cash'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['ref'];?>
</a></td>
												<?php if ($_smarty_tpl->tpl_vars['i']->value['purch']!=''){?>
													<td class="amount" style="font-weight: bold">Php <?php echo number_format($_smarty_tpl->tpl_vars['i']->value['purch'],2,".",",");?>
</td>
												<?php }else{ ?>
													<td class="amount" style="font-weight: bold"><?php echo $_smarty_tpl->tpl_vars['i']->value['purch'];?>
</td>
												<?php }?>
												<?php if ($_smarty_tpl->tpl_vars['i']->value['other']!=''){?>
													<td class="amount" style="font-weight: bold">Php <?php echo number_format($_smarty_tpl->tpl_vars['i']->value['other'],2,".",",");?>
</td>
												<?php }else{ ?>
													<td class="amount" style="font-weight: bold"><?php echo $_smarty_tpl->tpl_vars['i']->value['other'];?>
</td>
												<?php }?>
												<?php if ($_smarty_tpl->tpl_vars['i']->value['cash']!=''){?>
													<td class="amount" style="font-weight: bold">Php <?php echo number_format($_smarty_tpl->tpl_vars['i']->value['cash'],2,".",",");?>
</td>
												<?php }else{ ?>
													<td class="amount" style="font-weight: bold"><?php echo $_smarty_tpl->tpl_vars['i']->value['cash'];?>
</td>
												<?php }?>
											<?php }?>
										</tr>
									<?php }else{ ?>
										<tr>
											<?php if (($_smarty_tpl->tpl_vars['doc']->value=="Cash Receipts Journal")){?>
												<td style="text-align: right; font-weight: bold"><?php echo $_smarty_tpl->tpl_vars['i']->value['day'];?>
</td>
												<td style="font-weight: bold"><?php echo $_smarty_tpl->tpl_vars['i']->value['acct'];?>
</td>
												<td style="font-weight: bold"><?php echo $_smarty_tpl->tpl_vars['i']->value['desc'];?>
</td>
												<td style="text-align: center; font-weight: bold"><a href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
audit_trail/trail_trans?ref=<?php echo $_smarty_tpl->tpl_vars['i']->value['ref'];?>
&acct=<?php echo $_smarty_tpl->tpl_vars['acct']->value;?>
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
&journal=<?php echo $_smarty_tpl->tpl_vars['doc']->value;?>
&jl_ref=<?php echo $_smarty_tpl->tpl_vars['jl_ref']->value;?>
&jl_desc=<?php echo $_smarty_tpl->tpl_vars['i']->value['desc'];?>
&jl_amt=<?php echo $_smarty_tpl->tpl_vars['i']->value['cash'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['ref'];?>
</a></td>
												<?php if ($_smarty_tpl->tpl_vars['i']->value['cash']!=''){?>
													<td class="amount" style="font-weight: bold"><?php echo number_format($_smarty_tpl->tpl_vars['i']->value['cash'],2,".",",");?>
</td>
												<?php }else{ ?>
													<td class="amount" style="font-weight: bold"><?php echo $_smarty_tpl->tpl_vars['i']->value['cash'];?>
</td>
												<?php }?>
												<?php if ($_smarty_tpl->tpl_vars['i']->value['other']!=''){?>
													<td class="amount" style="font-weight: bold"><?php echo number_format($_smarty_tpl->tpl_vars['i']->value['other'],2,".",",");?>
</td>
												<?php }else{ ?>
													<td class="amount" style="font-weight: bold"><?php echo $_smarty_tpl->tpl_vars['i']->value['other'];?>
</td>
												<?php }?>
												<?php if ($_smarty_tpl->tpl_vars['i']->value['sales']!=''){?>
													<td class="amount" style="font-weight: bold"><?php echo number_format($_smarty_tpl->tpl_vars['i']->value['sales'],2,".",",");?>
</td>
												<?php }else{ ?>
													<td class="amount" style="font-weight: bold"><?php echo $_smarty_tpl->tpl_vars['i']->value['sales'];?>
</td>
												<?php }?>
											<?php }elseif(($_smarty_tpl->tpl_vars['doc']->value=="Cash Disbursements Journal")){?>
												<td style="text-align: right; font-weight: bold"><?php echo $_smarty_tpl->tpl_vars['i']->value['day'];?>
</td>
												<td style="font-weight: bold"><?php echo $_smarty_tpl->tpl_vars['i']->value['acct'];?>
</td>
												<td style="font-weight: bold"><?php echo $_smarty_tpl->tpl_vars['i']->value['desc'];?>
</td>
												<td style="text-align: center; font-weight: bold"><a href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
audit_trail/trail_trans?ref=<?php echo $_smarty_tpl->tpl_vars['i']->value['ref'];?>
&acct=<?php echo $_smarty_tpl->tpl_vars['acct']->value;?>
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
&journal=<?php echo $_smarty_tpl->tpl_vars['doc']->value;?>
&jl_ref=<?php echo $_smarty_tpl->tpl_vars['jl_ref']->value;?>
&jl_desc=<?php echo $_smarty_tpl->tpl_vars['i']->value['desc'];?>
&jl_amt=<?php echo $_smarty_tpl->tpl_vars['i']->value['cash'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['ref'];?>
</a></td>
												<?php if ($_smarty_tpl->tpl_vars['i']->value['purch']!=''){?>
													<td class="amount" style="font-weight: bold"><?php echo number_format($_smarty_tpl->tpl_vars['i']->value['purch'],2,".",",");?>
</td>
												<?php }else{ ?>
													<td class="amount" style="font-weight: bold"><?php echo $_smarty_tpl->tpl_vars['i']->value['purch'];?>
</td>
												<?php }?>
												<?php if ($_smarty_tpl->tpl_vars['i']->value['other']!=''){?>
													<td class="amount" style="font-weight: bold"><?php echo number_format($_smarty_tpl->tpl_vars['i']->value['other'],2,".",",");?>
</td>
												<?php }else{ ?>
													<td class="amount" style="font-weight: bold"><?php echo $_smarty_tpl->tpl_vars['i']->value['other'];?>
</td>
												<?php }?>
												<?php if ($_smarty_tpl->tpl_vars['i']->value['cash']!=''){?>
													<td class="amount" style="font-weight: bold"><?php echo number_format($_smarty_tpl->tpl_vars['i']->value['cash'],2,".",",");?>
</td>
												<?php }else{ ?>
													<td class="amount" style="font-weight: bold"><?php echo $_smarty_tpl->tpl_vars['i']->value['cash'];?>
</td>
												<?php }?>
											<?php }?>
										</tr>
									<?php }?>
								<?php }else{ ?>
									<?php if ($_smarty_tpl->tpl_vars['row']->value==0){?>
										<tr>
											<?php if (($_smarty_tpl->tpl_vars['doc']->value=="Cash Receipts Journal")){?>
												<td style="text-align: right"><?php echo $_smarty_tpl->tpl_vars['month']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['i']->value['day'];?>
</td>
												<td><?php echo $_smarty_tpl->tpl_vars['i']->value['acct'];?>
</td>
												<td><?php echo $_smarty_tpl->tpl_vars['i']->value['desc'];?>
</td>
												<td style="text-align: center"><?php echo $_smarty_tpl->tpl_vars['i']->value['ref'];?>
</td>
												<?php if ($_smarty_tpl->tpl_vars['i']->value['cash']!=''){?>
													<td class="amount">Php <?php echo number_format($_smarty_tpl->tpl_vars['i']->value['cash'],2,".",",");?>
</td>
												<?php }else{ ?>
													<td class="amount"><?php echo $_smarty_tpl->tpl_vars['i']->value['cash'];?>
</td>
												<?php }?>
												<?php if ($_smarty_tpl->tpl_vars['i']->value['other']!=''){?>
													<td class="amount">Php <?php echo number_format($_smarty_tpl->tpl_vars['i']->value['other'],2,".",",");?>
</td>
												<?php }else{ ?>
													<td class="amount"><?php echo $_smarty_tpl->tpl_vars['i']->value['other'];?>
</td>
												<?php }?>
												<?php if ($_smarty_tpl->tpl_vars['i']->value['sales']!=''){?>
													<td class="amount">Php <?php echo number_format($_smarty_tpl->tpl_vars['i']->value['sales'],2,".",",");?>
</td>
												<?php }else{ ?>
													<td class="amount"><?php echo $_smarty_tpl->tpl_vars['i']->value['sales'];?>
</td>
												<?php }?>
											<?php }elseif(($_smarty_tpl->tpl_vars['doc']->value=="Cash Disbursements Journal")){?>
												<td style="text-align: right"><?php echo $_smarty_tpl->tpl_vars['month']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['i']->value['day'];?>
</td>
												<td><?php echo $_smarty_tpl->tpl_vars['i']->value['acct'];?>
</td>
												<td><?php echo $_smarty_tpl->tpl_vars['i']->value['desc'];?>
</td>
												<td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['i']->value['ref'];?>
</a></td>
												<?php if ($_smarty_tpl->tpl_vars['i']->value['purch']!=''){?>
													<td class="amount">Php <?php echo number_format($_smarty_tpl->tpl_vars['i']->value['purch'],2,".",",");?>
</td>
												<?php }else{ ?>
													<td class="amount"><?php echo $_smarty_tpl->tpl_vars['i']->value['purch'];?>
</td>
												<?php }?>
												<?php if ($_smarty_tpl->tpl_vars['i']->value['other']!=''){?>
													<td class="amount">Php <?php echo number_format($_smarty_tpl->tpl_vars['i']->value['other'],2,".",",");?>
</td>
												<?php }else{ ?>
													<td class="amount"><?php echo $_smarty_tpl->tpl_vars['i']->value['other'];?>
</td>
												<?php }?>
												<?php if ($_smarty_tpl->tpl_vars['i']->value['cash']!=''){?>
													<td class="amount">Php <?php echo number_format($_smarty_tpl->tpl_vars['i']->value['cash'],2,".",",");?>
</td>
												<?php }else{ ?>
													<td class="amount"><?php echo $_smarty_tpl->tpl_vars['i']->value['cash'];?>
</td>
												<?php }?>
											<?php }?>
										</tr>
									<?php }else{ ?>
										<tr>
											<?php if (($_smarty_tpl->tpl_vars['doc']->value=="Cash Receipts Journal")){?>
												<td style="text-align: right"><?php echo $_smarty_tpl->tpl_vars['i']->value['day'];?>
</td>
												<td><?php echo $_smarty_tpl->tpl_vars['i']->value['acct'];?>
</td>
												<td><?php echo $_smarty_tpl->tpl_vars['i']->value['desc'];?>
</td>
												<td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['i']->value['ref'];?>
</a></td>
												<?php if ($_smarty_tpl->tpl_vars['i']->value['cash']!=''){?>
													<td class="amount"><?php echo number_format($_smarty_tpl->tpl_vars['i']->value['cash'],2,".",",");?>
</td>
												<?php }else{ ?>
													<td class="amount"><?php echo $_smarty_tpl->tpl_vars['i']->value['cash'];?>
</td>
												<?php }?>
												<?php if ($_smarty_tpl->tpl_vars['i']->value['other']!=''){?>
													<td class="amount"><?php echo number_format($_smarty_tpl->tpl_vars['i']->value['other'],2,".",",");?>
</td>
												<?php }else{ ?>
													<td class="amount"><?php echo $_smarty_tpl->tpl_vars['i']->value['other'];?>
</td>
												<?php }?>
												<?php if ($_smarty_tpl->tpl_vars['i']->value['sales']!=''){?>
													<td class="amount"><?php echo number_format($_smarty_tpl->tpl_vars['i']->value['sales'],2,".",",");?>
</td>
												<?php }else{ ?>
													<td class="amount"><?php echo $_smarty_tpl->tpl_vars['i']->value['sales'];?>
</td>
												<?php }?>
											<?php }elseif(($_smarty_tpl->tpl_vars['doc']->value=="Cash Disbursements Journal")){?>
												<td style="text-align: right"><?php echo $_smarty_tpl->tpl_vars['i']->value['day'];?>
</td>
												<td><?php echo $_smarty_tpl->tpl_vars['i']->value['acct'];?>
</td>
												<td><?php echo $_smarty_tpl->tpl_vars['i']->value['desc'];?>
</td>
												<td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['i']->value['ref'];?>
</a></td>
												<?php if ($_smarty_tpl->tpl_vars['i']->value['purch']!=''){?>
													<td class="amount"><?php echo number_format($_smarty_tpl->tpl_vars['i']->value['purch'],2,".",",");?>
</td>
												<?php }else{ ?>
													<td class="amount"><?php echo $_smarty_tpl->tpl_vars['i']->value['purch'];?>
</td>
												<?php }?>
												<?php if ($_smarty_tpl->tpl_vars['i']->value['other']!=''){?>
													<td class="amount"><?php echo number_format($_smarty_tpl->tpl_vars['i']->value['other'],2,".",",");?>
</td>
												<?php }else{ ?>
													<td class="amount"><?php echo $_smarty_tpl->tpl_vars['i']->value['other'];?>
</td>
												<?php }?>
												<?php if ($_smarty_tpl->tpl_vars['i']->value['cash']!=''){?>
													<td class="amount"><?php echo number_format($_smarty_tpl->tpl_vars['i']->value['cash'],2,".",",");?>
</td>
												<?php }else{ ?>
													<td class="amount"><?php echo $_smarty_tpl->tpl_vars['i']->value['cash'];?>
</td>
												<?php }?>
											<?php }?>
										</tr>
									<?php }?>
								<?php }?>
								<?php $_smarty_tpl->tpl_vars['row'] = new Smarty_variable($_smarty_tpl->tpl_vars['row']->value+1, null, 0);?>
							<?php } ?>
							<tr id="total-journal-bal">
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td class="amount" style="font-weight: bold">Php <?php echo number_format($_smarty_tpl->tpl_vars['jl_total_dr_disp']->value,2,".",",");?>
</td>
								<td class="amount" style="font-weight: bold">Php <?php echo number_format($_smarty_tpl->tpl_vars['jl_total_other_disp']->value,2,".",",");?>
</td>
								<td class="amount" style="font-weight: bold">Php <?php echo number_format($_smarty_tpl->tpl_vars['jl_total_cr_disp']->value,2,".",",");?>
</td>
							</tr>
						</tbody>
					</table>
				<?php }else{ ?>
					<table class="table table-striped" style="text-align: left; color: black">
						<?php if (($_smarty_tpl->tpl_vars['doc']->value=="Cash Receipts Journal")){?>
							<th style="text-align: center; vertical-align: center">Date</th>
							<th style="text-align: center; vertical-align: center">Account</th>
							<th style="text-align: center; vertical-align: center">Description</th>
							<th style="text-align: center; vertical-align: center">Reference</th>
							<th style="text-align: center; vertical-align: center">Cash (Dr)</th>
							<th style="text-align: center; vertical-align: center">Other (Dr)</th>
							<th style="text-align: center; vertical-align: center">Sales (Cr)</th>
						<?php }elseif(($_smarty_tpl->tpl_vars['doc']->value=="Cash Disbursements Journal")){?>
							<th style="text-align: center; vertical-align: center">Date</th>
							<th style="text-align: center; vertical-align: center">Account</th>
							<th style="text-align: center; vertical-align: center">Description</th>
							<th style="text-align: center; vertical-align: center">Reference</th>
							<th style="text-align: center; vertical-align: center">Purchases (Dr)</th>
							<th style="text-align: center; vertical-align: center">Other (Dr)</th>
							<th style="text-align: center; vertical-align: center">Cash (Cr)</th>
						<?php }?>
					</table>
					<table class="table table-hover">
						<tbody>
							<div style="font-style: italic; text-align: left"><?php echo $_smarty_tpl->tpl_vars['error_msg']->value;?>
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
">here</a> to view results.</div>
						</tbody>
					</table>
				<?php }?>
				<div id="source-file">Source File: <?php echo $_smarty_tpl->tpl_vars['source']->value;?>
</div>
			</div>
		</div>
	
	<link href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/stylesheets/bootstrap.css" rel="stylesheet"></link>
	<link href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/stylesheets/bootstrap-responsive.css" rel="stylesheet"></link>
	<link href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/stylesheets/main.css" rel="stylesheet"></link>
	<script src="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/scripts/jquery.js" type="text/javascript"></script>
	<script src="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/scripts/bootstrap.js" type="text/javascript"></script>
</html><?php }} ?>
<?php /*%%SmartyHeaderCode:1504850ff5153853377-98894568%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3386109155670d0f643cc7edcc5f637aad07887c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lalaines\\application/views\\audit_trail\\index.tpl',
      1 => 1360740706,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1504850ff5153853377-98894568',
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_514564a98e597',
  'has_nocache_code' => false,
  'cache_lifetime' => 1,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_514564a98e597')) {function content_514564a98e597($_smarty_tpl) {?>  <!--
 * Lalaine's Bookstore Computerized AIS
 * @author Kristian Jacob Abad Lora <kjalora92@yahoo.com>
 * @date-created October 31, 2012
-->
<!DOCTYPE html>
	<head>
		<title>Lalaine's Bookstore - Home</title>
		<link href="http://localhost/lalaines/assets/stylesheets/bootstrap.css" rel="stylesheet"></link>
		<link href="http://localhost/lalaines/assets/stylesheets/bootstrap-responsive.css" rel="stylesheet"></link>
		<link href="http://localhost/lalaines/assets/stylesheets/main.css" rel="stylesheet"></link>
	</head>
	
	<body>
		<!-- Modal for Loading a File for Audit Trail-->
		<div id="audit_trail" class="modal hide fade" style="margin-top: auto; width: 480px">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3>Load File</h3>
			</div>
			<div class="modal-body">
				<form method="post" action="http://localhost/lalaines/audit_trail/index">
					<fieldset>
						<div class="input" style="margin: 0 120px">
							<input class="span3" id="file_path" name="file_path" type="file" placeholder="File directory">
						</div>
						<br>
						<div style="margin: 0 156px">
							<button class="btn btn-small btn-primary" type="submit" id="add">Load File</button>
							<button class="btn btn-small" data-dismiss="modal" id="close">Cancel</button> </div>
					</fieldset>
				</form>
			</div>
		</div>
		
		<!-- Navbar -->
		<div id="banner" class="page-header"></div>
		<div class="navbar navbar-inverse navbar-fixed-top" style="position: relative">
		<div class="navbar-inner">
			<div class="container">
				<a class="brand" style="color: white">Cashier No: 0168</a>
				<a class="brand" style="color: white; margin: auto 165px">October 31, 2012  05:30:25 PM</a>
				<a class="brand" href="http://localhost/lalaines/cashier" style="color: white; margin-left: 30px; padding-right: 0px">Log out</a>
			</div>
		</div>
		
		<!-- Main -->
		<br>
		<div id="main-wrapper" style="width: 700px">
			<div style="margin: 0 auto; text-align: center">
				<h2>Income Statement</h2>
				<table id="table" style="text-align: left; color: black">
					<thead>
						<th></th>
						<th></th>
						<th></th>
					</thead>
					<tbody>
						<tr>
							<td>Revenues:</td>
						</tr>
						<tr>
							<td><a href="http://localhost/lalaines/audit_trail/trail_ag/index?ag=8&from=1-10-12&to=12-10-12">Sales Revenue</a></td>
							<td></td>
							<td>7850.00</td>
						</tr><tr>
							<td><a>Rental Revenue</a></td>
							<td></td>
							<td>300.00</td>
						</tr><tr>
							<td>Total Revenues	</td>
							<td></td>
							<td>8150.00</td>
						</tr>
						
						<tr>
							<td>Less: Expenses:</td>
						</tr><tr>
							<td style="padding-right: 20px">Deprecation Expense</td>
							<td>375.00</td>
						</tr><tr>
							<td>Salaries Expense</td>
							<td>1610.00</td>
						</tr><tr>
							<td>Insurance Expense</td>
							<td>100.00</td>
						</tr><tr>
							<td>Rent Expense</td>
							<td>1000.00</td>
						</tr><tr>
							<td>Supplies Expense</td>
							<td>1500.00</td>
						</tr><tr>
							<td>Utilities Expense</td>
							<td>230.00</td>
						</tr><tr>
							<td>Total Expenses</td>
							<td></td>
							<td style="padding-right: 20px">4365.00</td>
						</tr><tr>
							<td>Net Income</td>
							<td></td>
							<td>3785.00</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div id="footer">
			<span style="font-size: 11px; color: #b81d1d"><strong>Copyright &copy 2012. All Rights Reserved.</strong></span>
			<br>CSS powered by Twitter Bootstrap
			<br>Kristian Jacob Abad Lora. BS Computer Science 4
			<br>E-mail: kjalora92@yahoo.com | FB: <a href="http://facebook.com/kjhenyo21">kjhenyo21</a> | Twitter: <a href="http://twitter.com/pchan_august">pchan_august</a>
		</div>
	</body>
	
	<script src="http://localhost/lalaines/assets/scripts/jquery.js" type="text/javascript"></script>
	<script src="http://localhost/lalaines/assets/scripts/bootstrap.js" type="text/javascript"></script>
	<script src="http://localhost/lalaines/assets/scripts/bootstrap-datepicker.js" type="text/javascript"></script>
	<script>
		$('#due_date').datepicker();
		var today = new Date();
		document.getElementById('date_time').value = today;
		
		$('#file_path').click(function() {
			$('input[type=file]').click();
		});
	</script>
</html><?php }} ?>
<?php /*%%SmartyHeaderCode:6863514dcda9528c20-15705602%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f0af9a7bddcfdbc431b554acc01868611d73a494' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trailblazer\\application/views\\index.tpl',
      1 => 1364164176,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6863514dcda9528c20-15705602',
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_514f7e6a56a90',
  'has_nocache_code' => false,
  'cache_lifetime' => 1,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_514f7e6a56a90')) {function content_514f7e6a56a90($_smarty_tpl) {?>  <!--
 * Trailblazer Digital Accounting Audit Trail Program
 * @author Kristian Jacob Abad Lora <kjalora92@yahoo.com>
 * @date-created October 31, 2012
-->
	<head>
		<title>Trailblazer - Login</title>
	</head>
	
	<body>
		<!-- Main -->
		<h3 style="margin: 20px auto; text-align: center"> User Login </h3>
		<div id="main-wrapper" style="width: 300px">
							<div class="alert alert-error">
				  <button type="button" class="close" data-dismiss="alert">&times;</button>
				  <strong>Oops!</strong> Please enter a correct username and password.
				</div>
			
						<form id="form-login" class="form-horizontal" method="post" action="http://localhost/trailblazer/login">
				<div class="control-group">
					<label class="control-label" for="uname">Username</label>
					<div class="controls">
						<input type="text" id="uname" name="uname" placeholder="Username">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="password">Password</label>
					<div class="controls">
						<input type="password" id="password" name="password" placeholder="Password">
					</div>
				</div>
				<div class="control-group" style="margin-bottom: 0px">
					<div class="controls">
						<button type="submit" class="btn btn-primary">Log in</button>
					</div>
				</div>
			</form>
		</div>
		<link href="http://localhost/trailblazer/assets/stylesheets/bootstrap.css" rel="stylesheet"></link>
		<link href="http://localhost/trailblazer/assets/stylesheets/bootstrap-responsive.css" rel="stylesheet"></link>
		<link href="http://localhost/trailblazer/assets/stylesheets/main.css" rel="stylesheet"></link>
		<script src="http://localhost/trailblazer/assets/scripts/jquery.js" type="text/javascript"></script>
		<script src="http://localhost/trailblazer/assets/scripts/bootstrap.js" type="text/javascript"></script>
		<script>
			$('#form-login input').keydown(function(e) {
				if (e.keyCode == 13) {
					$('#form-login').submit();
				}
			});
		</script><?php }} ?>
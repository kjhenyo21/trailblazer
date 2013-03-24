<?php /*%%SmartyHeaderCode:6863514dcda9528c20-15705602%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f0af9a7bddcfdbc431b554acc01868611d73a494' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trailblazer\\application/views\\index.tpl',
      1 => 1364055226,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6863514dcda9528c20-15705602',
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_514ef8c476672',
  'has_nocache_code' => false,
  'cache_lifetime' => 1,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_514ef8c476672')) {function content_514ef8c476672($_smarty_tpl) {?>  <!--
 * Lalaine's Bookstore Computerized AIS
 * @author Kristian Jacob Abad Lora <kjalora92@yahoo.com>
 * @date-created October 31, 2012
-->
<!DOCTYPE html>
	<head>
		<title>Trailblazer - Login</title>
		<link href="http://localhost/trailblazer/assets/stylesheets/bootstrap.css" rel="stylesheet"></link>
		<link href="http://localhost/trailblazer/assets/stylesheets/bootstrap-responsive.css" rel="stylesheet"></link>
		<link href="http://localhost/trailblazer/assets/stylesheets/main.css" rel="stylesheet"></link>
	</head>
	
	<body>
		
		<!-- Navbar -->
		<div id="banner" class="page-header"></div>
		</div>
		
		<!-- Main -->
		<h3 style="margin: 20px auto; text-align: center"> User Login </h3>
		<div id="main-wrapper" style="width: 300px">
			
							<div class="alert alert-error">
				  <button type="button" class="close" data-dismiss="alert">&times;</button>
				  <strong>Oops!</strong> You are not authorized to access this application without logging in.
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
						<button type="submit" class="btn">Log in</button>
					</div>
				</div>
			</form>
		</div><?php }} ?>
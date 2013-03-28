<?php /* Smarty version Smarty-3.1.7, created on 2013-03-27 08:00:51
         compiled from "C:\xampp\htdocs\trailblazer\application/views\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:228965152992313a2c1-26550995%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '228965152992313a2c1-26550995',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'response' => 0,
    'accessStatus' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5152992369799',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5152992369799')) {function content_5152992369799($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'C:\\xampp\\htdocs\\trailblazer\\application\\libraries\\smarty\\plugins\\function.url.php';
?><!--
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
			<?php if ($_smarty_tpl->tpl_vars['response']->value!=''){?>
				<div class="alert alert-error">
				  <button type="button" class="close" data-dismiss="alert">&times;</button>
				  <strong>Oops!</strong> <?php echo $_smarty_tpl->tpl_vars['response']->value;?>

				</div>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['accessStatus']->value=="unauthorizedAccess"){?>
				<div class="alert alert-error">
				  <button type="button" class="close" data-dismiss="alert">&times;</button>
				  <strong>Oops!</strong> You are not authorized to access this application without logging in.
				</div>
			<?php }?>
			<form id="form-login" class="form-horizontal" method="post" action="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
login">
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
		<script>
			$('#form-login input').keydown(function(e) {
				if (e.keyCode == 13) {
					$('#form-login').submit();
				}
			});
		</script><?php }} ?>
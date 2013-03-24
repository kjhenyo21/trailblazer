<!--
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
			{if $response != ""}
				<div class="alert alert-error">
				  <button type="button" class="close" data-dismiss="alert">&times;</button>
				  <strong>Oops!</strong> {$response}
				</div>
			{/if}

			{if $accessStatus == "unauthorizedAccess"}
				<div class="alert alert-error">
				  <button type="button" class="close" data-dismiss="alert">&times;</button>
				  <strong>Oops!</strong> You are not authorized to access this application without logging in.
				</div>
			{/if}
			<form id="form-login" class="form-horizontal" method="post" action="{url}login">
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
		<link href="{url}assets/stylesheets/bootstrap.css" rel="stylesheet"></link>
		<link href="{url}assets/stylesheets/bootstrap-responsive.css" rel="stylesheet"></link>
		<link href="{url}assets/stylesheets/main.css" rel="stylesheet"></link>
		<script src="{url}assets/scripts/jquery.js" type="text/javascript"></script>
		<script src="{url}assets/scripts/bootstrap.js" type="text/javascript"></script>
		<script>
			$('#form-login input').keydown(function(e) {
				if (e.keyCode == 13) {
					$('#form-login').submit();
				}
			});
		</script>
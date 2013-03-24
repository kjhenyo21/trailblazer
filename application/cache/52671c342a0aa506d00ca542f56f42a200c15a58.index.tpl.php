<?php /*%%SmartyHeaderCode:19485514e7ec767f865-24683265%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52671c342a0aa506d00ca542f56f42a200c15a58' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trailblazer\\application/views\\profile\\index.tpl',
      1 => 1364162952,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19485514e7ec767f865-24683265',
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_514f79caa60ab',
  'has_nocache_code' => false,
  'cache_lifetime' => 1,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_514f79caa60ab')) {function content_514f79caa60ab($_smarty_tpl) {?>  <!--
 * Trailblazer Digital Accounting Audit Trail Program
 * @author Kristian Jacob Abad Lora <kjalora92@yahoo.com>
 * @date-created October 31, 2012
-->
	<head>
		<title>Trailblazer - Profile</title>
	</head>
	
	<body>
		<!-- Main -->
		<div id="main-wrapper-profile">
			<div id="form-container">
								<form id="profile" class="form-horizontal">
					<h4>User Info</h4>
											<table style="width: 100%">
							<td style="width: 50%">
								<div class="field-group" id="group-id">
									<label class="field-label" for="id">ID Number<span class="asterisk">*</span></label>
									<div class="control">
										<input type="text" class="span2" id="id" name="id" value="2009-08015" placeholder="ID Number">
									</div>
								</div>
								<div class="field-group" id="group-lname">
									<label class="field-label" for="lname">Last Name<span class="asterisk">*</span></label>
									<div class="control">
										<input type="text" id="lname" name="lname" value="Lora" onChange="lnameOnChange(); return false;" placeholder="Last Name">
									</div>
								</div>
								<div class="field-group" id="group-fname">
									<label class="field-label" for="fname">First Name<span class="asterisk">*</span></label>
									<div class="control">
										<input type="text" id="fname" name="fname" value="Kristian Jacob" placeholder="First Name">
									</div>
								</div>
								<div class="field-group">
									<label class="field-label" for="mname">Middle Name</label>
									<div class="control">
										<input type="text" id="mname" name="mname" value="Abad" placeholder="Middle Name">
									</div>
								</div>
								<div class="field-group">
									<label class="field-label" for="sex">Sex</label>
									<div class="control">
										<select id="sex" name="sex" style="width: 100px">
																							<option selected="selected">Male</option>
												<option>Female</option>
																					</select>
									</div>
								</div>
							</td>
							<td style="width: 50%">
								<div class="field-group">
									<label class="field-label" for="bdate">Birthdate</label>
									<div class="control">
										<input type="text" id="bdate" name="bdate" style="width: 80px" value="1992-12-12 00:00:00" placeholder="yyyy-mm-dd">
									</div>
								</div>
								<div class="field-group">
									<label class="field-label" for="address">Address</label>
									<div class="control">
										<input type="text" class="span4" id="address" name="address" value="Cebu" placeholder="Address">
									</div>
								</div>
								<div class="field-group">
									<label class="field-label" for="contact">Contact</label>
									<div class="control">
										<input type="text" class="span2" id="contact" name="contact" value="09327331859" placeholder="Phone/Mobile Number">
									</div>
								</div>
								<div class="field-group">
									<label class="field-label" for="email">E-mail</label>
									<div class="control">
										<input type="text" id="e-mail" name="email" value="kjalora92@yahoo.com"placeholder="E-mail Address">
									</div>
								</div>
							</td>
						</table>
						
						<hr>
						
						<h4>Company Info</h4>
						<table style="width: 100%">
							<td style="width: 50%">
								<div class="field-group" id="group-license_no">
									<label class="field-label" for="license_no">License No.<span class="asterisk">*</span></label>
									<div class="control">
										<input type="text" class="span2" id="license_no" name="license_no" value="4763467" placeholder="License Number">
									</div>
								</div>
								<div class="field-group" id="group-cname">
									<label class="field-label" for="cname">Name<span class="asterisk">*</span></label>
									<div class="control">
										<input type="text" id="cname" name="cname" value="Lalaine's Bookstore" placeholder="Company Name">
									</div>
								</div>
								<div class="field-group">
									<label class="field-label" for="caddress">Address</label>
									<div class="control">
										<input type="text" class="span4" id="caddress" name="caddress" value="Naval, Biliran" placeholder="Address">
									</div>
								</div>
							</td>
						</table>
						
						<hr>
						
						<h4>User Account</h4>
						<table style="width: 100%">
							<td style="width: 50%">
								<div class="field-group">
									<label class="field-label" for="position">Position</label>
									<div class="control">
										<input type="text" id="position" name="position" placeholder="Company" value="kjalora92@yahoo.com" Position">
									</div>
								</div>
								<div class="field-group" id="group-uname">
									<label class="field-label" for="uname">Username<span class="asterisk">*</span></label>
									<div class="control">
										<input type="text" class="error" id="uname" name="uname" value="kjhenyo21" placeholder="Username">
									</div>
								</div>
							</td>
							<td style="width: 50%">
								<div class="field-group" id="group-password">
									<label class="field-label" for="password" style="width: 140px">Password<span class="asterisk">*</span></label>
									<div class="control">
										<input type="password" id="password" name="password" value="iluvuJesus" placeholder="Password" disabled="disabled">
									</div>
									<div id="changePass"><a href="#" style="font-size: 9pt" onClick="changePass(); return false;">Change password</a></div>
								</div>
								<div class="field-group" id="group-cpassword" style="display: none">
									<label class="field-label" for="cpassword" style="width: 140px">Confirm Password<span class="asterisk">*</span></label>
									<div class="control">
										<input type="password" id="cpassword" name="cpassword" value="iluvuJesus" placeholder="Confirm Password">
									</div>
								</div>
							</td>
						</table>
										<hr style="margin-bottom: 2px">
					<div style="font-style: italic; font-size: 8pt; color: red; margin-bottom: 10px">* - required fields</div>
					<input type="hidden" name="no" value="1"/>
					<input type="hidden" name="id1" value="1"/>
					<div class="field-group" style="margin-bottom: 0px; text-align: center">
						<div class="control">
							<a type="button" id="submit" class="btn" disabled="disabled">Save changes</a>
							<a href="http://localhost/trailblazer/" type="button" id="back" class="btn">Back</a>
						</div>
					</div>
				</form>
			</div>
		</div>
		<link href="http://localhost/trailblazer/assets/stylesheets/bootstrap.css" rel="stylesheet"></link>
		<link href="http://localhost/trailblazer/assets/stylesheets/bootstrap-responsive.css" rel="stylesheet"></link>
		<link href="http://localhost/trailblazer/assets/stylesheets/main.css" rel="stylesheet"></link>
		<link href="http://localhost/trailblazer/assets/stylesheets/forms.css" rel="stylesheet"></link>
		<link href="http://localhost/trailblazer/assets/stylesheets/datepicker.css" rel="stylesheet"></link>
		<script src="http://localhost/trailblazer/assets/scripts/jquery.js" type="text/javascript"></script>
		<script src="http://localhost/trailblazer/assets/scripts/bootstrap.min.js" type="text/javascript"></script>
		<script src="http://localhost/trailblazer/assets/scripts/bootstrap-datepicker.js" type="text/javascript"></script>
		<script>
			var id = $('#id').val();
			var lname = $('#lname').val();
			var fname = $('#fname').val();
			var license_no = $('#license_no').val();
			var cname = $('#cname').val();
			var uname = $('#uname').val();
			var password = $('#password').val();
			var cpassword = $('#cpassword').val();
			var form = $('#profile');
			
			$('#bdate').datepicker({
				format: 'yyyy-mm-dd'
			});
			
			 
			val = $('#lname').val();
			if (val != '') {
				$('#submit').removeAttr("disabled");
				$('#submit').addClass("btn-primary");
				var js = "submitIt(); return false;";
				var open = "(function(){";
				var close = "});";
				var newclick = eval( open + js + close );
				$("#submit").get(0).onclick = newclick;
			} else {
				$('#submit').attr("disabled", "disabled");
				$('#submit').removeClass("btn-primary");
				$("#submit").get(0).onclick = null;
			}

			function lnameOnChange() {
				val = $('#lname').val();
				if (val != '') {
					$('#submit').removeAttr("disabled");
					$('#submit').addClass("btn-primary");
					var js = "submitIt(); return false;";
					var open = "(function(){";
					var close = "});";
					var newclick = eval( open + js + close );
					$("#submit").get(0).onclick = newclick;
				} else {
					$('#submit').attr("disabled", "disabled");
					$('#submit').removeClass("btn-primary");
					$("#submit").get(0).onclick = null;
				}
			}
			
			
			function changePass() {
				$('#changePass').remove();
				$('#group-password').append('<div id="changePass"><a href="#" style="font-size: 9pt" onClick="undo(); return false;">Undo</a></div>');
				$('#password').removeAttr("disabled");
				$('#cpassword').val('');
				$('#group-cpassword').show();
			}
			
			function undo() {
				$('#changePass').remove();
				$('#group-password').append('<div id="changePass"><a href="#" style="font-size: 9pt" onClick="changePass(); return false;">Change password</a></div>');
				$('#password').val('iluvuJesus');
				$('#cpassword').val('iluvuJesus');
				$('#password').attr("disabled", "disabled");
				$('#group-cpassword').hide();
			}
			
			function submitIt() {
				id = $('#id').val();
				lname = $('#lname').val();
				fname = $('#fname').val();
				license_no = $('#license_no').val();
				cname = $('#cname').val();
				uname = $('#uname').val();
				password = $('#password').val();
				cpassword = $('#cpassword').val();
				$('#password').removeAttr("disabled");
				if ((id=="") || (lname=="") || (fname=="") || (license_no=="") || (cname=="") || (uname=="") || (password=="") || (cpassword=="")) {
					if (id=="")
						$('#group-id').addClass("error");
					else $('#group-id').removeClass("error");
					
					if (lname=="")
						$('#group-lname').addClass("error");
					else $('#group-lname').removeClass("error");
					
					if (fname=="")
						$('#group-fname').addClass("error");
					else $('#group-fname').removeClass("error");
					
					if (license_no=="")
						$('#group-license_no').addClass("error");
					else $('#group-license_no').removeClass("error");
					
					if (cname=="")
						$('#group-cname').addClass("error");
					else $('#group-cname').removeClass("error");
					
					if (uname=="")
						$('#group-uname').addClass("error");
					else $('#group-uname').removeClass("error");
					
					if (password=="")
						$('#group-password').addClass("error");
					else $('#group-password').removeClass("error");
					
					if (cpassword=="")
						$('#group-cpassword').addClass("error");
					else $('#group-cpassword').removeClass("error");
					
					if ((password!="") && (cpassword!="")) {
						if (cpassword != password) {
							$('#group-password').addClass("error");
							$('#group-cpassword').addClass("error");
							$('#cpassword').after('<span id="error-text">Does not match!</span>');
						} else {
							$('#group-password').removeClass("error");
							$('#group-cpassword').removeClass("error");
							$('#error-text').remove();
						}
					}
					 $("html, body").animate({ scrollTop: 0 }, "slow");
				} else {
					if ((password!="") && (cpassword!="")) {
						if (cpassword != password) {
							$('#group-password').addClass("error");
							$('#group-cpassword').addClass("error");
							$('#cpassword').after('<span id="error-text">Does not match!</span>');
						} else {
							$('#group-password').removeClass("error");
							$('#group-cpassword').removeClass("error");
							$('#error-text').remove();
							
							$.ajax({
								type: "POST",
								url: 'profile/index/updateProfile',
								data:  $("#profile").serialize(),
								success: function(data){
									window.location.href="http://localhost/trailblazer/profile?response=Profile has been successfully saved!";
									$('#password').attr("disabled", "disabled");
								},
								error: function(data) {
									$('#password').attr("disabled", "disabled");
									$('#response').remove();
									$('#profile').prepend('<div id="response" class="alert alert-error" style="margin: 0 auto; text-align:center; width: 280px"><button type="button" class="close" data-dismiss="alert">&times;</button><i class="icon-thumbs-down"></i> Saving unsuccessful! </div>')
									$("html, body").animate({ scrollTop: 0 }, "slow");
									window.history.pushState("saving unsuccessful", "Profile", "http://localhost/trailblazer/profile");
								}
							});
						}
					}
				}
			}
		</script><?php }} ?>
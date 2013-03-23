<!--
 * WADWE Computerized AIS
 * @author Kristian Jacob Abad Lora <kjalora92@yahoo.com>
 * @date-created October 31, 2012
-->
	<head>
		<title>Trailblazer - Home</title>
	</head>
	
	<body>
		<!-- Modal for Loading a File for Audit Trail-->
		<div id="load_file" class="modal hide fade" style="margin-top: -50px; width: 480px">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true" onClick="closeIt(); return false;">&times;</button>
				<h3>Load File</h3>
			</div>
			<div class="modal-body">
				<form id="load-file-form" class="form-horizontal" method="post" action="{url}audit_trail/index/readFile">
					<fieldset>
						<div style="margin: 0 35px">
							<div class="field-group" id="group-file">
								<label class="field-label" for="file">File</label>
								<div class="control">
									<input type="file" class="span3" id="file" name="file" onChange="onChangeFile(); return false;" placeholder="Enter file directory">
								</div>
							</div>
							<div class="field-group" id="group-doc">
								<label class="field-label" for="doc">FR Kind</label>
								<div class="control">
									<select class="span3" id="doc" name="doc">
										<option></option>
										<option>Income Statement</option>
										<option>Balance Sheet</option>
									</select>
								</div>
							</div>
						</div>
						<div style="margin: 0 156px">
							<button class="btn btn-small" type="submit" id="add" disabled="disabled">Load File</button>
							<button class="btn btn-small" data-dismiss="modal" id="close" onClick="closeIt(); return false;">Cancel</button> </div>
					</fieldset>
				</form>
			</div>
		</div>
		
		<!-- Main -->
		<h3 style="margin: 20px auto; text-align: center"> Switchboard </h3>
		<div id="main-wrapper" style="width: 300px">
			<div style="margin: 0 auto; text-align: center">
				<a  href="#load_file" data-toggle="modal" role="button" class="btn" style="width: 190px; margin-bottom:10px">Start a Trail!</a>				
				<br><a href="{url}audit_trail/messages" role="button" class="btn" style="width: 190px; margin-bottom:10px">Messages</a>
				<br><a href="{url}audit_trail/profile" role="button" class="btn" style="width: 190px; margin-bottom:10px">Profile</a>
				<br><a href="{url}audit_trail/preferences" role="button" class="btn" style="width: 190px; margin-bottom:10px">Preferences</a>
				<br><a href="{url}index/logout" role="button" class="btn" style="width: 190px">Logout</a>
			</div>
		</div>
	
		<link href="{url}assets/stylesheets/bootstrap.css" rel="stylesheet"></link>
		<link href="{url}assets/stylesheets/bootstrap-responsive.css" rel="stylesheet"></link>
		<link href="{url}assets/stylesheets/main.css" rel="stylesheet"></link>
		<link href="{url}assets/stylesheets/forms.css" rel="stylesheet"></link>
		<script src="{url}assets/scripts/jquery.js" type="text/javascript"></script>
		<script src="{url}assets/scripts/bootstrap.min.js" type="text/javascript"></script>
		<script>
			function closeIt() {
				document.getElementById('file').value = "";
				$('#add').attr("disabled", "disabled");
				$('#add').removeClass("btn-primary");
			}
			function onChangeFile() {
				$('#add').removeAttr("disabled");
				$('#add').addClass("btn-primary");
			}
		</script>
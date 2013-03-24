<!--
 * Trailblazer Digital Accounting Audit Trail Program
 * @author Kristian Jacob Abad Lora <kjalora92@yahoo.com>
 * @date-created October 31, 2012
-->
	<head>
		<title>Trailblazer - File Directory</title>
	</head>
	
	<body>
		<!-- Modal for Non-Existing Paths Notification-->
		{if ($nonExistentPaths > 0) }
			<div id="notif" class="modal hide fade in" style="margin-top: -100px; width: 480px">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true" onClick="closeNotif(); return false;">&times;</button>
					<h3 style="color: #DB1900">Paths Do Not Exist!</h3>
				</div>
				<div class="modal-body">
					<p>There are <span style="color: #DB1900; font-weight: bold">{$nonExistentPaths}</span> document path(s) that is/are no longer existing. Check this/these document(s) in your computer and update its/their path(s) in this system now or you may udpate it/them later at the Preferences tab.</p>
					<p><strong>Warning!</strong> Not updating the path of these documents will cause this application not to function properly.</p>
				</div>
				<div class="modal-footer">
					<div style="margin: 0 auto">
						<a href="{url}preferences" class="btn btn-primary" type="button" id="update">OK, I'll update now</a>
						<button class="btn" data-dismiss="modal" id="closeNotif" onClick="closeNotif(); return false;">I'll update later</button>
					</div>
				</div>
			</div>
		{/if}
		
		<!-- Modal for Modified Files Notification-->
		{if ($noOfModFiles > 0) }
			<div id="notif-mod" class="modal hide fade in" style="margin-top: -100px; width: 480px">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true" onClick="closeNotif(); return false;">&times;</button>
					<h3 style="color: #DB1900">File(s) Modified!</h3>
				</div>
				<div class="modal-body">
					<p><span style="color: #DB1900; font-weight: bold">{$noOfModFiles}</span> file(s) have been modified (hover on filename to know the filepath):</p>
					<pre style="padding: 5px 30px;">{foreach $modFiles as $mf}<i class="icon-file"></i> <span class="link" data-original-title="{$mf['path']}">{$mf['filename']}   on   {$mf['date_modified']}</span><br>{/foreach}</pre>
					<p>Do you want to update the system on these files now? You can always update the system via Preferences.</p>
				</div>
				<div class="modal-footer">
					<div style="margin: 0 auto">
						<a class="btn btn-primary" type="button" id="update" onClick="updateSystem(); return false;">OK, I'll update now</a>
						<button class="btn" data-dismiss="modal" id="closeNotif" onClick="closeNotifMod(); return false;">I'll update later</button>
					</div>
				</div>
			</div>
		{/if}
		
		<!-- Main -->
		<br>
		<div id="main-wrapper" style="width: 950px; padding: 40px 10px;">
			<div id="navi" style="float: right; font-size: 14pt">
				<a href="#" onclick="history.go(-1);return false;"><i class="icon-arrow-left"></i></a>
				<span> | </span>
				<a href="{url}audit_trail"><i class="icon-home"></i></a>
			</div>
			<div id="files" style="margin: 0 auto; text-align: center">
				<h2>File Directory</h2>
				<br>
				{if ($files)}
					<table id="table" class="table table-striped" style="text-align: left; color: black">
						<thead>
							<th style="text-align: center">Filename</th>
							<th style="text-align: center">Path</th>
							<th style="text-align: center">Date Created</th>
							<th style="text-align: center">Date Last Modified</th>
							<th style="text-align: center">Date Last Accessed</th>
							<th style="text-align: center">Size (Bytes)</th>
						</thead>
						<tbody>			
							{foreach $files as $f}
								<tr>
									<td style="text-align: center; vertical-align: center">{$f['filename']}</td>
									<td style="text-align: right; vertical-align: center">{$f['path']}</td>
									<td style="text-align: center; vertical-align: center">{$f['date_created']}</td>
									<td style="text-align: center; vertical-align: center">{$f['date_modified']}</td>
									<td style="text-align: center; vertical-align: center">{$f['date_accessed']}</td>
									<td style="text-align: center; vertical-align: center">{$f['size']}</td>
								</tr>
							{/foreach}
						</tbody>
					</table>
				{else}
				<table class="table table-striped">
					<thead>
						<th style="text-align: center">Filename</th>
						<th style="text-align: center">Path</th>
						<th style="text-align: center">Date Created</th>
						<th style="text-align: center">Date Last Modified</th>
						<th style="text-align: center">Date Last Accessed</th>
						<th style="text-align: center">Size (Bytes)</th>
					</thead>
					</table>
					<table class="table table-striped">
						<tbody>
							<tr>
								<td><div style="font-style: italic">No file(s) to display.</div> </td>
							</tr>
						</tbody>
					</table>
				{/if}
			</div>
		</div>
		<link href="{url}assets/stylesheets/bootstrap.css" rel="stylesheet"></link>
		<link href="{url}assets/stylesheets/bootstrap-responsive.css" rel="stylesheet"></link>
		<link href="{url}assets/stylesheets/main.css" rel="stylesheet"></link>
		<link href="{url}assets/stylesheets/forms.css" rel="stylesheet"></link>
		<script src="{url}assets/scripts/jquery.js" type="text/javascript"></script>
		<script src="{url}assets/scripts/bootstrap.min.js" type="text/javascript"></script>
		<script>
			$('.link').tooltip({
				animation: true,
				placement: 'top'
			});
			
			if (({$nonExistentPaths} > 0) || ({$noOfModFiles} > 0)) {
				$('body').append('<div id="backdropping" class="modal-backdrop fade in"></div> ');
				if ({$nonExistentPaths} > 0)
					$('#notif').show();
				else if ({$noOfModFiles} > 0)
					$('#notif-mod').show();
			} else $('#backdropping').remove();
			
			function closeNotif() {
				$('#notif').removeClass('in');
				$('#notif').addClass('hide');
				$('#backdropping').remove();
			}			
			
			function closeNotifMod() {
				$('#notif-mod').removeClass('in');
				$('#notif-mod').addClass('hide');
				$('#backdropping').remove();
			}
			
			function updateSystem() {
				$.ajax({
					type: "POST",
					url: 'preferences/index/searchFiles',
					data: $("#pref").serialize(),				
					success: function(data){
						alert("Update succesfull!");
						closeNotifMod();
					},
					error: function(data) {
						alert("Update unsuccesfull!");
					}
				});
			}
			
		</script>
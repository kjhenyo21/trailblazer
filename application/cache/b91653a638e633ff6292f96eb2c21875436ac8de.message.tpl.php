<?php /*%%SmartyHeaderCode:23425514bbe8b4ee512-63566459%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b91653a638e633ff6292f96eb2c21875436ac8de' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trailblazer\\application/views\\audit_trail\\message.tpl',
      1 => 1364029285,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23425514bbe8b4ee512-63566459',
  'cache_lifetime' => 1,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_514d905e79b28',
  'has_nocache_code' => false,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_514d905e79b28')) {function content_514d905e79b28($_smarty_tpl) {?><!--
 * WADWE Computerized AIS
 * @author Kristian Jacob Abad Lora <kjalora92@yahoo.com>
 * @date-created October 31, 2012
-->
	<body onload="JavaScript:refresh(3000);">
		<div id="messages">
		<!-- Modal for Messages-->
					</div>

		<script src="http://localhost/trailblazer/assets/scripts/date-format.js" type="text/javascript"></script>
		<script>
			var now = new Date();
			var today = dateFormat(now, 'yyyy-mm-dd H:MM:ss');
			var no = 0;
			var row = 0;
			var rowLeft = 0;
			var ignored = true;
			$('#ignored-message0').focus();
			
			function refresh(timeoutPeriod) {
				var time = timeoutPeriod;
				$.ajax({
					type: "GET",
					url : 'index/checkNewMessages',
					dataType: "json",
					success: function(data){
						console.log('data: '+data.latest_count);
						
						no = data.latest_count;
						console.log('current: '+no);
						row = data.all;
						rowLeft = data.all;
						
						if (data.latest_count != 0) {
							//alert('hey');
							//setTimeout("location.reload(true);",3600000);
							$('#messages').load('ignored_messages');
							$('body').append('<div id="messages"></div>');	
								for (i=0; i < data.all; i++) {
									//show
									$('#ignored-message' + i).removeClass('hide');
									$('#ignored-message' + i).addClass('in');
								}
						} else {
							if (ignored) {
								//$('body').append('<div id="backdropping" class="modal-backdrop fade in"></div> ');	
								for (i=0; i < row; i++) {
									//show
									$('#ignored-message' + i).removeClass('hide');
									$('#ignored-message' + i).addClass('in');
								}
							}
						}
						
					}
				});
				setTimeout("refresh(10000)",timeoutPeriod);
			}
			
			function confirmMessage(id, ref) {
				rowLeft = rowLeft - 1;
				console.log(rowLeft);
				$.ajax({
					type: "GET",
					url : 'index/confirmMessage?id=' + ref
				});
				
				if (rowLeft == 0) {
					//$('#backdropping').remove();
					ignored = false;
					$('#ignored-message' + id).removeClass('in');
					$('#ignored-message' + id).addClass('hide');
				} else {
					ignored = false;
					$('#ignored-message' + id).removeClass('in');
					$('#ignored-message' + id).addClass('hide');
				}
			}
			
			function closeMessage(id, ref, no) {
				//rowLeft = rowLeft - 1;
				//console.log(rowLeft);
				$.ajax({
					type: "GET",
					url : 'index/ignoreMessage?id=' + ref
				});
				
				$.ajax({
					url: 'log_messages/writeToLog?data=' + today + ' ignored message with Ref. No. ' + no,
					type: "GET",
					success: function() {
					}
				});
				
				//if (rowLeft == 0) {
					//$('#backdropping').remove();
				//	ignored = false;
				//	$('#ignored-message' + id).removeClass('in');
				//	$('#ignored-message' + id).addClass('hide');
				//} else {
					ignored = false;
					$('#ignored-message' + id).removeClass('in');
					$('#ignored-message' + id).addClass('hide');
					$('#ignored-message' + id).remove();
				//}
			}
		</script><?php }} ?>
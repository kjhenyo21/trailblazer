<?php /*%%SmartyHeaderCode:325335152921f5eb205-01938401%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b91653a638e633ff6292f96eb2c21875436ac8de' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trailblazer\\application/views\\audit_trail\\message.tpl',
      1 => 1364166312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '325335152921f5eb205-01938401',
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_51546c7517bda',
  'has_nocache_code' => false,
  'cache_lifetime' => 1,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51546c7517bda')) {function content_51546c7517bda($_smarty_tpl) {?><!--
 * Trailblazer Digital Accounting Audit Trail Program
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
					url: 'http://localhost/trailblazer/messages/log_messages/writeToLog?data=' + today + ' admin ignored message with Ref. No. ' + no,
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
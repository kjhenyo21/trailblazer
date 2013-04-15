				<div id="audit-logs">
					{if ($logs)}
						<table id="table" class="table table-striped" style="text-align: left; color: black">
							<thead>
								<th style="text-align: center">Date</th>
								<th style="text-align: center">Time</th>
								<th style="text-align: center">User</th>
								<th style="text-align: center">Action</th>
								<th style="text-align: center">Transaction Date</th>
								<th style="text-align: center">Account</th>
							</thead>
							<tbody>			
								{foreach $logs as $i}
									<tr>
										<td style="text-align: center; vertical-align: center">{$i['date']}</td>
										<td style="text-align: center; vertical-align: center">{$i['time']}</td>
										<td style="text-align: center; vertical-align: center">{$i['user']}</td>
										<td style="text-align: center; vertical-align: center">{$i['action']}</td>
										<td style="text-align: center; vertical-align: center">{$i['trans_date']}</td>
										<td style="text-align: left; vertical-align: center">{$i['account']}</td>
									</tr>
								{/foreach}
							</tbody>
						</table>
					{else}
					<table class="table table-striped">
						<thead>
							<th style="text-align: center">Date</th>
								<th style="text-align: center">Time</th>
								<th style="text-align: center">User</th>
								<th style="text-align: center">Action</th>
								<th style="text-align: center">Transaction Date</th>
								<th style="text-align: center">Account</th>
						</thead>
						</table>
						<table class="table table-striped">
							<tbody>
								<tr>
									<td><div style="font-style: italic">No logs to display.</div> </td>
								</tr>
							</tbody>
						</table>
					{/if}
				</div>
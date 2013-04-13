					{$row = 0}
					{if ($info)}
						<table id="table" class="table table-hover" style="text-align: left; color: black">
							<thead>
								{if ($headings)}
									{foreach $headings as $h}
										<th style="text-align: center">{$h}</th>
									{/foreach}
								{/if}
								<th>Audit Trail Results</th>
								<!--<th></th>-->
							</thead>
							<tbody>
								{foreach $info as $i}
									{$url = "or_no={$i[1]}&amt={$i[2]}&name={$i[3]}&address={$i[4]}&contact={$i[5]}"}
									{if $row == 0}
										<tr>
											<td style="text-align: center; vertical-align: center">{$i[0]}</td>
											<td style="text-align: center; vertical-align: center"><a href="#trans-details{$i[1]}" data-toggle="modal" onClick="getDetails('{$url}'); return false;">{$i[1]}</a></td>
											<td class="amount" style="text-align: right;">Php {$i[2]|number_format:2:".":","}</td>
											<td style="text-align: center; vertical-align: center">{$i[3]}</td>
											<td style="text-align: center; vertical-align: center">{$i[4]}</td>
											<td style="text-align: center; vertical-align: center">{$i[5]}</td>
											<td style="text-align: center; vertical-align: center; width: 30px"><a href="{url}audit_trail/summary?ref={$ref}&or_no={$i[1]}&acct={$acct}&fs={$fs}&fs_amt={$fs_amt}&fs_file={$fs_file}&ledger={$ledger}&lg_ref={$lg_ref}&lg_desc={$lg_desc}&lg_debit={$lg_debit}&lg_credit={$lg_credit}&lg_total_amt={$lg_total_amt}&journal={$journal}&jl_ref={$jl_ref}&jl_desc={$jl_desc}&jl_amt={$jl_amt}&trans={$doc}&trans_amt={$i[2]}&trans_total_amt={$orig_trans_total_amt}">View</a></td>
											<!--<td style="text-align: center; vertical-align: center; width: 30px"><a>System Audit</a></td>-->
										</tr>
									{else}
										<tr style="vertical-align: center;">
											<td style="text-align: center; vertical-align: center important!;">{$i[0]}</td>
											<td style="text-align: center; vertical-align: center;"><a href="#trans-details{$i[1]}" data-toggle="modal" onClick="getDetails('{$url}'); return false;">{$i[1]}</a></td>
											<td class="amount" style="text-align: right;">{$i[2]|number_format:2:".":","}</td>
											<td style="text-align: center; vertical-align: center;">{$i[3]}</td>
											<td style="text-align: center; vertical-align: center;">{$i[4]}</td>
											<td style="text-align: center; vertical-align: center;">{$i[5]}</td>
											<td style="text-align: center; vertical-align: center; width: 30px"><a href="{url}audit_trail/summary?ref={$ref}&or_no={$i[1]}&acct={$acct}&fs={$fs}&fs_amt={$fs_amt}&fs_file={$fs_file}&ledger={$ledger}&lg_ref={$lg_ref}&lg_desc={$lg_desc}&lg_debit={$lg_debit}&lg_credit={$lg_credit}&lg_total_amt={$lg_total_amt}&journal={$journal}&jl_ref={$jl_ref}&jl_desc={$jl_desc}&jl_amt={$jl_amt}&trans={$doc}&trans_amt={$i[2]}&trans_total_amt={$orig_trans_total_amt}">View</a></td>
											<!--<td style="text-align: center; vertical-align: center;"><a>System Audit</a></td>-->
										</tr>
									{/if}
									{$row = $row + 1}
								{/foreach}
								<tr id=total-trans-amt>
									<td></td>
									<td style="font-weight: bold; text-align: right">TOTAL</td>
									<td class="amount" style="font-weight: bold">Php {$trans_total_amt|number_format:2:".":","}</td>								
									<td></td>
									<td></td>
									<td><a href="#select-sample-modal" class="btn btn-primary btn-small" data-toggle="modal" style="text-align: center" onClick="openSelectSample(); return false;">Select a Sample</a></td>
									<td></td>
								</tr>
							</tbody>
						</table>
					{else}
						<table id="table" class="table table-striped" style="text-align: left; color: black">
							<thead>
								<th style="text-align: center">Date</th>
								<th style="text-align: center">OR No</th>
								<th style="text-align: center">Amount</th>
								<th style="text-align: center">Name</th>
								<th style="text-align: center">Contact</th>
								<th style="text-align: center">Address</th>
								<th>Audit Trail Results</th>
								<!--<th></th>-->
							</thead>
						</table>
						<table class="table table-striped">
							<tbody>
								<tr>
									<td><div style="font-style: italic; text-align: left">{$error_msg} The audit trail ends here. Click <a href="{url}audit_trail/summary?acct={$acct}&fs={$fs}&fs_amt={$fs_amt}&fs_file={$fs_file}&ledger={$ledger}&lg_ref={$lg_ref}&lg_desc={$lg_desc}&lg_debit={$lg_debit}&lg_credit={$lg_credit}&lg_amt={$lg_amt}&lg_total_amt={$lg_total_amt}&journal={$journal}&jl_ref={$jl_ref}&jl_desc={$jl_desc}&jl_amt={$jl_amt}">here</a> to view results.</div></td>
								</tr>
							</tbody>
						</table>
					{/if}
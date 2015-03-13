<div class="container">
	<div class="row">

		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="add-polling-station">
				<button  type="button" class="btn btn-success pull-right" data-toggle="modal" data-target="#addPollingStationResult" data-whatever="@mdo">
				<i class="fa fa-plus"></i>&nbsp;Add polling station result
				</button>
			</div>
		</div>
	</div>
	<div class="row">

		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<!-- BEGIN BORDERED TABLE PORTLET-->
			<div class="portlet box users-table">
				<div class="portlet-title">
					<div class="caption">
						<!--<i class="fa fa-user"></i>-->
						Candidate Result
					</div>
				</div>
				<div class="portlet-body table-responsive candidate-result">
					<table class="table  table-bordered table-hover ">
						<thead>
							<tr>
								<th> # </th>
								<th> UNIQUE WARD CODE </th>
								<th> JCI SEN. TUNDE ANIFOWOSE-KELANI </th>
								<th> RAFIU SALAU </th>
								<th> ALH. GANIYU O. GALADIMA </th>
								<th> DR. MANI IBRAHIM AHMAD </th>
								<th> AYENI MUSA ADEBAYO </th>
								<th> MUHAMMADU BUHARI </th>
								<th> CHIEF SAM EKE </th>
								<th> HIGH CHIEF AMBROSE N. ALBERT OWURU</th>
								<th> COMFORT  OLUREMI SONAIYA </th>
								<th> CHIEF MARTIN ONOVO</th>
								<th> GOODLUCK EBELE JONATHAN</th>
								<th> ALLAGOA KELVIN CHINEDU</th>
								<th> GODSON MGBODILE OHAENYEM OKOYE</th>
								<th> CHIEF (DR.) CHEKWAS OKORIE</th>
								<th> STATUS</th>
								<th data-filterable="false" class="text-center hidden-xs hidden-sm sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label="ACTIONS" style="width: 150px;padding: 0px 20px 0px 20px;">ACTIONS</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td> 1 </td>
								<td> AB101001</td>
								<td> 790,000 </td>
								<td> 350,000 </td>
								<td> 4,000,158 </td>
								<td> 634,920</td>
								<td> 3,000,000 </td>
								<td> 1,283,900</td>
								<td> 598,280 </td>
								<td> 2,000,000 </td>
								<td> 500,230 </td>
								<td> 3,000,000</td>
								<td> 900,384</td>
								<td> 900,384</td>
								<td> 589,204</td>
								<td> 1,000,700</td>	
								<td> <span class="label label-warning">
										Partially Reported </span></td>
								<td class="text-center">
									<ul class="list-unstyled list-inline">
										<li><a  href="candidate-result-edit.php" class="btn btn-xs btn-success" data-placement="top" title="Edit"><i class="fa fa-pencil"></i></a></li>
										<li><a href="#" class="btn btn-warning" data-toggle="modal" data-target="#sendResult" data-whatever="@mdo" title="Send"><i class="fa fa-send"></i></a></li>
									</ul>
                                </td>
							</tr>
							<tr>
								<td> 2 </td>
								<td> AB101002</td>
								<td> 0 </td>
								<td> 0</td>
								<td> 0 </td>
								<td> 0</td>
								<td> 0 </td>
								<td> 0</td>
								<td> 0 </td>
								<td> 0 </td>
								<td> 0</td>
								<td> 0</td>
								<td> 0</td>
								<td> 0</td>
								<td> 0</td>
								<td> 0</td>	
								<td> <span class="label label-danger">
										Not Reported </span>
								</td>
								<td class="text-center">
									<ul class="list-unstyled list-inline">
										<li><a  href="candidate-result-edit.php" class="btn btn-xs btn-success" data-placement="top" title="Edit"><i class="fa fa-pencil"></i></a></li>
										<li><a href="#" class="btn btn-warning" data-toggle="modal" data-target="#sendResult" data-whatever="@mdo" title="Send"><i class="fa fa-send"></i></a></li>
									</ul>
                                </td>
								</tr>
							<tr>
								<td> 3 </td>
								<td> AB101003</td>
								<td> 790,000 </td>
								<td> 350,000 </td>
								<td> 4,000,158 </td>
								<td> 634,920</td>
								<td> 3,000,000 </td>
								<td> 1,283,900</td>
								<td> 598,280 </td>
								<td> 2,000,000 </td>
								<td> 500,230 </td>
								<td> 3,000,000</td>
								<td> 900,384</td>
								<td> 900,384</td>
								<td> 589,204</td>
								<td> 1,000,700</td>	
								<td> <span class="label label-success">
										Fully Reported </span>
								</td>
								<td class="text-center">
									<ul class="list-unstyled list-inline">
										<li><a  href="candidate-result-edit.php" class="btn btn-xs btn-success" data-placement="top" title="Edit"><i class="fa fa-pencil"></i></a></li>
										<li><a href="#" class="btn btn-warning" data-toggle="modal" data-target="#sendResult" data-whatever="@mdo" title="Send"><i class="fa fa-send"></i></a></li>
									</ul>
                                </td>
								</tr>
						</tbody>
					</table>
					
				</div>
				
			</div>
			<!-- END BORDERED TABLE PORTLET-->
		</div>
		
		<!-- Send Result Modal begins here -->
						<div class="modal fade" id="sendResult" tabindex="-1" role="dialog" aria-labelledby="userModalLabel" aria-hidden="true">
						  <div class="modal-dialog">
						    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						        <h4 class="modal-title" id="userModalLabel">Send Result ?</h4>

						      </div>
						      <div class="modal-body">
						        <p> Send result for <b>AB101001</b> ward</p>
						      </div>
						      <div class="modal-footer">
						        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
						        <button type="button" class="btn btn-success">Send</button>
						      </div>
						    </div>
						  </div>
						</div>
						<!-- Send Result Modal begins here -->
						<!-- Add Polling Station Result Modal begins here -->
						<div class="modal fade" id="addPollingStationResult" tabindex="-1" role="dialog" aria-labelledby="addPollingStationResult" aria-hidden="true">
						  <div class="modal-dialog add-polling-result-modal">
						    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						        <h4 class="modal-title" id="userModalLabel">Add polling station result</h4>

						      </div>
						      <div class="modal-body">
						        <form action="candidate-result.php" class="edit-candidate-form">
						        	<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="polling-station" class="control-label">UNIQUE WARD CODE</label>
								<input type="text" class="form-control" id="polling-station">
							</div>
						</div>
					</div>
					<hr />
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label for="candidate-1" class="control-label">JCI SEN. TUNDE ANIFOWOSE-KELANI</label>
								<input type="text" class="form-control" id="recipient-name">
							</div>
							<div class="form-group">
								<label for="candidate-2" class="control-label">RAFIU SALAU</label>
								<input type="text" class="form-control" id="candidate-2">
							</div>
							<div class="form-group">
								<label for="candidate-3" class="control-label">ALH. GANIYU O. GALADIMA</label>
								<input type="text" class="form-control" id="candidate-3">
							</div>
							<div class="form-group">
								<label for="candidate-4" class="control-label">DR. MANI IBRAHIM AHMAD</label>
								<input type="text" class="form-control" id="candidate-4">
							</div>
							<div class="form-group">
								<label for="candidate-5" class="control-label">AYENI MUSA ADEBAYO</label>
								<input type="text" class="form-control" id="candidate-5">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="candidate-6" class="control-label">MUHAMMADU BUHARI</label>
								<input type="text" class="form-control" id="candidate-6">
							</div>
							<div class="form-group">
								<label for="candidate-7" class="control-label">CHIEF SAM EKE</label>
								<input type="text" class="form-control" id="candidate-7">
							</div>
							<div class="form-group">
								<label for="candidate-8" class="control-label">HIGH CHIEF AMBROSE N. ALBERT OWURU</label>
								<input type="text" class="form-control" id="candidate-8">
							</div>

							<div class="form-group">
								<label for="candidate-9" class="control-label">COMFORT OLUREMI SONAIYA</label>
								<input type="text" class="form-control" id="candidate-9">
							</div>
							<div class="form-group">
								<label for="candidate-10" class="control-label">CHIEF MARTIN ONOVO</label>
								<input type="text" class="form-control" id="candidate-10">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="candidate-11" class="control-label">GOODLUCK EBELE JONATHAN</label>
								<input type="text" class="form-control" id="candidate-11">
							</div>
							<div class="form-group">
								<label for="candidate-12" class="control-label">ALLAGOA KELVIN CHINEDU</label>
								<input type="text" class="form-control" id="candidate-12">
							</div>
							<div class="form-group">
								<label for="candidate-13" class="control-label">GODSON MGBODILE OHAENYEM OKOYE</label>
								<input type="text" class="form-control" id="candidate-13">
							</div>
							<div class="form-group">
								<label for="candidate-14" class="control-label">CHIEF (DR.) CHEKWAS OKORIE</label>
								<input type="text" class="form-control" id="candidate-14">
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">
							Cancel
						</button>
						<button type="submit" class="btn btn-success">
							<i class="fa fa-plus"></i> Add
						</button>
					</div>
				</form>
						      </div>
						      
						    </div>
						  </div>
						</div>
						<!-- Add Polling Station Result Modal begins here -->
	</div>
</div>
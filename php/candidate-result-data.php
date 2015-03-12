<div class="container">
	<!--<div class="row">

		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="add-polling-station">
			<a class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add Polling Station</a>
			<p>
				&nbsp
			</p>
			</div>
		</div>
	</div>-->
	<div class="row">

		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<!-- BEGIN BORDERED TABLE PORTLET-->
			<div class="portlet box users-table">
				<div class="portlet-title">
					<div class="caption">
						<!--<i class="fa fa-user"></i>-->
						Candidate Result
					</div>
					<div class="tools">
						<a href="javascript:;" class="collapse"> </a>
						<a href="#portlet-config" data-toggle="modal" class="config"> </a>
						<a href="javascript:;" class="reload"> </a>
						<a href="javascript:;" class="remove"> </a>
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
										<li><a  href="#" class="btn btn-xs btn-success" data-placement="top" title="Edit"><i class="fa fa-pencil"></i></a></li>
										<li><a href="#" class="btn btn-warning" data-toggle="modal" data-target="#	" data-placement="top" title="Send"><i class="fa fa-send"></i></a></li>
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
										<li><a  href="#" class="btn btn-xs btn-success" data-placement="top" title="Edit"><i class="fa fa-pencil"></i></a></li>
										<li><a href="#" class="btn btn-warning" data-toggle="modal" data-target="#sendReseult" data-placement="top" title="Send"><i class="fa fa-send"></i></a></li>
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
										<li><a  href="#" class="btn btn-xs btn-success" data-placement="top" title="Edit"><i class="fa fa-pencil"></i></a></li>
										<li><a href="#" class="btn btn-warning" data-toggle="modal" data-target="#sendReseult" data-placement="top" title="Send"><i class="fa fa-send"></i></a></li>
									</ul>
                                </td>
								</tr>
						</tbody>
					</table>
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
			</div>
			<!-- END BORDERED TABLE PORTLET-->
		</div>
	</div>
</div>
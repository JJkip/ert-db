<div class="container">
	<div class="row">

		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="add-polling-station">
			<button  type="button" class="btn btn-success pull-right" data-toggle="modal" data-target="#pollingStationModal" data-whatever="@mdo">
				<i class="fa fa-plus"></i>Add Polling Station
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
						Polling Stations
					</div>
					<div class="tools">
						<a href="javascript:;" class="collapse"> </a>
						<a href="#portlet-config" data-toggle="modal" class="config"> </a>
						<a href="javascript:;" class="reload"> </a>
						<a href="javascript:;" class="remove"> </a>
					</div>
				</div>
				<div class="portlet-body table-responsive">
					<table class="table table-bordered table-hover ">
						<thead>
							<tr>
								<th> # </th>
								<th> State Name </th>
								<th> State Code </th>
								<th> LGA Name </th>
								<th> LGA Code </th>
								<th> Ward Name </th>
								<th> Ward Code </th>
								<th> Polling Station Location/Name </th>
								<th> Polling Station Code </th>
								<th> Unique Ward Code </th>
								<th> Total Votes Sent</th>
								<th> Status </th>
								<th data-filterable="false" class="text-center hidden-xs hidden-sm sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label="ACTIONS" style="width: 112px;">ACTIONS</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td> 1 </td>
								<td> ABIA </td>
								<td> AB </td>
								<td> ABA NORTH </td>
								<td> 01 </td>
								<td> EZIAMA </td>
								<td> 01 </td>
								<td> RAILWAY QUARTERS - RAILWAY QUARTERS I </td>
								<td> 01 </td>
								<td> AB101001 </td>
								<td> 1,200,000</td>
								<td> 
									<span class="label label-success">
										Fully Reported </span>
										 </td>
								<td class="text-center">
									<a  href="polling-stations-edit.php" class="btn btn-xs btn-success" data-placement="top" title="Edit"><i class="fa fa-pencil"></i></a> &nbsp; <a href="#" class="btn  btn-warning" data-toggle="modal" data-target="#sendResult" data-placement="top" title="Send"><i class="fa fa-send"></i></a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<!-- Add polling station Modal begins here -->
						<div class="modal fade" id="pollingStationModal" tabindex="-1" role="dialog" aria-labelledby="userModalLabel" aria-hidden="true">
						  <div class="modal-dialog">
						    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						        <h4 class="modal-title" id="userModalLabel">Adding Polling Station</h4>
						      </div>
						      <div class="modal-body">
						        <form>
						          <div class="form-group">
						            <label for="recipient-name" class="control-label">State Name:</label>
						            <input type="text" class="form-control" id="recipient-name">
						          </div>
						          <div class="form-group">
						            <label for="recipient-name" class="control-label">State Code:</label>
						            <input type="text" class="form-control" id="recipient-name">
						          </div>
						          <div class="form-group">
						            <label for="recipient-name" class="control-label">LGA Name:</label>
						            <input type="text" class="form-control" id="recipient-name">
						          </div>
						          <div class="form-group">
						            <label for="recipient-name" class="control-label">LGA Code:</label>
						            <input type="text" class="form-control" id="recipient-name">
						          </div>
						          <div class="form-group">
						            <label for="recipient-name" class="control-label">Ward Name:</label>
						            <input type="text" class="form-control" id="recipient-name">
						          </div>
						          <div class="form-group">
						            <label for="recipient-name" class="control-label">Ward Code:</label>
						            <input type="text" class="form-control" id="recipient-name">
						          </div>
						          <div class="form-group">
						            <label for="recipient-name" class="control-label">Pollling Station Location/Name:</label>
						            <input type="text" class="form-control" id="recipient-name">
						          </div>
						          <div class="form-group">
						            <label for="recipient-name" class="control-label">Polling Staiton Code:</label>
						            <input type="text" class="form-control" id="recipient-name">
						          </div>
						          <div class="form-group">
						            <label for="recipient-name" class="control-label">Unique Ward Code:</label>
						            <input type="text" class="form-control" id="recipient-name">
						          </div>
						          <div class="form-group">
						            <label for="recipient-name" class="control-label">Total Votes Sent:</label>
						            <input type="text" class="form-control" id="recipient-name">
						          </div>
						        </form>
						      </div>
						      <div class="modal-footer">
						        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
						        <button type="button" class="btn btn-success">Submit</button>
						      </div>
						    </div>
						  </div>
						</div>
						<!-- End Modal -->
						<!-- Send polling station result Notice Modal begins here -->
						<div class="modal fade" id="sendResult" tabindex="-1" role="dialog" aria-labelledby="sendResult" aria-hidden="true">
						  <div class="modal-dialog">
						    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						        <h4 class="modal-title" id="sendResult">Send Result</h4>
						      </div>
						      <div class="modal-body">
						        <p>The selected polling station result will be sent</p>
						      </div>
						      <div class="modal-footer">
						        <a  class="btn btn-default" data-dismiss="modal">Cancel</a>
						        <a href="polling-stations.php" class="btn btn-success"><i class="fa fa-check"></i> Delete</a>
						      </div>
						    </div>
						  </div>
						</div>
				<!-- Delete issue Notice Modal ends here -->
						
			<!-- END BORDERED TABLE PORTLET-->
		</div>
					
					
					
				</div>
	</div>
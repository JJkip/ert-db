<div class="container">
		<div class="row">
					
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="new-user">
							<button type="button" class="btn btn-success" data-toggle="modal" data-target="#userModal" data-whatever="@mdo">
								<i class="fa fa-plus"></i>Add User
							</button>
						</div>
						
						<!-- Modal begins here -->
						<div class="modal fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="userModalLabel" aria-hidden="true">
						  <div class="modal-dialog">
						    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						        <h4 class="modal-title" id="userModalLabel">Adding New User</h4>
						      </div>
						      <div class="modal-body">
						        <form>
						          <div class="form-group">
						            <label for="recipient-name" class="control-label">Name:</label>
						            <input type="text" class="form-control" id="recipient-name">
						          </div>
						          <div class="form-group">
						            <label for="recipient-name" class="control-label">Polling Station:</label>
						            <input type="text" class="form-control" id="recipient-name">
						          </div>
						          <div class="form-group">
						            <label for="recipient-name" class="control-label">Status:</label>
						            <input type="text" class="form-control" id="recipient-name">
						          </div>
						        </form>
						      </div>
						      <div class="modal-footer">
						        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
						        <button type="button" class="btn btn-primary">Submit</button>
						      </div>
						    </div>
						  </div>
						</div>

					</div>
					
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<!-- BEGIN BORDERED TABLE PORTLET-->
						<div class="portlet box users-table">
							<div class="portlet-title">
								<div class="caption">
									<i class="fa fa-user"></i>Users
								</div>
							</div>
							<div class="portlet-body">
								<table class="table table-bordered table-hover">
								<thead>
								<tr>
									<th>
										 #
									</th>
									<th>
										 Name
									</th>
									<th>
										 Polling Station
									</th>
									<th class="hidden-480">
										 Status
									</th>
									<th>
										 Action
									</th>
								</tr>
								</thead>
								<tbody>
								<tr>
									<td>
										 1
									</td>
									<td>
										 Emeka Oluu
									</td>
									<td>
										 ABIA POLY - ABIA POLY I
									</td>
									<td>
										<span class="label label-success">
										Fully Reported </span>
									</td>
									<td class="hidden-480">
										 <a href="users-edit.php" class="btn btn-success" title="Edit">
											<i class="fa fa-pencil"></i> 
										</a>
									</td>
									
								</tr>
								<tr>
									<td>
										 2
									</td>
									<td>
										 Ike Mohammed
									</td>
									<td>
										 EZIAMA HIGH SCHOOL - EZIAMA HIGH SCHOOL I
									</td>
									<td>
										<span class="label label-warning">
										Partially Reported </span>
									</td>
									<td class="hidden-480">
										 <a href="users-edit.php" class="btn btn-success" title="Edit">
											<i class="fa fa-pencil"></i> 
										</a>
									</td>
									
								</tr>
								<tr>
									<td>
										 3
									</td>
									<td>
										 Ali Allen
									</td>
									<td>
										 INDEPENDENCE ROAD- I.D.H I
									</td>
									<td>
										<span class="label label-success">
										Fully Reported </span>
									</td>
									<td class="hidden-480">
										 <a href="users-edit.php" class="btn btn-success" title="Edit">
											<i class="fa fa-pencil"></i> 
										</a>
									</td>
									
								</tr>
								<tr>
									<td>
										 4
									</td>
									<td>
										 Samuel Ika
									</td>
									<td>
										 G.B.O CAR PARK - CAR PARK I
									</td>
									<td>
										<span class="label label-danger">
										Not Reported </span>
									</td>
									<td class="hidden-480">
										 <a href="users-edit.php" class="btn btn-success" title="Edit">
											<i class="fa fa-pencil"></i> 
										</a>
									</td>
									
								</tr>
								</tbody>
								</table>
							</div>
						</div>
						<!-- END BORDERED TABLE PORTLET-->
					</div>
				</div>
	</div>
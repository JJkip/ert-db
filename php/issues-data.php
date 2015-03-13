<div class="container">
	<div class="row">

		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="new-candidate">
							<button type="button" class="btn btn-success" data-toggle="modal" data-target="#issueModal" data-whatever="@mdo">
								<i class="fa fa-plus"></i>Add Issue
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
						Issues
					</div>
					<div class="tools">
						<a href="javascript:;" class="collapse"> </a>
						<a href="#portlet-config" data-toggle="modal" class="config"> </a>
						<a href="javascript:;" class="reload"> </a>
						<a href="javascript:;" class="remove"> </a>
					</div>
				</div>
				<div class="portlet-body">
					<table class="table table-bordered table-hover">
						<thead>
							<tr>
								<th> # </th>
								<th> Issue</th>
								<th data-filterable="false" class="text-center hidden-xs hidden-sm sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label="ACTIONS" style="width: 112px;">ACTIONS</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td> 1 </td>
								<td> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </td>
								<td class="text-center">
									<a  href="issues-edit.php" class="btn btn-xs btn-success"  data-placement="top" title="Edit"><i class="fa fa-pencil"></i></a> &nbsp; <a href="#" class="btn btn-xs btn-warning" data-toggle="modal" data-target="#deleteIssue" data-placement="top" title="Delete"><i class="fa fa-close"></i></a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<!-- END BORDERED TABLE PORTLET-->
		</div>
		<!-- Add Issue Modal begins here -->
						<div class="modal fade" id="issueModal" tabindex="-1" role="dialog" aria-labelledby="issueModalLabel" aria-hidden="true">
						  <div class="modal-dialog">
						    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						        <h4 class="modal-title" id="issueModalLabel">Add Issue</h4>
						      </div>
						      <div class="modal-body">
						        <form action="issues.php">
						          <div class="form-group">
						            <label for="issue-name" class="control-label">Issue:</label>
						            <textarea class="form-control" rows="3" id="edit-issue"></textarea>
						          </div>
						          <div class="modal-footer">
						        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
						        <button type="submit" class="btn btn-success"><i class="fa fa-plus"></i> Add</button>
						      </div>
						        </form>
						      </div>
						      
						    </div>
						  </div>
						</div>
				<!-- Add issue Modal ends here -->
				<!-- Delete Issue Notice Modal begins here -->
						<div class="modal fade" id="deleteIssue" tabindex="-1" role="dialog" aria-labelledby="deleteIssue" aria-hidden="true">
						  <div class="modal-dialog">
						    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						        <h4 class="modal-title" id="DeleteIssueModalLabel">Delete Issue</h4>
						      </div>
						      <div class="modal-body">
						        <p>The Selected Issue Will Be Deleted</p>
						      </div>
						      <div class="modal-footer">
						        <a  class="btn btn-default" data-dismiss="modal">Cancel</a>
						        <a href="issues.php" class="btn btn-success"><i class="fa fa-check"></i> Delete</a>
						      </div>
						    </div>
						  </div>
						</div>
				<!-- Delete issue Notice Modal ends here -->
	</div>
</div>
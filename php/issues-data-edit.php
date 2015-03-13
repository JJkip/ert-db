<div class="container">
	<div class="row">

		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="back-to-issues pull-left">
				<a type="button" class="btn btn-success" href="issues.php" >
					<i class="fa fa-arrow-left"></i>&nbsp;View Issues
				</a>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
			<div class="portlet box users-table">
				<div class="portlet-title">
					<div class="caption">
						<!--<i class="fa fa-user"></i>-->
						Candidate Result
					</div>
				</div>
				<form action="issues.php" class="edit-issue-form">
					<div class="row">
					<div class="col-md-12">
							<div class="form-group">
								<label for="edit-issue" class="control-label">ISSUE</label>
								<textarea class="form-control" rows="3" id="edit-issue"></textarea>
							</div>
						
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">
							Cancel
						</button>
						<button type="submit" class="btn btn-success">
							<i class="fa fa-check"></i> Submit
						</button>
					</div>
					</div>
					</div>
				</form>
			</div>

		</div>

	</div>
</div>
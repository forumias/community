<style>
.modal-backdrop.show {
    opacity: 0!important;
}
.modal-backdrop {
    z-index: 0!important;
}
</style>
<!-- Modal for like list-->
<div class="modal fade" id="reportModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          
          <p class="modal-title pop_title"> Report</p>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <div>
			<div class="post-sub-section">
				<div>
					<h3>Help us understand the problem. What is going on with this post?</h3>
					<form role="form" action="{{URL::to('/report_post')}}" method="POST" enctype="multipart/form-data" name="savereport" id="savereport">
						@csrf
						<input type="hidden" name="post_id" class="post_id">
						<div class="form-check">
							<input class="form-check-input cmn_report_inp" name="report_option" type="radio" id="Spam" value="1" checked>
							<label class="form-check-label" for="Spam">It's spam</label>
						</div>
						<div class="form-check">
							<input class="form-check-input cmn_report_inp" name="report_option" type="radio" id="Abusive" value="2">
							<label class="form-check-label" for="Abusive">It's abusive</label>
						</div>
						<div class="form-check">
							<input class="form-check-input cmn_report_inp" name="report_option" type="radio" id="Not-interested" value="3">
							<label class="form-check-label" for="Not-interested">I am not interested</label>
						</div>
						<div class="form-check">
							<input class="form-check-input cmn_report_inp" name="report_option" type="radio" id="Not-related" value="4">
							<label class="form-check-label" for="Not-related">This should not be on ForumIAS</label>
						</div>
						<div class="form-check">
							<input class="form-check-input cmn_report_inp" name="report_option" type="radio" id="check-5" value="5">
							<label class="form-check-label" for="check-5">Other</label>
						</div>
						<div class="form-group">
							<textarea class="form-control report_desc" name="other_description" id="other-textfield" rows="3" placeholder="Describe your reason, if other. " disabled></textarea>
						</div>
						<button class="btn btn-success">Submit</button>
					</form>
				</div>
			</div>
		</div>
        </div>
        
      </div>
    </div>
  </div>
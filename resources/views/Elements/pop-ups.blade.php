<style>
.modal-backdrop.show {
    opacity: 0!important;
}
.modal-backdrop {
    z-index: 0!important;
}
</style>
<!-- Modal for like list-->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          
          <p class="modal-title pop_title"> 50 Likes</p>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <div class="list-group pop_listing" style="height: 40%; overflow: auto;">
            
         </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
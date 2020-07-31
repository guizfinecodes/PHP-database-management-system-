<form class="form-horizontal" action="update_file.php" method="post" enctype="multipart/form-data">
<div class="modal modal-info fade" id="modal-info1" >
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">UPLOAD OTHER FILES:</h4>
              </div>
              <div class="modal-body">

                <label>user idno:</label>
                                <input type="text" name="user_id" id="user_id" readonly value="1" class="form-control">
                <span class="green">
                  
                                 </span>

                                 <div class="file-field">
    <div class="btn btn-primary btn-sm float-left">
      <span>Choose files to upload</span>
      <input type="file" multiple  id="file" required="" name="file" class="file-path validate">
    </div>
    
  </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Cancel</button>
                <button type="submit" name="upload" value="Save Record" id="upload" class="btn btn-success btn-labeled">Upload File<span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button>
              </div>
            </div>
            <!-- /.modal-content -->
         
          <!-- /.modal-dialog -->
</div>
</div>
</form>
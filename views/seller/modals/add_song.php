<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Song uploading form</h4>
        </div>
        <div class="modal-body">
          <div class="row">
            <!-- left column -->
                <div class="col-md-12">
                  <!-- general form elements -->
                  <div class="box box-primary">
                    <!-- form start -->
                    <div id="termsDiv" class="box-body">
                        <div class="callout callout-info">
                          <h4>Uploading Song!</h4>

                          <p style="font-size: 15px;">
                            I certify that no other individual or parties hold copyright interest in the work(s) described above, that I hold all rights to the works listed, and that the license granted herein does not violate any third-party rights or applicable laws. I hereby certify and covenant that I am of legal age (a parent or legal guardian must sign for a minor), or if applicable, that I am authorized to sign on behalf of the entity listed below.
                          </p>
                          <button id="acceptTerms" class="btn btn-danger">ACCEPT TERMS AND CONDITION.</button>
                        </div>
                    </div>
                    <form id="frm_upload" role="form" style="display: none;">
                      <div class="box-body">
                        <div class="form-group">
                          <label for="exampleInputFile">Select song to upload Here</label>
                          <input type="file" id="song_to_upload" name="song_to_upload" required>

                          <p class="help-block">
                            <i>Supported format are wav,mp3,ogg</i>
                          </p>
                        </div>
                      <div id="others" style="display: none;">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Song name</label>
                          <input type="text" id="song_name" name="song_name" required="" class="form-control" placeholder="Song title">
                          <input type="hidden" id="user" name="user" required="" class="form-control" value="<?php echo $_SESSION['user_id']; ?>">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Song Description(<i>Optional</i>)</label>
                          <textarea id="description" name="description" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">
                            Song Category
                          </label>
                          <select id="category" name="category" class="form-control" required>
                            <option value="RNB">RNB</option>
                            <option value="AfroBeatz">AfroBeatz</option>
                            <option value="Jazz">Jazz</option>
                            <option value="RAP">HIP HOP</option>
                            <option value="POP">POP</option>
                            <option value="SLOW">SLOW</option>
                          </select>
                        </div>
                      </div>
                      </div>
                      <!-- /.box-body -->
                      <div id="btnDiv" class="box-footer">
                        <button id="upload_btn" type="submit" class="btn btn-success">Submit Song</button>
                      </div>
                      <center>
                        <img id="loader" src="assets/images/loader.gif" style="display: none; width:120px;height: auto;">
                      </center>
                    </form>
                  </div>
                  <!-- /.box -->

                </div>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        </div>
      </div>
                  <!-- /.modal-content -->
    </div>
                <!-- /.modal-dialog -->
  </div>
</div>
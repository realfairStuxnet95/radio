<?php 
$song_list=array();
$song_list=$songs->getMySongs($_SESSION['user_id']);
?>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <button class="btn btn-success" data-toggle="modal" data-target="#modal-default">
              <i class="fa fa-plus"></i> UPLOAD NEW SONG
            </button>
            </div>
            <!-- /.box-header -->
            <!-- modal -->
            <?php include 'modals/add_song.php'; ?>
            <!-- end modal -->
        <div class="box-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>Song Name</th>
              <th>Description</th>
              <th>Filename</th>
              <th>Status</th>
              <th>Uploaded</th>
            </tr>
            </thead>
            <tbody>
              <?php 
              if(count($song_list)>0){
                foreach ($song_list as $key => $value) {
                  ?>
                  <tr>
                    <td>
                      <?php echo $value['title']; ?>
                    </td>
                    <td>
                      <?php echo $value['description']; ?>
                    </td>
                    <td>
                      <a href="<?php echo $value['file_name']; ?>" target="_blank">
                        <?php echo $value['file_name']; ?>
                      </a>
                      
                    </td>
                    <td>
                      <?php echo $value['status']; ?>
                    </td>
                    <td>
                      <?php echo $function->formatDate($value['regDate']); ?>
                    </td>
                  </tr>
                  <?php
                }
              }else{
                ?>
                <div class="callout callout-danger">
                  <h4>Warning!</h4>

                  <p>No song found Here in you song list you can upload your song by click the button above</p>
                </div>
                <?php
              }
              ?>
            </tbody>
          </table>
        </div>
                        <!-- /.box-body -->
                      </div>
                      <!-- /.box -->
                      <!-- /.box -->
                    </div>
                    <!-- /.col -->
                  </div>
      <!-- /.row -->
    </section>
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="scripts/song.js"></script>
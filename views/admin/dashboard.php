<?php 
$song_list=array();
$song_list=$songs->getMySongs($_SESSION['user_id']);
?>
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <div class="row">
            <div class="col-xs-6 col-lg-6 col-md-6">
              <button class="btn btn-success" data-toggle="modal" data-target="#modal-default">
              RECEIVE ALL
            </button>
              <button class="btn btn-danger" data-toggle="modal" data-target="#modal-default">
              DESACTIVATE ALL
            </button>
            </div>
            <div class="col-xs-6 col-lg-6 col-md-6">
              <div class="input-group input-group-sm">
                <input type="text" placeholder="Search for Song,artist Here." class="form-control">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-info btn-flat">Go!</button>
                    </span>
              </div>
            </div>
          </div>
        </div>
        <?php include 'load_songs.php'; ?>
      </div>
    </div>
  </div>
  <!-- /.row -->
</section>
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="scripts/song.js"></script>
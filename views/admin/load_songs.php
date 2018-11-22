<?php 
$all_songs=array();
$all_songs=$songs->loadAllSongs();
?>
<div class="box-body">
  <table id="example2" class="table table-bordered table-hover">
    <thead>
    <tr>
      <th>NO</th>
      <th>Artist</th>
      <th>Song name</th>
      <th>Status</th>
      <th>Download</th>
      <th>Uploaded</th>
    </tr>
    </thead>
    <tbody>
      <?php 
      if(count($all_songs)>0){
        foreach ($all_songs as $key => $value) {
          ?>
          <tr>
            <td>
              <?php echo $value['file_id']; ?>
            </td>
            <td>
              <a href="#">
              <?php echo $songs->getArtist($value['user_id']);?>
              </a>
            </td>
            <td>
                <a href="<?php echo $value['file_name']; ?>" target="_blank">
                  <?php echo $value['title']; ?>
                </a>
            </td>
            <td>
              <?php 
              if($value['status']=="ACTIVE"){
                ?>
                <button class="btn btn-warning">
                  <i class="fa fa-close"></i> DESACTIVATE
                </button>
                <?php
              }elseif($value['status']=="PENDING"){
                ?>
                <button class="btn btn-info">
                  <i class="fa fa-check"></i> ACTIVATE
                </button>
                <?php
              }
              ?>
            </td>
            <td>
                <a class="btn btn-success" href="<?php echo $value['file_name']; ?>" target="_blank">
                  <i class="fa fa-download"></i> DOWNLOAD
                </a>
            </td>
            <td>
              <?php echo $function->formatDate($value['regDate']); ?>
            </td>
          </tr>
          <?php
        }
      }else{
        echo "NO Songs Uploaded";
      }
      ?>
    </tbody>
  </table>
</div>
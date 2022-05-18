<?php include "header.php";?>
    
    <style type="text/css">
      .gallery_image{
        height: 200px !important;
        border-radius: 0px !important;
        width: 200px !important;
      }
    </style>
  <div class="card">
    <div class="card-header">Gallerie</div>
    <div class="card-body">
      <div class="text-right">
        <a  href="<?php echo BASE_URL; ?>admin&action=galleryAdd" class="btn btn-success">Add More</a>
      </div>


      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Image</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($data['gallery_all'] as $key => $row){ ?>
            <tr>
              <td><?php echo $key+1; ?></td>
              <td><img class="gallery_image" src="<?php echo ASSET_URL; ?>/uploads/<?php echo $row['image']; ?>"></td>
              <td>
                <a  class="btn btn-danger" href="<?php echo BASE_URL; ?>admin&action=galleryDelete&id=<?php echo $row['id']; ?>">Delete</a>
              </td>
            </tr>

          <?php } ?>
        </tbody>
      </table>


    </div>
  </div>
          


<?php include "footer.php";?>    
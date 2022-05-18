<?php include "header.php";?>
     
  <div class="card">
    <div class="card-header">Gallerie</div>
    <div class="card-body">
      <form action="<?php echo BASE_URL; ?>admin&action=galleryStore" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label>Image</label>
          <input type="file" name="userfile" required  class="form-control">
        </div>
        <div class="form-group text-center">
          <button class="btn btn-success">Supprimer</button>
        </div>
      </form>


    </div>
  </div>
          


<?php include "footer.php";?>    
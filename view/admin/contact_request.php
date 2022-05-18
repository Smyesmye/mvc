<?php include "header.php";?>
    
    <style type="text/css">
      .gallery_image{
        height: 200px !important;
        border-radius: 0px !important;
        width: 200px !important;
      }
    </style>
  <div class="card">
    <div class="card-header">Formulaire de contacte</div>
    <div class="card-body">
     

      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Nom</th>
            <th>Adresse électronique</th>
            <th>Numéro de téléphone</th>
            <th>Sujet</th>
            <th>Message</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($data['contact_all'] as $key => $row){ ?>
            <tr>
              <td><?php echo $key+1; ?></td>
              <td><?php echo $row['name']; ?></td>
              <td><?php echo $row['email']; ?></td>
              <td><?php echo $row['phone']; ?></td>
              <td><?php echo $row['subject']; ?></td>
              <td><?php echo $row['message']; ?></td>
              <td>
                <a  class="btn btn-danger" href="<?php echo BASE_URL; ?>admin&action=contectDelete&id=<?php echo $row['id']; ?>">Supprimer</a>
              </td>
            </tr>

          <?php } ?>
        </tbody>
      </table>


    </div>
  </div>
          


<?php include "footer.php";?>    
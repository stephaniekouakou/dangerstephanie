<?php

  include('bd.php');
  $id_user = $_SESSION['id'];
 ?>
<div class="container" id="liste_lieu">
  <div class="container">
    <h1>liste des lieux que vous avez enregistré</h1>
    <div class="">
      <a href="<?='index.php?page=historique_lieu'?>"><button type="button" name="button" class="btn btn-primary mb-3">voir plus</button> </a>
    </div>
      <div class="row">

          <div class="col-md-12">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>NOM VILLE</th>
                  <th>LATITUDE</th>
                  <th>LONGITUDE</th>
                    <th>mod/supp</th>
                </tr>
              </thead>
              <tbody>

              <?php

                  $queryville= "SELECT * FROM VILLE WHERE id_utilisateur= $id_user";
                  $result_ville = mysqli_query($conn,$queryville);

                  while($row=mysqli_fetch_array($result_ville)){ ?>
                      <tr>
                          <td><?php echo $row['id_ville'] ;?></td>
                          <td><?php echo $row['nom_ville'] ;?></td>
                          <td><?php echo $row['lat'] ;?></td>
                          <td><?php echo $row['lng'] ;?></td>

                          <td>
                          <?php $rowid=$row['id_ville'];
                                $rowville=$row['nom_ville'];

                           ?>
                              <a href="<?='index.php?page=modifierlieu&ville='.$rowville.'&id='.$rowid.''?>" class="btn btn-secondary" style="">
                                <i class="fas fa-marker"></i>
                              </a>
                              <a href="<?='index.php?page=supprimerlieu&ville='.$rowville.'&id='.$rowid.''?>"   class="btn btn-danger" style="">
                                  <i class="far fa-trash-alt"></i>
                              </a>
                          </td>
                      </tr>

                <?php } ?>




              </tbody>
              <tfoot>

              </tfoot>

            </table>
          </div>
      </div>
</div>

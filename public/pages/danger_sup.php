<?php
  include('bd.php');
  $id_user= $_SESSION['id'];
 ?>
<div class="ms-content-wrapper">
      <div class="row">
        <div class="col-md-12">
        </div>


        <div class="col-12">
          <div class="ms-panel">
            <div class="ms-panel-header">
              <h6> Liste des dangers enregistré</h6>
            </div>
            <div class="ms-panel-body">
              <div class="table-responsive">
                <table class="table table-hover thead-primary">
                  <thead style= "background-color:#FFA208">
                    <tr>
                      <th scope="col"> type de danger</th>
                      <th scope="col">victme</th>
                      <th scope="col"> lieu du danger</th>
                      <th scope="col"> description</th>
                      <th scope="col">date</th>
                      <th scope="col">source</th>
                      <th scope="col">type d'acteur</th>
                      <th scope="col">Editeur</th>
                    </tr>
                  </thead>
                  <tbody>


                    <?php


      									$query= "SELECT * FROM dangertable";
      									$result_task = mysqli_query($conn,$query);


      									while($row=mysqli_fetch_array($result_task)){

                           ?>

      											<tr>
      													<td><?php echo $row['dangertype'] ;?></td>
                                <td><?php echo $row['sexevictime'] ;?></td>
      													<td><?php echo $row['ville'] ;?></td>
                                <td><?php echo $row['description_lieu'] ;?></td>
                                <td><?php echo $row['date_danger'] ;?></td>
                                  <td><a href="<?php echo  $row['source'] ;?>"> source</a> </td>
                                 <td> <?php echo $row['acteur'] ;?></td>
                                 <td><?php
                                 $tt=$row['id_utilisateur'];
                                 $q= "SELECT nom , prenom FROM utilisateur WHERE id_utilisateur='$tt'";
                                $resu = mysqli_query($conn,$q);
                                 while ($ro=mysqli_fetch_array($resu)) {?>
                                   <?= $ro['nom'].' '.$ro['prenom']?>
                                 <?php   } ?></td>

      											</tr>

      								<?php } ?>



                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

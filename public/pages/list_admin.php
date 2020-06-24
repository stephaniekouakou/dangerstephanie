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
              <h6> Liste des admins</h6>
            </div>
            <div class="ms-panel-body">
              <div class="table-responsive">
                <table class="table table-hover thead-primary">
                  <thead style="background-color:#FFA208">
                    <tr>
                      <th scope="col"> ID</th>
                      <th scope="col">NOM</th>
                      <th scope="col"> PRENOM</th>
                      <th scope="col">EMAIL</th>
                      <th scope="col">ROLE</th>

                    </tr>
                  </thead>
                  <tbody>


                    <?php


      									$query= "SELECT * FROM utilisateur";
      									$result_task = mysqli_query($conn,$query);


      									while($row=mysqli_fetch_array($result_task)){

                           ?>

      											<tr>
      													<td><?php echo $row['id_utilisateur'] ; ;?></td>
                                <td><?php echo $row['nom'] ;?></td>
      													<td><?php echo $row['prenom'] ;?></td>
                                <td><?php echo $row['email'] ;?></td>
                                <td><?php echo $row['role'] ;?></td>
                            
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

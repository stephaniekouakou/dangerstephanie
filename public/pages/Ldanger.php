<?php
  include('bd.php');
  $id_user= $_SESSION['id'];
 ?>
<div class="" id="listedangers">
  <div class="container">
    <h1>liste des dangers</h1>

			<div class="row">

					<div class="col-md-12">
						<table class="table table-bordered">
							<thead>
								<tr>
                  <th>type de danger</th>
									<th>victme</th>
                  <th>lieu du danger</th>
                  <th>description</th>
                  	<th>date</th>
									<th> source</th>
                  <th>type d'acteur</th>
                  <th>NOM DE L'EDITEUR</th>
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
							<tfoot>

							</tfoot>

						</table>
					</div>
			</div>

	</div>

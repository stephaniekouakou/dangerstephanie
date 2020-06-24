<?php
  include('bd.php');
  $id_user= $_SESSION['id'];
 ?>
<div class="" id="listedangers">
  <div class="container">
    <h1>liste des dangers enregistrés</h1>
    <div class="">
      <a href="<?='index.php?page=Ldanger'?>"><button type="button" name="button" class="btn btn-primary mb-3">voir plus</button> </a>
    </div>
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

                    <th>mod/supp</th>
								</tr>
							</thead>
							<tbody>

							<?php


									$query= "SELECT * FROM dangertable WHERE id_utilisateur=$id_user";
									$result_task = mysqli_query($conn,$query);

									while($row=mysqli_fetch_array($result_task)){ ?>
											<tr>
													<td><?php echo $row['dangertype'] ;?></td>
                          <td><?php echo $row['sexevictime'] ;?></td>
													<td><?php echo $row['ville'] ;?></td>
                          <td><?php echo $row['description_lieu'] ;?></td>
                          <td><?php echo $row['date_danger'] ;?></td>
                            <td><a href="<?php echo  $row['source'] ;?>"> source</a> </td>
                          <td> <?php echo $row['acteur'] ;?></td>


													<td>
                          <?php $rowid=$row['id_danger'];
                                $rowtype=$row['dangertype'];
                           ?>

															<a href="<?='index.php?page=modifier&id='.$rowid.''?>" class="btn btn-secondary" style="">
																<i class="fas fa-marker"></i>
															</a>
															<a href="<?='index.php?page=supprimer&type='.$rowtype.'&id='.$rowid.''?>"   class="btn btn-danger" style="">
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

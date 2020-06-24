<?php

if ( isset($_POST['valider']) ) {
	include('bd.php');
	include('app/securite.php');
  $message= ' ';
	$nom =secure( $_POST['nom']);
  $prenom = secure($_POST['prenom']);
  $email = secure($_POST['email']);
  $role =secure($_POST['role']) ;
	$password = sha1($_POST['password']);
 $id_user=$_SESSION['id'];
 $nom_user=$_SESSION['nom'].' '.$_SESSION['prenom'];


$query = "INSERT INTO utilisateur(nom,prenom,email,password,role) VALUES('$nom','$prenom','$email','$password','$role' )";
$result= mysqli_query($conn,$query);

	if (!$result) {

		die("Query Failed");
	}
	$sqlactivite= "INSERT INTO activite(nom_activite,id_utilisateur,nom_user) VALUES('ajouter un utilisateur',$id_user,'$nom_user')";
	$resultat= mysqli_query($conn,$sqlactivite);
	$erreur='utilisateur enregistrer';

}

?>



  <div class="col-xl-12 col-md-12">
<div class=" ms-panel ms-panel-fh">
            <div class="ms-panel-header">
              <h6>Ajouter un utilisateur</h6>
            </div>
            <?php if (isset($erreur) and !empty($erreur) ) {?>

              <div class="alert alert-success alert-dismissible fade show " role ="alert" id="alert" style="margin-top:30px; width:400px; margin-left:100px">
                <?=$erreur?>
                <button type="button" class="close" data-dismiss="alert" aria-label="close" >&times;</button>

              </div>
              <?php  } ?>
            <div class="ms-panel-body">
              <form class="needs-validation clearfix" novalidate method="POST" action="">
                <div class="form-row">
                  <div class="col-md-12 mb-3">
                    <label for="validationCustom18">Nom </label>
                    <div class="input-group">
                      <input type="text" name="nom" class="form-control" id="validationCustom18"  required>
                    </div>
                  </div>

                  <div class="col-md-12 mb-3">
                    <label for="validationCustom22">Prenom</label>
                    <div class="input-group">
                      <input type="text" name="prenom" class="form-control" id="validationCustom18"   required>
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="validationCustom18">EMAIL</label>
                    <div class="input-group">
                      <input type="email" name="email" class="form-control" id="validationCustom18" placeholder="admin@gmail.com"  required>
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="validationCustom23" >Mot de passe</label>
                    <div class="input-group">
                      <input type="password" class="form-control" name="password" required>
                    </div>
                  </div>

                  <div class="col-md-12 mb-3">
                    <label for="validationCustom12">role</label>
                    <div class="input-group">
                    <select class="form-control" id="validationCustom18" placeholder="telephone" name="role"  required>
                          <option value="admin">admin</option>
                          <option value="editeur">editeur</option>
                          <option value="surperviseur">surperviseur</option>
                    </select>
                    </div>
                  </div>
                  <div class="ms-panel-header new">
                  <input type="submit" name="valider" value="enregistre"  class="form-control" style="background-color:#FFA208">
                </div>


      </div>
    </div>

  </div>
</div>

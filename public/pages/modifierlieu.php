<?php
include('bd.php');

if (isset($_GET['id']) and isset($_GET['ville']) ) {

  $nom_user = $_SESSION['nom'].' '.$_SESSION['prenom'];
  $id_user= $_SESSION['id'];
  $id= $_GET['id'];


  $query= "SELECT * FROM ville WHERE id_ville=$id";

  $result = mysqli_query($conn,$query);
  if(mysqli_num_rows($result)==1){
    $row= mysqli_fetch_array($result);
    $nom_ville= $row['nom_ville'];
    $lat= $row['lat'];
    $lng=$row['lng'];



}

    if (isset($_POST['annule'])) {
      header("location:index.php?page=liste_lieu");
     }

    if (isset($_POST['modifie'])) {
      $ville= $_POST['nom'];
      $lat= $_POST['lat'];
      $lng=$_POST['lng'];

    $query = "UPDATE ville set nom_ville='$ville',lat='$lat', lng='$lng'  WHERE id_ville=$id ";
    $sqlactivite= "INSERT INTO activite(nom_activite,id_utilisateur,nom_user,lieu_id_lieu) VALUES('modification dune ville','$id_user','$nom_user','$ville')";
    $resultat= mysqli_query($conn,$sqlactivite);
    mysqli_query($conn,$query);
    header("location:index.php?page=liste_lieu");
    }


  }

 ?>
<div class="container" id="modifie_lieu">
  <h1 style="text-align:center">modifier le lieu</h1>
  <form class="" action="" method="POST">
    <div class="row form-group" id="lieu">
      <fieldset>
        <legend></legend>
      <div class="form-group  mb-3">
        <label for="">Nom de la ville:</label>
        <input type="text" name="nom" value="<?=$nom_ville ?>" class="form-control " autocomplete="off" placeholder="">
      </div>
      <div class="form-group  mb-3">
        <label for="">longitude:</label>
        <input type="text" name="lng" value="<?=$lng?>" class="form-control " autocomplete="off" placeholder="">
      </div>
      <div class="form-group  mb-3">
        <label for="">lattitude:</label>
        <input type="text" name="lat" value="<?=$lat?>" class="form-control " autocomplete="off" placeholder="">
      </div>

      <div class="" id="submit">
        <input type="submit" name="modifie" value="Modifier" class="btn btn-success">
       <input type="submit" name="annule" value="Annuler" class="btn btn-primary">
      </div>
    </fieldset>


      </form>

</div>

<?php
include("bd.php");

if (isset($_GET['id']) and isset($_GET['ville'])   ) {
    $id=$_GET['id'];
    $vil=$_GET['ville'];
  $id_user=$_SESSION['id'];
  $nom_user=$_SESSION['nom'].' '.$_SESSION['prenom'];
  $query= "DELETE  FROM ville WHERE id_ville=$id";
  $result = mysqli_query($conn,$query);
  $sqlactivite= "INSERT INTO activite(nom_activite,id_utilisateur,nom_user,lieu_id_lieu) VALUES('suppression de lieu','$id_user','$nom_user','$vil')";
  $resultat= mysqli_query($conn,$sqlactivite);

  if (!$result) {
  die("query failed");
  // code...
  }

 header("location:index.php?page=liste_lieu");
}






 ?>

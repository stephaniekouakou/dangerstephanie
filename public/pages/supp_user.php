<?php
include("bd.php");

$id_user=$_SESSION['id'];
$nom_user=$_SESSION['nom'].' '.$_SESSION['prenom'];
if (isset($_GET['id'])){
    $id=$_GET['id'];

  $query= "DELETE  FROM utilisateur WHERE id_utilisateur = $id";
  $result = mysqli_query($conn,$query);

  if (!$result) {

  die("query failed");
  // code...
  }
  $sqlactivite= "INSERT INTO activite(nom_activite,id_utilisateur,nom_user) VALUES('supprimer un utilisateur',$id_user,'$nom_user')";
  $resultat= mysqli_query($conn,$sqlactivite);

 header("location:index.php?page=list_user");
}


if (isset($_GET['id_sup'])){
    $id=$_GET['id_sup'];

  $query= "DELETE  FROM utilisateur WHERE id_utilisateur = $id";
  $result = mysqli_query($conn,$query);

  if (!$result) {

  die("query failed");
  // code...
  }
  $sqlactivite= "INSERT INTO activite(nom_activite,id_utilisateur,nom_user) VALUES('supprimer un utilisateur',$id_user,'$nom_user')";
  $resultat= mysqli_query($conn,$sqlactivite);
 header("location:index.php?page=list_admin");
}



if (isset($_GET['id_lieu'])){
    $id=$_GET['id_lieu'];

  $query= "DELETE  FROM lieu WHERE id_lieu = $id";
  $result = mysqli_query($conn,$query);

  if (!$result) {

  die("query failed");
  // code...
  }
  $sqlactivite= "INSERT INTO activite(nom_activite,id_utilisateur,nom_user) VALUES('supprimer un lieu',$id_user,'$nom_user')";
  $resultat= mysqli_query($conn,$sqlactivite);
 header("location:index.php?page=list_user");
}

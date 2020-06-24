<?php

if ( isset($_POST['ajoutlieu']) ) {
	include('bd.php');
	include('app/securite.php');
   $msg='';

  $nom =secure( $_POST['nom']);
  $lat =secure( $_POST['lat']);
  $lng =secure( $_POST['lng']);
  $nom_user=$_SESSION['nom'].' '.$_SESSION['prenom'];
	$id=$_SESSION['id'];

 if (verifie($nom) AND verifie($lat) AND verifie($lng) ) {
   $sql= "INSERT INTO ville(nom_ville,lat,lng,id_utilisateur) VALUES('$nom',$lat,$lng,$id)";
   $result= mysqli_query($conn,$sql);
	 $sqlactivite= "INSERT INTO activite(nom_activite,id_utilisateur,nom_user,lieu_id_lieu) VALUES('ajouter une ville',$id,'$nom_user','$nom')";
	 $resultat= mysqli_query($conn,$sqlactivite);

   	if (!$result) {
   		die("Query Failed");
   	}

   	$msg= 'ville ajouter';



 }else {
   $msg= 'remplissez tous les champs svp';

}

}


?>

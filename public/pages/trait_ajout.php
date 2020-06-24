<?php

if ( isset($_POST['send']) ) {
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
  if (verifie($nom) AND verifie($prenom)  AND verifie($role)  AND verifie($email)  AND verifie(	$password) ) {

                  if(filter_var($email, FILTER_VALIDATE_EMAIL)){


$query = "INSERT INTO utilisateur(nom,prenom,email,password,role) VALUES('$nom','$prenom','$email','$password','$role' )";
$result= mysqli_query($conn,$query);

	if (!$result) {

		die("Query Failed");
	}
	$sqlactivite= "INSERT INTO activite(nom_activite,id_utilisateur,nom_user) VALUES('ajouter un utilisateur',$id_user,'$nom_user')";
	$resultat= mysqli_query($conn,$sqlactivite);
	$message='utilisateur enregistrer';


}else {
  	$message= 'adresse pas valide';

}

}else {
  	$message= 'remplissez tous les champs svp';

}

}
?>

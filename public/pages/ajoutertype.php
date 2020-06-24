<?php
include('bd.php');
include('app/securite.php');
$id_user=$_SESSION['id'];
$nom=$_SESSION['nom'].' '.$_SESSION['prenom'];
if (isset($_POST['ajoutertype'])) {
      $typedanger = secure($_POST['typedgr']);
    if (verifie($typedanger )) {
      $sqltype= "INSERT  INTO dangertype(libelle) VALUES('$typedanger')";
      $resultype= mysqli_query($conn,$sqltype);
      if (!$resultype) {

        die("Query Failed");
      }else {
        $sqlactivite= "INSERT INTO activite(nom_activite,id_utilisateur,nom_user) VALUES('Ajouter un type de danger',$id_user,'$nom')";
        $resultat= mysqli_query($conn,$sqlactivite);
        $_SESSION['message']= 'type Ajouté';
        $_SESSION['message_type']='success';
      }

    }else {
      $_SESSION['message']= 'remplissez tous les champs svp';
      $_SESSION['message_type']='danger';
    }

}

if (isset($_POST['typeacteur'])) {
      $type = secure($_POST['typeact']);
    if (verifie($type)) {
      $sql= "INSERT  INTO acteur(libelle) VALUES('$type')";
      $result= mysqli_query($conn,$sql);
      if (!$result) {

        die("Query Failed");
      }else {
        $sqlactivite= "INSERT INTO activite(nom_activite,id_utilisateur,nom_user) VALUES('Ajouter un actuer',$id_user,'$nom')";
        $resultat= mysqli_query($conn,$sqlactivite);
        $_SESSION['message']= 'un nouveau type dacteur Ajouté';
        $_SESSION['message_type']='success';
      }

    }else {
      $_SESSION['message']= 'remplissez tous les champs svp';
      $_SESSION['message_type']='danger';
    }

}



?>
<div class="container" id="typedanger">
  <h1 class="" style="text-align:center;">TYPE DE DANGER</h1>
  <?php if (isset($_SESSION['message']) ) {?>

    <div class="alert alert-<?=$_SESSION['message_type']?> alert-dismissible fade show " role ="alert" id="alert" >
      <?=$_SESSION['message']?>
      <button type="button" class="close" data-dismiss="alert" aria-label="close" >&times;</button>

    </div>
    <?php  } ?>
    <div class="" id="type">
      <form class="" action="" method="POST" style="width:400px; margin-left:20px">
        <div class="form-group mb-3">
          <label for="">AJOUTER UN NOUVEAU TYPE DE DANGER:</label>
            <input type="text" name="typedgr" value="" class="form-control mb-3 " autocomplete="off" placeholder="type de danger">
          </div>
            <input type="submit" name="ajoutertype" value="Ajouter" class="btn btn-success">
      </form>
    </div>


    <div class="" id="type" style="margin-top:60px">
      <form class="" action="" method="POST" style="width:400px; margin-left:20px">
        <div class="form-group mb-3">
          <label for="">AJOUTER UN NOUVEAU TYPE D'ACTEUR:</label>
            <input type="text" name="typeact" value="" class="form-control mb-3 " autocomplete="off" placeholder="type de danger">
          </div>
            <input type="submit" name="typeacteur" value="Ajouter" class="btn btn-success">
      </form>
    </div>

</div>

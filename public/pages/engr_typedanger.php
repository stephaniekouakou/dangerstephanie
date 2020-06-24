<?php
 include('bd.php');
include('app/securite.php');


$reqville="SELECT * FROM ville " ;
$ville=mysqli_query($conn,$reqville);

  $reqtype="SELECT *FROM dangertype " ;
  $typedangers=mysqli_query($conn,$reqtype);

  $reqacteur="SELECT *FROM acteur " ;
  $acteur=mysqli_query($conn,$reqacteur);

  $output="";
  $outputquatier="";
  $outputid="";
  $lieu='';



       $id=$_SESSION['id'];
       $nom_user =$_SESSION['nom'].' '.$_SESSION['prenom'];

       $erreur = "";
      if (isset($_POST['annuler'])) {
              header("location:index.php?page=enregistre_lieu");
           }


      if (isset($_POST['ajoutdanger'])) {
        $lieu = secure($_POST['ville']);
        $typedanger= secure($_POST['typedange']);
        $sexevictime = secure($_POST['sexevictime']);
        $typeacteur= secure($_POST['typeacteur']);
        $date = secure($_POST['date']);
        $source= secure($_POST['source']);
        $description= secure($_POST['description']);

      if (verifie($typedanger)  and verifie($sexevictime)and verifie($typeacteur)and verifie($date )and verifie($source) and verifie($description) ){

        $sql= "INSERT INTO dangertable (sexevictime,source,date_danger,dangertype,acteur,ville,description_lieu,id_utilisateur)
         VALUES('$sexevictime','$source','$date','$typedanger','$typeacteur','$lieu','$description',$id)";
         $result= mysqli_query($conn,$sql);

        if (!$result) {
            die("Query Failed");
        }
        $sqlactivite= "INSERT INTO activite(nom_activite,id_utilisateur,nom_user,id_danger) VALUES('ajouter un danger',$id,'$nom_user','$typedanger')";
        $resultat= mysqli_query($conn,$sqlactivite);
            $erreur = "Danger enregistré avec succes ";// code...

      }else {
         $erreur = "remplissez tous les champs svp ";
      }

      }



?>



<div class="container"id="typedanger">


<h4 style="text-align:center;margin-top:40px">Enregistrer un danger</h4>


<form class="needs-validation" method="POST" action="">

  <div class="col">
    <label for="">ville:</label>
    <select class=" form-control mb-3" name="ville">
      <?php while ($row=mysqli_fetch_array($ville)) {?>
           <option ><?= $row['nom_ville'] ?></option>
      <?php   } ?>
    </select>
  </div>
  <div class="row ">


    <div class="col">
      <label for="">description du lieu</label>
      <textarea name="description"  class="form-control mb-3 " rows="8" cols="10"></textarea>


      <label for="">type de danger</label>
      <select class=" form-control mb-3 " name="typedange">

          <?php while ($row=mysqli_fetch_array($typedangers)) {?>
               <option ><?= $row['libelle'] ?></option>
          <?php   } ?>
      </select>

      <label for="">victime</label>
      <input type="text" class="form-control mb-3" id="nom" placeholder="" name="sexevictime">
    </div>
    <div class="col">
        <label for="">sexe responsable</label>
        <select class=" form-control mb-3"name="typeacteur" >
          <?php while ($rowA=mysqli_fetch_array($acteur)) {?>
                   <option ><?= $rowA['libelle'] ?></option>
              <?php   } ?>
        </select>
      <label for="">date</label>
      <input type="date" class="form-control mb-3" placeholder="" name="date">
      <label for="">source information</label>
        <input type="text" class="form-control mb-3" placeholder="" name="source">
    </div>
  </div>
   <input type="submit" name="ajoutdanger" value="Enregistrer" class="btn btn-success" >
   <input type="submit" name="annuler" value="Annuler" class="btn btn-warning" >
</form>

<?php if (isset($erreur) and !empty($erreur) ) {?>

  <div class="alert alert-success alert-dismissible fade show " role ="alert" id="alert" style="margin-top:30px; width:400px; margin-left:100px">
    <?=$erreur?>
    <button type="button" class="close" data-dismiss="alert" aria-label="close" >&times;</button>

  </div>
  <?php  } ?>

</div>

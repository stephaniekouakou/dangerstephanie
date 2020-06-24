<?php
  include("bd.php");
  include('app/securite.php');
  if (isset($_GET['id'])) {
    $id_user = $_SESSION['id'];

    $reqtype="SELECT * FROM dangertype " ;
  $reqtypedanger=mysqli_query($conn,$reqtype);


    $reqville="SELECT * FROM ville " ;
    $reqlieu=mysqli_query($conn,$reqville);


    $reqacteur="SELECT * FROM acteur " ;
    $acteurdanger=mysqli_query($conn,$reqacteur);

    $id= $_GET['id'];
    $erreur='';
    $query= "SELECT * FROM dangertable WHERE id_danger=$id";
    $result = mysqli_query($conn,$query);
    if(mysqli_num_rows($result)==1){
      $row= mysqli_fetch_array($result);
      $ville= $row['ville'];
      $dangertype= $row['dangertype'];
      $sexevictime=$row['sexevictime'];
      $source=$row['source'];
      $date_danger=$row['date_danger'];
      $dangers=$row['dangertype'];
      $acteur=$row['acteur'];
      $description=$row['description_lieu'];

    }

   $nom=$_SESSION['nom'].' '.$_SESSION['prenom'];


    if (isset($_POST['modifier'])) {
      $ville=secure($_POST['ville']) ;
      $dangertype=secure($_POST['danger']) ;
      $sexevictime= secure($_POST['sexevictime']);
      $source= secure($_POST['source']);
      $date_danger= secure($_POST['date']);
      $acteur=secure($_POST['typeacteur']);
      $description=secure($_POST['description']);
   $query = "UPDATE dangertable set sexevictime='$sexevictime',source='$source',date_danger='$date_danger',dangertype='$dangertype',acteur='$acteur',ville='$ville',description_lieu='$description'
    WHERE id_danger =$id ";
    $sqlactivite= "INSERT INTO activite(nom_activite,id_utilisateur,nom_user,id_danger) VALUES('modification de danger',$id_user,'$nom','$dangertype')";
    $resultat= mysqli_query($conn,$sqlactivite);
   mysqli_query($conn,$query);
   header("location:index.php?page=liste_dangers");
  }

    if (isset($_POST['annuler'])) {
        header("location:index.php?page=liste_dangers");
     }


  }


 ?>


 <div class="container" id="modifier">
   <div class="container"id="typedanger">
  <h1 style="text-align:center">modifier les informations</h1>

   <form class="needs-validation" method="POST" action="">

     <div class="col">
       <label for="">ville:</label>
       <select class=" form-control mb-3" name="ville">
         <?php while ($row=mysqli_fetch_array($reqlieu)) {?>

              <option value="<?=$ville?>" ><?= $row['nom_ville'] ?></option>
         <?php   } ?>
       </select>
     </div>
     <div class="row ">


       <div class="col">
         <label for="">description du lieu</label>
         <textarea name="description"  class="form-control mb-3 " rows="8" cols="10"><?=$description?></textarea>


         <label for="">type de danger</label>
         <select class=" form-control mb-3 " name="danger">

                     <?php while ($rows=mysqli_fetch_array($reqtypedanger) ) {?>
                          <option value="<?= $rows['libelle'] ?>" ><?= $rows['libelle'] ?></option>
                     <?php   } ?>
         </select>

         <label for="">victime</label>
         <input type="text" class="form-control mb-3" id="nom" placeholder="" name="sexevictime" value="<?=$sexevictime ?>">
       </div>
       <div class="col">
           <label for="">sexe responsable</label>
           <select class=" form-control mb-3"name="typeacteur" >
             <?php while ($rowA=mysqli_fetch_array($acteurdanger)) {?>
                      <option value="<?=$acteur?>"><?= $rowA['libelle'] ?></option>
                 <?php   } ?>
           </select>
         <label for="">date</label>
         <input type="date" class="form-control mb-3" placeholder="" name="date" value="<?=$date_danger ?>">
         <label for="">source information</label>
           <input type="text" class="form-control mb-3" placeholder="" name="source" value="<?=$source ?>">
       </div>
     </div>
      <input type="submit" name="modifier" value="modifier" class="btn btn-success" >
      <input type="submit" name="annuler" value="Annuler" class="btn btn-warning" >
   </form>

   <?php if (isset($erreur) and !empty($erreur) ) {?>

     <div class="alert alert-success alert-dismissible fade show " role ="alert" id="alert" style="margin-top:30px; width:400px; margin-left:100px">
       <?=$erreur?>
       <button type="button" class="close" data-dismiss="alert" aria-label="close" >&times;</button>

     </div>
     <?php  } ?>

   </div>

 </div>

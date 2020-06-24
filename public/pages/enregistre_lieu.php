<?php include("traite_enregistre.php") ?>
<div class="container" id="enregistre_lieu">
  <h1 class="" style="text-align:center;">Ajouter une ville</h1>
  <div class="col-md-12">
    <?php if (isset($msg) and !empty($msg) ) {?>

      <div class="alert alert-success alert-dismissible fade show " role ="alert" id="alert" >
        <?=$msg?>
        <button type="button" class="close" data-dismiss="alert" aria-label="close" >&times;</button>

      </div>
      <?php  } ?>
 </div>
  <form class="" action="" method="POST">
  <div class="row form-group" id="lieu">
    <fieldset>
      <legend></legend>
    <div class="form-group  mb-3">
      <label for="">Nom de la ville:</label>
      <input type="text" name="nom" value="" class="form-control " autocomplete="off" placeholder="">
    </div>
    <div class="form-group  mb-3">
      <label for="">longitude:</label>
      <input type="text" name="lng" value="" class="form-control " autocomplete="off" placeholder="">
    </div>
    <div class="form-group  mb-3">
      <label for="">lattitude:</label>
      <input type="text" name="lat" value="" class="form-control " autocomplete="off" placeholder="">
    </div>

          <input type="submit" name="ajoutlieu" value="Enregistrer" class="btn btn-success">
  </fieldset>

      </form>


</div>

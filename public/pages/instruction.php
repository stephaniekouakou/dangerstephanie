<?php
if ( isset($_SESSION['email']) and isset($_SESSION['role'] ) and isset($_SESSION['nom']) ) {

  if ($_SESSION['role']=='editeur') {

    header("location:index.php?page=acceuil_edit");

  }else if ($_SESSION['role']=='surperviseur'){

      header("location:index.php?page=acceuil_sup");

  }else if ($_SESSION['role']=='admin'){
    header("location:index.php?page=acceuil");

}
}

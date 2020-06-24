<?php
include('bd.php');
$sql="select count(*) as total from utilisateur where role='editeur' ";
$result=mysqli_query($conn,$sql);
$data=mysqli_fetch_assoc($result);

include('bd.php');
$sqlA="select count(*) as totalA from utilisateur where role='admin' ";
$resultA=mysqli_query($conn,$sqlA);
$dataA=mysqli_fetch_assoc($resultA);

include('bd.php');
$sqlV="select count(*) as totalV from visiteur where etat=1 ";
$resultV=mysqli_query($conn,$sqlV);
$dataV=mysqli_fetch_assoc($resultV);

 ?>
<div class="ms-content-wrapper">
    <div class="row">
      <div class="col-md-12">
        <h1 class="db-header-title">Bienvenue, <?php echo $_SESSION['nom'].' '.$_SESSION['prenom'] ?></h1>
      </div>
      <div class="col-xl-3 col-lg-6 col-md-6">
        <div class="ms-card ms-widget has-graph-full-width ms-infographics-widget">
          <span class="ms-chart-label bg-black"><i class="flaticon-user"></i> </span>
          <div class="ms-card-body media">
            <div class="media-body">
              <span class="black-text"><strong>etat des visites</strong></span>
              <h2><?=$dataV['totalV']?></h2>
            </div>
          </div>
          <canvas id="line-chart"></canvas>
        </div>
      </div>
      <div class="col-xl-3 col-lg-6 col-md-6">
        <div class="ms-card ms-widget has-graph-full-width ms-infographics-widget">
          <span class="ms-chart-label bg-red"><i class="flaticon-user"></i></span>
          <div class="ms-card-body media">
            <div class="media-body">
              <span class="black-text"><strong>Total Editeur</strong></span>
              <h2><?=$data['total']?></h2>
            </div>
          </div>
          <canvas id="line-chart-2"></canvas>
        </div>
      </div>
      <div class="col-xl-3 col-lg-6 col-md-6">
        <div class="ms-card ms-widget has-graph-full-width ms-infographics-widget">
          <span class="ms-chart-label bg-black"><i class="flaticon-network"></i> </span>
          <div class="ms-card-body media">
            <div class="media-body">
              <span class="black-text"><strong>Total Administrateur</strong></span>
              <h2><?=$dataA['totalA']?></h2>
            </div>
          </div>
          <canvas id="line-chart-3"></canvas>
        </div>
      </div>
      <div class="col-xl-3 col-lg-6 col-md-6">
        <div class="ms-card ms-widget has-graph-full-width ms-infographics-widget">
          <span class="ms-chart-label bg-red"><i class="material-icons fs-16">assignment</i> </span>
          <div class="ms-card-body media">
            <div class="media-body">
              <span class="black-text"><strong>message recu</strong></span>
              <h2>18</h2>
            </div>
          </div>
          <canvas id="line-chart-4"></canvas>
        </div>
      </div>
      <!-- Commandes récentes demandées -->
      <div class="col-xl-12 col-md-12">
        <div class="ms-panel">
          <div class="ms-panel-header">
            <div class="d-flex justify-content-between">
              <div class="align-self-center align-left">
                <h6>compte superviseur</h6>
              </div>

            </div>
          </div>
          <div class="ms-panel-body">
            <div class="table-responsive">
              <table class="table table-hover">
                <thead>

                  <tr>
                    <th scope="col">NOM</th>
                    <th scope="col">PRENOM</th>
                    <th scope="col"> EMAIL</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                        $sqlsup =$conn->query('SELECT * FROM utilisateur where role ="surperviseur" ') ;
                        while ($datasup = $sqlsup->fetch_array()) {
                          echo'
                          <tr>
                            <td class="ms-table-f-w"> <img src="public/img/businessman.png" alt="people">'.$datasup['nom'].'  </td>
                            <td>'.$datasup['prenom'].' </td>
                            <td>'.$datasup['email'].' </td>
                          </tr>

                          ';
                        }
                   ?>



                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

</div>
</div>

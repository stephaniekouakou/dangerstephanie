<!DOCTYPE html>
<html lang="fr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title> Dashboard supperviseur</title>
  <!-- Iconic Fonts -->
  <link rel="stylesheet" href="public/iconfont/material-icons.css">
  <link rel="stylesheet" href="public/vendors/iconic-fonts/flat-icons/flaticon.css">
  <link rel="stylesheet" href="public/vendors/iconic-fonts/cryptocoins/cryptocoins.css">
  <link rel="stylesheet" href="public/vendors/iconic-fonts/cryptocoins/cryptocoins-colors.css">
  <!-- Bootstrap core CSS -->
  <link href="public/css/bootstrap.min.css" rel="stylesheet">
  <!-- jQuery UI -->
  <link href="public/css/jquery-ui.min.css" rel="stylesheet">
  <!-- Page Specific CSS (Slick Slider.css) -->
  <link href="public/css/slick.css" rel="stylesheet">
  <link href="public/css/datatables.min.css" rel="stylesheet">
  <!-- Costic styles -->
  <link href="public/css/styles.css" rel="stylesheet">
  <!-- Favicon -->
  <link rel="icon" type="image/png" sizes="32x32" href="public/img/costic/logo.png">
</head>

<body class="ms-body ms-aside-left-open ms-primary-theme ms-has-quickbar">
  <!-- Preloader au chargement-->
  <div id="preloader-wrap">
    <div class="spinner spinner-8">
      <div class="ms-circle1 ms-child"></div>
      <div class="ms-circle2 ms-child"></div>
      <div class="ms-circle3 ms-child"></div>
      <div class="ms-circle4 ms-child"></div>
      <div class="ms-circle5 ms-child"></div>
      <div class="ms-circle6 ms-child"></div>
      <div class="ms-circle7 ms-child"></div>
      <div class="ms-circle8 ms-child"></div>
      <div class="ms-circle9 ms-child"></div>
      <div class="ms-circle10 ms-child"></div>
      <div class="ms-circle11 ms-child"></div>
      <div class="ms-circle12 ms-child"></div>
    </div>
  </div>
  <!-- Overlays -->
  <div class="ms-aside-overlay ms-overlay-left ms-toggler" data-target="#ms-side-nav" data-toggle="slideLeft"></div>
  <div class="ms-aside-overlay ms-overlay-right ms-toggler" data-target="#ms-recent-activity" data-toggle="slideRight"></div>
  <!-- Sidebar Navigation Left -->
  <aside id="ms-side-nav" class="side-nav fixed ms-aside-scrollable ms-aside-left">
    <!-- Logo -->
    <div class="logo-sn ms-d-block-lg">
      <a class="pl-0 ml-0 text-center" href="index.html">
        <img src="public/img/logo.png" alt="logo">
      </a>
    </div>
    <!-- Navigation -->
    <ul class="accordion ms-main-aside fs-14" id="side-nav-accordion">
      <!-- Dashboard -->
      <li class="menu-item">
        <a href="<?='index.php?page=acceuil_sup'; ?>"> <span><i class="material-icons fs-16">dashboard</i>ACCUEIL</span>
        </a>
      </li>
      <!-- Dashboard -->
      <!--Menu-->
      <li class="menu-item">
        <a href="#" class="has-chevron collapsed" data-toggle="collapse" data-target="#product" aria-expanded="false" aria-controls="product"> <span><i class="material-icons fs-16">menu</i>Menu</span>
        </a>
        <ul id="product" class="collapse" aria-labelledby="product" data-parent="#side-nav-accordion" style="">
          <li> <a href="<?='index.php?page=list_admin'; ?>">Liste utilisateurs</a>
          </li>
        
          <li> <a href="<?='index.php?page=historique_activite'; ?>">activités realisés</a>
          </li>
          <li> <a href="<?='index.php?page=danger_sup'; ?>">Dangers enregistrés</a>
          </li>
          <li> <a href="<?='index.php?page=messages'; ?>">Messages</a>
          </li>
        </ul>
      </li>
      <!--Fin Menu-->


        <!--Paramétre-->
        <li class="menu-item">
            <a href="#" class="has-chevron collapsed" data-toggle="collapse" data-target="#advenced-element" aria-expanded="false" aria-controls="advenced-element"> <span><i class="material-icons fs-16">settings</i>Paramétre</span>
            </a>
            <ul id="advenced-element" class="collapse" aria-labelledby="advenced-element" data-parent="#side-nav-accordion" >
              <li> <a href="access.html">Compte</a>
              </li>
              <li> <a href="access.html">Ajouter un surperviseur</a>
              </li>

            </ul>
          </li>
          <!--Fin Paramétre-->
    </ul>
  </aside>

        <!-- Navigation Bar -->
    <nav class="navbar ms-navbar" style="width: 100% !important;">
      <div class="ms-aside-toggler ms-toggler pl-0" data-target="#ms-side-nav" data-toggle="slideLeft"> <span class="ms-toggler-bar bg-primary"></span>
        <span class="ms-toggler-bar bg-primary"></span>
        <span class="ms-toggler-bar bg-primary"></span>
      </div>
      <div class="logo-sn logo-sm ms-d-block-sm">
        <a class="pl-0 ml-0 text-center navbar-brand mr-0" href="index.html"><img src="public/img/logo.png" alt="logo"> </a>
      </div>
      <ul class="ms-nav-list ms-inline mb-0" id="ms-nav-options">
        <li class="ms-nav-item ms-search-form pb-0 py-0">
          <form class="ms-form" method="post">
            <div class="ms-form-group my-0 mb-0 has-icon fs-14">
              <input type="search" class="ms-form-input" name="search" placeholder="Recherche..." value=""> <i class="flaticon-search text-disabled"></i>
            </div>
          </form>
        </li>
        <li class="ms-nav-item dropdown"> <a href="#" class="text-disabled ms-has-notification" id="mailDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flaticon-mail"></i></a>
          <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="mailDropdown">
            <li class="dropdown-menu-header">
              <h6 class="dropdown-header ms-inline m-0"><span class="text-disabled">E-mail</span></h6><span class="badge badge-pill badge-success">3 New</span>
            </li>
            <li class="dropdown-divider"></li>
            <li class="ms-scrollable ms-dropdown-list">
              <a class="media p-2" href="#">
                <div class="ms-chat-status ms-status-offline ms-chat-img mr-2 align-self-center">
                  <img src="assets/img/costic/customer-3.jpg" class="ms-img-round" alt="people">
                </div>
                <div class="media-body"> <span>Salut admin, je bosse sur un nouveau projet et toi.</span>
                  <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 30 seconds ago</p>
                </div>
              </a>
            </li>
            <li class="dropdown-divider"></li>
            <li class="dropdown-menu-footer text-center"> <a href="email.html">Messagerie</a>
            </li>
          </ul>
        </li>
        <li class="ms-nav-item dropdown"> <a href="#" class="text-disabled ms-has-notification" id="notificationDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flaticon-bell"></i></a>
          <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="notificationDropdown">
            <li class="dropdown-menu-header">
              <h6 class="dropdown-header ms-inline m-0"><span class="text-disabled">Notification</span></h6><span class="badge badge-pill badge-info">4 New</span>
            </li>
            <li class="dropdown-divider"></li>
            <li class="ms-scrollable ms-dropdown-list">
              <a class="media p-2" href="#">
                <div class="media-body"> <span>Vous aviez une commande en attente de validation.</span>
                  <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 30 seconds ago</p>
                </div>
              </a>
            </li>
            <li class="dropdown-divider"></li>
            <li class="dropdown-menu-footer text-center"> <a href="notification.html">Notification</a>
            </li>
          </ul>
        </li>
        <li class="ms-nav-item dropdown"> <a href="<?='index.php?page=deconnexion'; ?>" aria-haspopup="true" aria-expanded="false"><i class="flaticon-shut-down"></i></a>
        </li>
      </ul>
      <div class="ms-toggler ms-d-block-sm pr-0 ms-nav-toggler" data-toggle="slideDown" data-target="#ms-nav-options"> <span class="ms-toggler-bar bg-primary"></span>
        <span class="ms-toggler-bar bg-primary"></span>
        <span class="ms-toggler-bar bg-primary"></span>
      </div>
    </nav>


  <!-- Main Content -->
  <main class="body-content">
       <?=$content; ?>
  </main>

  <!-- SCRIPTS -->
  <!-- Global Required Scripts Start -->
  <script src="public/js/jquery-3.3.1.min.js"></script>
  <script src="public/js/popper.min.js"></script>
  <script src="public/js/bootstrap.min.js"></script>
  <script src="public/js/perfect-scrollbar.js">
  </script>
  <script src="public/js/jquery-ui.min.js">
  </script>
  <!-- Global Required Scripts End -->
  <!-- Page Specific Scripts Start -->

  <script src="public/js/Chart.bundle.min.js">
  </script>
  <script src="public/js/widgets.js"> </script>
  <script src="public/js/clients.js"> </script>
  <script src="public/js/Chart.Financial.js"> </script>
  <script src="public/js/d3.v3.min.js">
  </script>
  <script src="public/js/topojson.v1.min.js">
  </script>
  <script src="public/js/datatables.min.js">
  </script>
  <script src="public/js/data-tables.js">
  </script>
  <!-- Page Specific Scripts Finish -->
  <!-- Costic core JavaScript -->
  <script src="public/js/framework.js"></script>
  <!-- Settings -->
  <script src="public/js/settings.js"></script>
</body>


</html>

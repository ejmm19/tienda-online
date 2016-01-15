<?php 
    session_start();
    $role = $_SESSION['sess_userrole'];
    if(!isset($_SESSION['sess_username']) && $role!="cliente"){
      header('Location: index.php?err=2');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tienda de Celulares Online</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="userhome.php"><img src="img/logoculetienda.png" style="margin-top: -96px;width: 67%;"></a>
        </div>

        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="userhome.php?op=5"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>    <?php echo $_SESSION['sess_username'];?></a></li>
            <li><a href="userhome.php?op=1"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>     Preferencias</a></li>
            <li><a href="userhome.php?op=3"><span class="glyphicon glyphicon-gift" aria-hidden="true"></span>     Planes</a></li>
            <li><a href="userhome.php?op=4"><span class="glyphicon glyphicon-phone" aria-hidden="true"></span>   Equipos</a></li>
            <li><a href="userhome.php?op=2"><span class="glyphicon glyphicon-off" aria-hidden="true"></span>   Salir</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="container homepage">
      <div class="row">
         <div class="col-md-3"></div>
            <div class="col-md-6 welcome-page">
             <br><br>

            </div>
          <div class="col-md-3"></div>
          <div class="container-fluid">

          <?php 
          if (!isset($_GET['op'])) {
            include('vistas/paginainicial.php');
          }elseif ($_GET['op']==1) {
            include('vistas/preferencias.php');
          }elseif ($_GET['op']==2) {
            include('php/logout.php');
          }elseif ($_GET['op']==3) {
            include('vistas/planes.php');
          }elseif ($_GET['op']==4) {
            include('vistas/equipos.php');
          }elseif ($_GET['op']==5) {
            include('vistas/perfil.php');
          }


           ?>
  

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>

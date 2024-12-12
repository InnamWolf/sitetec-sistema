<?php 
  session_start();   
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SiteTecSol</title>

  <link rel="icon" href="/view/src/img/sistema/logo3.svg">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="view/src/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="view/src/dist/css/adminlte.min.css">
  <!-- Template Personalizado -->
  <link rel="stylesheet" href="view/src/custom/template/template.css">
</head>
<body class="sidebar-mini layout-navbar-fixed layout-fixed layout-footer-fixed">

<?php 

  if(!isset($_SESSION["credencial"])){

  include "view/pages/login/login.php"; 
  echo '</body><head>';
  return;

  }

?>

<?php if (isset($_SESSION["credencial"])  && $_SESSION["credencial"] == "ok"): ?>

<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
<?php include "view/components/navbar.php"; ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
<?php include "view/components/sidebar.php"; ?>

  <!--
  //*===============================================
  //* Lista blanca
  //* ==============================================
  -->
  <?php 
    if(isset($_GET["url"])){       

      if($_GET["url"] == "home" ||         
          $_GET["url"] == "usuarios" ||
          $_GET["url"] == "salir" 
      ){
        include "view/pages/".$_GET["url"]."/".$_GET["url"].".php";  
      }else{
        include "view/pages/404/404.php";   
      }
    }else{
      include "view/pages/home/home.php";
    }
      
  ?>

  <!--
  //*===============================================
  //* Footer
  //* ==============================================
  -->

  <?php include "view/components/footer.php"; ?>

</div>

<!-- jQuery -->
<script src="view/src/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="view/src/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="view/src/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="view/src/dist/js/demo.js"></script>
<?php endif?>
</body>
</html>
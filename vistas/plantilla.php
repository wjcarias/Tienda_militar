<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tienda militar HN</title>

  <link rel="shortcut icon" href="vistas/assets/dist/img/AdminLTELogo.png" type="image/x-icon">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="vistas/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="vistas/assets/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="vistas/assets/dist/css/plantilla.css">

<!-- jQuery -->
<script src="vistas/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="vistas/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="vistas/assets/dist/js/adminlte.min.js"></script>

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

<?php
include "modulos/navbar.php";
include "modulos/aside.php";
?>

  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  
  <?php include "vistas/tablero.php" ?>

  </div>
  <!-- /.content-wrapper -->
 
  <?php include "vistas/modulos/footer.php" ?>  

</div>
<!-- ./wrapper -->

<script>


  function CargarContenido(pagina_php, contenedor) {
    
    $("." + contenedor).load(pagina_php);

  }


</script>

</body>
</html>

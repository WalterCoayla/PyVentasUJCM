<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Ventas</title>
    <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="./assets/css/fontawesome-free/css/all.min.css">
   <!-- Theme style -->
  <link rel="stylesheet" href="./assets/css/adminlte.min.css">
  <!-- jQuery -->
    <script src="./assets/js/jquery/jquery.min.js"></script>

</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

<?php 
    require_once './vistas/plantilla/nav.php';
    require_once './vistas/plantilla/aside.php';
?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <?php 
                    require_once './vistas/plantilla/migas.php';
                ?>
            </div>
        </div>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

      <?=$contenido;?>

      </div>
    </section>

    </div>

    <?php 
        require_once './vistas/plantilla/footer.php';
    ?>

</div>

<script src="./assets/js/jsPdf/jspdf.debug.js"></script>
<script src="./assets/js/jsPdf/jspdf.plugin.autotable3.1.1.min.js"></script>


</body>
</html>
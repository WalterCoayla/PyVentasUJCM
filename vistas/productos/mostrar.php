<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</head>
<body>
  
<?php
    if ($msg['titulo']!=''){ ?>
      <div class="toast-container top-0 end-0 p-3">

    <!-- Then put toasts within -->
    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
      <div class="toast-header">
        <img src="..." class="rounded me-2" alt="...">
        <strong class="me-auto">Bootstrap</strong>
        <small class="text-body-secondary">just now</small>
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
      <div class="toast-body">
        See? Just like this.
      </div>
    </div>
    </div>

<?php
    }
?>

    <h1>Productos</h1>
<a href="?ctrl=CtrlProducto&accion=nuevo"> Nuevo Producto</a>
    <table class="table table-striped table-hover">
        <tr>
            <th>id</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>P.U.</th>
            <th>Stock</th>
            <th>Imagen</th>
            <th>Marca</th>
            <th colspan="2">Operaciones</th>
        </tr>
    <?php  
        # var_dump($datos);exit;
        if (is_array($datos))
        foreach ($datos as $d) { ?>
        
        <tr>
            <td><?=$d['idproductos']?></td>
            <td><?=$d['nombre']?></td>
            <td><?=$d['descripcion']?></td>
            <td><?=$d['precio_unitario']?></td>
            <td><?=$d['stock']?></td>
            <td><?=$d['imagen']?></td>
            <td><?=$d['marca']?></td>
            <td><a href="?ctrl=CtrlProducto&accion=editar&id=<?=$d['idproductos']?>"> Editar</a></td>
            <td><a href="?ctrl=CtrlProducto&accion=eliminar&id=<?=$d['idproductos']?>"> Eliminar</a></td>
        </tr>
        <?php } ?>
    </table>
<p></p>

<p></p>
<a href="?">Retornar</a>

</body>
</html>
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
    # var_dump($datos);
    $id = isset($datos['idproductos'])?$datos['idproductos']:'';
    $nombre= isset($datos['nombre'])?$datos['nombre']:'';
    $descripcion= isset($datos['descripcion'])?$datos['descripcion']:'';
    $precio_unitario= isset($datos['precio_unitario'])?$datos['precio_unitario']:'';
    $stock= isset($datos['stock'])?$datos['stock']:'';
    $imagen= isset($datos['imagen'])?$datos['imagen']:'';
    $idmarcas= isset($datos['idmarcas'])?$datos['idmarcas']:'';

    $editar = ($id!='')?1:0;
    $titulo= ($editar==1)?'Editar Producto':'Nuevo Producto';
    ?>
    <h1><?=$titulo?></h1>

    <form action="?ctrl=CtrlProducto&accion=guardar" method="post">
        Id: <input class="form-control" 
        type="text" name="id" value="<?=$id?>">
        <br>
        Nombre: <input class="form-control" 
        type="text" name="nombre" value="<?=$nombre?>">
        <br>
        Descripcion: <input class="form-control" 
        type="text" name="descripcion" value="<?=$descripcion?>">
        <br>
        
        P.U.: <input class="form-control" 
        type="text" name="pu" value="<?=$precio_unitario?>">
        <br>

        Stock: <input class="form-control" 
        type="text" name="stock" value="<?=$stock?>">
        <br>

        Imagen: <input class="form-control" 
        type="text" name="imagen" value="<?=$imagen?>">
        <br>
        idMarca: <input class="form-control" 
        type="text" name="idmarcas" value="<?=$idmarcas?>">
        <br>

        <input type="hidden" name="op" value="<?=$editar?>">

        <input type="submit" value="Guardar">
    </form>

    <a href="?ctrl=CtrlMarca">Retornar</a>
    
</body>
</html>
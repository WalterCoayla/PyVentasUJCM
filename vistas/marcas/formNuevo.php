<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marcas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</head>
<body>
    <?php 
    # var_dump($datos);
    $id = isset($datos['idmarcas'])?$datos['idmarcas']:'';
    $nombre= isset($datos['nombre'])?$datos['nombre']:'';
    
    $editar = ($id!='')?1:0;
    $titulo= ($editar==1)?'Editar Marca':'Nueva Marca';
    ?>
    <h1><?=$titulo?></h1>

    <form action="?ctrl=CtrlMarca&accion=guardar" method="post">
        Id: <input class="form-control" 
        type="text" name="id" value="<?=$id?>">
        <br>
        Marca: <input class="form-control" 
        type="text" name="marca" value="<?=$nombre?>">
        <br>

        <input type="hidden" name="op" value="<?=$editar?>">

        <input type="submit" value="Guardar">
    </form>

    <a href="?ctrl=CtrlMarca">Retornar</a>
    
</body>
</html>
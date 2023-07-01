<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Ingresa tus credenciales</h1>
    <form action="?ctrl=CtrlEmpleado&accion=validar" method="post">
        Usuario : <input type="text" name="usuario"> <br>
        Password : <input type="password" name="clave"> <br>

        <input type="submit" value="Ingresar">

    </form>
    
</body>
</html>
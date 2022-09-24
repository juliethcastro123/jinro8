<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <?php
    include("index/nav.php");
    ?>
    <form name="form" class="formu" action="registro.php" method="post">
        <h1>Registrate</h1>
        <div class="conte">
                <div class="input-class">
                    <input type="text" name="nombre" id="nombre" placeholder="Nombre" required>
                </div>
                <div class="input-class">
                    <input type="text" name="apellido" id="apellido" placeholder="Apellido" required>
                </div>
                <div class="input-class">
                    <input type="email" name="email" id="email" placeholder="nombre@ejemplo.com" required>
                </div>
                <div class="input-class">
                    <input type="number" name="cedula" placeholder="C.C" required>
                </div>
                <div class="input-class">
                    <input type="password" name="clave" placeholder="Clave" required>
                </div>
                <div class="input-class">
                    <input type="text" name="conclav" placeholder="Direccion" required>
                </div>
                <input type="submit" value="Registrate" class="button">
                <p>Al registrarte, aceptas nuetras condiciones de uso y 
                    politica ed privacidad.</p>
                <p>Ya tienes una cuenta? <a class="link" href="ingreso.php">Iniciar Sesion</a></p>   
</div></form>
</body>
</html>


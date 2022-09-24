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
<form class="formu" action="validar.php" method="post">
        <h1>Login</h1>
        <div class="row">
            <div class="conte">
                    <div class="input-class">
                        <input type="email" name="email" id="email" placeholder="nombre@ejemplo.com">
                    </div>
                    <div class="input-class">
                        <input type="password" name="clave" placeholder="Clave">
                    </div>
                    <input type="submit" value="Login" class="button">
                    <p>Al registrarte, aceptas nuetras condiciones de uso y 
                        politica ed privacidad.</p>
                    <p>No tienes una cuenta? <a class="link" href="formulario.php">Registrate</a></p>    
            </div>
        </div>
</form>
</body>
</html>

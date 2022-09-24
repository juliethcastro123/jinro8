<?php include("BD/conexion.php");?>
<?php include("BD/select.php");?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snacks</title>
    <link rel="stylesheet" href="css/miscss.css"> 
    <link rel="stylesheet" href="css/boostrap.min.css"> 
</head>
<body>
    <div class="container p-0">
        <?php include("index/nav.php");?>
        <?php include("index/menu.php");?>
        <?php include("index/carrusel.php");?>

        
        <div class="row">
            <div class="col-12 bg-warning">
                <br>
            </div>
        </div>
        <br>
        <br>
        <?php include("index/contenido_snacks.php");?>        
        <?php include("index/futer.php");?>
    </div>   


    <script src="js/jquery.min.js"></script>
    <script src="js/boostrap.min.js"></script>
    <script src="js/misjs.js"></script>
</body>
</html>

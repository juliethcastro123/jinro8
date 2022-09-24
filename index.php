<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/miscss.css"> 
    <link rel="stylesheet" href="css/boostrap.min.css"> 
    <link rel="stylesheet" href="css/animate.min.css"> 
</head>
<body>
    <div class="container-fluid p-0">
        <?php include("index/nav.php");?>
        <?php include("index/menu.php");?>
        <?php include("index/carrusel.php");?>
        <br>        
        <hr>
        <div class="container">
            <div class="row alert-success d-flex justify-content-center">
                <div class="col-md-6">
                <p class="text-center font-weight-bold h1"> PRODUCTOS DESTACADOS </p>
                </div>           
            </div>   
        </div>     
        <hr>
        <br>
        <?php include("index/destacados.php");?>
        <br>
        <?php include("index/futer.php");?>
        <?php include("index/modal.php");?>
    </div>   


    <script src="js/jquery.min.js"></script>
    <script src="js/boostrap.min.js"></script>
    <script src="js/misjs.js"></script>
</body>
</html>

   

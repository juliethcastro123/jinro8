<?php include("BD/conexion.php");?>
<?php include("BD/select.php");?>
<?php include("BD/insertar.php");?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
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
        <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-4">
                            <h1>Ingrese Producto</h1>
                                <form action="BD/insertar.php" method="POST">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Nombre</label>
                                        <input type="text"  class="form-control mb-3" name="nombre" placeholder="Nombres">                                        
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Descripción</label>
                                        <textarea class="form-control" name="descripcion"rows="3"></textarea>
                                    </div>
                                
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Tipo de Productos</label>
                                        <select class="form-control" name="tipoproductos">
                                            <?php 
                                                $cat=leerTipoProducto();  
                                                while($row = $cat->fetch(PDO::FETCH_ASSOC)) 
                                                {
                                                  if($row){
                                                    echo '<option value="">--Seleccione una opción.--</option>';
                                                    // output data of each row
                                                    while($row = $cat->fetch(PDO::FETCH_ASSOC)) 
                                                    {
                                                        echo '<option value="'.$row["id"].'">'.$row["nombre"].'</option>';                                                
                                                    }
                                                  }
                                                } 
                                             
                                            ?>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Tipo de Presentación</label>
                                        <select class="form-control" name="tipopresentacion">
                                            <?php 
                                                $cat=leerTipoPresentacion();
                                                while($row = $cat->fetch(PDO::FETCH_ASSOC)) 
                                                {
                                                  if($row)
                                                   {
                                                        echo '<option value="">--Seleccione una opción.--</option>';
                                                        // output data of each row
                                                        while($row = $cat->fetch(PDO::FETCH_ASSOC)) 
                                                        {
                                                            echo '<option value="'.$row["id"].'">'.$row["nombre"].'</option>';                                                
                                                        }
                                                    }
                                                }  
                                            ?>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Cantidad</label>
                                        <input type="number"  class="form-control mb-3" name="cantidad" placeholder="Cantidad">                                        
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">URL Imagen</label>
                                        <input type="text"  class="form-control mb-3" name="urlImg" placeholder="Url de la Imagen">                                        
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Costo Unitario</label>
                                        <input type="number"  class="form-control mb-3" name="costo" placeholder="Costo Unitario">                                        
                                    </div>

                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Producto</th>
                                        <th>Tipo Producto</th>
                                        <th>Tipo Presentación</th>
                                        <th>Cantidad</th>
                                        <th>Costo</th> 
                                        <th></th>  
                                        <th></th>                                     
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php 
                                            $cat=leerProductos();
                                            while($row = $cat->fetch(PDO::FETCH_ASSOC)) 
                                                {
                                                  if($row)
                                                  {
                                        ?>
                                                <tr>   
                                                   <th><?php echo $row["nombre"] ?></th>';
                                                   <th><?php echo $row["TIPO_PRODUCTO"] ?></th>';
                                                   <th><?php echo $row["TIPO_PRESENTACION"] ?></th>';
                                                   <th><?php echo $row["cantidad_stock"] ?></th>';
                                                   <th><?php echo $row["costo_unitario"] ?></th>';
                                                   <th><a href="actualizar.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a></th>
                                                   <th><a href="bd/delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a></th>                                                                            
                                                </tr>
                                        <?php   }
                                            }
                                         
                                        ?>
                                        
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>  
        <hr>
        <br>        
        <?php include("index/futer.php");?>
        <?php include("index/modal.php");?>
    </div>   


    <script src="js/jquery.min.js"></script>
    <script src="js/boostrap.min.js"></script>
    <script src="js/misjs.js"></script>
</body>
</html>
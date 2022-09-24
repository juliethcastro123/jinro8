<div class="row">
<div class="row row-cols-1 row-cols-md-5">
<?php 
  $result=leerLicores();  
  while($row = $result->fetch(PDO::FETCH_ASSOC)) 
  {
    if($row){
        echo"<div class='col mb-4'>
        <div class='card img-contenedor shadow-lg p-3 mb-5 bg-white rounded border border-secondary' producto='".$row["id"]."' precio='".$row["costo_unitario"]."' nombre='".$row["nombre"]."' descripcion='".$row["descripcion"]."'>
          <img src='".$row["url_img"]."' class='card-img-top img-fluid'>
          <div class='card-body cb-0'>
            <h5 class='card-title'>".$row["nombre"]."</h5>
            <p class='card-text font-weight-bold'>".$row["costo_unitario"]."</p>
          </div>
          <button class='btn btn-danger w-100' onclick='ModalCerveza(this.parentElement)' >COMPRAR</button> 
        </div>
      </div>";
      }
      else
      {
        echo" <div class='alert alert-danger' role='alert'>
        <h4 class='alert-heading'>Lo sentimos!</h4>
        <p>Actualmente no contamos con existencias de los productos seleccionados, por favor intenta mas tarde.</p>
        <hr>
        <p class='mb-0'>Recuerda que puedes disfrutar de nuestros productos y nuestras promociones.</p>
      </div>";
      }
  }  
?>
  </div>
</div>

<!-- Modal wOLKER-->
<div class="modal fade" id="modalCervezas" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="txtNombre"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
            <div class="col-md-4">
            <img class="img-fluid" src="" alt="..." id="imgModal">
            </div>
            <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">Descripción</h5>
                <p class="card-text" id="txtDescripcion"></p>
                <p class="card-text"><small class="text-muted" id="txtPrecio"></small></p>
            </div>
            </div>
        </div>
        </div>
      </div>
      <div class="modal-footer">
       <div class="col-md-7">
         <button id="btnAddCerveza" type="button" class="btn btn-primary w-100 " data-dismiss="modal">Añadir</button>
       </div>
       <div class="col-md-3">
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>     
         </div>
         
      </div>
    </div>
  </div>
</div>
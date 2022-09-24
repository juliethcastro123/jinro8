$("#img1").click(function() {
    $('#staticBackdrop').modal('show');
});

$("#cardCorona").click(function() {
    $('#modalCorona').modal('show');
});

$("#cardReds").click(function() {
    $('#modalRedds').modal('show');

});

$("#black").click(function() {
    $('#modalWhisky').modal('show');

});

$("#boton1").click(function() {
    alert("agregar al carrito")

});

$("#boton2").click(function() {
    alert("agregar al carrito")

});

$("#boton3").click(function() {
    alert("agregar al carrito")

});

$("#boton4").click(function() {
    alert("agregar al carrito")

});


function ModalCerveza(element) {
    var producto = element.getAttribute("producto");
    var precio = element.getAttribute("precio");
    var src = element.querySelectorAll('img');
    var nombre = element.getAttribute("nombre");
    var desc = element.getAttribute("descripcion");

    document.getElementById("txtNombre").innerHTML = nombre;
    document.getElementById("imgModal").src = src[0].getAttribute("src");
    document.getElementById("txtDescripcion").innerHTML = desc;
    document.getElementById("txtPrecio").innerHTML = precio;
    document.getElementById("btnAddCerveza").setAttribute("id_producto", producto);


    $('#modalCervezas').modal('show');
}
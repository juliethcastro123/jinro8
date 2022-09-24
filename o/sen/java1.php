<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>imagnes de java</title>
    <script lenguage="javaScript">
        function ver_imagenes()
        {
        if (document.images)
        return
        document.images.img.src=
        document.imagenes.imagen.options[document.imagenes.imagen.selectedIndex].value
        }
        </script>
        

<body>

<form name="imagenes">
    <select name="imagen" size="1" onChange="ver_imagen()">
        <option> elige una imagen </option>
        <option value="imagenes/ima1.jpg">imagen 1 </option>
        <option value="imagenes/ima2.jpg">imagen 2 </option>
        <option value="imagenes/ima3.jpg">imagen 3 </option>
    </select>
    </form>
    <img src="imagenes/ima5.jpg" name="img" width="300" height="250" border="1">
</body>
</html>
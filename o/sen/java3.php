<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>java 3</title>
</head>
<body>

<script>
    //preguntar si quiero cerrar la pagina
    window.onbeforeunload =function () {
        return "desea cerrar la ventana ?";

        //TABLA de miltiplicar fija
    };

        function escribirTablaMultiplicar(j){
            document.write("<h2>tabla de multiplicar del"+(j)+"</h2>");
            document.write("<ul>");
            // i++ significa i=i+1

            for(i = 1;i<=10;i++){
                document.write("<li>");
                document.write(j + "x" + i + "=" + j * i);
                document.write("</li>");
            }

            document.write("<ul>");
        }
        escribirTablaMultiplicar(8);
        
    
    </script>
</body>
</html>
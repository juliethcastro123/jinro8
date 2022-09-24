<?php
session_start();
header("location: index.php");
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Tu cuenta</title>
</head>
<body>

        <div class="w3-container w3-black w3-center">
            <h1> bienvenido a sena adsi</h1>

</div>
<p>
    <form class="w3-container" action="controller_logion.php" method="post">
        <input type="hidden" name="salir" value="salir">
        <button class="w3-btn w3-green"></button>
</form>
</body>
</html>
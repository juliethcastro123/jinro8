<?php
session_start();
unset($_SESSION["usuario"]);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>camilo</title>
</head>
<body>
    <header>
        <div class="w3-container w3-black w3-center">
            <h1> bienvenido a sena adsi</h1>

</div>
</header>

<div class="w3-container w3-black w3-green">
    <h2>login</h2>
</div>

<form class="w3-container" action="controller_login.php" method="post">
    <p>
        <label class="w3-label">
            usuario
</lavel>
<input class="w3-input w3-border" type="text" name="usuario">
</p>
<p>

<label class="w3-label">
    password
</label>


<input class="w3-input w3-border" type="password" name="pas">
</p>
<p>
    <input type="hidden" name="entrar" value="entrar">
    <button class="we-btm w3-green">aceptar</button>
</p>
<p> si no tienes cuenta ve al siguiente link <a href="registrarse.php">registrarse</a></p>
</form>
<footer>
    <div class="w3-container w3-black">
        <h4>camilo 2022</h4>
</div>
</footer>
</body>
</html>
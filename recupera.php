<?php
    require 'funcs/conexion.php';
    require 'funcs/funcs.php';

    $errors = array();

    if(!empty($_POST)){
        $email = $mysqli-> real_escape_string($_POST['correoRecuperar']);

    }

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Password</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/StylePagina.css">
</head>
<body class="Recupera">
    <header class="header">
        <div class="logo">
            <i class="fa-solid fa-suitcase"></i>
            <h1>WOFFORT</h1>
        </div>

    </header>
    <div class="ContenedorRecuperar">
        <form action="" method="POST" class="formularioRecuperar">
            <h2>Recuperar Contraseña</h2>
            <input type="email" placeholder="Correo Electronico" name="correoRecuperar" required>
            <button>Enviar</button>
        </form>
    </div>

</body>
</html>
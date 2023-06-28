<?php

    include 'conexion_be.php';


    $nombreCompleto = $_POST['nombreCompleto'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    $query = "INSERT INTO registrousuario(nombreCompleto, correo, usuario, contrasena) 
              VALUES('$nombreCompleto', '$correo', '$usuario', '$contrasena')";
    //verificar que el correo no se repita en la base de datos
    $verificarCorreo = mysqli_query($conexion,"SELECT * FROM registrousuario WHERE correo ='$correo' ");
    if (mysqli_num_rows($verificarCorreo) > 0){
        echo'
            <script>
                alert("Este correo ya está registrado, intenta con otro diferente o inicia sesión");
                window.location= "../index.php";
            </script>
        ';
        exit ();
    }
    //verificar que el usuario no se repita en la base de datos

    $verificarUsuario = mysqli_query($conexion,"SELECT * FROM registrousuario WHERE usuario='$usuario' ");
    if (mysqli_num_rows($verificarUsuario) > 0){
        echo'
            <script>
                alert("Este Usuario ya existe, intenta con otro diferente o inicia sesión");
                window.location= "../index.php";
            </script>
        ';
        exit ();
    }
    $ejecutar = mysqli_query($conexion,$query);

    if ($ejecutar){
        echo'
            <script>
                alert("Usuario Registrado Exitosamente")
                window.location = "../Home.php";
            </script>
        
        ';
    }else{
        echo'
        <script>
            alert("Intentalo nuevamente, usuario no almacenado")
            window.location = "../Home.php";
        </script>
    
    ';
    }

?>
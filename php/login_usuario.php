<?php
    session_start();

    include 'conexion_be.php';
    $correo = $_POST['Correo'];
    $contrasena = $_POST['Contrasena'];

    $validar_login = mysqli_query($conexion," SELECT * FROM registrousuario WHERE correo='$correo' and contrasena='$contrasena'");

    if (mysqli_num_rows($validar_login) > 0){
        $_SESSION['usuario']=$correo;
        header("location: ../Home.php");
        exit; 
    }else{
        echo'
            <script>
                alert("Usuario no existe, por favor verifique los datos introducidos")
                window.location="../index.php";
            
            </script>
        ';
        exit;
    }
    


?>
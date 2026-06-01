<?php
    $conex = mysqli_connect("localhost", "root", "", "registro");
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $nombre   = htmlspecialchars(trim($_POST["name"] ?? ''));
        $correo   = htmlspecialchars(trim($_POST["correo"] ?? ''));
        $genero   = htmlspecialchars(trim($_POST["genero"] ?? ''));
        $eleccion = htmlspecialchars(trim($_POST["eleccion"] ?? ''));
        $hogar    = htmlspecialchars(trim($_POST["hogar"] ?? ''));
        $permite  = htmlspecialchars(trim($_POST["permite"] ?? ''));
        $causa    = htmlspecialchars(trim($_POST["causa"] ?? ''));
        $personas = htmlspecialchars(trim($_POST["personas"] ?? ''));
        $espacio  = htmlspecialchars(trim($_POST["espacio"] ?? ''));
        $tiempo   = htmlspecialchars(trim($_POST["tiempo"] ?? ''));
        $mas      = htmlspecialchars(trim($_POST["mas"] ?? ''));
        $visita   = htmlspecialchars(trim($_POST["visita"] ?? ''));

        if (empty($nombre) || empty($correo)) {
            header("Location: ../formulario.html?error=campos_vacios");
            exit();
        }

        $sql = "INSERT INTO usuarios 
        (nombre, correo, genero, eleccion, hogar, permite, causa, personas, espacio, tiempo, mas, visita)
        VALUES 
        ('$nombre', '$correo', '$genero', '$eleccion', '$hogar', '$permite', '$causa', '$personas', '$espacio', '$tiempo', '$mas', '$visita')";

         if (mysqli_query($conex, $sql)) {
        header("Location: ../infos.html?success=1");
        exit();
        } 

        else {
        echo "Error al guardar: " . mysqli_error($conex);
        }

        header("Location: ../infos.html");
        exit(); 

    } else {
        header("Location: ../index.html");
        exit();
    }
?>

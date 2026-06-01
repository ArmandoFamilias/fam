<?php
    $conex = mysqli_connect("localhost", "root", "", "adopcion_popular");

    if (!$conex) {
        die("Error de conexión: " . mysqli_connect_error());
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Sanitizar y recoger datos del formulario
        $nombre   = htmlspecialchars(trim($_POST["nombre"] ?? ''));
        $correo   = htmlspecialchars(trim($_POST["correo"] ?? ''));
        $genero   = htmlspecialchars(trim($_POST["genero"] ?? ''));
        $hogar    = htmlspecialchars(trim($_POST["hogar"] ?? ''));
        $permite  = htmlspecialchars(trim($_POST["permite"] ?? ''));
        $causa    = htmlspecialchars(trim($_POST["causa"] ?? ''));
        $personas = htmlspecialchars(trim($_POST["personas"] ?? ''));
        $espacio  = htmlspecialchars(trim($_POST["espacio"] ?? ''));
        $tiempo   = htmlspecialchars(trim($_POST["tiempo"] ?? ''));
        $mas      = htmlspecialchars(trim($_POST["mas"] ?? ''));
        $visita   = htmlspecialchars(trim($_POST["visita"] ?? ''));

        if (empty($nombre) || empty($correo)) {
            header("Location: ../info.html?error=campos_vacios");
            exit();
        }

        $sql = "INSERT INTO solicitudes 
        (nombre, correo, genero, hogar, permite, causa, personas, espacio, tiempo, mas, visita)
        VALUES 
        ('$nombre', '$correo', '$genero', '$hogar', '$permite', '$causa', '$personas', '$espacio', '$tiempo', '$mas', '$visita')";


        if (mysqli_query($conex, $sql)) {
            header("Location: ../info.html?success=1");
            exit();
        } else {
            echo "Error al guardar: " . mysqli_error($conex);
        }

    } else {
        header("Location: ../index.html");
        exit();
    }
?>
<?php
session_start();

// Credenciales del usuario
$usr = "usuario";
$pass = "usuario"; 

// Listado de películas y series
$peliculas = ["El Laberinto del Fauno", "Cómo Entrenar a tu Dragón", "Nimona"];
$series = ["Juego de Tronos", "El Cuento de la Criada", "Miércoles"];

// Comprobamos si ya se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if (filter_has_var(INPUT_POST, 'user') && filter_has_var(INPUT_POST, 'password')) {
        
        // Limpiar parámetros
        $user = filter_input(INPUT_POST, 'user', FILTER_SANITIZE_SPECIAL_CHARS); 
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);

        // Validar parámetros
        if ($user === false || $password === false || $user == null || $password == null) {
            $_SESSION["error"] = "Debes introducir un usuario y contraseña.";
            header("Location: 410index.php");
            exit;
        }

        // Comprobar credenciales
        if ($user == $usr && $password == $pass) {
            $_SESSION['usuario'] = $user;
            $_SESSION['peliculas'] = $peliculas;
            $_SESSION['series'] = $series;
            header("Location: 412peliculas.php");
            exit;
        } else {
            $_SESSION["error"] = "Usuario o contraseña no válidos.";
            header("Location: 410index.php");
            exit;
        }

    } else {
        header("Location: 410index.php");
        exit;
    }
}
?>

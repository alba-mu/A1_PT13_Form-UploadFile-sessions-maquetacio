<?php
// Configuración de la página
$page_title = "Inicio";
$current_page = "inicio";

// Incluir configuración y cabecera
require_once __DIR__ . '/config.php';
include BASE_PATH . '/includes/header.php';
?>

<main class="container">
    <section class="hero">
        <h1>Bienvenido a Mi Sitio Web</h1>
        <p>Esta página recoge los ejercicios realizados en la asignatura de 
           <strong>Desarrollo Web en Entorno Servidor</strong>.</p>
    </section>

    <section class="content">
        <div class="card">
            <h2>Formularios</h2>
            <p>Ejercicios centrados en la creación, validación y envío de formularios en PHP, 
               incluyendo la gestión de archivos y validaciones de tipo.</p>
            <a class="boton" href="<?= BASE_URL ?>formularios/formularios.php">Ver ejercicios</a>
        </div>

        <div class="card">
            <h2>Cookies y Sesión</h2>
            <p>Bloque dedicado al uso de <code>cookies</code> y variables de sesión 
               para mantener información entre distintas páginas.</p>
            <a class="boton" href="<?= BASE_URL ?>cookies_session/cookies_session.php">Ver ejercicios</a>
        </div>

        <div class="card">
            <h2>Autenticación</h2>
            <p>Desarrollo de un sistema básico de inicio y cierre de sesión, 
               con control de acceso y gestión de usuarios.</p>
            <a class="boton" href="<?= BASE_URL ?>autenticacion/autenticacion.php">Ver ejercicios</a>
        </div>
    </section>
</main>

<?php include BASE_PATH . '/includes/footer.php'; ?>
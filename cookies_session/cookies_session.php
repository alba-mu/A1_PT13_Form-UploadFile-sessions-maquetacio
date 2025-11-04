<?php
// Configuración de la página
$page_title = "Cookies y Sesión";
$current_page = "cookies_session";

// Incluir configuración y cabecera
require_once __DIR__ . '/../config.php';
include BASE_PATH . '/includes/header.php';
?>

<main class="container my-1">

    <!-- Hero Section -->
    <section class="mb-5">
        <div class="p-5 shadow-soft">
            <h1 class="text-center fw-bold mb-3">Cookies y Sesión</h1>
            <h3 class="fw-normal mb-4">
                Bloque dedicado a la gestión de información persistente mediante cookies y variables de sesión.
            </h3>
            <p class="lead">
                En esta parte se profundizó en el uso de las <strong>variables de sesión</strong> y las <strong>cookies</strong> 
                para almacenar y mantener información entre distintas páginas.
            </p>
            <p class="lead">
                Se aprendió a crear, recuperar y eliminar cookies, así como a iniciar y gestionar sesiones con 
                <code>session_start()</code>. También se practicó cómo guardar los datos introducidos por el usuario 
                en una sesión para mostrarlos posteriormente en una tabla, manteniendo la información activa mientras 
                el usuario navegaba por el sitio.
            </p>
            <p class="lead">
                Con estos ejercicios se comprendió la diferencia entre la <strong>persistencia temporal</strong> de las sesiones 
                y la <strong>persistencia prolongada</strong> que ofrecen las cookies.
            </p>
        </div>
    </section>

    <!-- Enlaces a ejercicios -->
    <section>
        <div class="card shadow-soft border-0 mb-4">
            <div class="card-header bg-mediumslateblue text-white">
                <h2 class="h4 mb-0">Enlace a los ejercicios</h2>
            </div>
            <div class="card-body">

                <div class="mb-4">
                    <h5 class="card-title text-mediumslateblue fw-semibold mb-3">Ejercicio 406 - Contador de visitas</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <a href="<?= BASE_URL ?>cookies_session/406contadorVisitas.php" 
                               class="text-decoration-none text-dark fw-semibold">
                                406contadorVisitas.php
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="mb-4">
                    <h5 class="card-title text-mediumslateblue fw-semibold mb-3">Ejercicio 407 - Cambio del color de fondo (cookies)</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <a href="<?= BASE_URL ?>cookies_session/407fondo.php" 
                               class="text-decoration-none text-dark fw-semibold">
                                407fondo.php
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="mb-4">
                    <h5 class="card-title text-mediumslateblue fw-semibold mb-3">Ejercicio 408 - Cambio del color de fondo (sesión)</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <a href="<?= BASE_URL ?>cookies_session/408fondoSesion1.php" 
                               class="text-decoration-none text-dark fw-semibold">
                                408fondoSesion1.php
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="<?= BASE_URL ?>cookies_session/408fondoSesion2.php" 
                               class="text-decoration-none text-dark fw-semibold">
                                408fondoSesion2.php
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="mb-2">
                    <h5 class="card-title text-mediumslateblue fw-semibold mb-3">Ejercicio 409 - Formulario usando sesión</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <a href="<?= BASE_URL ?>cookies_session/409formulario1.php" 
                               class="text-decoration-none text-dark fw-semibold">
                                409formulario1.php
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="<?= BASE_URL ?>cookies_session/409formulario2.php" 
                               class="text-decoration-none text-dark fw-semibold">
                                409formulario2.php
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="<?= BASE_URL ?>cookies_session/409formulario3.php" 
                               class="text-decoration-none text-dark fw-semibold">
                                409formulario3.php
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </section>

</main>

<?php include BASE_PATH . '/includes/footer.php'; ?>
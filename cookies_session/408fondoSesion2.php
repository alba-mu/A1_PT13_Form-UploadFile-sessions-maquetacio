<?php
session_start();

// Configuración de página
$page_title = "Ejercicio 408 - Mostrar color (sesión)";
$current_page = "cookies_session";
require_once __DIR__ . '/../config.php';
include BASE_PATH . '/includes/header.php';

// Variable que guardará el color actual
$color = "";

// Si hay un color guardado en la sesión
if (isset($_SESSION['color'])) {
    $color = $_SESSION['color'];
}
?>

<main class="container py-5">
    <!-- Introducción -->
    <section class="mb-5">
        <div class="p-5 rounded-4 shadow-soft bg-light">
            <h1 class="text-center fw-bold mb-3">
                Ejercicio 408 — Mostrar color (sesión)
            </h1>
            <p class="lead">
                Esta página muestra el <strong>color de fondo</strong> actualmente almacenado en la 
                <strong>sesión</strong>, que fue seleccionado en el archivo anterior 
                <code>408fondoSesion1.php</code>.  
                Desde aquí puedes <strong>volver</strong> al formulario de selección o 
                <strong>borrar la sesión</strong> para reiniciar el color.
            </p>
        </div>
    </section>

    <!-- Contenido principal -->
    <section class="card shadow-sm">
        <div class="card-body text-center py-5" style="background-color: <?= htmlspecialchars($color ?: 'white') ?>;">
            <h2 class="fw-bold text-mediumslateblue mb-4">Color actual</h2>

            <p class="fs-4 mb-4">
                <?php if ($color): ?>
                    El color guardado es: 
                    <strong class="text-dark"><?= htmlspecialchars($color) ?></strong>
                <?php else: ?>
                    No hay ningún color seleccionado actualmente.
                <?php endif; ?>
            </p>

            <div class="d-flex justify-content-center gap-3">
                <a href="408fondoSesion1.php" class="btn btn-mediumslateblue text-white px-4">
                    Volver al formulario
                </a>
                <a href="408vaciarSesion.php" class="btn btn-mediumslateblue text-white px-4">
                    Borrar sesión y volver
                </a>
            </div>
        </div>
    </section>
</main>

<?php
include BASE_PATH . '/includes/footer.php';
?>
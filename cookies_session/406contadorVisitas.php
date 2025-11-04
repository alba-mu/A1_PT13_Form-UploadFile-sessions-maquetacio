<?php
// Configuración y cabecera
$page_title = "Contador de visitas (cookies)";
$current_page = "cookies_session";
require_once __DIR__ . '/../config.php';
include BASE_PATH . '/includes/header.php';

// Nombre de la cookie
$cookieName = 'visitas';
$cookiePath = '/';

// --- Manejo del reset (si el usuario pulsa "Reiniciar") ---
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['reset_counter'])) {
    // Borrar cookie (expira en el pasado)
    setcookie($cookieName, '', time() - 3600, $cookiePath);
    unset($_COOKIE[$cookieName]);
    // Redirigir con GET para evitar reenvío
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

// --- Manejo de la cookie de visitas ---
if (!isset($_COOKIE[$cookieName])) {
    // Primera visita
    $visitas = 1;
    setcookie($cookieName, $visitas, time() + (86400 * 30), $cookiePath); // 30 días
    $firstVisit = true;
} else {
    // Incrementar visitas
    $visitas = intval($_COOKIE[$cookieName]) + 1;
    setcookie($cookieName, $visitas, time() + (86400 * 30), $cookiePath);
    $firstVisit = false;
}
?>

<main class="container py-5">

    <!-- Introducción -->
    <section class="mb-5">
        <div class="p-5 rounded-4 shadow-soft bg-light">
            <h1 class="text-center fw-bold mb-4">Ejercicio 406 - Contador de visitas</h1>
            <p class="lead">
                En este ejercicio se emplean <strong>cookies</strong> para registrar las visitas del usuario a la página.
                Si es la primera vez que accede, se le mostrará un mensaje de bienvenida; en las visitas posteriores,
                se indicará cuántas veces ha accedido.  
                Además, el usuario dispone de un botón para <strong>reiniciar el contador</strong> de visitas cuando lo desee.
            </p>
        </div>
    </section>

    <!-- Resultado -->
    <div class="card shadow-sm border-0">
        <div class="card-body text-center py-5">
            <h2 class="text-mediumslateblue fw-semibold mb-4">Contador de visitas</h2>

            <?php if ($firstVisit): ?>
                <div class="alert alert-info mx-auto w-75" role="alert">
                    ¡Bienvenido! Esta es tu <strong>primera visita</strong>.
                </div>
            <?php else: ?>
                <div class="alert alert-secondary mx-auto w-75" role="alert">
                    Has visitado esta página <strong><?php echo htmlspecialchars($visitas); ?></strong> veces (según la cookie).
                </div>
            <?php endif; ?>

            <form method="post" class="mt-4">
                <input type="hidden" name="reset_counter" value="1">
                <button type="submit" class="btn btn-mediumslateblue text-white px-4 py-2 rounded-3 shadow-sm">
                    Reiniciar contador
                </button>
            </form>
        </div>
    </div>

</main>

<?php
// Footer
include BASE_PATH . '/includes/footer.php';
?>
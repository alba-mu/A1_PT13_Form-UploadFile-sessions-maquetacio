<?php
session_start();

// Configuración de página
$page_title = "Ejercicio 408 - Color de fondo (sesión)";
$current_page = "cookies_session";
require_once __DIR__ . '/../config.php';
include BASE_PATH . '/includes/header.php';

// Lista de colores disponibles
$colores = [
    ["name" => "palegreen", "displayName" => "Pale Green"],
    ["name" => "salmon", "displayName" => "Salmon"],
    ["name" => "paleturquoise", "displayName" => "Pale Turquoise"]
];

// Variable que guardará el color actual
$color = "";

// Si el usuario ha enviado el formulario...
if (filter_has_var(INPUT_POST, 'color')) {
    $color = $_POST['color'] ?? '';
    // Guardamos el color en la sesión
    $_SESSION['color'] = $color;
}
// Si no se ha enviado el formulario pero ya hay un color en sesión
elseif (isset($_SESSION['color'])) {
    $color = $_SESSION['color'];
}
?>

<main class="container py-5">
    <!-- Introducción -->
    <section class="mb-5">
        <div class="p-5 rounded-4 shadow-soft bg-light">
            <h1 class="text-center fw-bold mb-3">
                Ejercicio 408 — Color de fondo (sesión)
            </h1>
            <p class="lead">
                Modifica el ejercicio anterior para almacenar el <strong>color de fondo</strong> en la 
                <strong>sesión</strong> en lugar de emplear cookies.  
                Además, debe incluir un enlace al siguiente archivo 
                <code>408fondoSesion2.php</code>, el cual mostrará el color actual y permitirá 
                <strong>volver a esta página</strong>.
            </p>
        </div>
    </section>

    <!-- Contenido principal -->
    <section class="card shadow-sm">
        <div class="card-body text-center">
            <h2 class="fw-bold text-mediumslateblue mb-4">Selecciona el color de fondo</h2>

            <form method="POST" class="mb-4">
                <div class="mb-3">
                    <select name="color" id="color" class="form-select w-auto mx-auto">
                        <option value="">-- Selecciona --</option>
                        <?php foreach ($colores as $c): ?>
                            <option value="<?= $c["name"] ?>" <?= ($c["name"] === $color) ? 'selected' : '' ?>>
                                <?= $c["displayName"] ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-mediumslateblue text-white px-4">
                    Guardar color
                </button>
            </form>

            <a href="408fondoSesion2.php" class="btn btn-mediumslateblue text-white px-4">
                Mostrar color
            </a>
        </div>
    </section>
</main>

<?php
include BASE_PATH . '/includes/footer.php';
?>
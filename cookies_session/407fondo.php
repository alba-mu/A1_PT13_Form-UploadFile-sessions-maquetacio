<?php
// Configuración y cabecera
$page_title = "Color de fondo (cookies)";
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
    // Guardamos el color en una cookie que dura 24 horas
    setcookie('color', $color, time() + 60 * 60 * 24);
}
// Si NO ha enviado el formulario, pero ya existe una cookie, la usamos
elseif (isset($_COOKIE['color'])) {
    $color = $_COOKIE['color'];
}
?>

<main class="container py-5" style="background-color: <?= htmlspecialchars($color ?: 'white') ?>; transition: background-color 0.4s ease;">

    <!-- Introducción -->
    <section class="mb-5">
        <div class="p-5 rounded-4 shadow-soft bg-light">
            <h1 class="text-center fw-bold mb-3">
                Ejercicio 407 — Color de fondo (cookies)
            </h1>
            <p class="lead">
                En este ejercicio se utilizan <strong>cookies</strong> para permitir que el usuario elija el 
                <strong>color de fondo</strong> de la página mediante un menú desplegable.  
                El color seleccionado se guarda durante al menos 24 horas, de forma que al volver a visitar la página,
                ésta recuerde y muestre el último color elegido automáticamente.
            </p>
        </div>
    </section>

    <!-- Formulario de selección de color -->
    <section class="text-center">
        <div class="card shadow-sm border-0 mx-auto" style="max-width: 500px;">
            <div class="card-body p-4">
                <h2 class="text-mediumslateblue fw-semibold mb-4">Selecciona un color de fondo</h2>

                <form method="POST" class="d-flex flex-column align-items-center">
                    <div class="mb-3 w-75">
                        <label for="color" class="form-label fw-semibold">Color de fondo</label>
                        <select name="color" id="color" class="form-select text-center">
                            <option value="">-- Selecciona --</option>
                            <?php foreach ($colores as $c): ?>
                                <option value="<?= htmlspecialchars($c["name"]) ?>"
                                    <?= ($c["name"] === $color) ? 'selected' : '' ?>>
                                    <?= htmlspecialchars($c["displayName"]) ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-mediumslateblue text-white px-4 py-2 rounded-3 shadow-sm">
                        Guardar color
                    </button>
                </form>
            </div>
        </div>
    </section>
</main>

<?php
// Footer
include BASE_PATH . '/includes/footer.php';
?>
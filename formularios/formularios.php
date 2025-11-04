<?php
// Configuración de la página
$page_title = "Formularios";
$current_page = "formularios";

// Incluir configuración y cabecera
require_once __DIR__ . '/../config.php';
include BASE_PATH . '/includes/header.php';
?>

<main class="container my-1">

    <!-- Hero Section -->
    <section class="mb-5">
        <div class="p-5 shadow-soft">
            <h1 class="text-center fw-bold mb-3">Formularios - UploadFile</h1>
            <h3 class="fw-normal mb-4">Ejercicios centrados en la creación y validación de formularios con PHP.</h3>
            <p class="lead">
                En este bloque se trabajó con la <strong>gestión de ficheros en PHP</strong>, aprendiendo a crear formularios que 
                permiten <strong>adjuntar archivos</strong> y enviarlos al servidor mediante el método 
                <code>POST</code> con el atributo <code>enctype="multipart/form-data"</code>.
            </p>
            <p class="lead">
                Se practicó cómo <strong>validar el tipo y tamaño</strong> de los ficheros, restringiendo la subida a ciertos formatos 
                (por ejemplo, solo imágenes o documentos PDF) y controlando los posibles errores durante el proceso.
            </p>
            <p class="lead">
                También se aprendió a <strong>mover los archivos al servidor</strong> de forma segura con 
                <code>move_uploaded_file()</code> y a mostrar mensajes informativos o de error según el resultado de la carga.
                El objetivo fue comprender el flujo completo de subida, validación y almacenamiento de ficheros desde 
                un formulario PHP.
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
                <h5 class="card-title text-mediumslateblue fw-semibold mb-3">Ejercicios 404 y 405</h5>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <a href="<?= BASE_URL ?>formularios/404subidaIndex.php" class="text-decoration-none text-dark fw-semibold">
                            404subidaIndex.php
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="<?= BASE_URL ?>formularios/404subida.php" class="text-decoration-none text-dark fw-semibold">
                            404subida.php
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="<?= BASE_URL ?>formularios/405subidaImagen.php" class="text-decoration-none text-dark fw-semibold">
                            405subidaImagen.php
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

</main>

<?php include BASE_PATH . '/includes/footer.php'; ?>
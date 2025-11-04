<?php
// Configuración y cabecera
$page_title = "Formulario ejercicios 404 y 405";
$current_page = "formularios";
require_once __DIR__ . '/../config.php';
include BASE_PATH . '/includes/header.php';
?>

<main class="container my-4">

    <!-- Introducción -->
    <section class="mb-5">
        <div class="p-5 shadow-soft">
            <h1 class="text-center fw-bold mb-4">Ejercicio 404 - Subida de archivos</h1>
            <p class="lead">
                Crea un formulario que permita <strong>subir un archivo al servidor</strong>. 
                Además del fichero, debe incluir en el mismo formulario dos campos numéricos 
                que soliciten la <strong>anchura</strong> y la <strong>altura</strong>.  
                Comprueba que tanto el fichero como los datos llegan correctamente al procesar el formulario.
            </p>
        </div>
    </section>

    <!-- Formularios -->
    <section>
        <div class="row g-4">

            <!-- Formulario 1: Subida de cualquier tipo de archivo -->
            <div class="col-md-6">
                <div class="card shadow-soft border-0">
                    <div class="card-header bg-mediumslateblue text-white">
                        <h2 class="h5 mb-0">Formulario 404 - Subida general</h2>
                    </div>
                    <div class="card-body">
                        <form name="form_data"
                              action="<?= BASE_URL ?>/formularios/404subida.php"
                              method="POST"
                              enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="file1" class="form-label fw-semibold">Selecciona un archivo</label>
                                <input type="file" name="filename" id="file1" class="form-control" required>
                            </div>
                            <div class="d-flex gap-2">
                                <button type="submit" name="submit_file" class="btn btn-mediumslateblue">Subir</button>
                                <button type="reset" name="reset_file" class="btn btn-outline-secondary">Resetear</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Formulario 2: Subida de imágenes con validación de tamaño -->
            <div class="col-md-6">
                <div class="card shadow-soft border-0">
                    <div class="card-header bg-mediumslateblue text-white">
                        <h2 class="h5 mb-0">Formulario 405 - Subida de imágenes</h2>
                    </div>
                    <div class="card-body">
                        <form name="form_image"
                              action="<?= BASE_URL ?>/formularios/405subidaImagen.php"
                              method="POST"
                              enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="file2" class="form-label fw-semibold">Selecciona una imagen</label>
                                <input type="file" name="filename" id="file2" accept="image/png, image/jpeg" class="form-control" required>
                            </div>
                            <div class="row g-2 mb-3">
                                <div class="col-6">
                                    <label for="width" class="form-label fw-semibold">Anchura (px)</label>
                                    <input type="number" name="width" id="width" class="form-control" min="0" max="900" value="450">
                                </div>
                                <div class="col-6">
                                    <label for="height" class="form-label fw-semibold">Altura (px)</label>
                                    <input type="number" name="height" id="height" class="form-control" min="0" max="650" value="325">
                                </div>
                            </div>
                            <div class="d-flex gap-2">
                                <button type="submit" name="submit_image" class="btn btn-mediumslateblue">Subir</button>
                                <button type="reset" name="reset_image" class="btn btn-outline-secondary">Resetear</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>

</main>

<?php include BASE_PATH . '/includes/footer.php'; ?>
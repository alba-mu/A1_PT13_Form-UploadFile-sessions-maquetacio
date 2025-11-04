<?php
// Configuración y cabecera
$page_title = "Resultado de subida (Ejercicio 404)";
$current_page = "formularios";
require_once __DIR__ . '/../config.php';
include BASE_PATH . '/includes/header.php';

// Directorio donde se guardarán los archivos subidos (ruta absoluta del servidor)
define("PATH_TO_UPLOADED_FILES", BASE_PATH . '/formularios/files/');

// URL pública de la carpeta de archivos subidos (para mostrar enlaces o imágenes)
define("URL_TO_UPLOADED_FILES", BASE_URL . '/formularios/files/');
?>

<main class="container py-5">
    <div class="card shadow-sm">
        <div class="card-body">
            <h1 class="mb-4 text-center text-mediumslateblue fw-bold">Resultado de subida</h1>

                <?php
                /* Retrieve data from the query */
                if (filter_has_var(INPUT_POST, 'submit_file')) {
                    $errors = "";

                    // Validación de errores de subida
                    if ($_FILES['filename']['error'] != 0) {
                        $errors .= "<li>Error al subir el archivo.</li>";
                    }

                    // Mostrar errores si existen
                    if ($errors != "") {
                        echo "<div class='alert alert-danger'>
                                <h5 class='fw-semibold'>Se han producido errores:</h5>
                                <ul class='mb-3'>$errors</ul>
                              </div>
                              <a href='" . BASE_URL . "/formularios/404subidaIndex.php' 
                                 class='btn btn-mediumslateblue'>
                                 Volver al formulario
                              </a>";
                    } else {
                        if (is_uploaded_file($_FILES['filename']['tmp_name'])) {
                            $fileName = $_FILES['filename']['name'];
                            $mime_type = mime_content_type($_FILES['filename']['tmp_name']);
                            $destination = PATH_TO_UPLOADED_FILES . basename($fileName);

                            echo "<p class='lead'>Archivo <strong>$fileName</strong> subido correctamente.</p>";
                            echo "<p>Tipo MIME: <code>$mime_type</code></p>";
                            echo "<p>Destino: <code>$destination</code></p>";

                            // Crear directorio si no existe
                            if (!is_dir(PATH_TO_UPLOADED_FILES)) {
                                mkdir(PATH_TO_UPLOADED_FILES);
                            }

                            // Mover archivo
                            if (move_uploaded_file($_FILES['filename']['tmp_name'], $destination)) {
                                echo "<div class='alert alert-success mt-3'>
                                        El archivo <strong>$fileName</strong> se ha movido correctamente.
                                      </div>";
                                echo "<p>
                                        <a href='" . URL_TO_UPLOADED_FILES . rawurlencode($fileName) . "' 
                                           target='_blank' 
                                           class='btn btn-mediumslateblue'>
                                           Ver archivo
                                        </a>
                                      </p>";
                            }
                        } else {
                            echo "<div class='alert alert-warning'>
                                    No se ha podido subir el archivo.
                                  </div>";
                        }

                        // Enlace de retorno
                        echo "<a href='" . BASE_URL . "/formularios/404subidaIndex.php' 
                                 class='btn btn-mediumslateblue mt-3'>
                                 Subir otro archivo
                              </a>";
                    }
                } else {
                    echo "<div class='alert alert-warning'>
                            El formulario no ha sido enviado.
                          </div>";
                }
                ?>

            </div>
        </div>
    </section>

</main>

<?php include BASE_PATH . '/includes/footer.php'; ?>
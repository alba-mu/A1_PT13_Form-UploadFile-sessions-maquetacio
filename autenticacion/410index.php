<?php
session_start();

// Configuración de página
$page_title = "Ejercicio 410 - Login / Logout";
$current_page = "autenticacion"; 
require_once __DIR__ . '/../config.php';
include BASE_PATH . '/includes/header.php';

// Mostrar error si existe y eliminarlo para no repetirlo
$error = $_SESSION["error"] ?? "";
unset($_SESSION["error"]);
?>

<main class="container my-1">
    <!-- Introducción -->
    <section class="mb-5">
        <div class="p-5 rounded-4 shadow-soft bg-light">
            <h1 class="text-center fw-bold mb-3">
                Ejercicio Login - Logout
            </h1>
        <p class="lead">
                Este ejercicio implementa un sistema básico de autenticación con inicio y cierre de sesión.  
                El usuario debe acceder con las credenciales <code>usuario/usuario</code> para visualizar las vistas 
                protegidas con listados de películas y series.  
                Los datos se gestionan mediante <strong>sesiones</strong> y no se permite el acceso directo sin iniciar sesión.
            </p>
        </div>
    </section>

    <!-- Formulario de Login -->
    <section class="d-flex justify-content-center">
        <div class="card shadow p-4" style="max-width: 420px; width: 100%;">
            <h2 class="text-center text-mediumslateblue fw-bold mb-4">Iniciar sesión</h2>

            <form id="form" action="411login.php" method="post" class="needs-validation" novalidate>
                
                <!-- Mensaje de error -->
                <?php if ($error): ?>
                    <div class="alert alert-danger text-center py-2 mb-4">
                        <?= htmlspecialchars($error) ?>
                    </div>
                <?php endif; ?>

                <!-- Usuario -->
                <div class="mb-3">
                    <label for="user" class="form-label fw-semibold">Usuario</label>
                    <input 
                        type="text" 
                        id="user" 
                        name="user" 
                        class="form-control" 
                        placeholder="Introduce tu usuario" 
                        required
                    >
                </div>

                <!-- Contraseña -->
                <div class="mb-4">
                    <label for="password" class="form-label fw-semibold">Contraseña</label>
                    <input 
                        type="password" 
                        id="password" 
                        name="password" 
                        class="form-control" 
                        placeholder="Introduce tu contraseña" 
                        required
                    >
                </div>

                <!-- Botones -->
                <div class="d-flex justify-content-center gap-3">
                    <button type="submit" name="login" class="btn btn-mediumslateblue px-4">Login</button>
                    <button type="reset" class="btn btn-mediumslateblue px-4">Reset</button>
                </div>
            </form>
        </div>
    </section>
</main>

<?php
include BASE_PATH . '/includes/footer.php';
?>
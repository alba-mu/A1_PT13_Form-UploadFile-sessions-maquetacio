<?php 
if (!defined('BASE_PATH')) {
    require_once __DIR__ . '/../config.php';
}
?>
<nav class="navbar">
    <div class="container">
        <div class="logo">
            <a href="<?= BASE_URL ?>index.php">
                <img src="<?= BASE_URL ?>img/logo_provenzana.jpg" width="100" alt="Logo Provenzana">
            </a>
        </div>

        <ul class="nav-menu">
            <li>
                <a href="<?= BASE_URL ?>index.php" 
                   class="<?= ($current_page == 'inicio') ? 'active' : ''; ?>">
                   Inicio
                </a>
            </li>
            <li>
                <a href="<?= BASE_URL ?>formularios/formularios.php" 
                   class="<?= ($current_page == 'formularios') ? 'active' : ''; ?>">
                   Formularios
                </a>
            </li>
            <li>
                <a href="<?= BASE_URL ?>cookies_session/cookies_session.php" 
                   class="<?= ($current_page == 'cookies_session') ? 'active' : ''; ?>">
                   Cookies y Sesión
                </a>
            </li>
            <li>
                <a href="<?= BASE_URL ?>autenticacion/autenticacion.php" 
                   class="<?= ($current_page == 'autenticacion') ? 'active' : ''; ?>">
                   Autenticación
                </a>
            </li>
        </ul>
    </div>
</nav>
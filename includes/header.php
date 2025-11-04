<?php 
if (!defined('BASE_PATH')) {
    require_once __DIR__ . '/../config.php';
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($page_title) ? $page_title : 'Mi Sitio Web'; ?></title>
    <link rel="stylesheet" href="<?= BASE_URL ?>css/style.css">
</head>
<body>
    <?php include BASE_PATH . '/includes/navbar.php'; ?>
    
    <header class="site-header">
        <div class="container">
            <h1>Ejercicios PHP</h1>
            <p>Form-UploadFile, Cookies, Sesión, Autenticación</p>
        </div>
    </header>
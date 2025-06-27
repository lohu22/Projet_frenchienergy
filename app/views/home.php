<?php
$title = "Accueil";
ob_start();
?>
<h1>Bienvenue sur la page d'accueil !</h1>
<?php
$content = ob_get_clean();
include 'layout.php';
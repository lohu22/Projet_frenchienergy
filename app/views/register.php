<?php
$title = "Inscription";
ob_start();
?>
<h1>Inscription</h1>
<form method="post" action="">
    <label>Email :</label>
    <input type="email" name="email" required>
    <label>Mot de passe :</label>
    <input type="password" name="password" required>
    <button type="submit">S'inscrire</button>
</form>
<?php
$content = ob_get_clean();
include 'layout.php';
<?php
$title = "Connexion";
ob_start();
?>
<h1>Connexion</h1>
<form method="post" action="">
    <label>Email :</label>
    <input type="email" name="email" required>
    <label>Mot de passe :</label>
    <input type="password" name="password" required>
    <button type="submit">Se connecter</button>
    <div style="text-align:center; margin-top:18px;">
        Pas de compte ?
        <a href="/Projet_frenchienergy/public/index.php?controller=auth&action=register" style="color:#7f9cf5; font-weight:600; text-decoration:none;">
            Inscription
        </a>
    </div>
</form>
<?php
$content = ob_get_clean();
include 'layout.php';
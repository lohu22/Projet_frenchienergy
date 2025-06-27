<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?? 'Mon site' ?></title>
    <link rel="stylesheet" href="/Projet_frenchienergy/public/assets/css/style.css">
</head>
<body>
    <?php include 'header.php'; ?>
    <main>
        <?php if (isset($content)) echo $content; ?>
    </main>
    <?php include 'footer.php'; ?>
</body>
</html>
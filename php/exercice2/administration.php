<?php
// Redirection AVANT tout HTML : header() doit être appelé avant l'envoi du moindre caractère.
// exit() empêche l'interprétation du reste de la page.
header('Location:index.php');
exit();
?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Administration</title>
</head>
<body>
    <?php
    include '_header.php';
    include '_nav.php';
    ?>
    <h2>Administration</h2>
    <?php include '_footer.php'; ?>
</body>
</html>

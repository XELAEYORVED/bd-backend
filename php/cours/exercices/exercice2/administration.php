<?php
/*
 * EXERCICE 2 : page Administration. Voir l'énoncé complet en haut de index.php.
 * Consigne : cette page redirige immédiatement vers index.php.
 * => header() + exit() tout en haut, AVANT le moindre caractère HTML.
 */

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

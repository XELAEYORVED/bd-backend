<?php
// ÉTAPE 3/3 — Objectif 3 : empêcher l'accès à administration.php
// header() doit être appelé AVANT le moindre caractère HTML envoyé au navigateur
header('Location:index.php'); // ← NOUVEAU
exit();                       // ← NOUVEAU : stoppe l'interprétation du reste de la page
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

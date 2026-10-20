<?php // ÉTAPE 1/3 — Objectif 1 : créer _footer.php et l'inclure dans index.php ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Inclusion de fichiers</title>
</head>
<body>
    <?php
    include '_header.php';
    include '_nav.php';
    ?>
    <h2>Accueil</h2>
    <?php include '_footer.php'; // ← NOUVEAU ?>
</body>
</html>

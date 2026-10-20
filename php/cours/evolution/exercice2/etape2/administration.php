<?php // ÉTAPE 2/3 — Objectif 2 : nouvelle page qui réutilise header, nav et footer (aucune duplication de code) ?>
<!DOCTYPE html>
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

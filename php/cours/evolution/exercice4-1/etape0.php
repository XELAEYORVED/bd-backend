<?php // ÉTAPE 0/2 — Code du syllabus : 6 numéros sont piochés mais rien n'est affiché ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Tirages du Lotto</title>
</head>
<body>
    <h1>Tirages du Lotto</h1>
    <?php
    for ($i = 0; $i < 6; $i++) {
        $tirage[$i] = rand(1, 50);
    }
    ?>
</body>
</html>

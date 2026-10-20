<?php // ÉTAPE 0/2 — Code du syllabus : tableau à 2 dimensions $numeros[tirage][i], rien n'est affiché ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Tirages du Lotto</title>
</head>
<body>
    <h1>Tirages du Lotto</h1>
    <?php
    $nb_tirages = rand(4, 10);
    for ($tirage = 1; $tirage <= $nb_tirages; $tirage++) {
        for ($i = 0; $i < 6; $i++) {
            $numeros[$tirage][$i] = rand(1, 50);
        }
    }
    ?>
</body>
</html>

<?php // ÉTAPE 1/2 — Objectif 1 : 2 foreach imbriqués → 1 <tr> par tirage, 1 <td> par numéro ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Tirages du Lotto</title>
    <style>
        td { border: 1px solid #333; padding: 4px 8px; font-size: 1.4em; }
    </style>
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
    <table>
        <?php foreach ($numeros as $tirage) : // ← NOUVEAU : $tirage = un tableau de 6 numéros ?>
            <tr>
                <?php foreach ($tirage as $numero) : // ← NOUVEAU ?>
                    <td><?= $numero ?></td>
                <?php endforeach; ?>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>

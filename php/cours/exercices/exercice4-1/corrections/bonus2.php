<?php
// CORRECTION : Exercice 4-1, bonus 2 (Statistiques sur 1000 lancers de dé)
const NB_LANCERS = 1000;

$compteur = array_fill(1, 6, 0);
for ($i = 0; $i < NB_LANCERS; $i++) {
    $compteur[rand(1, 6)]++;
}

$face_frequente = array_search(max($compteur), $compteur);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Statistiques de dé</title>
    <style>
        td, th { border: 1px solid #333; padding: 4px 8px; }
        .barre { background: steelblue; height: 14px; }
    </style>
</head>
<body>
    <h1><?= NB_LANCERS ?> lancers de dé</h1>
    <table>
        <tr><th>Face</th><th>Sorties</th><th>%</th><th></th></tr>
        <?php foreach ($compteur as $face => $nb) : ?>
            <tr>
                <td><?= $face ?></td>
                <td><?= $nb ?></td>
                <td><?= number_format($nb / NB_LANCERS * 100, 1, ',', ' ') ?> %</td>
                <td><div class="barre" style="width: <?= $nb ?>px"></div></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <p>Face la plus fréquente : <?= $face_frequente ?></p>
</body>
</html>

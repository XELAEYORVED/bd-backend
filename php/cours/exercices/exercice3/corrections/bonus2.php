<?php
// CORRECTION : Exercice 3, bonus 2 (Convertisseur de durée)
$secondes_total = 93784;

// Méthode « en cascade » : on retire à chaque étape ce qu'on a déjà compté
$jours = intdiv($secondes_total, 86400);
$reste = $secondes_total % 86400;
$heures = intdiv($reste, 3600);
$reste = $reste % 3600;
$minutes = intdiv($reste, 60);
$secondes = $reste % 60;

// Format chronomètre : les heures totales (jours inclus)
$heures_total = intdiv($secondes_total, 3600);
$chrono = sprintf('%02d:%02d:%02d', $heures_total, $minutes, $secondes);

$heures_decimales = round($secondes_total / 3600, 2);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Convertisseur de durée</title>
</head>
<body>
    <h1><?= $secondes_total ?> secondes</h1>
    <p><?= $jours ?> j <?= $heures ?> h <?= $minutes ?> min <?= $secondes ?> s</p>
    <p>Chrono : <?= $chrono ?></p>
    <p><?= number_format($heures_decimales, 2, ',', ' ') ?> h</p>
</body>
</html>

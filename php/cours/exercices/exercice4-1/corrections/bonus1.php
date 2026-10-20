<?php
// CORRECTION : Exercice 4-1, bonus 1 (Lotto sans doublons + complémentaire)
$tirage = [];
while (count($tirage) < 6) {
    $numero = rand(1, 50);
    if (!in_array($numero, $tirage)) {
        $tirage[] = $numero;
    }
}
sort($tirage);

// do while : on tire au moins une fois, et on recommence si le numéro est déjà sorti
do {
    $complementaire = rand(1, 50);
} while (in_array($complementaire, $tirage));

$nb_pairs = 0;
foreach ($tirage as $numero) {
    if ($numero % 2 === 0) {
        $nb_pairs++;
    }
}
// Variante en une ligne : count(array_filter($tirage, fn($n) => $n % 2 === 0));
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Lotto sans doublons</title>
    <style>
        td { border: 1px solid #333; padding: 4px 8px; font-size: 1.4em; }
        .complementaire { background: yellow; }
    </style>
</head>
<body>
    <h1>Lotto sans doublons</h1>
    <table>
        <tr>
            <?php foreach ($tirage as $numero) : ?>
                <td><?= $numero ?></td>
            <?php endforeach; ?>
            <td class="complementaire"><?= $complementaire ?></td>
        </tr>
    </table>
    <p>Numéros pairs : <?= $nb_pairs ?> / 6</p>
</body>
</html>

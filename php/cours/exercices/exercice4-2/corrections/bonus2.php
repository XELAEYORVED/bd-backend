<?php
// CORRECTION : Exercice 4-2, bonus 2 (Grilles et numéros gagnants)

function tirer_numeros(int $nb): array
{
    $numeros = [];
    while (count($numeros) < $nb) {
        $n = rand(1, 50);
        if (!in_array($n, $numeros)) {
            $numeros[] = $n;
        }
    }
    sort($numeros);
    return $numeros;
}

$gagnants = tirer_numeros(6);

$grilles = [];
$nb_grilles = rand(4, 10);
for ($g = 0; $g < $nb_grilles; $g++) {
    $grilles[$g] = tirer_numeros(6);
}

// Nombre de bons numéros par grille, et meilleur score
$scores = [];
foreach ($grilles as $g => $grille) {
    $scores[$g] = count(array_intersect($grille, $gagnants));
}
$meilleur = max($scores);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Grilles du Lotto</title>
    <style>
        td { border: 1px solid #333; padding: 2px 6px; }
        .gagnant { background: lightgreen; }
        .meilleure { font-weight: bold; }
    </style>
</head>
<body>
    <h1>Numéros gagnants : <?= implode(' - ', $gagnants) ?></h1>
    <table>
        <?php foreach ($grilles as $g => $grille) : ?>
            <tr<?= $scores[$g] === $meilleur ? ' class="meilleure"' : '' ?>>
                <?php foreach ($grille as $numero) : ?>
                    <td<?= in_array($numero, $gagnants) ? ' class="gagnant"' : '' ?>><?= $numero ?></td>
                <?php endforeach; ?>
                <td><?= $scores[$g] ?> bon(s) numéro(s)</td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>

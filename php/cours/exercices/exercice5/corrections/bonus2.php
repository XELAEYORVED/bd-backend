<?php
// CORRECTION : Exercice 5, bonus 2 (Constitution d'équipes au hasard)
const TAILLE_EQUIPE = 4;

$eleves = ['Alice', 'Bilal', 'Chloé', 'David', 'Emma', 'Farid', 'Gaëlle',
    'Hugo', 'Inès', 'Jules', 'Kenza', 'Louis', 'Manon', 'Nathan'];

shuffle($eleves);
$equipes = array_chunk($eleves, TAILLE_EQUIPE);

// On trie directement dans $equipes[$n] (un foreach classique trierait une copie)
foreach ($equipes as $n => $equipe) {
    sort($equipes[$n]);
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Équipes</title>
</head>
<body>
    <h1>Équipes</h1>
    <?php foreach ($equipes as $n => $equipe) : ?>
        <h2>Équipe <?= $n + 1 ?> (<?= count($equipe) ?> membres)</h2>
        <ul>
            <?php foreach ($equipe as $index => $membre) : ?>
                <li><?= $index === 0 ? '<strong>' . $membre . '</strong> (capitaine)' : $membre ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endforeach; ?>
    <p><?= count($eleves) ?> élèves répartis en <?= count($equipes) ?> équipes</p>
</body>
</html>

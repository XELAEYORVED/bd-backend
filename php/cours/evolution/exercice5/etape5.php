<?php // ÉTAPE 5/7 — Objectif 3 : affichage dans une liste <ul> avec foreach (le print_r disparaît) ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Générateur de noms de nains</title>
    <style>
        body { font-family: AR JULIAN, Arial; }
    </style>
</head>
<body>
    <h1>Noms de nains</h1>
    <?php
    $syllabes1 = array('A', 'Ba', 'Bo', 'Bu', 'Bra', 'Bre', 'Bro', 'Da', 'Dra', 'Dro', 'Du', 'Ga', 'Go', 'Gu', 'Gra',
        'Gri', 'Gro', 'I', 'Ka', 'Ko', 'Ku', 'O', 'U', 'Ta', 'Ti', 'To', 'Tu');
    $syllabes2 = array('ka', 'ko', 'la', 'lo', 'ra', 'rba', 'ro', 'rbo');
    $syllabes3 = array('ban', 'dar', 'dir', 'dor', 'dur', 'gal', 'gan', 'gar', 'gor', 'grim', 'gur', 'kan', 'lan', 'lar',
        'lek', 'li', 'lin', 'lion', 'lir', 'rak', 'ran', 'rek', 'rgrim', 'rgor', 'rik', 'ril', 'rion', 'rok', 'ron',
        'tar', 'trek', 'tron');

    $noms = array();
    for ($i = 0; $i < 20; $i++) {
        $nom = $syllabes1[array_rand($syllabes1)];
        if (rand(1, 10) <= 4) {
            $nom .= $syllabes2[array_rand($syllabes2)];
        }
        $nom .= $syllabes3[array_rand($syllabes3)];
        $noms[] = $nom;
    }
    sort($noms);
    ?>
    <ul>
        <?php
        foreach ($noms as $nom) {             // ← NOUVEAU
            echo '<li>', $nom, '</li>';      // ← NOUVEAU
        }
        ?>
    </ul>
</body>
</html>

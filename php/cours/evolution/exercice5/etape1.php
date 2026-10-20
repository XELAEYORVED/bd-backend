<?php // ÉTAPE 1/7 — Objectif 1a : boucle de 20 tours, une syllabe de début piochée et rangée dans $noms[] ?>
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
    for ($i = 0; $i < 20; $i++) {                     // ← NOUVEAU
        $nom = $syllabes1[array_rand($syllabes1)];    // ← NOUVEAU : array_rand() renvoie une CLÉ → on lit la valeur
        $noms[] = $nom;                               // ← NOUVEAU : [] = ajout en fin de tableau
    }
    print_r($noms); // debug TEMPORAIRE pour vérifier le contenu (supprimé à l'étape 5)
    ?>
</body>
</html>

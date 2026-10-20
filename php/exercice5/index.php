<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Générateur de noms de nains</title>
    <style>
        body { font-family: AR JULIAN, Arial; }
        .couleur0 { color: darkred; }
        .couleur1 { color: darkgreen; }
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

    // 1 + 5. Boucle de 20 itérations ; le do while recommence tant que le nom existe déjà
    for ($i = 0; $i < 20; $i++) {
        do {
            // a. syllabe de début (array_rand renvoie une CLÉ, pas une valeur)
            $nom = $syllabes1[array_rand($syllabes1)];
            // b. syllabe de liaison 4 fois sur 10
            if (rand(1, 10) <= 4) {
                $nom .= $syllabes2[array_rand($syllabes2)];
            }
            // c. syllabe de fin
            $nom .= $syllabes3[array_rand($syllabes3)];
        } while (in_array($nom, $noms));
        $noms[] = $nom;
    }

    // 2. Tri alphabétique
    sort($noms);
    ?>
    <ul>
        <?php
        // 3 + 4. Affichage avec alternance de classes grâce au modulo
        foreach ($noms as $index => $nom) {
            echo '<li class="couleur', $index % 2, '">', $nom, '</li>';
        }
        ?>
    </ul>
</body>
</html>

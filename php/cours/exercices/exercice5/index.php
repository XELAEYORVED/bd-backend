<?php
/*
 * EXERCICE 5 : Générateur de noms de nains
 * ===========================================================================
 * (Énoncé reconstitué d'après la solution : compare avec le syllabus sur l'eCampus.)
 *
 * OBJECTIF
 *   Construire des chaînes au hasard, éviter les doublons, trier et
 *   alterner les styles d'affichage.
 *
 * DONNÉES FOURNIES : 3 tableaux de syllabes
 *   $syllabes1 (début), $syllabes2 (liaison), $syllabes3 (fin)
 *
 * CONSIGNES
 *   1. Générer 20 noms de nains. Chaque nom est composé de :
 *        a. une syllabe de début (obligatoire), tirée de $syllabes1 ;
 *        b. une syllabe de liaison, présente seulement 4 fois sur 10 ;
 *        c. une syllabe de fin (obligatoire), tirée de $syllabes3.
 *   2. Trier les noms par ordre alphabétique.
 *   3. Les afficher dans une liste <ul>.
 *   4. Alterner deux couleurs d'une ligne à l'autre (classes couleur0 / couleur1).
 *   5. Garantir qu'il n'y a aucun doublon parmi les 20 noms.
 *
 * NOTIONS
 *   - array_rand($tab) : renvoie une CLÉ au hasard => $tab[array_rand($tab)]
 *   - .=  : concaténer au bout d'une chaîne
 *   - rand(1, 10) <= 4 : « 4 chances sur 10 »
 *   - do { ... } while (condition); : exécuté AU MOINS une fois
 *   - in_array($valeur, $tab) : la valeur est-elle déjà dans le tableau ?
 *   - $tab[] = $valeur; : ajoute à la fin du tableau
 *   - foreach ($tab as $index => $valeur) + $index % 2 : alternance 0 / 1
 *
 * PIÈGES
 *   - Afficher array_rand($syllabes1) directement : on obtient un NOMBRE.
 *
 * BONUS : bonus1.php, bonus2.php (corrections dans corrections/)
 */
?>
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

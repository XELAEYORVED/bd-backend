<?php
/*
 * EXERCICE 4-2 : Plusieurs tirages du Lotto (tableau à 2 dimensions)
 * ===========================================================================
 * (Énoncé reconstitué d'après la solution : compare avec le syllabus sur l'eCampus.)
 *
 * OBJECTIF
 *   Manipuler un tableau de tableaux et des boucles imbriquées.
 *
 * CONSIGNES
 *   1. Choisir au hasard un nombre de tirages entre 4 et 10.
 *   2. Pour chaque tirage, tirer 6 numéros entre 1 et 50 et trier ce tirage.
 *      Ranger le tout dans un tableau à 2 dimensions : $numeros[$tirage][$i].
 *   3. Afficher un tableau HTML : une ligne <tr> par tirage, une cellule <td>
 *      par numéro (deux foreach imbriqués).
 *
 * NOTIONS
 *   - Tableau 2D : $numeros[2][5] = 6e numéro du 2e tirage
 *   - Boucles imbriquées : la boucle intérieure fait un tour complet
 *     à CHAQUE tour de la boucle extérieure.
 *   - sort($numeros[$tirage]) : on peut trier une « ligne » du tableau 2D.
 *
 * PIÈGES
 *   - Utiliser le même nom de compteur ($i) pour les deux boucles.
 *
 * BONUS : bonus1.php, bonus2.php (corrections dans corrections/)
 */
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Tirages du Lotto</title>
    <style>
        table { border-collapse: separate; }
        td { border: 1px solid #333; padding: 2px 6px; font-size: 1.4em; }
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
        sort($numeros[$tirage]); // on trie chaque tirage juste après l'avoir pioché
    }
    ?>
    <table>
        <?php foreach ($numeros as $tirage) : ?>
            <tr>
                <?php foreach ($tirage as $numero) : ?>
                    <td><?= $numero ?></td>
                <?php endforeach; ?>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>

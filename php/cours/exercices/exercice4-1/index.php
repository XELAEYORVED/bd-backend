<?php
/*
 * EXERCICE 4-1 : Tirage du Lotto (boucle for + tableau)
 * ===========================================================================
 * (Énoncé reconstitué d'après la solution : compare avec le syllabus sur l'eCampus.)
 *
 * OBJECTIF
 *   Remplir un tableau dans une boucle puis l'afficher dans un <table>.
 *
 * CONSIGNES
 *   1. À l'aide d'une boucle for, tirer 6 numéros au hasard entre 1 et 50
 *      et les ranger dans un tableau $tirage.
 *   2. Trier le tableau par ordre croissant.
 *   3. Afficher les 6 numéros dans une seule ligne <tr> d'un tableau HTML,
 *      un numéro par cellule <td> (utiliser foreach).
 *   (Les doublons sont tolérés dans cette version : voir bonus2.)
 *
 * NOTIONS
 *   - for ($i = 0; $i < 6; $i++) { ... }
 *   - rand($min, $max) : entier aléatoire, bornes INCLUSES
 *   - sort($tab) : trie le tableau SUR PLACE (ne renvoie pas le tableau trié)
 *   - foreach ($tab as $valeur) : parcourt un tableau
 *   - Syntaxe alternative dans le HTML :
 *       <?php foreach ($tab as $v) : ?> ... <?= $v ?> ... <?php endforeach; ?>
 *
 * PIÈGES
 *   - $tirage = sort($tirage);  => $tirage vaut true, le tableau est perdu !
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
        td { border: 1px solid #333; padding: 4px 8px; font-size: 1.4em; }
    </style>
</head>
<body>
    <h1>Tirages du Lotto</h1>
    <?php
    for ($i = 0; $i < 6; $i++) {
        $tirage[$i] = rand(1, 50);
    }
    sort($tirage); // tri croissant du tirage
    ?>
    <table>
        <tr>
            <?php foreach ($tirage as $numero) : ?>
                <td><?= $numero ?></td>
            <?php endforeach; ?>
        </tr>
    </table>
</body>
</html>

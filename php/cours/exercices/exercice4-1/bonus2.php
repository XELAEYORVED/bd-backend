<?php
/*
 * EXERCICE 4-1, BONUS 2 : Statistiques sur 1000 lancers de dé
 * ===========================================================================
 * OBJECTIF : utiliser un tableau comme compteur ($tab[$cle]++).
 *
 * CONSIGNES
 *   1. Simuler 1000 lancers d'un dé à 6 faces.
 *   2. Compter combien de fois chaque face est sortie, dans un tableau
 *      $compteur dont les clés vont de 1 à 6 (initialisé à 0).
 *   3. Afficher un tableau HTML : face | nombre de sorties | pourcentage
 *      (1 décimale).
 *   4. Afficher la face la plus fréquente.
 *   5. Bonus du bonus : une « barre » de <div> dont la largeur en pixels
 *      dépend du nombre de sorties (style="width: ...px").
 *
 * AIDE
 *   - array_fill(1, 6, 0) crée [1 => 0, 2 => 0, ..., 6 => 0]
 *   - $compteur[rand(1, 6)]++;
 *   - max($compteur) donne la plus grande valeur ; array_search($valeur, $tab) donne sa clé
 *
 * Correction : corrections/bonus2.php
 */
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Statistiques de dé</title>
</head>
<body>
    <?php
    // TODO
    ?>
</body>
</html>

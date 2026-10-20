<?php
/*
 * EXERCICE 4-2, BONUS 1 : Table de multiplication
 * ===========================================================================
 * OBJECTIF : deux boucles for imbriquées pour générer une grille.
 *
 * CONSIGNES
 *   1. Afficher la table de multiplication de 1 à 10 dans un <table> :
 *      une ligne d'en-tête (<th>) avec 1 à 10, et une colonne d'en-tête à gauche.
 *   2. Chaque cellule contient ligne x colonne.
 *   3. Colorer en jaune les cellules de la diagonale (ligne === colonne :
 *      les carrés 1, 4, 9, ...).
 *   4. Permettre de choisir la taille via une constante TAILLE (10 par défaut) :
 *      en mettant 12, la table doit s'agrandir sans autre changement.
 *
 * AIDE
 *   - for ($ligne = 1; $ligne <= TAILLE; $ligne++) { for ($col = 1; ...) { ... } }
 *   - Ternaire : <td<?= $ligne === $col ? ' class="carre"' : '' ?>>
 *
 * Correction : corrections/bonus1.php
 */
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Table de multiplication</title>
</head>
<body>
    <?php
    // TODO
    ?>
</body>
</html>

<?php
/*
 * EXERCICE 5, BONUS 1 : Générateur de mots de passe
 * ===========================================================================
 * OBJECTIF : accéder aux caractères d'une chaîne, do while et alternance.
 *
 * CONSIGNES
 *   1. $caracteres = 'abcdefghijkmnpqrstuvwxyzABCDEFGHJKLMNPQRSTUVWXYZ23456789';
 *      (les caractères ambigus l, o, I, O, 0 et 1 ont été retirés)
 *   2. Générer 10 mots de passe de 10 caractères chacun, en piochant un
 *      caractère au hasard dans $caracteres à chaque fois.
 *   3. Un mot de passe valide contient AU MOINS un chiffre : sinon, on le
 *      régénère (do while).
 *   4. Aucun doublon dans la liste.
 *   5. Les afficher dans un <table>, en alternant la couleur de fond des
 *      lignes, avec dans une 2e colonne le nombre de chiffres du mot de passe.
 *
 * AIDE
 *   - strlen($chaine) : longueur ; $chaine[3] : 4e caractère
 *   - rand(0, strlen($caracteres) - 1) : un indice valide
 *   - preg_match('/[0-9]/', $mdp) vaut 1 s'il y a au moins un chiffre
 *   - preg_match_all('/[0-9]/', $mdp) compte les chiffres
 *
 * Correction : corrections/bonus1.php
 */
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Mots de passe</title>
</head>
<body>
    <?php
    // TODO
    ?>
</body>
</html>

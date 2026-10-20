<?php
/*
 * EXERCICE 3 : Opérations sur les variables (conversion de devises)
 * ===========================================================================
 * (Énoncé reconstitué d'après la solution : compare avec le syllabus sur l'eCampus.)
 *
 * OBJECTIF
 *   Manipuler des variables numériques et formater des nombres.
 *
 * CONSIGNES
 *   1. Déclarer les taux de change (valeur d'UNE unité étrangère en euros) :
 *        $taux_USD = 0.884;  $taux_GBP = 1.225;  $taux_SEK = 0.096;
 *   2. Déclarer un prix en euros : $prix_EUR = 18.50;
 *   3. Calculer le prix en dollars, en livres sterling et en couronnes suédoises.
 *      Réfléchir au sens du calcul : si 1 $ = 0,884 €, alors prix_€ / 0,884 = prix_$.
 *   4. Afficher les 4 prix avec 2 décimales, une virgule comme séparateur
 *      décimal et une espace comme séparateur des milliers, suivis du symbole.
 *
 * NOTIONS
 *   - Une variable commence par $ ; son type (int, float, string, bool) est dynamique.
 *   - Opérateurs : + - * / % (modulo) ** (puissance)
 *   - number_format($nombre, $decimales, $sep_decimal, $sep_milliers)
 *   - echo 'a', $b, 'c';   (virgules)   ou   echo 'a' . $b . 'c';   (concaténation)
 *
 * PIÈGES
 *   - Multiplier au lieu de diviser (vérifier : 18,50 € doit valoir PLUS de 18 $).
 *   - Écrire 18,50 en PHP : le séparateur décimal du code est le POINT.
 *
 * BONUS : bonus1.php, bonus2.php (corrections dans corrections/)
 */

$taux_USD = 0.884;
$taux_GBP = 1.225;
$taux_SEK = 0.096;
?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Opérations sur les variables</title>
</head>
<body>
<?php
$prix_EUR = 18.50;

// Le taux donne la valeur d'une unité étrangère en euros : on divise donc le prix en euros par le taux.
$prix_USD = $prix_EUR / $taux_USD;
$prix_GBP = $prix_EUR / $taux_GBP;
$prix_SEK = $prix_EUR / $taux_SEK;

// number_format($x, 2 décimales, ',' séparateur décimal, ' ' séparateur des milliers)
echo '<p>Prix en euros : ', number_format($prix_EUR, 2, ',', ' '), ' €</p>';
echo '<p>Prix en dollars : ', number_format($prix_USD, 2, ',', ' '), ' $</p>';
echo '<p>Prix en livres sterling : ', number_format($prix_GBP, 2, ',', ' '), ' £</p>';
echo '<p>Prix en couronnes suédoises : ', number_format($prix_SEK, 2, ',', ' '), ' SEK</p>';
?>
</body>
</html>

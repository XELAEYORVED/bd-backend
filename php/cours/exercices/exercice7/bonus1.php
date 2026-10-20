<?php
/*
 * EXERCICE 7, BONUS 1 : Calculatrice par URL
 * ===========================================================================
 * OBJECTIF : lire PLUSIEURS paramètres GET, les valider, et utiliser match.
 *
 * CONSIGNES
 *   1. La page reçoit trois paramètres : bonus1.php?a=12&b=4&op=div
 *      op peut valoir : add, sub, mul, div.
 *   2. Afficher le calcul et son résultat : « 12 ÷ 4 = 3 ».
 *   3. Erreurs à gérer (message en rouge, pas de redirection) :
 *        - un paramètre manque => « Paramètres manquants »
 *        - a ou b n'est pas un nombre => « a et b doivent être des nombres »
 *        - op inconnue => « Opération inconnue »
 *        - division par zéro => « Division par zéro impossible »
 *   4. Sous le résultat, afficher une liste de liens d'exemples qui
 *      testent chaque cas (un calcul valide de chaque type + chaque erreur).
 *
 * AIDE
 *   - is_numeric('12.5') vaut true ; is_numeric('abc') vaut false
 *   - Convertir ensuite avec (float)
 *   - match ($op) { 'add' => $a + $b, ..., default => null }
 *   - Afficher un paramètre reçu ? TOUJOURS avec htmlspecialchars().
 *
 * Correction : corrections/bonus1.php
 */
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Calculatrice</title>
</head>
<body>
    <?php
    // TODO
    ?>
</body>
</html>

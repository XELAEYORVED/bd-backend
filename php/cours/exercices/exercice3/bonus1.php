<?php
/*
 * EXERCICE 3, BONUS 1 : Facture avec TVA et remise
 * ===========================================================================
 * OBJECTIF : enchaîner des calculs et formater des montants.
 *
 * CONSIGNES
 *   1. Variables : $article = 'Clavier mécanique'; $prix_unitaire_HT = 49.90;
 *      $quantite = 3; et une constante TVA valant 0.21 (21 %).
 *   2. Calculer le total HT = prix unitaire x quantité.
 *   3. Si le total HT dépasse 100 €, appliquer une remise de 10 % sur le HT
 *      (sinon la remise vaut 0).
 *   4. Calculer la TVA sur le HT après remise, puis le total TVAC.
 *   5. Afficher une petite facture dans un <table> : article, quantité,
 *      prix unitaire, total HT, remise, TVA, total TVAC.
 *      Tous les montants au format belge : 1 234,56 €
 *   6. Tester avec $quantite = 1 : la remise doit disparaître.
 *
 * AIDE
 *   - const TVA = 0.21;   ou   define('TVA', 0.21);   (pas de $ devant une constante)
 *   - if ($total_HT > 100) { ... } else { ... }
 *   - Écrire une petite fonction euros($montant) qui renvoie le montant formaté
 *     évite de répéter number_format() partout.
 *
 * Correction : corrections/bonus1.php
 */
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Facture</title>
</head>
<body>
    <?php
    // TODO
    ?>
</body>
</html>

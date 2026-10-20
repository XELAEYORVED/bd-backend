<?php
// ÉTAPE 2/3 — Objectif 2 : calculer les 3 autres monnaies à partir des taux
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

// ← NOUVEAU : le taux = valeur d'1 unité étrangère en euros → on DIVISE
$prix_USD = $prix_EUR / $taux_USD;
$prix_GBP = $prix_EUR / $taux_GBP;
$prix_SEK = $prix_EUR / $taux_SEK;

echo '<p>Prix en euros : ', $prix_EUR, ' €</p>';
echo '<p>Prix en dollars : ', $prix_USD, ' $</p>';              // ← NOUVEAU : 20.927601809955 (trop de décimales)
echo '<p>Prix en livres sterling : ', $prix_GBP, ' £</p>';      // ← NOUVEAU
echo '<p>Prix en couronnes suédoises : ', $prix_SEK, ' SEK</p>'; // ← NOUVEAU
?>
</body>
</html>

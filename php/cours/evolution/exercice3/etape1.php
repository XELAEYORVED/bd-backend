<?php
// ÉTAPE 1/3 — Objectif 1 : une variable $prix_EUR affichée dans un <p>
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
$prix_EUR = 18.50;                                // ← NOUVEAU (point décimal en PHP, pas de virgule !)
echo '<p>Prix en euros : ', $prix_EUR, ' €</p>'; // ← NOUVEAU : affiche 18.5 (pas encore formaté)
?>
</body>
</html>

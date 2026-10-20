<?php
// CORRECTION : Exercice 3, bonus 1 (Facture avec TVA et remise)
const TVA = 0.21;
const SEUIL_REMISE = 100;
const TAUX_REMISE = 0.10;

function euros(float $montant): string
{
    return number_format($montant, 2, ',', ' ') . ' €';
}

$article = 'Clavier mécanique';
$prix_unitaire_HT = 49.90;
$quantite = 3;

$total_HT = $prix_unitaire_HT * $quantite;
if ($total_HT > SEUIL_REMISE) {
    $remise = $total_HT * TAUX_REMISE;
} else {
    $remise = 0;
}
$HT_apres_remise = $total_HT - $remise;
$montant_TVA = $HT_apres_remise * TVA;
$total_TVAC = $HT_apres_remise + $montant_TVA;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Facture</title>
    <style>
        td, th { border: 1px solid #333; padding: 4px 8px; }
        td:last-child { text-align: right; }
    </style>
</head>
<body>
    <h1>Facture</h1>
    <table>
        <tr><th>Article</th><td><?= $article ?></td></tr>
        <tr><th>Quantité</th><td><?= $quantite ?></td></tr>
        <tr><th>Prix unitaire HT</th><td><?= euros($prix_unitaire_HT) ?></td></tr>
        <tr><th>Total HT</th><td><?= euros($total_HT) ?></td></tr>
        <tr><th>Remise</th><td>- <?= euros($remise) ?></td></tr>
        <tr><th>TVA (<?= TVA * 100 ?> %)</th><td><?= euros($montant_TVA) ?></td></tr>
        <tr><th>Total TVAC</th><td><strong><?= euros($total_TVAC) ?></strong></td></tr>
    </table>
</body>
</html>

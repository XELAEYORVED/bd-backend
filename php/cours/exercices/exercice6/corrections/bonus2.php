<?php
// CORRECTION : Exercice 6, bonus 2 (Catalogue de produits)
declare(strict_types=1);

$produits = [
    ['nom' => 'Souris sans fil',       'prix_ht' => 19.99,  'stock' => 12, 'categorie' => 'Accessoires'],
    ['nom' => 'Écran 27"',             'prix_ht' => 229.00, 'stock' => 0,  'categorie' => 'Écrans'],
    ['nom' => 'Câble HDMI <2m>',       'prix_ht' => 7.50,   'stock' => 40, 'categorie' => 'Accessoires'],
    ['nom' => 'Clavier "Pro" & pavé',  'prix_ht' => 59.90,  'stock' => 3,  'categorie' => 'Accessoires'],
    ['nom' => 'Écran 24"',             'prix_ht' => 149.00, 'stock' => 7,  'categorie' => 'Écrans'],
];

function prix_tvac(float $prix_ht, float $tva = 0.21): float
{
    return $prix_ht * (1 + $tva);
}

function format_prix(float $prix): string
{
    return number_format($prix, 2, ',', ' ') . ' €';
}

function en_stock(array $produit): bool
{
    return $produit['stock'] > 0;
}

function show_produit(array $produit): void
{
    echo '<div class="produit">';
    echo '<h3>', htmlspecialchars($produit['nom']), '</h3>';
    echo '<p>', format_prix(prix_tvac($produit['prix_ht'])), ' TVAC</p>';
    if (en_stock($produit)) {
        echo '<p class="ok">En stock (', $produit['stock'], ')</p>';
    } else {
        echo '<p class="ko">Rupture de stock</p>';
    }
    echo '</div>';
}

$par_categorie = [];
$valeur_stock = 0;
foreach ($produits as $p) {
    $par_categorie[$p['categorie']][] = $p;
    $valeur_stock += prix_tvac($p['prix_ht']) * $p['stock'];
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Catalogue</title>
    <style>
        section { display: flex; gap: 1em; }
        .produit { border: 1px solid #ccc; padding: .5em 1em; width: 180px; }
        .ok { color: green; }
        .ko { color: red; }
    </style>
</head>
<body>
    <h1>Catalogue</h1>
    <?php foreach ($par_categorie as $categorie => $liste) : ?>
        <h2><?= htmlspecialchars($categorie) ?></h2>
        <section>
            <?php foreach ($liste as $produit) {
                show_produit($produit);
            } ?>
        </section>
    <?php endforeach; ?>

    <p>Valeur totale du stock : <strong><?= format_prix($valeur_stock) ?></strong></p>
    <p>Souris avec une TVA de 6 % : <?= format_prix(prix_tvac($produits[0]['prix_ht'], 0.06)) ?></p>
</body>
</html>

<?php
/*
 * EXERCICE 6, BONUS 2 : Catalogue de produits
 * ===========================================================================
 * OBJECTIF : paramètres par défaut, fonctions qui se combinent, htmlspecialchars.
 *
 * DONNÉES (à recopier dans la page)
 *   $produits = [
 *       ['nom' => 'Souris sans fil',       'prix_ht' => 19.99,  'stock' => 12, 'categorie' => 'Accessoires'],
 *       ['nom' => 'Écran 27"',             'prix_ht' => 229.00, 'stock' => 0,  'categorie' => 'Écrans'],
 *       ['nom' => 'Câble HDMI <2m>',       'prix_ht' => 7.50,   'stock' => 40, 'categorie' => 'Accessoires'],
 *       ['nom' => 'Clavier "Pro" & pavé',  'prix_ht' => 59.90,  'stock' => 3,  'categorie' => 'Accessoires'],
 *       ['nom' => 'Écran 24"',             'prix_ht' => 149.00, 'stock' => 7,  'categorie' => 'Écrans'],
 *   ];
 *
 * CONSIGNES
 *   1. Écrire les fonctions typées suivantes :
 *        prix_tvac(float $prix_ht, float $tva = 0.21): float
 *        format_prix(float $prix): string            => « 1 234,56 € »
 *        en_stock(array $produit): bool
 *        show_produit(array $produit): void          => une vignette <div> :
 *            nom (<h3>), prix TVAC, et « En stock (X) » en vert
 *            ou « Rupture de stock » en rouge.
 *   2. Afficher tous les produits, regroupés par catégorie (un <h2> par catégorie).
 *   3. Sous le catalogue : la valeur totale du stock en TVAC
 *      (somme de prix_tvac x stock pour chaque produit).
 *   4. Vérifier dans le code source (Ctrl+U) que les noms avec < > " &
 *      sont correctement échappés et ne cassent pas le HTML.
 *   5. Afficher aussi le prix de la souris avec une TVA de 6 %, en utilisant
 *      le 2e paramètre de prix_tvac().
 *
 * AIDE
 *   - Un paramètre avec une valeur par défaut est facultatif à l'appel :
 *     prix_tvac(10) et prix_tvac(10, 0.06) sont tous deux valides.
 *   - Regrouper : $par_categorie[$p['categorie']][] = $p;
 *
 * Correction : corrections/bonus2.php
 */
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Catalogue</title>
</head>
<body>
    <?php
    // TODO
    ?>
</body>
</html>

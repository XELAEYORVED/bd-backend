<?php
/*
 * EXERCICE 2, BONUS 1 : Menu avec lien actif
 * ===========================================================================
 * OBJECTIF : une variable déclarée AVANT un include est visible dans le fichier inclus.
 *
 * CONSIGNES
 *   1. Créer un nouveau fragment _nav_actif.php (copie de _nav.php) qui ajoute
 *      class="actif" sur le lien de la page courante.
 *   2. Dans cette page (bonus1.php), déclarer $page_courante = 'contact';
 *      AVANT d'inclure _nav_actif.php.
 *   3. Dans _nav_actif.php, comparer $page_courante à 'accueil', 'administration'
 *      et 'contact' pour ajouter la classe au bon lien.
 *   4. Ajouter un style CSS .actif { font-weight: bold; color: red; }
 *   5. Réutiliser _header.php et _footer.php.
 *
 * AIDE
 *   - Un include se comporte comme un copier-coller : le fichier inclus voit
 *     toutes les variables déjà déclarées.
 *   - Opérateur ternaire : <?= $page_courante === 'contact' ? 'class="actif"' : '' ?>
 *
 * Correction : corrections/bonus1.php et corrections/_nav_actif.php
 */
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Lien actif</title>
</head>
<body>
    <?php
    // TODO
    ?>
</body>
</html>

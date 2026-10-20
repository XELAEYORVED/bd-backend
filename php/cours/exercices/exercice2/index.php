<?php
/*
 * EXERCICE 2 : Inclusion de fichiers (index.php, contact.php, administration.php)
 * ===========================================================================
 * (Énoncé reconstitué d'après la solution : compare avec le syllabus sur l'eCampus.)
 *
 * OBJECTIF
 *   Ne pas recopier le même header / menu / pied de page dans chaque page :
 *   on les écrit UNE fois dans des fichiers séparés, puis on les inclut.
 *
 * CONSIGNES
 *   1. Créer trois fragments :
 *        _header.php : <header> avec le titre du site
 *        _nav.php    : <nav> avec les liens Accueil / Administration / Contact
 *        _footer.php : <footer> avec ton nom
 *   2. Créer les pages index.php, contact.php et administration.php qui
 *      incluent ces trois fragments (include) et affichent chacune leur <h2>.
 *   3. La page administration.php ne doit pas être accessible : elle
 *      redirige immédiatement vers index.php avec header('Location:...').
 *
 * NOTIONS
 *   - include 'fichier.php';      : insère le fichier (Warning s'il manque)
 *   - require 'fichier.php';      : idem mais erreur FATALE s'il manque
 *   - include_once / require_once : n'inclut jamais deux fois le même fichier
 *   - Convention : préfixe _ = fragment, pas une page à ouvrir seule.
 *   - header('Location:page.php'); exit(); : redirection HTTP.
 *
 * PIÈGES
 *   - header() APRÈS du HTML (même un espace ou une ligne vide avant <?php)
 *     => « Cannot modify header information - headers already sent ».
 *   - Oublier exit() après header() : la suite du script s'exécute quand même.
 *
 * BONUS : bonus1.php, bonus2.php (corrections dans corrections/)
 */
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Inclusion de fichiers</title>
</head>
<body>
    <?php
    include '_header.php';
    include '_nav.php';
    ?>
    <h2>Accueil</h2>
    <?php include '_footer.php'; ?>
</body>
</html>

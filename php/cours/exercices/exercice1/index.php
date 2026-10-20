<?php
/*
 * EXERCICE 1 : Hello World
 * ===========================================================================
 * (Énoncé reconstitué d'après la solution : compare avec le syllabus sur l'eCampus.)
 *
 * OBJECTIF
 *   Écrire sa première page PHP et la faire tourner via le serveur local
 *   (Laragon / WAMP / `php -S localhost:8000`), PAS en ouvrant le fichier
 *   directement dans le navigateur (sinon le PHP n'est pas interprété).
 *
 * CONSIGNES
 *   1. Créer une page HTML5 valide (doctype, <html lang="fr">, <meta charset>, <title>).
 *   2. Dans le <body>, ouvrir une balise PHP et utiliser echo pour générer
 *      un titre <h1>Hello World</h1>.
 *   3. Afficher le code source de la page dans le navigateur (Ctrl+U) :
 *      on n'y voit plus de PHP, uniquement le HTML produit.
 *
 * NOTIONS
 *   - <?php ... ?> : le code entre ces balises s'exécute sur le SERVEUR.
 *   - echo : envoie du texte (souvent du HTML) dans la page.
 *   - Chaque instruction se termine par un point-virgule ;
 *
 * PIÈGES
 *   - Oublier le ; : « Parse error: syntax error, unexpected ... »
 *   - Fichier en .html au lieu de .php : le code PHP s'affiche tel quel.
 *
 * BONUS : bonus1.php, bonus2.php (corrections dans corrections/)
 */
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Hello World</title>
</head>
<body>
    <?php
    echo '<h1>Hello World</h1>';
    ?>
</body>
</html>

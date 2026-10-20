<?php
/*
 * EXERCICE 7, BONUS 2 : Liste et fiche détail (une seule page)
 * ===========================================================================
 * OBJECTIF : le schéma classique « liste => détail via ?id= », avec un filtre.
 *
 * DONNÉES (à recopier)
 *   $films = [
 *       1 => ['titre' => 'Inception',        'annee' => 2010, 'genre' => 'SF',        'resume' => 'Des voleurs entrent dans les rêves.'],
 *       2 => ['titre' => 'Le Roi Lion',      'annee' => 1994, 'genre' => 'Animation', 'resume' => 'Un lionceau doit reprendre sa place.'],
 *       3 => ['titre' => 'Interstellar',     'annee' => 2014, 'genre' => 'SF',        'resume' => 'Un voyage au-delà de notre galaxie.'],
 *       4 => ['titre' => 'Le Voyage de Chihiro', 'annee' => 2001, 'genre' => 'Animation', 'resume' => 'Une fillette dans le monde des esprits.'],
 *       5 => ['titre' => 'Intouchables',     'annee' => 2011, 'genre' => 'Comédie',   'resume' => 'Une amitié improbable.'],
 *   ];
 *
 * CONSIGNES
 *   1. Sans paramètre : afficher la liste des titres, chacun étant un lien
 *      vers bonus2.php?id=X.
 *   2. Avec ?id=X valide : afficher la fiche du film (titre, année, genre,
 *      résumé) et un lien « Retour à la liste ».
 *   3. Avec un id qui n'existe pas (99, -1, abc) : renvoyer le code HTTP 404
 *      et afficher « Film introuvable » avec le lien de retour.
 *   4. Au-dessus de la liste, des liens de filtre : Tous | SF | Animation | Comédie
 *      (bonus2.php?genre=SF). Le filtre actif est en gras. Un genre inconnu
 *      affiche simplement une liste vide.
 *
 * AIDE
 *   - isset($films[$id]) : l'id existe-t-il ?
 *   - http_response_code(404); doit être appelé AVANT le HTML (comme header()).
 *   - urlencode($genre) pour mettre une valeur dans une URL.
 *
 * Correction : corrections/bonus2.php
 */
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Films</title>
</head>
<body>
    <?php
    // TODO
    ?>
</body>
</html>

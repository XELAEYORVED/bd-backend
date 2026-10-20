<?php
/*
 * EXERCICE 2, BONUS 2 : <head> commun et fermeture le week-end
 * ===========================================================================
 * OBJECTIF : passer une valeur à un fragment, et faire une redirection conditionnelle.
 *
 * CONSIGNES
 *   1. Créer un fragment _head.php qui génère tout le début de la page :
 *      <!DOCTYPE html>, <html>, <head> avec <meta charset> et un <title>
 *      qui vaut « Mon site - » suivi de $titre, puis </head><body>.
 *   2. Dans bonus2.php, déclarer $titre = 'Horaires'; puis inclure _head.php,
 *      _header.php et _nav.php, afficher un <h2>Horaires</h2>, puis _footer.php
 *      et fermer </body></html>.
 *   3. Le site est « fermé » le week-end : si on est samedi ou dimanche,
 *      rediriger vers index.php AVANT tout affichage.
 *   4. Pour tester sans attendre samedi : accepter un paramètre ?jour=6 dans
 *      l'URL qui remplace le jour réel (1 = lundi ... 7 = dimanche).
 *
 * AIDE
 *   - date('N') renvoie le jour de la semaine : '1' (lundi) à '7' (dimanche)
 *   - $jour = (int) ($_GET['jour'] ?? date('N'));
 *   - Où placer le test ? Réfléchis : header() doit passer avant le moindre HTML.
 *
 * Correction : corrections/bonus2.php et corrections/_head.php
 */
// TODO

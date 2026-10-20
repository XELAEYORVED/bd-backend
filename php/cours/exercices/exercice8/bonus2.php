<?php
/*
 * EXERCICE 8, BONUS 2 : Page d'administration protégée
 * ===========================================================================
 * OBJECTIF : réutiliser la session créée par index.php pour protéger une page.
 *
 * CONSIGNES
 *   1. Cette page utilise la MÊME session que index.php (exercice 8) :
 *      connecte-toi d'abord sur index.php, puis ouvre bonus2.php.
 *   2. Si personne n'est connecté : rediriger vers index.php.
 *   3. Si l'utilisateur est connecté mais N'EST PAS admin (bob) :
 *      envoyer le code HTTP 403 et afficher « Accès refusé, <login> ».
 *   4. Si c'est un admin (bill, betty) :
 *        - afficher « Espace administration : bienvenue Monsieur / Madame <login> » ;
 *        - compter combien de fois CET utilisateur a affiché cette page
 *          pendant sa session (compteur dans $_SESSION) et l'afficher ;
 *        - afficher la date et l'heure de connexion. Pour ça, modifie
 *          index.php pour mémoriser $_SESSION['connecte_le'] = time();
 *          au moment de la connexion, puis affiche-la avec date('d/m/Y H:i', ...).
 *   5. Ajouter sur index.php (si l'utilisateur est admin) un lien vers bonus2.php.
 *
 * AIDE
 *   - session_start(); en tout premier, sinon $_SESSION est vide
 *   - empty($_SESSION['login']) : vrai si la clé n'existe pas OU est vide
 *   - http_response_code(403);
 *   - $_SESSION['visites_admin'] = ($_SESSION['visites_admin'] ?? 0) + 1;
 *
 * Correction : corrections/bonus2.php
 */
// TODO

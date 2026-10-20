<?php
/*
 * EXERCICE 8, BONUS 1 : Formulaire de contact avec validation
 * ===========================================================================
 * OBJECTIF : valider des champs POST, réafficher les valeurs saisies,
 *            et afficher un message « flash » après redirection.
 *
 * CONSIGNES
 *   1. Formulaire POST vers la page elle-même avec trois champs :
 *      nom, email, message (<textarea>), et un bouton « Envoyer ».
 *   2. Règles de validation, avec un message d'erreur SOUS chaque champ fautif :
 *        - nom : obligatoire (après trim), 2 caractères minimum
 *        - email : obligatoire et format valide
 *        - message : 10 caractères minimum
 *   3. En cas d'erreur, les champs restent remplis avec ce que l'utilisateur
 *      a tapé (attribut value="..." et contenu du textarea), en ÉCHAPPANT les valeurs.
 *   4. Si tout est valide :
 *        - stocker un message « Merci <nom>, ton message a bien été envoyé »
 *          dans $_SESSION['flash'] ;
 *        - rediriger vers bonus1.php (Post/Redirect/Get) ;
 *        - après la redirection, afficher le message flash en vert UNE seule
 *          fois (il disparaît si on recharge la page).
 *
 * AIDE
 *   - trim($_POST['nom'] ?? '') supprime les espaces au début et à la fin
 *   - filter_var($email, FILTER_VALIDATE_EMAIL) renvoie false si l'adresse est invalide
 *   - mb_strlen() compte correctement les caractères accentués
 *   - Ranger les erreurs dans un tableau : $erreurs['email'] = '...';
 *     et tester empty($erreurs) pour savoir si tout est bon.
 *   - Message flash : on le lit, on l'affiche, puis unset($_SESSION['flash']);
 *
 * Correction : corrections/bonus1.php
 */
// TODO (n'oublie pas session_start() tout en haut)

<?php
/*
 * EXERCICE 8 : Formulaire de connexion (POST + sessions)
 * ===========================================================================
 * (Énoncé reconstitué d'après la solution : compare avec le syllabus sur l'eCampus.)
 *
 * OBJECTIF
 *   Traiter un formulaire POST et mémoriser l'utilisateur connecté d'une
 *   requête à l'autre grâce aux sessions.
 *
 * DONNÉES : trois comptes autorisés (login / mot de passe / titre / admin)
 *   bill  / bill  / Monsieur / admin
 *   bob   / bob   / Monsieur / pas admin
 *   betty / betty / Madame   / admin
 *
 * CONSIGNES
 *   1. Si personne n'est connecté : afficher le titre « Connexion » et un
 *      formulaire (login, mot de passe, bouton « Se connecter ») envoyé en POST
 *      vers la page elle-même.
 *   2. À la soumission, vérifier les identifiants :
 *        - corrects   : mémoriser login, titre et admin en session, puis
 *                       recharger la page (redirection) ;
 *        - incorrects : réafficher le formulaire avec un message d'erreur.
 *   3. Si quelqu'un est connecté : afficher le titre « Déconnexion » et un
 *      bouton « Se déconnecter ». Si c'est un admin, afficher aussi
 *      « Bonjour Monsieur » ou « Bonjour Madame ».
 *   4. Le bouton de déconnexion détruit la session (un seul clic doit suffire).
 *
 * NOTIONS
 *   - <form method="post"> : les champs arrivent dans $_POST['name_du_champ']
 *   - isset($_POST['connexion']) : savoir QUEL bouton submit a été cliqué
 *   - $x = $_POST['login'] ?? '';  : valeur par défaut si la clé manque
 *   - session_start();  TOUT EN HAUT, avant le moindre HTML
 *   - $_SESSION['cle'] = valeur;  : conservé côté serveur entre les pages
 *   - session_unset(); session_destroy(); : déconnexion
 *   - session_regenerate_id(true); : nouvel identifiant après connexion (sécurité)
 *   - Post/Redirect/Get : après un POST traité => header('Location:...'); exit();
 *     (sinon F5 renvoie le formulaire, et $_SESSION reste rempli pour la requête en cours)
 *   - === : comparaison stricte (valeur ET type)
 *
 * PIÈGES
 *   - session_start() après du HTML : « headers already sent ».
 *   - Mots de passe en clair : OK pour l'exercice ; en vrai on utilise
 *     password_hash() / password_verify() et une base de données.
 *
 * BONUS : bonus1.php, bonus2.php (corrections dans corrections/)
 */

session_start();

// Comptes autorisés (exercice uniquement : en vrai, les mots de passe sont hachés en BD)
$utilisateurs = [
    'bill'  => ['password' => 'bill',  'titre' => 'Monsieur', 'admin' => true],
    'bob'   => ['password' => 'bob',   'titre' => 'Monsieur', 'admin' => false],
    'betty' => ['password' => 'betty', 'titre' => 'Madame',   'admin' => true],
];
$erreur = '';

// Connexion
if (isset($_POST['connexion'])) {
    $login = $_POST['login'] ?? '';
    $password = $_POST['password'] ?? '';

    if (isset($utilisateurs[$login]) && $utilisateurs[$login]['password'] === $password) {
        session_regenerate_id(true); // nouvel identifiant de session après authentification
        $_SESSION['login'] = $login;
        $_SESSION['titre'] = $utilisateurs[$login]['titre'];
        $_SESSION['admin'] = $utilisateurs[$login]['admin'];
        header('Location:index.php');
        exit();
    }
    sleep(1); // ralentit les attaques par force brute
    $erreur = 'Identifiants incorrects.';
}

// Déconnexion
if (isset($_POST['deconnexion'])) {
    session_unset();
    session_destroy();
    header('Location:index.php');
    exit();
}
?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Formulaire de connexion</title>
</head>
<body>
<?php if (!empty($_SESSION['login'])) : ?>
    <h1>Déconnexion</h1>
    <?php if (!empty($_SESSION['admin'])) : ?>
        <p>Bonjour <?= $_SESSION['titre'] ?></p>
    <?php endif; ?>
    <form action="index.php" method="post">
        <input type="submit" name="deconnexion" value="Se déconnecter">
    </form>
<?php else : ?>
    <h1>Connexion</h1>
    <?php if ($erreur) : ?>
        <p style="color:red"><?= $erreur ?></p>
    <?php endif; ?>
    <form action="index.php" method="post">
        <p><label>Login : <input type="text" name="login"></label></p>
        <p><label>Mot de passe : <input type="password" name="password"></label></p>
        <input type="submit" name="connexion" value="Se connecter">
    </form>
<?php endif; ?>
</body>
</html>

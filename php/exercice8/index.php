<?php
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
    // Sans redirection, $_SESSION est encore rempli pour cette requête : il fallait soumettre 2 fois
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

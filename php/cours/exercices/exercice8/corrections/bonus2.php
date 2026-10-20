<?php
// CORRECTION : Exercice 8, bonus 2 (Page d'administration protégée)
// Pour la date de connexion, ajouter dans ../index.php, juste après $_SESSION['admin'] = ... :
//     $_SESSION['connecte_le'] = time();
session_start();

// 1. Personne de connecté : redirection
if (empty($_SESSION['login'])) {
    header('Location:../index.php');
    exit();
}

// 2. Connecté mais pas admin : code 403 (à envoyer AVANT le HTML)
$est_admin = !empty($_SESSION['admin']);
if (!$est_admin) {
    http_response_code(403);
} else {
    $_SESSION['visites_admin'] = ($_SESSION['visites_admin'] ?? 0) + 1;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Administration</title>
</head>
<body>
<?php if (!$est_admin) : ?>
    <h1>Accès refusé, <?= htmlspecialchars($_SESSION['login']) ?></h1>
<?php else : ?>
    <h1>Espace administration</h1>
    <p>Bienvenue <?= $_SESSION['titre'] ?> <?= htmlspecialchars($_SESSION['login']) ?></p>
    <p>Tu as affiché cette page <?= $_SESSION['visites_admin'] ?> fois pendant cette session.</p>
    <?php if (isset($_SESSION['connecte_le'])) : ?>
        <p>Connecté le <?= date('d/m/Y à H:i', $_SESSION['connecte_le']) ?></p>
    <?php endif; ?>
<?php endif; ?>
    <p><a href="../index.php">Retour</a></p>
</body>
</html>

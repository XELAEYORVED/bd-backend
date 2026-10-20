<?php
// CORRECTION : Exercice 8, bonus 1 (Formulaire de contact avec validation)
session_start();

$nom = '';
$email = '';
$message = '';
$erreurs = [];

if (isset($_POST['envoyer'])) {
    $nom = trim($_POST['nom'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $message = trim($_POST['message'] ?? '');

    if (mb_strlen($nom) < 2) {
        $erreurs['nom'] = 'Le nom doit contenir au moins 2 caractères.';
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erreurs['email'] = 'Adresse e-mail invalide.';
    }
    if (mb_strlen($message) < 10) {
        $erreurs['message'] = 'Le message doit contenir au moins 10 caractères.';
    }

    if (empty($erreurs)) {
        // (Ici, on enverrait le mail ou on enregistrerait en base de données)
        $_SESSION['flash'] = 'Merci ' . $nom . ', ton message a bien été envoyé.';
        header('Location:bonus1.php');
        exit();
    }
}

// Message flash : lu une fois puis supprimé
$flash = $_SESSION['flash'] ?? '';
unset($_SESSION['flash']);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Contact</title>
    <style>
        .erreur { color: red; margin: 0; }
        .flash { color: green; font-weight: bold; }
    </style>
</head>
<body>
    <h1>Contact</h1>
    <?php if ($flash) : ?>
        <p class="flash"><?= htmlspecialchars($flash) ?></p>
    <?php endif; ?>

    <form action="bonus1.php" method="post">
        <p>
            <label>Nom : <input type="text" name="nom" value="<?= htmlspecialchars($nom) ?>"></label>
            <?php if (isset($erreurs['nom'])) : ?><p class="erreur"><?= $erreurs['nom'] ?></p><?php endif; ?>
        </p>
        <p>
            <label>E-mail : <input type="text" name="email" value="<?= htmlspecialchars($email) ?>"></label>
            <?php if (isset($erreurs['email'])) : ?><p class="erreur"><?= $erreurs['email'] ?></p><?php endif; ?>
        </p>
        <p>
            <label>Message :<br><textarea name="message" rows="5" cols="40"><?= htmlspecialchars($message) ?></textarea></label>
            <?php if (isset($erreurs['message'])) : ?><p class="erreur"><?= $erreurs['message'] ?></p><?php endif; ?>
        </p>
        <input type="submit" name="envoyer" value="Envoyer">
    </form>
</body>
</html>

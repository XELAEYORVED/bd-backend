<?php
//numéro de page par défaut, au cas où absence de GET
$page = 1;
//récupération du paramètre GET s'il existe et conversion (int) pour le sécuriser
if (isset($_GET['page'])) $page = (int) $_GET['page'];

// Page hors limites (88, -15, 0, "abc"...) : redirection vers la page 1
if ($page < 1 || $page > 3) {
    header('Location:index.php?page=1');
    exit();
}

// Navigation circulaire : 1→2→3→1 et 3→2→1→3
$suivante = $page % 3 + 1;
$precedente = ($page + 1) % 3 + 1;

$couleur = match ($page) {
    1 => 'red',
    2 => 'blue',
    3 => 'green',
};
?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Paramètres GET</title>
    <style>
        body, a { color: <?= $couleur ?>; }
    </style>
</head>
<body>
    <h1>Page <?php echo $page; ?>/3</h1>
    <nav>
        <ul>
            <li><a href="index.php?page=<?= $precedente ?>">Page précédente</a></li>
            <li><a href="index.php?page=1">Page 1</a></li>
            <li><a href="index.php?page=2">Page 2</a></li>
            <li><a href="index.php?page=3">Page 3</a></li>
            <li><a href="index.php?page=<?= $suivante ?>">Page suivante</a></li>
        </ul>
    </nav>
</body>
</html>

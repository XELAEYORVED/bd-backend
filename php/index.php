<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Exercices PHP</title>
</head>
<body>
    <h1>Exercices PHP</h1>
    <ul>
        <?php
        // Liste automatiquement tous les sous-dossiers (comme la page d'accueil de WAMP/Laragon)
        foreach (glob('*', GLOB_ONLYDIR) as $dossier) {
            echo '<li><a href="', $dossier, '/">', $dossier, '</a></li>';
        }
        ?>
    </ul>
</body>
</html>

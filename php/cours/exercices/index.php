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
        // natsort : exercice2 avant exercice10
        $dossiers = glob('*', GLOB_ONLYDIR);
        natsort($dossiers);
        foreach ($dossiers as $dossier) {
            echo '<li><a href="', $dossier, '/">', $dossier, '</a></li>';
        }
        ?>
    </ul>
</body>
</html>

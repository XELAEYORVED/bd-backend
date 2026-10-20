<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Évolution des exercices</title>
</head>
<body>
    <h1>Évolution des exercices</h1>
    <p>Chaque exercice reconstruit étape par étape : ouvre les étapes dans l'ordre et compare-les.</p>
    <?php
    $dossiers = glob('*', GLOB_ONLYDIR);
    natsort($dossiers);
    foreach ($dossiers as $dossier) {
        echo '<h2>', $dossier, '</h2><ul>';
        // étapes sous forme de fichiers (etape0.php) ou de dossiers (etape0/index.php)
        $etapes = glob($dossier . '/etape*');
        natsort($etapes);
        foreach ($etapes as $etape) {
            $lien = is_dir($etape) ? $etape . '/' : $etape;
            echo '<li><a href="', $lien, '">', basename($etape), '</a></li>';
        }
        echo '</ul>';
    }
    ?>
</body>
</html>

<?php
// CORRECTION : Exercice 1, bonus 1 (Carte de visite)
date_default_timezone_set('Europe/Brussels');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Carte de visite</title>
</head>
<body>
    <?php
    $prenom = 'Alexandre';
    $nom = 'Devroye';
    $formation = 'Développement web';
    $age = 20;

    // concaténation avec le point
    echo '<h1>' . $prenom . ' ' . strtoupper($nom) . '</h1>';
    // écriture avec des virgules (un peu plus rapide, car aucune chaîne intermédiaire n'est construite)
    echo '<p>Étudiant en ', $formation, ', ', $age, ' ans</p>';
    echo '<p>Page générée le ', date('d/m/Y'), ' à ', date('H:i'), '</p>';
    ?>
</body>
</html>

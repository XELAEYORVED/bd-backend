<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Boucles et conditions</title>
</head>
<body>
    <?php
    $noms = array('Bob', 'Kévin', 'Julien', 'Brad', 'Timmy');
    $localites = array('7000 Mons', '7012 Jemappes', '7050 Jurbise', '', '7000 Mons');
    $nb_etudiants = count($noms);
    ?>
    <p><?= $nb_etudiants ?> étudiants</p>
    <ul>
        <?php
        // $i récupère l'indice, qui concorde entre les deux tableaux
        foreach ($noms as $i => $nom) {
            $localite = empty($localites[$i]) ? 'inconnue' : $localites[$i];
            echo '<li>', $nom, ', localité : ', $localite, '</li>';
        }
        ?>
    </ul>
</body>
</html>

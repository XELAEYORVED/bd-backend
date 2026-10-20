<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Tirages du Lotto</title>
    <style>
        table { border-collapse: separate; }
        td { border: 1px solid #333; padding: 2px 6px; font-size: 1.4em; }
    </style>
</head>
<body>
    <h1>Tirages du Lotto</h1>
    <?php
    $nb_tirages = rand(4, 10);
    for ($tirage = 1; $tirage <= $nb_tirages; $tirage++) {
        for ($i = 0; $i < 6; $i++) {
            $numeros[$tirage][$i] = rand(1, 50);
        }
        sort($numeros[$tirage]); // on trie chaque tirage juste après l'avoir pioché
    }
    ?>
    <table>
        <?php foreach ($numeros as $tirage) : ?>
            <tr>
                <?php foreach ($tirage as $numero) : ?>
                    <td><?= $numero ?></td>
                <?php endforeach; ?>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>

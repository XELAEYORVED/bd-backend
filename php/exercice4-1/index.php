<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Tirages du Lotto</title>
    <style>
        table { border-collapse: separate; }
        td { border: 1px solid #333; padding: 4px 8px; font-size: 1.4em; }
    </style>
</head>
<body>
    <h1>Tirages du Lotto</h1>
    <?php
    for ($i = 0; $i < 6; $i++) {
        $tirage[$i] = rand(1, 50);
    }
    sort($tirage); // tri croissant du tirage
    ?>
    <table>
        <tr>
            <?php foreach ($tirage as $numero) : ?>
                <td><?= $numero ?></td>
            <?php endforeach; ?>
        </tr>
    </table>
</body>
</html>

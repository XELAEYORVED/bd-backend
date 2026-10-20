<?php
// CORRECTION : Exercice 4-2, bonus 1 (Table de multiplication)
const TAILLE = 10;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Table de multiplication</title>
    <style>
        table { border-collapse: collapse; }
        td, th { border: 1px solid #333; padding: 4px 8px; text-align: right; }
        th { background: #ddd; }
        .carre { background: yellow; }
    </style>
</head>
<body>
    <h1>Table de multiplication</h1>
    <table>
        <tr>
            <th>×</th>
            <?php for ($col = 1; $col <= TAILLE; $col++) : ?>
                <th><?= $col ?></th>
            <?php endfor; ?>
        </tr>
        <?php for ($ligne = 1; $ligne <= TAILLE; $ligne++) : ?>
            <tr>
                <th><?= $ligne ?></th>
                <?php for ($col = 1; $col <= TAILLE; $col++) : ?>
                    <td<?= $ligne === $col ? ' class="carre"' : '' ?>><?= $ligne * $col ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</body>
</html>

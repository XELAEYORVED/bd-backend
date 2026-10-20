<?php
// CORRECTION : Exercice 5, bonus 1 (Générateur de mots de passe)
$caracteres = 'abcdefghijkmnpqrstuvwxyzABCDEFGHJKLMNPQRSTUVWXYZ23456789';
$mots_de_passe = [];

for ($i = 0; $i < 10; $i++) {
    do {
        $mdp = '';
        for ($c = 0; $c < 10; $c++) {
            $mdp .= $caracteres[rand(0, strlen($caracteres) - 1)];
        }
        // on recommence s'il n'y a pas de chiffre OU si ce mot de passe existe déjà
    } while (!preg_match('/[0-9]/', $mdp) || in_array($mdp, $mots_de_passe));
    $mots_de_passe[] = $mdp;
}
// Remarque : pour de VRAIS mots de passe, utiliser random_int() (sécurité cryptographique) au lieu de rand().
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Mots de passe</title>
    <style>
        td { padding: 4px 12px; font-family: monospace; font-size: 1.2em; }
        .ligne0 { background: #eee; }
        .ligne1 { background: #cde; }
    </style>
</head>
<body>
    <h1>Mots de passe</h1>
    <table>
        <?php foreach ($mots_de_passe as $index => $mdp) : ?>
            <tr class="ligne<?= $index % 2 ?>">
                <td><?= $mdp ?></td>
                <td><?= preg_match_all('/[0-9]/', $mdp) ?> chiffre(s)</td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>

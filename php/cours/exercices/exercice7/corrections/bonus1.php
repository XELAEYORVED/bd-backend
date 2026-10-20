<?php
// CORRECTION : Exercice 7, bonus 1 (Calculatrice par URL)
$erreur = '';
$resultat = null;
$symboles = ['add' => '+', 'sub' => '−', 'mul' => '×', 'div' => '÷'];

if (!isset($_GET['a'], $_GET['b'], $_GET['op'])) {
    $erreur = 'Paramètres manquants';
} elseif (!is_numeric($_GET['a']) || !is_numeric($_GET['b'])) {
    $erreur = 'a et b doivent être des nombres';
} elseif (!isset($symboles[$_GET['op']])) {
    $erreur = 'Opération inconnue';
} else {
    $a = (float) $_GET['a'];
    $b = (float) $_GET['b'];
    $op = $_GET['op'];

    if ($op === 'div' && $b == 0) {
        $erreur = 'Division par zéro impossible';
    } else {
        $resultat = match ($op) {
            'add' => $a + $b,
            'sub' => $a - $b,
            'mul' => $a * $b,
            'div' => $a / $b,
        };
    }
}

$exemples = [
    'a=12&b=4&op=add', 'a=12&b=4&op=sub', 'a=12&b=4&op=mul', 'a=12&b=4&op=div',
    'a=12&op=add', 'a=douze&b=4&op=add', 'a=12&b=4&op=pow', 'a=12&b=0&op=div',
];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Calculatrice</title>
</head>
<body>
    <h1>Calculatrice</h1>
    <?php if ($erreur) : ?>
        <p style="color:red"><?= $erreur ?></p>
    <?php else : ?>
        <p><?= $a ?> <?= $symboles[$op] ?> <?= $b ?> = <strong><?= round($resultat, 4) ?></strong></p>
    <?php endif; ?>

    <h2>Exemples</h2>
    <ul>
        <?php foreach ($exemples as $query) : ?>
            <li><a href="?<?= htmlspecialchars($query) ?>"><?= htmlspecialchars($query) ?></a></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>

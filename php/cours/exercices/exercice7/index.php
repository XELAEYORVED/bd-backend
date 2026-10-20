<?php
/*
 * EXERCICE 7 : Paramètres GET (pagination circulaire)
 * ===========================================================================
 * (Énoncé reconstitué d'après la solution : compare avec le syllabus sur l'eCampus.)
 *
 * OBJECTIF
 *   Lire un paramètre dans l'URL, le sécuriser et adapter la page en conséquence.
 *
 * CONSIGNES
 *   1. La page reçoit un paramètre GET page : index.php?page=2
 *      Sans paramètre, on affiche la page 1.
 *   2. Afficher le titre « Page X/3 ».
 *   3. Menu : Page précédente | Page 1 | Page 2 | Page 3 | Page suivante.
 *      La navigation est circulaire : après la 3, la suivante est la 1 ;
 *      avant la 1, la précédente est la 3.
 *   4. Couleur du texte selon la page : 1 = rouge, 2 = bleu, 3 = vert.
 *   5. Sécurité : toute valeur invalide (0, -15, 88, « abc »...) redirige
 *      vers index.php?page=1.
 *
 * NOTIONS
 *   - $_GET['page'] : TOUJOURS une chaîne (ou absent) => isset() puis (int)
 *   - (int) 'abc' vaut 0 ; (int) '2xyz' vaut 2
 *   - Modulo pour boucler : $page % 3 + 1  donne 1->2, 2->3, 3->1
 *   - match ($x) { 1 => 'red', 2 => 'blue', ... } : comparaison stricte, renvoie une valeur
 *   - <?= $x ?> : raccourci de <?php echo $x; ?>
 *
 * PIÈGES
 *   - Lire $_GET['page'] sans isset() : « Warning: Undefined array key "page" ».
 *   - Faire confiance à l'URL : l'utilisateur peut y écrire n'importe quoi.
 *
 * BONUS : bonus1.php, bonus2.php (corrections dans corrections/)
 */

//numéro de page par défaut, au cas où absence de GET
$page = 1;
//récupération du paramètre GET s'il existe et conversion (int) pour le sécuriser
if (isset($_GET['page'])) $page = (int) $_GET['page'];

// Page hors limites (88, -15, 0, "abc"...) : redirection vers la page 1
if ($page < 1 || $page > 3) {
    header('Location:index.php?page=1');
    exit();
}

// Navigation circulaire : 1→2→3→1 et 3→2→1→3
$suivante = $page % 3 + 1;
$precedente = ($page + 1) % 3 + 1;

$couleur = match ($page) {
    1 => 'red',
    2 => 'blue',
    3 => 'green',
};
?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Paramètres GET</title>
    <style>
        body, a { color: <?= $couleur ?>; }
    </style>
</head>
<body>
    <h1>Page <?php echo $page; ?>/3</h1>
    <nav>
        <ul>
            <li><a href="index.php?page=<?= $precedente ?>">Page précédente</a></li>
            <li><a href="index.php?page=1">Page 1</a></li>
            <li><a href="index.php?page=2">Page 2</a></li>
            <li><a href="index.php?page=3">Page 3</a></li>
            <li><a href="index.php?page=<?= $suivante ?>">Page suivante</a></li>
        </ul>
    </nav>
</body>
</html>

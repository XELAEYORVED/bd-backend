<?php
// CORRECTION : Exercice 7, bonus 2 (Liste et fiche détail)
$films = [
    1 => ['titre' => 'Inception',        'annee' => 2010, 'genre' => 'SF',        'resume' => 'Des voleurs entrent dans les rêves.'],
    2 => ['titre' => 'Le Roi Lion',      'annee' => 1994, 'genre' => 'Animation', 'resume' => 'Un lionceau doit reprendre sa place.'],
    3 => ['titre' => 'Interstellar',     'annee' => 2014, 'genre' => 'SF',        'resume' => 'Un voyage au-delà de notre galaxie.'],
    4 => ['titre' => 'Le Voyage de Chihiro', 'annee' => 2001, 'genre' => 'Animation', 'resume' => 'Une fillette dans le monde des esprits.'],
    5 => ['titre' => 'Intouchables',     'annee' => 2011, 'genre' => 'Comédie',   'resume' => 'Une amitié improbable.'],
];
$genres = ['SF', 'Animation', 'Comédie'];

$film = null;
$introuvable = false;
if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];
    if (isset($films[$id])) {
        $film = $films[$id];
    } else {
        $introuvable = true;
        http_response_code(404); // AVANT le HTML
    }
}

// Filtre : on ne garde que les films du genre demandé
$genre_actif = $_GET['genre'] ?? '';
$liste = $films;
if ($genre_actif !== '') {
    $liste = [];
    foreach ($films as $id_film => $f) {
        if ($f['genre'] === $genre_actif) {
            $liste[$id_film] = $f; // on garde la clé = l'id, pour les liens
        }
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Films</title>
    <style>.actif { font-weight: bold; }</style>
</head>
<body>
<?php if ($film) : ?>
    <h1><?= htmlspecialchars($film['titre']) ?> (<?= $film['annee'] ?>)</h1>
    <p>Genre : <?= htmlspecialchars($film['genre']) ?></p>
    <p><?= htmlspecialchars($film['resume']) ?></p>
    <p><a href="bonus2.php">Retour à la liste</a></p>
<?php elseif ($introuvable) : ?>
    <h1>Film introuvable</h1>
    <p><a href="bonus2.php">Retour à la liste</a></p>
<?php else : ?>
    <h1>Films</h1>
    <nav>
        <a href="bonus2.php" <?= $genre_actif === '' ? 'class="actif"' : '' ?>>Tous</a>
        <?php foreach ($genres as $g) : ?>
            | <a href="bonus2.php?genre=<?= urlencode($g) ?>" <?= $genre_actif === $g ? 'class="actif"' : '' ?>><?= $g ?></a>
        <?php endforeach; ?>
    </nav>
    <ul>
        <?php foreach ($liste as $id_film => $f) : ?>
            <li><a href="bonus2.php?id=<?= $id_film ?>"><?= htmlspecialchars($f['titre']) ?></a></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
</body>
</html>

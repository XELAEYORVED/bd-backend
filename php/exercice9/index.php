<?php
$fruits = ['pomme', 'poire', 'banane', 'fraise', 'cerise'];
$titres = ['Monsieur', 'Madame'];

$nom = '';
$annee = '';
$fruit = '';
$titre = '';
$erreur = [];
$form_ok = false;

if (isset($_POST['submitted'])) {
    // 1. Nom : suppression des balises HTML + espaces superflus
    $nom = trim(strip_tags($_POST['nom'] ?? ''));
    if ($nom === '') $erreur['nom'] = true;

    // 2. Année : conversion forcée en entier (bloque toute injection) puis bornes
    $annee = (int) ($_POST['annee'] ?? 0);
    if ($annee < 1900 || $annee > (int) date('Y')) $erreur['annee'] = true; // couvre aussi le champ vide (→ 0)

    // 3. Fruit : liste blanche
    $fruit = $_POST['fruit'] ?? '';
    if (!in_array($fruit, $fruits, true)) {
        $erreur['fruit'] = true;
        $fruit = '';
    }

    // 4. Titre : seules 2 valeurs permises (pas de valeur vide)
    $titre = $_POST['titre'] ?? '';
    if (!in_array($titre, $titres, true)) {
        $erreur['titre'] = true;
        $titre = '';
    }

    // 5. Conditions d'utilisation : la case doit être cochée
    if (($_POST['conditions'] ?? '') !== 'ok') $erreur['conditions'] = true;

    $form_ok = empty($erreur);
}
?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Formulaire sécurisé</title>
    <style>
        .error, .error input { color: red; }
    </style>
</head>
<body>
    <h1>Formulaire sécurisé</h1>
<?php if ($form_ok) : ?>
    <p>Bonjour <?= $titre ?> <?= htmlspecialchars($nom) ?>, né(e) en <?= $annee ?>,
        votre fruit préféré est : <?= $fruit ?>.</p>
<?php else : ?>
    <form action="index.php" method="post">
        <p class="<?= isset($erreur['nom']) ? 'error' : '' ?>">
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" value="<?= htmlspecialchars($nom) ?>">
        </p>
        <p class="<?= isset($erreur['annee']) ? 'error' : '' ?>">
            <label for="annee">Année de naissance :</label>
            <input type="number" id="annee" name="annee" min="1900" max="<?= date('Y') ?>"
                value="<?= $annee ?: '' ?>">
        </p>
        <p class="<?= isset($erreur['fruit']) ? 'error' : '' ?>">
            <label for="fruit">Fruit préféré :</label>
            <select id="fruit" name="fruit">
                <option value="">-- choisir --</option>
                <?php foreach ($fruits as $f) : ?>
                    <option value="<?= $f ?>" <?= $f === $fruit ? 'selected' : '' ?>><?= ucfirst($f) ?></option>
                <?php endforeach; ?>
            </select>
        </p>
        <p class="<?= isset($erreur['titre']) ? 'error' : '' ?>">
            <?php foreach ($titres as $t) : ?>
                <label><input type="radio" name="titre" value="<?= $t ?>"
                    <?= $t === $titre ? 'checked' : '' ?>> <?= $t ?></label>
            <?php endforeach; ?>
        </p>
        <p class="<?= isset($erreur['conditions']) ? 'error' : '' ?>">
            <!-- Jamais cochée par défaut : action humaine obligatoire -->
            <label><input type="checkbox" name="conditions" value="ok">
                J'ai lu et j'approuve les conditions d'utilisation.</label>
        </p>
        <input type="submit" name="submitted" value="Envoyer">
    </form>
<?php endif; ?>
</body>
</html>

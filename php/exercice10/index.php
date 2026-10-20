<?php
require_once '_livraisons.php';
?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Livraisons</title>
    <style>
        body { font-family: Calibri, Arial, sans-serif; }
        h1 { color: teal; }
        section { display: flex; flex-wrap: wrap; gap: 1em; }
        article { background: #e6e6f8; padding: .6em 1em; }
        h2 { color: purple; font-size: 1.1em; margin: 0; }
        p { margin: 0; }
        .livre { color: green; }
        .retard { color: red; }
    </style>
</head>
<body>
    <h1>Livraisons</h1>
    <section>
        <?php foreach ($livraisons as $livraison) : ?>
            <article>
                <h2><?= $livraison->reference ?> — <?= htmlspecialchars($livraison->titre) ?></h2>
                <p>Commandé le <?= $livraison->dateCommande->format('d/m/Y') ?></p>
                <?php if ($livraison->estLivree()) : ?>
                    <p class="livre">Livré le <?= $livraison->dateLivraison->format('d/m/Y') ?>
                        <?php if ($livraison->retard()) : ?>
                            <span class="retard">(+<?= $livraison->joursRetard() ?>j)</span>
                        <?php endif; ?>
                    </p>
                <?php else : ?>
                    <p class="<?= $livraison->retard() ? 'retard' : '' ?>">
                        Livraison estimée le <?= $livraison->dateEstimee->format('d/m/Y') ?></p>
                <?php endif; ?>
            </article>
        <?php endforeach; ?>
    </section>
</body>
</html>

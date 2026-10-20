<?php
// CORRECTION : Exercice 2, bonus 1 (Menu avec lien actif)
$page_courante = 'contact';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Lien actif</title>
    <style>
        .actif { font-weight: bold; color: red; }
    </style>
</head>
<body>
    <?php
    include '../_header.php';   // le fragment est dans le dossier parent
    include '_nav_actif.php';   // voit $page_courante
    ?>
    <h2>Contact</h2>
    <?php include '../_footer.php'; ?>
</body>
</html>

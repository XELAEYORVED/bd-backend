<?php
// CORRECTION : Exercice 1, bonus 2 (Apostrophes, guillemets et <?= ?>)
$langage = 'PHP';
$version = 8;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Apostrophes et guillemets</title>
</head>
<body>
    <?php
    // a. apostrophes + concaténation ; l'apostrophe de « J'apprends » est échappée
    echo '<p>J\'apprends ' . $langage . ' ' . $version . '</p>';
    // b. guillemets : les variables sont remplacées par leur valeur
    echo "<p>J'apprends $langage $version</p>";
    ?>
    <!-- c. dans le HTML, avec le raccourci de echo -->
    <p>J'apprends <?= $langage ?> <?= $version ?></p>

    <?php
    // 3. entre apostrophes, $langage n'est PAS interprété
    echo '<p>La variable $langage</p>';
    // 4. apostrophes à l'extérieur : les guillemets de l'attribut HTML passent sans échappement
    echo '<p><a href="https://www.php.net">php.net</a></p>';
    ?>
</body>
</html>

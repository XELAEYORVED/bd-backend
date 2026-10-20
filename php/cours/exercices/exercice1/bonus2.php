<?php
/*
 * EXERCICE 1, BONUS 2 : Apostrophes, guillemets et <?= ?>
 * ===========================================================================
 * OBJECTIF : comprendre la différence entre '...' et "..." en PHP.
 *
 * CONSIGNES
 *   1. Déclarer $langage = 'PHP'; et $version = 8;
 *   2. Afficher trois fois la phrase « J'apprends PHP 8 » dans un <p> :
 *        a. avec des apostrophes et la concaténation ;
 *        b. avec des guillemets et les variables DIRECTEMENT dans la chaîne ;
 *        c. en dehors des balises PHP, dans le HTML, avec <?= ?>.
 *   3. Afficher en plus, avec des apostrophes : <p>La variable $langage</p>
 *      (on doit voir le texte « $langage » et non « PHP »).
 *   4. Générer avec echo un lien <a href="https://www.php.net">php.net</a>
 *      (attention aux guillemets de l'attribut href).
 *
 * AIDE
 *   - '...' : rien n'est interprété (sauf \' et \\)
 *   - "..." : les $variables et \n sont interprétés ; "{$tab['cle']}" pour un tableau
 *   - Dans une chaîne entre apostrophes, une apostrophe s'échappe : 'J\'apprends'
 *
 * Correction : corrections/bonus2.php
 */
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Apostrophes et guillemets</title>
</head>
<body>
    <?php
    // TODO
    ?>
</body>
</html>

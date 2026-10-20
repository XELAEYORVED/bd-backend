<?php
/*
 * EXERCICE 6 : Fonctions (Web Atomic Pickles)
 * ===========================================================================
 * (Énoncé reconstitué d'après la solution : compare avec le syllabus sur l'eCampus.)
 *
 * OBJECTIF
 *   Découper le code en fonctions réutilisables, rangées dans un fichier séparé,
 *   et manipuler un tableau de tableaux associatifs.
 *
 * DONNÉES FOURNIES
 *   _team_members.php : $team_members, un tableau de membres ; chaque membre
 *   est un tableau associatif ['first_name' => ..., 'last_name' => ..., 'job_title' => ...]
 *   img/ : les avatars, nommés Prenom_Nom.png
 *
 * CONSIGNES
 *   1. Dans _functions.php (avec declare(strict_types=1);), écrire des fonctions TYPÉES :
 *        is_developer(string $job_title): bool
 *            => true si l'intitulé se termine par « Developer »
 *        member_picture_url(array $member): string
 *            => « img/Prenom_Nom.png »
 *        show_member(array $member): void
 *            => affiche la vignette HTML : <div><img><h3>nom</h3><h4>poste</h4></div>
 *   2. Dans index.php, inclure les deux fichiers (require_once) puis afficher :
 *        - la section « Our Team: »   : les membres qui NE sont PAS développeurs
 *        - la section « Developers: » : les développeurs
 *   3. Échapper toutes les données affichées (attention au « & » de « UI & Graphic designer »).
 *
 * NOTIONS
 *   - function nom(type $param): typeRetour { return ...; }
 *   - void = ne renvoie rien ; bool, string, int, float, array
 *   - Tableau associatif : $member['first_name']
 *   - str_ends_with($chaine, $fin), str_starts_with, str_contains (PHP 8)
 *   - htmlspecialchars($texte) : protège contre l'injection HTML (XSS)
 *
 * PIÈGES
 *   - Appeler une fonction avant d'avoir inclus le fichier qui la déclare.
 *   - Une fonction ne voit PAS les variables extérieures : passer en paramètre.
 *
 * BONUS : bonus1.php, bonus2.php (corrections dans corrections/)
 */

require_once '_team_members.php';
require_once '_functions.php';
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Web Atomic Pickles</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 2em; }
        h1 span { background: #ff5a00; color: #fff; padding: 0 .3em; }
        h2 { color: #ff5a00; font-size: 1em; }
        section { display: flex; flex-wrap: wrap; gap: 1.5em; }
        section div { width: 120px; }
        section img { width: 90px; height: 90px; background: #eee; border-radius: 8px; }
        h3 { font-size: .8em; margin: .3em 0 0; }
        h4 { font-size: .7em; margin: 0; color: #777; }
        footer { margin-top: 2em; height: 40px; background: linear-gradient(#ff8a00, #ff5a00); }
    </style>
</head>
<body>
    <h1><span>Web Atomic Pickles:</span> an explosive web development agency</h1>

    <h2>Our Team:</h2>
    <section>
        <?php
        foreach ($team_members as $member) {
            if (!is_developer($member['job_title'])) {
                show_member($member);
            }
        }
        ?>
    </section>

    <h2>Developers:</h2>
    <section>
        <?php
        foreach ($team_members as $member) {
            if (is_developer($member['job_title'])) {
                show_member($member);
            }
        }
        ?>
    </section>

    <footer></footer>
</body>
</html>

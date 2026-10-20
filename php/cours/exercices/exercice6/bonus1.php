<?php
/*
 * EXERCICE 6, BONUS 1 : Statistiques de l'équipe
 * ===========================================================================
 * OBJECTIF : écrire des fonctions qui RENVOIENT des tableaux, à partir de $team_members.
 *
 * CONSIGNES
 *   1. Inclure _team_members.php (require_once).
 *   2. Écrire (dans cette page ou dans un fichier _stats.php) les fonctions :
 *        initials(array $member): string
 *            => « M.B. » pour Marvin Brown
 *        count_by_job(array $members): array
 *            => ['Manager' => 1, 'Back-end Developer' => 4, ...]
 *        members_with_job(array $members, string $job): array
 *            => uniquement les membres qui ont exactement ce poste
 *   3. Afficher un tableau « Poste | Nombre », trié du poste le plus
 *      représenté au moins représenté.
 *   4. Afficher la liste des initiales de TOUS les membres, séparées par des virgules.
 *   5. Afficher les noms complets des « Back-end Developer ».
 *   6. Échapper les données (htmlspecialchars), le « & » est toujours là !
 *
 * AIDE
 *   - $chaine[0] donne la première lettre (attention aux accents, voir mb_substr)
 *   - $compteur[$job] = ($compteur[$job] ?? 0) + 1;
 *   - arsort($tab) : trie par VALEUR décroissante en GARDANT les clés
 *   - implode(', ', $tab) : colle les éléments d'un tableau en une chaîne
 *
 * Correction : corrections/bonus1.php
 */
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Statistiques de l'équipe</title>
</head>
<body>
    <?php
    // TODO
    ?>
</body>
</html>

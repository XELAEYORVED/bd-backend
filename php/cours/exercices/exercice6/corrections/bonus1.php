<?php
// CORRECTION : Exercice 6, bonus 1 (Statistiques de l'équipe)
declare(strict_types=1);
require_once '../_team_members.php';

function initials(array $member): string
{
    // mb_substr gère correctement les lettres accentuées (É, Ç...), contrairement à $chaine[0]
    return mb_substr($member['first_name'], 0, 1) . '.' . mb_substr($member['last_name'], 0, 1) . '.';
}

function count_by_job(array $members): array
{
    $compteur = [];
    foreach ($members as $member) {
        $job = $member['job_title'];
        $compteur[$job] = ($compteur[$job] ?? 0) + 1;
    }
    arsort($compteur);
    return $compteur;
}

function members_with_job(array $members, string $job): array
{
    $resultat = [];
    foreach ($members as $member) {
        if ($member['job_title'] === $job) {
            $resultat[] = $member;
        }
    }
    return $resultat;
}

$initiales = [];
foreach ($team_members as $member) {
    $initiales[] = initials($member);
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Statistiques de l'équipe</title>
    <style>
        td, th { border: 1px solid #333; padding: 4px 8px; }
    </style>
</head>
<body>
    <h1>Statistiques de l'équipe</h1>

    <h2>Postes</h2>
    <table>
        <tr><th>Poste</th><th>Nombre</th></tr>
        <?php foreach (count_by_job($team_members) as $job => $nb) : ?>
            <tr><td><?= htmlspecialchars($job) ?></td><td><?= $nb ?></td></tr>
        <?php endforeach; ?>
    </table>

    <h2>Initiales</h2>
    <p><?= htmlspecialchars(implode(', ', $initiales)) ?></p>

    <h2>Back-end Developers</h2>
    <ul>
        <?php foreach (members_with_job($team_members, 'Back-end Developer') as $member) : ?>
            <li><?= htmlspecialchars($member['first_name'] . ' ' . $member['last_name']) ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>

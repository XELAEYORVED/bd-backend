<?php
declare(strict_types=1);

/**
 * Renvoie true si l'intitulé de poste se termine par « Developer ».
 */
function is_developer(string $job_title): bool
{
    return str_ends_with($job_title, 'Developer');
}

/**
 * Renvoie l'URL de l'avatar d'un membre, ex. « img/Marvin_Brown.png ».
 */
function member_picture_url(array $member): string
{
    return 'img/' . $member['first_name'] . '_' . $member['last_name'] . '.png';
}

/**
 * Affiche directement la vignette HTML d'un membre.
 * htmlspecialchars() neutralise les caractères spéciaux (ex. le « & » de « UI & Graphic designer »).
 */
function show_member(array $member): void
{
    $name = htmlspecialchars($member['first_name'] . ' ' . $member['last_name']);
    $job = htmlspecialchars($member['job_title']);
    $picture = htmlspecialchars(member_picture_url($member));
    echo '<div>',
        '<img src="', $picture, '" alt="">',
        '<h3>', $name, '</h3>',
        '<h4>', $job, '</h4>',
        '</div>';
}

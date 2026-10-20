<?php
// CORRECTION : révision 07 (Chaînes de caractères). Les rappels sont dans ../07_chaines.php
declare(strict_types=1);
require_once __DIR__ . '/../_test.php';

// ---------------------------------------------------------------------------
// EXERCICE 1 : Renvoie le texte en majuscules suivi d'un '!'.
// ---------------------------------------------------------------------------
function crier(string $texte): string
{
    return strtoupper($texte) . '!';
}

titre('Exercice 1');
test('bonjour => BONJOUR!', crier('bonjour'), 'BONJOUR!');

// ---------------------------------------------------------------------------
// EXERCICE 2 : Renvoie 'Bonjour Prénom !' avec le prénom bien écrit
//   (première lettre en majuscule, le reste en minuscules).
// ---------------------------------------------------------------------------
function bonjour(string $prenom): string
{
    return 'Bonjour ' . ucfirst(strtolower($prenom)) . ' !';
}

titre('Exercice 2');
test('aLeX => Bonjour Alex !', bonjour('aLeX'), 'Bonjour Alex !');

// ---------------------------------------------------------------------------
// EXERCICE 3 : Nettoie une adresse e-mail saisie par un utilisateur :
//   enlève les espaces autour et met en minuscules.
// ---------------------------------------------------------------------------
function nettoyer_email(string $email): string
{
    return strtolower(trim($email));
}

titre('Exercice 3');
test('  Alex@Mail.BE  ', nettoyer_email('  Alex@Mail.BE  '), 'alex@mail.be');

// ---------------------------------------------------------------------------
// EXERCICE 4 : Renvoie true si la phrase contient le mot (en ignorant les
//   majuscules).
// ---------------------------------------------------------------------------
function contient(string $phrase, string $mot): bool
{
    return str_contains(strtolower($phrase), strtolower($mot));
}

titre('Exercice 4');
test('PHP dans J\'aime PHP', contient("J'aime PHP", 'php'), true);
test('java absent', contient("J'aime PHP", 'java'), false);

// ---------------------------------------------------------------------------
// EXERCICE 5 : Remplace le mot 'nul' par '***'.
// ---------------------------------------------------------------------------
function censurer(string $texte): string
{
    return str_replace('nul', '***', $texte);
}

titre('Exercice 5');
test('censure', censurer('ce film est nul'), 'ce film est ***');

// ---------------------------------------------------------------------------
// EXERCICE 6 : Renvoie l'extension d'un nom de fichier : 'photo.jpg' =>
//   'jpg'. Astuce : explode('.', ...) puis le dernier élément (ou
//   pathinfo($f, PATHINFO_EXTENSION)).
// ---------------------------------------------------------------------------
function extension(string $fichier): string
{
    $morceaux = explode('.', $fichier);
    return $morceaux[count($morceaux) - 1];
}

titre('Exercice 6');
test('photo.jpg', extension('photo.jpg'), 'jpg');
test('archive.tar.gz', extension('archive.tar.gz'), 'gz');

// ---------------------------------------------------------------------------
// EXERCICE 7 : Compte les mots d'une phrase (séparés par des espaces).
//   Pense à trim().
// ---------------------------------------------------------------------------
function nb_mots(string $phrase): int
{
    return count(explode(' ', trim($phrase)));
}

titre('Exercice 7');
test('3 mots', nb_mots('PHP est cool'), 3);
test('espaces autour', nb_mots('  bonjour le monde  '), 3);

// ---------------------------------------------------------------------------
// EXERCICE 8 : Si le texte dépasse $max caractères, garde les $max premiers
//   et ajoute '...'. Sinon renvoie le texte tel quel.
// ---------------------------------------------------------------------------
function tronquer(string $texte, int $max): string
{
    if (strlen($texte) <= $max) {
        return $texte;
    }
    return substr($texte, 0, $max) . '...';
}

titre('Exercice 8');
test('long', tronquer('Bonjour tout le monde', 7), 'Bonjour...');
test('court', tronquer('Salut', 10), 'Salut');

// ---------------------------------------------------------------------------
// EXERCICE 9 : Renvoie true si le nom de fichier est une image : il se
//   termine par '.jpg', '.png' ou '.gif'.
// ---------------------------------------------------------------------------
function est_image(string $fichier): bool
{
    return str_ends_with($fichier, '.jpg') || str_ends_with($fichier, '.png') || str_ends_with($fichier, '.gif');
}

titre('Exercice 9');
test('chat.png', est_image('chat.png'), true);
test('cv.pdf', est_image('cv.pdf'), false);

<?php
// CORRECTION : révision 12 (Trouve et corrige les bugs). Les rappels sont dans ../12_trouver_les_bugs.php
declare(strict_types=1);
require_once __DIR__ . '/../_test.php';

// ---------------------------------------------------------------------------
// EXERCICE 1 : Doit renvoyer true si l'âge est supérieur ou égal à 18.
// ---------------------------------------------------------------------------
function peut_voter(int $age): bool
{
    return $age >= 18; // BUG : > au lieu de >= (18 ans était refusé)
}

titre('Exercice 1');
test('18 ans peut voter', peut_voter(18), true);
test('17 ans ne peut pas', peut_voter(17), false);

// ---------------------------------------------------------------------------
// EXERCICE 2 : Doit renvoyer la somme des éléments.
// ---------------------------------------------------------------------------
function total(array $t): int
{
    $somme = 0;
    foreach ($t as $n) {
        $somme += $n;
    }
    return $somme;
    // BUG : $somme = 0 était DANS la boucle, donc remis à zéro à chaque tour
}

titre('Exercice 2');
test('[1, 2, 3] => 6', total([1, 2, 3]), 6);

// ---------------------------------------------------------------------------
// EXERCICE 3 : Doit renvoyer 'Bonjour Alex'.
// ---------------------------------------------------------------------------
function dire_bonjour(string $prenom): string
{
    return "Bonjour $prenom"; // BUG : entre apostrophes, $prenom n'est pas remplacé (ou : 'Bonjour ' . $prenom)
}

titre('Exercice 3');
test('Alex', dire_bonjour('Alex'), 'Bonjour Alex');

// ---------------------------------------------------------------------------
// EXERCICE 4 : Doit renvoyer les nombres de 1 à 5.
// ---------------------------------------------------------------------------
function un_a_cinq(): array
{
    $t = [];
    for ($i = 1; $i <= 5; $i++) {
        $t[] = $i;
    }
    return $t;
    // BUG : $i < 5 s'arrêtait à 4 (erreur « off by one »)
}

titre('Exercice 4');
test('[1, 2, 3, 4, 5]', un_a_cinq(), [1, 2, 3, 4, 5]);

// ---------------------------------------------------------------------------
// EXERCICE 5 : Doit renvoyer le tableau trié.
// ---------------------------------------------------------------------------
function tri(array $t): array
{
    sort($t);
    return $t;
    // BUG : sort() renvoie true, pas le tableau : il trie $t SUR PLACE
}

titre('Exercice 5');
test('[3, 1, 2]', tri([3, 1, 2]), [1, 2, 3]);

// ---------------------------------------------------------------------------
// EXERCICE 6 : Doit renvoyer 'admin' pour le rôle 1, 'membre' pour les
//   autres.
// ---------------------------------------------------------------------------
function role(int $code): string
{
    if ($code === 1) {
        return 'admin';
    }
    return 'membre';
    // BUG : = (affectation) au lieu de === (comparaison) : la condition était toujours vraie
}

titre('Exercice 6');
test('1 => admin', role(1), 'admin');
test('2 => membre', role(2), 'membre');

// ---------------------------------------------------------------------------
// EXERCICE 7 : Doit renvoyer 'B' pour une note de 15 (A si >= 16, B si >=
//   14, C si >= 10, sinon D).
// ---------------------------------------------------------------------------
function lettre(int $note): string
{
    if ($note >= 16) {
        return 'A';
    } elseif ($note >= 14) {
        return 'B';
    } elseif ($note >= 10) {
        return 'C';
    }
    return 'D';
    // BUG : les conditions étaient dans le mauvais ordre (>= 10 testé en premier attrapait tout)
}

titre('Exercice 7');
test('18 => A', lettre(18), 'A');
test('15 => B', lettre(15), 'B');
test('11 => C', lettre(11), 'C');
test('5 => D', lettre(5), 'D');

// ---------------------------------------------------------------------------
// EXERCICE 8 : Doit compter les mots de plus de 3 lettres.
// ---------------------------------------------------------------------------
function mots_longs(array $mots): int
{
    $n = 0;
    foreach ($mots as $mot) {
        if (strlen($mot) > 3) {
            $n++;
        }
    }
    return $n;
    // BUG : le return était DANS la boucle, la fonction s'arrêtait au premier tour
}

titre('Exercice 8');
test('[le, chat, dort, ici]', mots_longs(['le', 'chat', 'dort', 'ici']), 2);

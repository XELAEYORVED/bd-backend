<?php
/*
 * RÉVISION 12 : Trouve et corrige les bugs
 * ======================================================================
 * Chaque fonction ci-dessous contient UNE erreur classique. Le code « tourne »,
 * mais le résultat est faux. Trouve l'erreur, corrige-la, et recharge :
 * le test doit passer au vert. Écris en commentaire ce qui n'allait pas.
 *
 * Complète chaque fonction (remplace les // TODO) puis recharge la page.
 * Chaque ❌ doit devenir ✅. Correction : corrections/12_trouver_les_bugs.php
 */
declare(strict_types=1);
require_once __DIR__ . '/_test.php';

// ---------------------------------------------------------------------------
// EXERCICE 1 : Doit renvoyer true si l'âge est supérieur ou égal à 18.
// ---------------------------------------------------------------------------
function peut_voter(int $age): bool
{
    return $age > 18;
}

titre('Exercice 1');
test('18 ans peut voter', peut_voter(18), true);
test('17 ans ne peut pas', peut_voter(17), false);

// ---------------------------------------------------------------------------
// EXERCICE 2 : Doit renvoyer la somme des éléments.
// ---------------------------------------------------------------------------
function total(array $t): int
{
    foreach ($t as $n) {
        $somme = 0;
        $somme += $n;
    }
    return $somme;
}

titre('Exercice 2');
test('[1, 2, 3] => 6', total([1, 2, 3]), 6);

// ---------------------------------------------------------------------------
// EXERCICE 3 : Doit renvoyer 'Bonjour Alex'.
// ---------------------------------------------------------------------------
function dire_bonjour(string $prenom): string
{
    return 'Bonjour $prenom';
}

titre('Exercice 3');
test('Alex', dire_bonjour('Alex'), 'Bonjour Alex');

// ---------------------------------------------------------------------------
// EXERCICE 4 : Doit renvoyer les nombres de 1 à 5.
// ---------------------------------------------------------------------------
function un_a_cinq(): array
{
    $t = [];
    for ($i = 1; $i < 5; $i++) {
        $t[] = $i;
    }
    return $t;
}

titre('Exercice 4');
test('[1, 2, 3, 4, 5]', un_a_cinq(), [1, 2, 3, 4, 5]);

// ---------------------------------------------------------------------------
// EXERCICE 5 : Doit renvoyer le tableau trié.
// ---------------------------------------------------------------------------
function tri(array $t) // (pas de type de retour ici, sinon PHP planterait au lieu de renvoyer un résultat faux)
{
    $t = sort($t);
    return $t;
}

titre('Exercice 5');
test('[3, 1, 2]', tri([3, 1, 2]), [1, 2, 3]);

// ---------------------------------------------------------------------------
// EXERCICE 6 : Doit renvoyer 'admin' pour le rôle 1, 'membre' pour les
//   autres.
// ---------------------------------------------------------------------------
function role(int $code): string
{
    if ($code = 1) {
        return 'admin';
    }
    return 'membre';
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
    if ($note >= 10) {
        return 'C';
    } elseif ($note >= 14) {
        return 'B';
    } elseif ($note >= 16) {
        return 'A';
    }
    return 'D';
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
        return $n;
    }
}

titre('Exercice 8');
test('[le, chat, dort, ici]', mots_longs(['le', 'chat', 'dort', 'ici']), 2);

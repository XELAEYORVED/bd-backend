<?php
// CORRECTION : révision 04 (Boucles : for, while, foreach). Les rappels sont dans ../04_boucles.php
declare(strict_types=1);
require_once __DIR__ . '/../_test.php';

// ---------------------------------------------------------------------------
// EXERCICE 1 : Renvoie la chaîne '1 2 3 ... n' (nombres séparés par un
//   espace, pas d'espace à la fin). Astuce : construis un tableau puis
//   implode(' ', $tab), ou utilise trim().
// ---------------------------------------------------------------------------
function compter_jusqua(int $n): string
{
    $nombres = [];
    for ($i = 1; $i <= $n; $i++) {
        $nombres[] = $i;
    }
    return implode(' ', $nombres);
}

titre('Exercice 1');
test('5 => 1 2 3 4 5', compter_jusqua(5), '1 2 3 4 5');
test('1 => 1', compter_jusqua(1), '1');

// ---------------------------------------------------------------------------
// EXERCICE 2 : Compte à rebours : renvoie 'n ... 3 2 1 Décollage !' (boucle
//   qui DESCEND, $i--).
// ---------------------------------------------------------------------------
function compte_a_rebours(int $n): string
{
    $texte = '';
    for ($i = $n; $i >= 1; $i--) {
        $texte .= $i . ' ';
    }
    return $texte . 'Décollage !';
}

titre('Exercice 2');
test('3', compte_a_rebours(3), '3 2 1 Décollage !');
test('5', compte_a_rebours(5), '5 4 3 2 1 Décollage !');

// ---------------------------------------------------------------------------
// EXERCICE 3 : Renvoie la somme 1 + 2 + ... + n.
// ---------------------------------------------------------------------------
function somme(int $n): int
{
    $total = 0;
    for ($i = 1; $i <= $n; $i++) {
        $total += $i;
    }
    return $total;
}

titre('Exercice 3');
test('somme(4) = 10', somme(4), 10);
test('somme(10) = 55', somme(10), 55);

// ---------------------------------------------------------------------------
// EXERCICE 4 : Renvoie la table de multiplication de $n : un tableau [n x
//   1, n x 2, ..., n x 10].
// ---------------------------------------------------------------------------
function table_de(int $n): array
{
    $table = [];
    for ($i = 1; $i <= 10; $i++) {
        $table[] = $n * $i;
    }
    return $table;
}

titre('Exercice 4');
test('table de 3', table_de(3), [3, 6, 9, 12, 15, 18, 21, 24, 27, 30]);

// ---------------------------------------------------------------------------
// EXERCICE 5 : Renvoie les nombres pairs de 0 à $max inclus. Astuce : un
//   for qui avance de 2 en 2 ($i += 2).
// ---------------------------------------------------------------------------
function pairs_jusqua(int $max): array
{
    $pairs = [];
    for ($i = 0; $i <= $max; $i += 2) {
        $pairs[] = $i;
    }
    return $pairs;
}

titre('Exercice 5');
test('jusqu\'à 10', pairs_jusqua(10), [0, 2, 4, 6, 8, 10]);
test('jusqu\'à 5', pairs_jusqua(5), [0, 2, 4]);

// ---------------------------------------------------------------------------
// EXERCICE 6 : Répète un mot $n fois, SANS str_repeat().
// ---------------------------------------------------------------------------
function repeter(string $mot, int $n): string
{
    $resultat = '';
    for ($i = 0; $i < $n; $i++) {
        $resultat .= $mot;
    }
    return $resultat;
}

titre('Exercice 6');
test('ha x 3', repeter('ha', 3), 'hahaha');
test('x 0 => vide', repeter('ha', 0), '');

// ---------------------------------------------------------------------------
// EXERCICE 7 : Avec un WHILE : on place 100 € à 10 % d'intérêt par an.
//   Combien d'années faut-il pour atteindre (ou dépasser) $objectif euros ?
// ---------------------------------------------------------------------------
function annees_pour_atteindre(float $objectif): int
{
    $capital = 100;
    $annees = 0;
    while ($capital < $objectif) {
        $capital *= 1.10;
        $annees++;
    }
    return $annees;
}

titre('Exercice 7');
test('110 € => 1 an', annees_pour_atteindre(110), 1);
test('200 € => 8 ans', annees_pour_atteindre(200), 8);
test('50 € => 0 an', annees_pour_atteindre(50), 0);

// ---------------------------------------------------------------------------
// EXERCICE 8 : Avec un FOREACH : renvoie la somme des éléments d'un
//   tableau, SANS array_sum().
// ---------------------------------------------------------------------------
function somme_tableau(array $nombres): int
{
    $total = 0;
    foreach ($nombres as $n) {
        $total += $n;
    }
    return $total;
}

titre('Exercice 8');
test('[4, 8, 15, 16]', somme_tableau([4, 8, 15, 16]), 43);
test('[] => 0', somme_tableau([]), 0);

// ---------------------------------------------------------------------------
// EXERCICE 9 : Avec un FOREACH : compte combien de notes sont supérieures
//   ou égales à 10.
// ---------------------------------------------------------------------------
function nb_reussites(array $notes): int
{
    $compteur = 0;
    foreach ($notes as $note) {
        if ($note >= 10) {
            $compteur++;
        }
    }
    return $compteur;
}

titre('Exercice 9');
test('[12, 8, 10, 15, 4]', nb_reussites([12, 8, 10, 15, 4]), 3);

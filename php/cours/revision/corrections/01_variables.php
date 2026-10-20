<?php
// CORRECTION : révision 01 (Variables et opérateurs). Les rappels sont dans ../01_variables.php
declare(strict_types=1);
require_once __DIR__ . '/../_test.php';

// ---------------------------------------------------------------------------
// EXERCICE 1 : Renvoie l'aire d'un rectangle (largeur x longueur).
// ---------------------------------------------------------------------------
function aire_rectangle(float $largeur, float $longueur): float
{
    return $largeur * $longueur;
}

titre('Exercice 1');
test('3 x 4 = 12', aire_rectangle(3, 4), 12.0);
test('2.5 x 2 = 5', aire_rectangle(2.5, 2), 5.0);

// ---------------------------------------------------------------------------
// EXERCICE 2 : Renvoie le prix TVAC (TVA de 21 %), arrondi à 2 décimales.
// ---------------------------------------------------------------------------
function prix_tvac(float $prix_htva): float
{
    return round($prix_htva * 1.21, 2);
}

titre('Exercice 2');
test('100 => 121', prix_tvac(100), 121.0);
test('19.99 => 24.19', prix_tvac(19.99), 24.19);

// ---------------------------------------------------------------------------
// EXERCICE 3 : Renvoie la phrase « Je m'appelle <prénom> et j'ai <âge> ans
//   » (concaténation avec le point).
// ---------------------------------------------------------------------------
function presentation(string $prenom, int $age): string
{
    return 'Je m\'appelle ' . $prenom . ' et j\'ai ' . $age . ' ans';
}

titre('Exercice 3');
test('Alex, 20', presentation('Alex', 20), "Je m'appelle Alex et j'ai 20 ans");

// ---------------------------------------------------------------------------
// EXERCICE 4 : Renvoie le reste de la division de $a par $b.
// ---------------------------------------------------------------------------
function reste(int $a, int $b): int
{
    return $a % $b;
}

titre('Exercice 4');
test('17 % 5 = 2', reste(17, 5), 2);
test('10 % 2 = 0', reste(10, 2), 0);

// ---------------------------------------------------------------------------
// EXERCICE 5 : Renvoie la moyenne de trois notes.
// ---------------------------------------------------------------------------
function moyenne(float $a, float $b, float $c): float
{
    return ($a + $b + $c) / 3; // les parenthèses sont indispensables !
}

titre('Exercice 5');
test('12, 15, 18 => 15', moyenne(12, 15, 18), 15.0);
test('10, 10, 13 => 11', moyenne(10, 10, 13), 11.0);

// ---------------------------------------------------------------------------
// EXERCICE 6 : Convertit des euros en centimes (un entier). Piège : 19.99 *
//   100 ne vaut pas exactement 1999 en informatique, pense à round() avant
//   (int).
// ---------------------------------------------------------------------------
function en_centimes(float $euros): int
{
    return (int) round($euros * 100);
}

titre('Exercice 6');
test('2.5 => 250', en_centimes(2.5), 250);
test('19.99 => 1999', en_centimes(19.99), 1999);

// ---------------------------------------------------------------------------
// EXERCICE 7 : Renvoie la première lettre d'un prénom. Rappel : $chaine[0]
//   est le premier caractère.
// ---------------------------------------------------------------------------
function initiale(string $prenom): string
{
    return $prenom[0];
}

titre('Exercice 7');
test('Alex => A', initiale('Alex'), 'A');

// ---------------------------------------------------------------------------
// EXERCICE 8 : Renvoie le nombre de minutes dans $heures heures et $minutes
//   minutes.
// ---------------------------------------------------------------------------
function en_minutes(int $heures, int $minutes): int
{
    return $heures * 60 + $minutes;
}

titre('Exercice 8');
test('2 h 15 => 135', en_minutes(2, 15), 135);
test('0 h 45 => 45', en_minutes(0, 45), 45);

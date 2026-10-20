<?php
/*
 * RÉVISION 01 : Variables et opérateurs
 * ======================================================================
 * RAPPELS
 *   $prix = 12.5;            une variable commence par $
 *   + - * /  et  %           % = reste de la division : 17 % 5 vaut 2
 *   'a' . 'b'                le point colle deux chaînes : 'ab'
 *   round(2.567, 2)          arrondit à 2 décimales : 2.57
 *   (int) 3.9                convertit en entier en TRONQUANT : 3
 *
 * Complète chaque fonction (remplace les // TODO) puis recharge la page.
 * Chaque ❌ doit devenir ✅. Correction : corrections/01_variables.php
 */
declare(strict_types=1);
require_once __DIR__ . '/_test.php';

// ---------------------------------------------------------------------------
// EXERCICE 1 : Renvoie l'aire d'un rectangle (largeur x longueur).
// ---------------------------------------------------------------------------
function aire_rectangle(float $largeur, float $longueur): float
{
    // TODO
    return 0.0;
}

titre('Exercice 1');
test('3 x 4 = 12', aire_rectangle(3, 4), 12.0);
test('2.5 x 2 = 5', aire_rectangle(2.5, 2), 5.0);

// ---------------------------------------------------------------------------
// EXERCICE 2 : Renvoie le prix TVAC (TVA de 21 %), arrondi à 2 décimales.
// ---------------------------------------------------------------------------
function prix_tvac(float $prix_htva): float
{
    // TODO
    return 0.0;
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
    // TODO
    return '';
}

titre('Exercice 3');
test('Alex, 20', presentation('Alex', 20), "Je m'appelle Alex et j'ai 20 ans");

// ---------------------------------------------------------------------------
// EXERCICE 4 : Renvoie le reste de la division de $a par $b.
// ---------------------------------------------------------------------------
function reste(int $a, int $b): int
{
    // TODO
    return -1;
}

titre('Exercice 4');
test('17 % 5 = 2', reste(17, 5), 2);
test('10 % 2 = 0', reste(10, 2), 0);

// ---------------------------------------------------------------------------
// EXERCICE 5 : Renvoie la moyenne de trois notes.
// ---------------------------------------------------------------------------
function moyenne(float $a, float $b, float $c): float
{
    // TODO
    return 0.0;
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
    // TODO
    return 0;
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
    // TODO
    return '';
}

titre('Exercice 7');
test('Alex => A', initiale('Alex'), 'A');

// ---------------------------------------------------------------------------
// EXERCICE 8 : Renvoie le nombre de minutes dans $heures heures et $minutes
//   minutes.
// ---------------------------------------------------------------------------
function en_minutes(int $heures, int $minutes): int
{
    // TODO
    return 0;
}

titre('Exercice 8');
test('2 h 15 => 135', en_minutes(2, 15), 135);
test('0 h 45 => 45', en_minutes(0, 45), 45);

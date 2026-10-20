<?php
// CORRECTION : révision 02 (Conditions : if / elseif / else). Les rappels sont dans ../02_if_else.php
declare(strict_types=1);
require_once __DIR__ . '/../_test.php';

// ---------------------------------------------------------------------------
// EXERCICE 1 : Renvoie true si l'âge est 18 ou plus.
// ---------------------------------------------------------------------------
function est_majeur(int $age): bool
{
    return $age >= 18; // une comparaison renvoie déjà true ou false : pas besoin de if
}

titre('Exercice 1');
test('20 => true', est_majeur(20), true);
test('18 => true (limite)', est_majeur(18), true);
test('17 => false', est_majeur(17), false);

// ---------------------------------------------------------------------------
// EXERCICE 2 : Renvoie le plus grand des deux nombres, avec un if / else
//   (sans max()).
// ---------------------------------------------------------------------------
function plus_grand(int $a, int $b): int
{
    if ($a > $b) {
        return $a;
    } else {
        return $b;
    }
}

titre('Exercice 2');
test('3, 8 => 8', plus_grand(3, 8), 8);
test('9, 2 => 9', plus_grand(9, 2), 9);
test('5, 5 => 5', plus_grand(5, 5), 5);

// ---------------------------------------------------------------------------
// EXERCICE 3 : Prix d'une place de cinéma : moins de 12 ans = 6 € ; 65 ans
//   et plus = 7 € ; sinon 10 €.
// ---------------------------------------------------------------------------
function tarif_cinema(int $age): float
{
    if ($age < 12) {
        return 6.0;
    } elseif ($age >= 65) {
        return 7.0;
    }
    return 10.0;
}

titre('Exercice 3');
test('8 ans => 6', tarif_cinema(8), 6.0);
test('30 ans => 10', tarif_cinema(30), 10.0);
test('70 ans => 7', tarif_cinema(70), 7.0);
test('12 ans => 10 (limite)', tarif_cinema(12), 10.0);

// ---------------------------------------------------------------------------
// EXERCICE 4 : Mention (note sur 20) : moins de 10 = 'Échec' ; moins de 12
//   = 'Satisfaction' ; moins de 14 = 'Distinction' ; moins de 16 = 'Grande
//   distinction' ; sinon 'Plus grande distinction'.
// ---------------------------------------------------------------------------
function mention(float $note): string
{
    if ($note < 10) {
        return 'Échec';
    } elseif ($note < 12) {
        return 'Satisfaction';
    } elseif ($note < 14) {
        return 'Distinction';
    } elseif ($note < 16) {
        return 'Grande distinction';
    }
    return 'Plus grande distinction';
}

titre('Exercice 4');
test('8 => Échec', mention(8), 'Échec');
test('10 => Satisfaction', mention(10), 'Satisfaction');
test('13.5 => Distinction', mention(13.5), 'Distinction');
test('15 => Grande distinction', mention(15), 'Grande distinction');
test('18 => Plus grande distinction', mention(18), 'Plus grande distinction');

// ---------------------------------------------------------------------------
// EXERCICE 5 : Renvoie true si $x est compris entre $min et $max (bornes
//   incluses). Utilise &&.
// ---------------------------------------------------------------------------
function entre(int $x, int $min, int $max): bool
{
    return $x >= $min && $x <= $max;
}

titre('Exercice 5');
test('5 entre 1 et 10', entre(5, 1, 10), true);
test('10 entre 1 et 10 (borne)', entre(10, 1, 10), true);
test('11 pas entre 1 et 10', entre(11, 1, 10), false);

// ---------------------------------------------------------------------------
// EXERCICE 6 : Renvoie true si le jour est 'samedi' ou 'dimanche'. Utilise
//   ||.
// ---------------------------------------------------------------------------
function est_weekend(string $jour): bool
{
    return $jour === 'samedi' || $jour === 'dimanche';
}

titre('Exercice 6');
test('samedi', est_weekend('samedi'), true);
test('dimanche', est_weekend('dimanche'), true);
test('lundi', est_weekend('lundi'), false);

// ---------------------------------------------------------------------------
// EXERCICE 7 : Avec l'opérateur ternaire ( ? : ), renvoie 'En ligne' si
//   $connecte est vrai, sinon 'Hors ligne'.
// ---------------------------------------------------------------------------
function statut(bool $connecte): string
{
    return $connecte ? 'En ligne' : 'Hors ligne';
}

titre('Exercice 7');
test('true => En ligne', statut(true), 'En ligne');
test('false => Hors ligne', statut(false), 'Hors ligne');

// ---------------------------------------------------------------------------
// EXERCICE 8 : Avec l'opérateur ??, renvoie le pseudo, ou 'Anonyme' s'il
//   vaut null.
// ---------------------------------------------------------------------------
function pseudo_affiche(?string $pseudo): string
{
    return $pseudo ?? 'Anonyme';
}

titre('Exercice 8');
test('Alex => Alex', pseudo_affiche('Alex'), 'Alex');
test('null => Anonyme', pseudo_affiche(null), 'Anonyme');

// ---------------------------------------------------------------------------
// EXERCICE 9 : Livraison gratuite si le montant est d'au moins 50 € OU si
//   le client est premium. Sinon 4.99 €. Renvoie le prix de la livraison.
// ---------------------------------------------------------------------------
function frais_livraison(float $montant, bool $premium): float
{
    if ($montant >= 50 || $premium) {
        return 0.0;
    }
    return 4.99;
}

titre('Exercice 9');
test('60 €, pas premium => 0', frais_livraison(60, false), 0.0);
test('20 €, premium => 0', frais_livraison(20, true), 0.0);
test('20 €, pas premium => 4.99', frais_livraison(20, false), 4.99);

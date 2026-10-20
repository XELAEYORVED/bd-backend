<?php
/*
 * RÉVISION 03 : switch et match
 * ======================================================================
 * RAPPELS
 *   switch ($x) {                         match ($x) {
 *       case 1:                               1 => 'un',
 *           $r = 'un';                        2, 3 => 'deux ou trois',
 *           break;      // ne pas oublier !   default => 'autre',
 *       default:                          };
 *           $r = 'autre';
 *   }
 *   match compare avec === (strict), renvoie une valeur et n'a pas besoin de break.
 *   match (true) { $age < 12 => ..., ... } permet de tester des conditions.
 *
 * Complète chaque fonction (remplace les // TODO) puis recharge la page.
 * Chaque ❌ doit devenir ✅. Correction : corrections/03_switch_match.php
 */
declare(strict_types=1);
require_once __DIR__ . '/_test.php';

// ---------------------------------------------------------------------------
// EXERCICE 1 : Avec un SWITCH : renvoie le nom du jour (1 = 'lundi' ... 7 =
//   'dimanche'), sinon 'inconnu'.
// ---------------------------------------------------------------------------
function nom_jour(int $n): string
{
    // TODO
    return '';
}

titre('Exercice 1');
test('1 => lundi', nom_jour(1), 'lundi');
test('5 => vendredi', nom_jour(5), 'vendredi');
test('9 => inconnu', nom_jour(9), 'inconnu');

// ---------------------------------------------------------------------------
// EXERCICE 2 : Avec MATCH : feu tricolore. 'vert' => 'Passez', 'orange' =>
//   'Ralentissez', 'rouge' => 'Stop', autre => 'Feu en panne'.
// ---------------------------------------------------------------------------
function feu(string $couleur): string
{
    // TODO
    return '';
}

titre('Exercice 2');
test('vert', feu('vert'), 'Passez');
test('rouge', feu('rouge'), 'Stop');
test('bleu', feu('bleu'), 'Feu en panne');

// ---------------------------------------------------------------------------
// EXERCICE 3 : Avec MATCH et plusieurs valeurs par ligne : saison du mois.
//   12, 1, 2 => 'hiver' ; 3, 4, 5 => 'printemps' ; 6, 7, 8 => 'été' ; 9,
//   10, 11 => 'automne'.
// ---------------------------------------------------------------------------
function saison(int $mois): string
{
    // TODO
    return '';
}

titre('Exercice 3');
test('1 => hiver', saison(1), 'hiver');
test('12 => hiver', saison(12), 'hiver');
test('7 => été', saison(7), 'été');
test('10 => automne', saison(10), 'automne');

// ---------------------------------------------------------------------------
// EXERCICE 4 : Avec MATCH : mini calculatrice. $op vaut '+', '-', '*' ou
//   '/'.
// ---------------------------------------------------------------------------
function calcul(float $a, string $op, float $b): float
{
    // TODO
    return 0.0;
}

titre('Exercice 4');
test('6 + 2 = 8', calcul(6, '+', 2), 8.0);
test('6 - 2 = 4', calcul(6, '-', 2), 4.0);
test('6 * 2 = 12', calcul(6, '*', 2), 12.0);
test('6 / 2 = 3', calcul(6, '/', 2), 3.0);

// ---------------------------------------------------------------------------
// EXERCICE 5 : Avec MATCH (TRUE) : catégorie d'âge. Moins de 12 => 'enfant'
//   ; moins de 18 => 'ado' ; moins de 65 => 'adulte' ; sinon 'senior'.
// ---------------------------------------------------------------------------
function categorie(int $age): string
{
    // TODO
    return '';
}

titre('Exercice 5');
test('5 => enfant', categorie(5), 'enfant');
test('15 => ado', categorie(15), 'ado');
test('40 => adulte', categorie(40), 'adulte');
test('80 => senior', categorie(80), 'senior');

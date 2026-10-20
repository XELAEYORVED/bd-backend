<?php
// CORRECTION : révision 08 (Fonctions). Les rappels sont dans ../08_fonctions.php
declare(strict_types=1);
require_once __DIR__ . '/../_test.php';

// ---------------------------------------------------------------------------
// EXERCICE 1 : Paramètre par défaut : renvoie '<salutation> <prénom> !'. Si
//   la salutation n'est pas donnée, elle vaut 'Bonjour'. (Complète AUSSI la
//   signature.)
// ---------------------------------------------------------------------------
function saluer(string $prenom, string $salutation = 'Bonjour'): string
{
    return $salutation . ' ' . $prenom . ' !';
}

titre('Exercice 1');
test('sans salutation', saluer('Alex'), 'Bonjour Alex !');
test('avec salutation', saluer('Alex', 'Salut'), 'Salut Alex !');

// ---------------------------------------------------------------------------
// EXERCICE 2 : Renvoie le carré d'un nombre.
// ---------------------------------------------------------------------------
function carre(int $n): int
{
    return $n * $n;
}

titre('Exercice 2');
test('carre(4) = 16', carre(4), 16);

// ---------------------------------------------------------------------------
// EXERCICE 3 : Renvoie a² + b² en RÉUTILISANT la fonction carre().
// ---------------------------------------------------------------------------
function somme_carres(int $a, int $b): int
{
    return carre($a) + carre($b);
}

titre('Exercice 3');
test('3² + 4² = 25', somme_carres(3, 4), 25);

// ---------------------------------------------------------------------------
// EXERCICE 4 : Renvoie $a / $b, ou null si $b vaut 0 (type de retour
//   ?float).
// ---------------------------------------------------------------------------
function diviser(float $a, float $b): ?float
{
    if ($b == 0) {
        return null;
    }
    return $a / $b;
}

titre('Exercice 4');
test('10 / 4 = 2.5', diviser(10, 4), 2.5);
test('10 / 0 => null', diviser(10, 0), null);

// ---------------------------------------------------------------------------
// EXERCICE 5 : Renvoie le prix après une remise en %. Par défaut, la remise
//   est de 10 %.
// ---------------------------------------------------------------------------
function prix_remise(float $prix, float $pourcent = 10): float
{
    return $prix - $prix * $pourcent / 100;
}

titre('Exercice 5');
test('100 € -10 %', prix_remise(100), 90.0);
test('80 € -25 %', prix_remise(80, 25), 60.0);

// ---------------------------------------------------------------------------
// EXERCICE 6 : Renvoie [le plus petit, le plus grand] d'un tableau, dans un
//   tableau de 2 éléments (min() et max() autorisés). Une fonction ne
//   renvoie qu'UNE valeur, mais elle peut être un tableau !
// ---------------------------------------------------------------------------
function min_max(array $nombres): array
{
    return [min($nombres), max($nombres)];
}

titre('Exercice 6');
test('[4, 9, 1, 7]', min_max([4, 9, 1, 7]), [1, 9]);
// À l'appel, on peut « déballer » : [$petit, $grand] = min_max([4, 9, 1, 7]);

// ---------------------------------------------------------------------------
// EXERCICE 7 : Formate un montant en euros à la belge : 1234.5 => '1 234,50
//   €' (number_format).
// ---------------------------------------------------------------------------
function euros(float $montant): string
{
    return number_format($montant, 2, ',', ' ') . ' €';
}

titre('Exercice 7');
test('1234.5', euros(1234.5), '1 234,50 €');
test('3', euros(3), '3,00 €');

// ---------------------------------------------------------------------------
// EXERCICE 8 : Écris d'abord est_pair() (juste en dessous), puis
//   filtrer_pairs() qui renvoie les nombres pairs d'un tableau en utilisant
//   est_pair().
// ---------------------------------------------------------------------------
function est_pair(int $n): bool
{
    return $n % 2 === 0;
}

function filtrer_pairs(array $nombres): array
{
    $pairs = [];
    foreach ($nombres as $n) {
        if (est_pair($n)) {
            $pairs[] = $n;
        }
    }
    return $pairs;
}

titre('Exercice 8');
test('[1, 2, 3, 4, 5, 6]', filtrer_pairs([1, 2, 3, 4, 5, 6]), [2, 4, 6]);

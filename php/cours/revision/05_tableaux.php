<?php
/*
 * RÉVISION 05 : Tableaux indexés
 * ======================================================================
 * RAPPELS
 *   $t = [10, 20, 30];        $t[0] vaut 10 (on compte à partir de 0 !)
 *   $t[] = 40;                ajoute à la fin
 *   count($t)                 nombre d'éléments
 *   in_array(20, $t)          true si 20 est dans le tableau
 *   sort($t)                  trie SUR PLACE (ne renvoie pas le tableau)
 *   implode(', ', $t)         '10, 20, 30'      explode(',', 'a,b') => ['a', 'b']
 *
 * Complète chaque fonction (remplace les // TODO) puis recharge la page.
 * Chaque ❌ doit devenir ✅. Correction : corrections/05_tableaux.php
 */
declare(strict_types=1);
require_once __DIR__ . '/_test.php';

// ---------------------------------------------------------------------------
// EXERCICE 1 : Renvoie le premier élément du tableau.
// ---------------------------------------------------------------------------
function premier(array $t): mixed
{
    // TODO
    return null;
}

titre('Exercice 1');
test('[5, 6, 7] => 5', premier([5, 6, 7]), 5);

// ---------------------------------------------------------------------------
// EXERCICE 2 : Renvoie le DERNIER élément du tableau (indice : count($t) -
//   1).
// ---------------------------------------------------------------------------
function dernier(array $t): mixed
{
    // TODO
    return null;
}

titre('Exercice 2');
test('[5, 6, 7] => 7', dernier([5, 6, 7]), 7);
test('[a] => a', dernier(['a']), 'a');

// ---------------------------------------------------------------------------
// EXERCICE 3 : Ajoute $valeur à la fin du tableau et renvoie le tableau.
// ---------------------------------------------------------------------------
function ajouter(array $t, mixed $valeur): array
{
    // TODO
    return [];
}

titre('Exercice 3');
test('[1, 2] + 3', ajouter([1, 2], 3), [1, 2, 3]);
test('[] + x', ajouter([], 'x'), ['x']);

// ---------------------------------------------------------------------------
// EXERCICE 4 : Renvoie true si le prénom est dans la liste (in_array).
// ---------------------------------------------------------------------------
function est_inscrit(array $inscrits, string $prenom): bool
{
    // TODO
    return false;
}

titre('Exercice 4');
test('Bob est inscrit', est_inscrit(['Alice', 'Bob'], 'Bob'), true);
test('Zoé ne l\'est pas', est_inscrit(['Alice', 'Bob'], 'Zoé'), false);

// ---------------------------------------------------------------------------
// EXERCICE 5 : Renvoie le tableau trié par ordre croissant. Attention :
//   sort() ne RENVOIE pas le tableau trié.
// ---------------------------------------------------------------------------
function trier(array $t): array
{
    // TODO
    return [];
}

titre('Exercice 5');
test('[3, 1, 2]', trier([3, 1, 2]), [1, 2, 3]);
test('prénoms', trier(['Zoé', 'Alice', 'Marc']), ['Alice', 'Marc', 'Zoé']);

// ---------------------------------------------------------------------------
// EXERCICE 6 : Renvoie un NOUVEAU tableau où chaque nombre est multiplié
//   par 2.
// ---------------------------------------------------------------------------
function doubler(array $nombres): array
{
    // TODO
    return [];
}

titre('Exercice 6');
test('[1, 2, 3]', doubler([1, 2, 3]), [2, 4, 6]);

// ---------------------------------------------------------------------------
// EXERCICE 7 : Renvoie uniquement les nombres positifs (strictement plus
//   grands que 0).
// ---------------------------------------------------------------------------
function positifs(array $nombres): array
{
    // TODO
    return [];
}

titre('Exercice 7');
test('[3, -1, 0, 8, -5]', positifs([3, -1, 0, 8, -5]), [3, 8]);

// ---------------------------------------------------------------------------
// EXERCICE 8 : Renvoie les prénoms séparés par des virgules : 'Alice, Bob,
//   Chloé' (implode).
// ---------------------------------------------------------------------------
function en_phrase(array $prenoms): string
{
    // TODO
    return '';
}

titre('Exercice 8');
test('3 prénoms', en_phrase(['Alice', 'Bob', 'Chloé']), 'Alice, Bob, Chloé');

// ---------------------------------------------------------------------------
// EXERCICE 9 : Génère une liste HTML : ['a', 'b'] =>
//   '<ul><li>a</li><li>b</li></ul>'.
// ---------------------------------------------------------------------------
function liste_html(array $elements): string
{
    // TODO
    return '';
}

titre('Exercice 9');
test('[a, b]', liste_html(['a', 'b']), '<ul><li>a</li><li>b</li></ul>');
test('vide', liste_html([]), '<ul></ul>');

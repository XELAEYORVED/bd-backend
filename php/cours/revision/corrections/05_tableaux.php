<?php
// CORRECTION : révision 05 (Tableaux indexés). Les rappels sont dans ../05_tableaux.php
declare(strict_types=1);
require_once __DIR__ . '/../_test.php';

// ---------------------------------------------------------------------------
// EXERCICE 1 : Renvoie le premier élément du tableau.
// ---------------------------------------------------------------------------
function premier(array $t): mixed
{
    return $t[0];
}

titre('Exercice 1');
test('[5, 6, 7] => 5', premier([5, 6, 7]), 5);

// ---------------------------------------------------------------------------
// EXERCICE 2 : Renvoie le DERNIER élément du tableau (indice : count($t) -
//   1).
// ---------------------------------------------------------------------------
function dernier(array $t): mixed
{
    return $t[count($t) - 1];
}

titre('Exercice 2');
test('[5, 6, 7] => 7', dernier([5, 6, 7]), 7);
test('[a] => a', dernier(['a']), 'a');

// ---------------------------------------------------------------------------
// EXERCICE 3 : Ajoute $valeur à la fin du tableau et renvoie le tableau.
// ---------------------------------------------------------------------------
function ajouter(array $t, mixed $valeur): array
{
    $t[] = $valeur;
    return $t;
}

titre('Exercice 3');
test('[1, 2] + 3', ajouter([1, 2], 3), [1, 2, 3]);
test('[] + x', ajouter([], 'x'), ['x']);

// ---------------------------------------------------------------------------
// EXERCICE 4 : Renvoie true si le prénom est dans la liste (in_array).
// ---------------------------------------------------------------------------
function est_inscrit(array $inscrits, string $prenom): bool
{
    return in_array($prenom, $inscrits);
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
    sort($t); // trie $t sur place
    return $t;
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
    $resultat = [];
    foreach ($nombres as $n) {
        $resultat[] = $n * 2;
    }
    return $resultat;
}

titre('Exercice 6');
test('[1, 2, 3]', doubler([1, 2, 3]), [2, 4, 6]);

// ---------------------------------------------------------------------------
// EXERCICE 7 : Renvoie uniquement les nombres positifs (strictement plus
//   grands que 0).
// ---------------------------------------------------------------------------
function positifs(array $nombres): array
{
    $resultat = [];
    foreach ($nombres as $n) {
        if ($n > 0) {
            $resultat[] = $n;
        }
    }
    return $resultat;
}

titre('Exercice 7');
test('[3, -1, 0, 8, -5]', positifs([3, -1, 0, 8, -5]), [3, 8]);

// ---------------------------------------------------------------------------
// EXERCICE 8 : Renvoie les prénoms séparés par des virgules : 'Alice, Bob,
//   Chloé' (implode).
// ---------------------------------------------------------------------------
function en_phrase(array $prenoms): string
{
    return implode(', ', $prenoms);
}

titre('Exercice 8');
test('3 prénoms', en_phrase(['Alice', 'Bob', 'Chloé']), 'Alice, Bob, Chloé');

// ---------------------------------------------------------------------------
// EXERCICE 9 : Génère une liste HTML : ['a', 'b'] =>
//   '<ul><li>a</li><li>b</li></ul>'.
// ---------------------------------------------------------------------------
function liste_html(array $elements): string
{
    $html = '<ul>';
    foreach ($elements as $e) {
        $html .= '<li>' . $e . '</li>';
    }
    return $html . '</ul>';
}

titre('Exercice 9');
test('[a, b]', liste_html(['a', 'b']), '<ul><li>a</li><li>b</li></ul>');
test('vide', liste_html([]), '<ul></ul>');

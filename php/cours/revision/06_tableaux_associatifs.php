<?php
/*
 * RÉVISION 06 : Tableaux associatifs
 * ======================================================================
 * RAPPELS
 *   $p = ['prenom' => 'Alice', 'age' => 22];
 *   $p['prenom']                       vaut 'Alice'
 *   $p['ville'] = 'Mons';              ajoute (ou modifie) une clé
 *   isset($p['ville'])                 la clé existe-t-elle ?
 *   foreach ($p as $cle => $valeur)    parcourir clés ET valeurs
 *   Tableau de tableaux : $etudiants[0]['prenom']
 *
 * Complète chaque fonction (remplace les // TODO) puis recharge la page.
 * Chaque ❌ doit devenir ✅. Correction : corrections/06_tableaux_associatifs.php
 */
declare(strict_types=1);
require_once __DIR__ . '/_test.php';

// ---------------------------------------------------------------------------
// EXERCICE 1 : Renvoie 'Prénom Nom' à partir d'un tableau ['prenom' => ...,
//   'nom' => ...].
// ---------------------------------------------------------------------------
function nom_complet(array $personne): string
{
    // TODO
    return '';
}

titre('Exercice 1');
test('Alice Martin', nom_complet(['prenom' => 'Alice', 'nom' => 'Martin', 'age' => 22]), 'Alice Martin');

// ---------------------------------------------------------------------------
// EXERCICE 2 : Renvoie la personne avec un an de plus (clé 'age').
// ---------------------------------------------------------------------------
function anniversaire(array $personne): array
{
    // TODO
    return [];
}

titre('Exercice 2');
test('22 => 23', anniversaire(['prenom' => 'Alice', 'age' => 22]), ['prenom' => 'Alice', 'age' => 23]);

// ---------------------------------------------------------------------------
// EXERCICE 3 : Renvoie true si la clé existe dans le tableau.
// ---------------------------------------------------------------------------
function a_cle(array $t, string $cle): bool
{
    // TODO
    return false;
}

titre('Exercice 3');
test('prenom existe', a_cle(['prenom' => 'Alice'], 'prenom'), true);
test('ville n\'existe pas', a_cle(['prenom' => 'Alice'], 'ville'), false);

// ---------------------------------------------------------------------------
// EXERCICE 4 : Renvoie une fiche texte avec une ligne 'clé : valeur' par
//   élément (foreach avec $cle => $valeur). Chaque ligne se termine par
//   "\n".
// ---------------------------------------------------------------------------
function fiche(array $personne): string
{
    // TODO
    return '';
}

titre('Exercice 4');
test('fiche Alice', fiche(['prenom' => 'Alice', 'ville' => 'Mons']), "prenom : Alice\nville : Mons\n");

// ---------------------------------------------------------------------------
// EXERCICE 5 : Le panier est un tableau de produits ['nom' => ..., 'prix'
//   => ..., 'quantite' => ...]. Renvoie le total (prix x quantité pour
//   chaque produit).
// ---------------------------------------------------------------------------
function total_panier(array $panier): float
{
    // TODO
    return 0.0;
}

titre('Exercice 5');
test('panier', total_panier([
    ['nom' => 'Pomme', 'prix' => 0.5, 'quantite' => 6],
    ['nom' => 'Pain', 'prix' => 2.2, 'quantite' => 1],
]), 5.2);
test('panier vide', total_panier([]), 0.0);

// ---------------------------------------------------------------------------
// EXERCICE 6 : À partir d'une liste d'étudiants (['prenom' => ..., 'note'
//   => ...]), renvoie uniquement les prénoms.
// ---------------------------------------------------------------------------
function prenoms(array $etudiants): array
{
    // TODO
    return [];
}

titre('Exercice 6');
test('3 étudiants', prenoms([['prenom' => 'Alice', 'note' => 15], ['prenom' => 'Bob', 'note' => 9], ['prenom' => 'Chloé', 'note' => 12]]), ['Alice', 'Bob', 'Chloé']);

// ---------------------------------------------------------------------------
// EXERCICE 7 : Notes sous la forme ['Alice' => 15, 'Bob' => 9, ...].
//   Renvoie le prénom de celui qui a la meilleure note (foreach avec
//   $prenom => $note).
// ---------------------------------------------------------------------------
function meilleur(array $notes): string
{
    // TODO
    return '';
}

titre('Exercice 7');
test('Alice 15, Bob 9, Chloé 17 => Chloé', meilleur(['Alice' => 15, 'Bob' => 9, 'Chloé' => 17]), 'Chloé');

// ---------------------------------------------------------------------------
// EXERCICE 8 : Même format de notes. Renvoie seulement ceux qui ont réussi
//   (note >= 10), en gardant les clés.
// ---------------------------------------------------------------------------
function reussis(array $notes): array
{
    // TODO
    return [];
}

titre('Exercice 8');
test('Alice 15, Bob 9, Chloé 10', reussis(['Alice' => 15, 'Bob' => 9, 'Chloé' => 10]), ['Alice' => 15, 'Chloé' => 10]);

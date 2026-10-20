<?php
// Mini outil de test : compare le résultat obtenu au résultat attendu.
// S'affiche en texte brut (navigateur ou terminal : php 02_if_else.php).
header('Content-Type: text/plain; charset=utf-8');

function test(string $description, mixed $obtenu, mixed $attendu): void
{
    $ok = $obtenu === $attendu; // comparaison STRICTE : 5 !== '5' et 12 !== 12.0
    echo $ok ? '  ✅ ' : '  ❌ ', $description;
    if (!$ok) {
        echo "\n       attendu : ", var_export($attendu, true), "\n       obtenu  : ", var_export($obtenu, true);
    }
    echo "\n";
}

function titre(string $texte): void
{
    echo "\n", $texte, "\n";
}

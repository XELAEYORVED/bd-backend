# ✏️ Exercices papier

Réponses vérifiées en exécutant le code avec PHP 8.5.

## Noms de variables (p. 9)

| Nom | Correct ? | Pourquoi |
|---|---|---|
| `commentaire` | ❌ | pas de `$` |
| `$commentaire` | ✅ | |
| `$2020reduction` | ❌ | chiffre juste après le `$` |
| `$reduction2020` | ✅ | |
| `$_prix` | ✅ | `_` autorisé en premier caractère |
| `$x` | ✅ | valide, mais pas explicite |
| `$année` | ✅ | accents permis mais déconseillés |
| `$date.naissance` | ❌ | le `.` est l'opérateur de concaténation |

## isset / unset (p. 10)

```php
$toto = 312;
$x = isset($toto);
unset($toto);
```
`$x` vaut `true` (de type bool) ; `$toto` n'existe plus.

## Types (p. 12)

`$x` → string, `$y` → boolean (`false`, car `$a` n'existe pas), `$z` → string (`'20'` est entre apostrophes).

## Conversions (p. 13)

```php
$a = '73.48 kg';
$b = (double) $a;  // 73.48 (float)
$c = (int) $b;     // 73 (int), la conversion tronque, elle n'arrondit pas
$a = (bool) $c;    // true, car tout nombre non nul est vrai
```
Résultat : `$a = true`, `$b = 73.48`, `$c = 73`.

> ⚠️ Depuis PHP 8.5, `(double)` et `(integer)` sont dépréciés : utiliser `(float)` et `(int)`.

## Que génèrent ces scripts ? (p. 27-28)

| # | Sortie | Explication |
|---|---|---|
| 1 | `prix : 0` (+ Warning) | `$a` n'existe pas → `null` → `(int)` donne `0` |
| 2 | rien (+ Warning) | faute de frappe : `$poid` au lieu de `$poids` |
| 3 | `Welcome` | 20 est bien entre 18 et 60 |
| 4 | `54321` | décompte de 5 à 1 |
| 5 | `10` | 0+1+2+3+4 |
| 7 | `ouf` | `'ouf'` n'est pas vide |
| 8 | `$tab[0]` | entre apostrophes, la variable n'est pas évaluée |
| 9 | `7492` | indices 0, 1, 9, puis 10 (le dernier indice existant + 1) |
| 10 | `valeur : 23` | le do while tourne 2 fois ($i = 2 puis 3) |

(Il n'y a pas de script n°6 dans le syllabus.)

## Boucles et conditions (p. 28)

Voir [`localites.php`](localites.php).

## Regex (p. 36)

| Regex | Traduction |
|---|---|
| `"/^P+/"` | chaîne qui commence par un ou plusieurs « P » |
| `"/[[:digit:]]{5,6}/"` | chaîne contenant 5 ou 6 chiffres à la suite (au moins 5, car sans `^` ni `$` un 7e chiffre peut suivre) |
| `"/^(hobbit){2}$/"` | chaîne valant exactement « hobbithobbit » |

## Variables prédéfinies (p. 38)

```php
echo $_SERVER['SERVER_ADDR'];          // adresse IP du serveur
echo $_SERVER['HTTP_ACCEPT_LANGUAGE']; // langue(s) du navigateur client
echo $_SERVER['PHP_SELF'];             // nom du script en cours
```

## Cookies MyHEH (p. 41)

À faire soi-même dans le navigateur : outils de développement (F12) → **Stockage** (Firefox)
ou **Application** (Chrome) → Cookies. Pour chaque cookie, regarder :

| Colonne | Question |
|---|---|
| Expires / Max-Age | durée de vie raisonnable ? |
| HttpOnly | ✅ = inaccessible au JavaScript (protège contre le vol par XSS) |
| Secure | ✅ = envoyé uniquement en HTTPS |
| SameSite | `Strict` ou `Lax` = protégé contre le CSRF ; `None` = exposé |

## Entropie (p. 52)

6 caractères parmi minuscules + majuscules + chiffres : N = 26 + 26 + 10 = 62.

H = L × log₂ N = 6 × log₂ 62 ≈ 6 × 5,954 ≈ **35,7 bits**, soit environ 62⁶ ≈ 57 milliards d'essais.

## Jour de la semaine de naissance (p. 67)

```php
echo (new DateTimeImmutable('2005-03-14'))->format('l'); // ex. Monday
```
(`l` = L minuscule, le jour en toutes lettres ; `N` donne le numéro de 1 à 7.)

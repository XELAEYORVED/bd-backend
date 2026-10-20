<?php
// $page_courante doit être déclarée par la page qui inclut ce fragment.
// ?? '' évite un Warning si elle a été oubliée.
$page_courante = $page_courante ?? '';
?>
<nav>
    <ul>
        <li><a href="index.php" <?= $page_courante === 'accueil' ? 'class="actif"' : '' ?>>Accueil</a></li>
        <li><a href="administration.php" <?= $page_courante === 'administration' ? 'class="actif"' : '' ?>>Administration</a></li>
        <li><a href="contact.php" <?= $page_courante === 'contact' ? 'class="actif"' : '' ?>>Contact</a></li>
    </ul>
</nav>

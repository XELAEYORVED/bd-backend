<?php
// CORRECTION : Exercice 2, bonus 2 (<head> commun et fermeture le week-end)

// 1. Le test et la redirection AVANT tout HTML (donc avant l'include de _head.php)
$jour = (int) ($_GET['jour'] ?? date('N'));
if ($jour >= 6) {
    header('Location:../index.php');
    exit();
}

// 2. Variable lue par _head.php
$titre = 'Horaires';
include '_head.php';
include '../_header.php';
include '../_nav.php';
?>
    <h2>Horaires</h2>
    <p>Ouvert du lundi au vendredi.</p>
<?php include '../_footer.php'; ?>
</body>
</html>

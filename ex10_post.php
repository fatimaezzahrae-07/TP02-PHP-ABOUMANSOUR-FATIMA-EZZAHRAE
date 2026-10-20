<!DOCTYPE html>
<html lang="fr">
<head><meta charset="UTF-8"><title>Résultat POST</title></head>
<body>
<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo "<p>Veuillez passer par le formulaire ex10_post.html (méthode POST attendue).</p>";
} else {
    $nom = trim($_POST['nom'] ?? '');
    $prenom = trim($_POST['prenom'] ?? '');
    $groupe = trim($_POST['groupe'] ?? '');

    if ($nom === '' || $prenom === '' || $groupe === '') {
        echo "<p>Erreur : tous les champs sont obligatoires (champs vides détectés).</p>";
    } else {
        echo "<h2>Bienvenue " . htmlspecialchars($prenom, ENT_QUOTES, 'UTF-8') . " " . htmlspecialchars($nom, ENT_QUOTES, 'UTF-8') . " !</h2>";
    echo "<p>Vous faites partie du groupe <strong>".htmlspecialchars($groupe, ENT_QUOTES, 'UTF-8')."</strong>.</p>";
    }
}
?>
<a href="ex10_post.html">Retour</a>
</body>
</html>
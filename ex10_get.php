<!DOCTYPE html>
<html lang="fr">
<head><meta charset="UTF-8"><title>Résultat GET</title></head>
<body>
<?php
if (!isset($_GET['nom'])) {
    echo "<p>Veuillez passer par le formulaire ex10_get.html</p>";
} else {
    $nom = trim($_GET['nom'] ?? '');
    $prenom = trim($_GET['prenom'] ?? '');
    $groupe = trim($_GET['groupe'] ?? '');

    if ($nom === '' || $prenom === '' || $groupe === '') {
        echo "<p>Erreur : tous les champs sont obligatoires (champs vides détectés).</p>";
    } else {
        echo "<h2>Bienvenue " . htmlspecialchars($prenom, ENT_QUOTES, 'UTF-8') . " " . htmlspecialchars($nom, ENT_QUOTES, 'UTF-8') . " !</h2>";
    echo "<p>Vous faites partie du groupe <strong>".htmlspecialchars($groupe, ENT_QUOTES, 'UTF-8')."</strong>.</p>";
    }
}
?>
<a href="ex10_get.html">Retour</a>
</body>
</html>
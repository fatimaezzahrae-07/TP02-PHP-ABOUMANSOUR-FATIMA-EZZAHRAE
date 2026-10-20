<?php
$notes = [
    "Amine" => 12,
    "Sara" => 16,
    "Youssef" => 8,
    "Lina" => 14,
    "Adam" => 10
];

$somme = 0;
$nb_valide = 0;
$meilleure_note = 0;
$meilleur_etudiant = "";

foreach ($notes as $note) {
    $somme += $note;
}

// Pour la meilleure 
foreach ($notes as $nom => $note) {
    if ($note > $meilleure_note) {
        $meilleure_note = $note;
        $meilleur_etudiant = $nom;
    }
    if ($note >= 10) {
        $nb_valide++;
    }
}

$moyenne = $somme / count($notes);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 9</title>
</head>
<body>
    <h2>Liste des étudiants</h2>
    <table border="=1">
        <tr>
            <th>Étudiant</th>
            <th>Note</th>
            <th>Statut</th>
        </tr>
        <?php foreach ($notes as $nom => $note): ?>
        <tr>
            <td><?= $nom ?></td>
            <td><?= $note ?></td>
            <td class="<?= $note >= 10 ? 'valide' : 'non-valide' ?>">
                <?= $note >= 10 ? 'Validé' : 'Non validé' ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>

    <h3>Résultats</h3>
    <p>Somme : <?= $somme ?></p>
    <p>Moyenne : <?= $moyenne ?></p>
    <p>Nombre d'étudiants ayant validé : <?= $nb_valide ?></p>
    <p>Meilleure note : <?= $meilleure_note ?> par <?= $meilleur_etudiant ?></p>
</body>
</html>
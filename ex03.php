<?php
 const TAUX_TVA=20;
const DEVISE='MAD';
$prix_HT=60;
$quantite=3;
$total_HT=$prix_HT*$quantite;
$montantTVA=$total_HT*TAUX_TVA/100;
$totalTTC=$total_HT+$montantTVA;
$fraislivraison=15;
$totalTTC+=$fraislivraison;
?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Execice 3</title>
</head>
<body>
    <h1>Récapitulatif</h1>
    <ul>
        <li>Total HT: <?=$total_HT .' ' .DEVISE  ?></li>
        <li>TVA: <?=$montantTVA .' ' .DEVISE  ?></li>
        <li>Total TTC= <?= $totalTTC .' ' .DEVISE ?></li>
        <li>Le taux= <?= TAUX_TVA ?>
<br>
        <?php
        if(defined(TAUX_TVA)){
            echo "La constante TAUX_TVA est existe et vaut: " .TAUX_TVA;
        }
        else{
            echo "La constante TAUX_TVA n'existe pas";
        }
        ?>
    </ul>
</body>
</html>
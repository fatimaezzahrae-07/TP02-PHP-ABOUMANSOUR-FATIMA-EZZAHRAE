<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 06</title>
</head>
<body>
    <h2>Table de multiplication par 7:</h2>
    <?php
    //pour la multiplication par 7
$nombre = 7;
for($i=1;$i<=10;$i++){
  echo "7 × $i = " .(7*$i) .'<br>';
};
?>

<?php
//pour pyramide

for($i=1;$i<=6;$i++){
    for($j=1;$j<=$i;$i++){
        echo '*';
    };
    echo '<br>';
}
?>
</body>
</html>

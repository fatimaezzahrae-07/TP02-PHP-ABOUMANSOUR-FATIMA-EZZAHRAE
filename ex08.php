<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Partie 1</h2>
    <?php
$i = 0;
while ($i <= 20) {
    if ($i % 2 == 0) {
        if ($i == 10) {
            echo "<strong>$i</strong><br>";
        } 
        else {
            echo "$i<br>";
        }
    }
    $i++;
}
?>
<h2>Partie 2</h2>
<?php 
// Boucle while
$compteur = 5;
$executions = 0;

while ($compteur < 5) {
    echo "While : compteur = $compteur <br>";
    $executions++;
    $compteur++;
}

echo "Nombre d'exécutions de while : $executions <br>";


// Boucle do-while
$compteur = 5;
$executions = 0;

do {
    echo "Do-while : compteur = $compteur <br>";
    $executions++;
    $compteur++;
} while ($compteur < 5);

echo "Nombre d'exécutions de do-while : $executions";
?>
<h2>Partie 3</h2>
<?php
for($i=1;$i<=20;$i++){
    if($i%3==0){
        continue;
    }
    if($i==16){
        break;
    }
    echo "Nombre: " . $i .'<br>';
}
?>
</body>
</html>


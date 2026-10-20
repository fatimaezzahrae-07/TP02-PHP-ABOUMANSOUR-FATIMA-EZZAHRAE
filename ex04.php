<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4</title>
</head>
<body>
<?php
//1 Declaratio
$val_1=42;
$val_2="42";
$val_3=15.8;
$val_4=true;
$val_5=false;
$val_6=null;
//Examiner les types et les valeurs
 echo '<pre>';
var_dump($val_1);
 var_dump($val_2);
 var_dump($val_3);
 var_dump($val_4);
 var_dump($val_5);
 var_dump($val_6);
 echo '</pre>';
 //3 Convertir
 $conv1=(int) $val_2;
 $conv2=(int) $val_3;
 $conv3=(string) $val_1;
var_dump($conv1);
echo '<br>';
var_dump($conv2);
echo '<br>';
var_dump($conv3);
echo '<br>';

//4 Afficher true et false avec echo:
echo $val_4;echo '<br>';
echo $val_5;echo '<br>';
//avec var_dump()
echo 'Avec var_dump()';echo '<br>';
var_dump($val_4);echo '<br>';
var_dump($val_5);echo '<br>';
//5 Convertir en bool
echo 'Convertir en bool';echo '<br>';
var_dump((bool) 0,(bool) "0",(bool) "PHP",(bool)[] )

?>
</body>
</html>

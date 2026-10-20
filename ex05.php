<?php
$moyenne=17;
echo"La note " .$moyenne ." est : ";
if($moyenne>0 && $moyenne<10)
    echo "Non validé";
elseif($moyenne>=10 && $moyenne <12)
    echo "Passable";
elseif($moyenne>=12&& $moyenne <14)
    echo "Assez bien";
elseif($moyenne>=14&&$moyenne <16)
    echo"Bien";
elseif($moyenne>=16 && $moyenne <20)
    echo "Très bien";
else
    echo "Note invalide"
?>
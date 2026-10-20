<?php
$numeroMois=(int) date('m'); // donne le mois courant
//$numeroMois=3 => donne "Le mois est :Mars "
//$numeroMois=12 => donne "Le mois est : Décembre "
//$numeroMois=15=> donne "Le mois est : :Numéro de mois invalide "

switch($numeroMois){
    case 1: $mois="Janvier";break;
    case 2: $mois="Février";break;
    case 3: $mois="Mars";break;
    case 4: $mois="Avril";break;
    case 5: $mois="Mai";break;
    case 6: $mois="Juin";break;
    case 7: $mois="Juillet";break;
    case 8: $mois="Aout";break;
    case 9: $mois="Septembre";break;
    case 10: $mois="Octobre";break;
    case 11: $mois="Novembre";break;
    case 12: $mois="Décembre";break;
    default: $mois = "Numéro de mois invalide"; break;
};
echo  "Le mois est : " .$mois
?>
# TP02-PHP-ABOUMANSOUR-FATIMA-EZZAHRAE
TP 02 PHP — Programmation Web 2 — 2026/2027
Nom:Aboumansour
 Prenom:Ftaima Ezzahrae
 Groupe:2
 Titre:Introduction PHP

 Liste des exercices:
 ex01:
 ex02:
 ex03:
 ex04:
 ex05:
 ex06:
 ex07:
 ex08:
 ex09:
 ex010:

 **pour ex02:
 Les deux notes sont differentes parceque le PHP est sensible a la casse.
 donc $note et $Note sont deux variables completement differentes.

 Nom des variables vaildes/invalides:
`$a`:valide;
`$_a`:valide;
`$a_a`:valide;
`$AAA`:valide;
`$a!`:invalide;
`$1a`:invalide;
`$a1`:valide

**pour ex04:
vec echo :
 En PHP, la conversion du booléen false en chaîne de caractères donne une chaîne vide (""). Par conséquent, l'instruction echo false; n'affiche absolument rien à l'écran.
"l'inverse, echo true; convertit true en "1" et affiche 1"

Avec var_dump() :
var_dump() est une fonction de débogage qui inspecte la variable en affichant à la fois son type de données et sa valeur. Pour un booléen faux, il affichera explicitement : bool(false)

**pour ex05:
`$var1`:-1 => Note invalide
`var2`:9 => Non valide
`var3`:10 =>Passable
`var4`:12 =>Assez bien
`var5`:14 =>Bien
`var6`:16 =>Tres bien
`var7`:21 => Note invalide

**pour ex10:
Après l'envoi en GET les valeurs apparaissent dans l'URL après le ? sous forme ?nom=...&prenom=...&groupe=..., alors qu'en POST l'URL reste inchangée ex10_post.php car les données sont envoyées de façon cachée dans le corps de la requête.
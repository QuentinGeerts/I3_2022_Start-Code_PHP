<?php

$a = 3;
$b = 9;
$c = false;
$d = !$c;
$e = 9;

/* 
(a > 8)
3 > 8
Faux
*/

echo "<p>1. (a > 8) : " . ($a > 8) . "<p>";

/* 
(b == 9)
9 == 9
Vrai
*/

echo "<p>2. (b == 9) : " . ($b == 9) . "</p>";

/* 
NON(a != 3)
NON(3 != 3)
NON(Faux)
Vrai
*/

echo "<p>3. NON(a != 3) : " . !($a != 3) . "</p>";

/* 
NON(c)
NON(Faux)
Vrai
*/

echo "<p>4. NON(c) : " . !$c . "</p>";

/* 
(a < b) OU c
(3 < 9) OU Faux
Vrai OU Faux
Vrai
*/

echo "<p>5. (a < b) OU c : " . (($a < $b) || $c) . "</p>";

/* 
NON((a + b) != 12)
NON((3 + 9) != 12)
NON(12 != 12)
NON(Faux)
Vrai
*/

echo "<p>6. NON((a + b) != 12) : " . !(($a + $b) != 12) . "</p>";

/* 
((b = 5) OU ((e > 10) ET (a < 8)))
((9 = 5) OU ((9 > 10) ET (3 < 8)))
(Faux OU (Faux ET Vrai))
(Faux OU Faux)
Faux

*/

echo "<p>7. ((b = 5) OU ((e > 10) ET (a < 8))) : " . (($b == 5) || (($e > 10) && ($a < 8))) . "</p>";

/* 
(((b = 5) OU ((e > 10) ET (a < 8))) OU (a < b) OU c) ET c
(((9 == 5) OU ((9 > 10) ET (3 < 8))) OU (3 < 9) OU Faux) ET Faux
((Faux OU (Faux ET Vrai)) OU Vrai OU Faux) ET Faux
((Faux OU Faux) OU Vrai) ET Faux
(Faux OU Vrai) ET Faux
Vrai ET Faux
Faux
*/

echo "<p>8. (((b = 5) OU ((e > 10) ET (a < 8))) OU (a < b) OU c) ET c : " . (((($b == 5) || (($e > 10) && ($a < 8))) || ($a < $b) || $c) && $c) . "</p>";

echo "<p>Bonus : </p>";

/*
$a != 3
3 != 3
Faux
*/

echo "<p> a != 3 : " . ($a != 3) . "</p>";


/*
!(d) || c
!Vrai || Faux
Faux || Faux
Faux
*/

echo "<p> !(d) || c : " . (!($d) || $c) . "</p>";

/*
((a + b) == 12) && d
((3 + 9) == 12) && Vrai
(12 == 12) && Vrai
Vrai && Vrai
Vrai
*/

echo "<p> ((a + b) == 12) && d : " . ((($a + $b) == 12) && $d). "</p>";

?>
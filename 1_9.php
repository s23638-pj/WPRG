<?php
$tab1 = array(3,5);
$licznik1 = 0;
$tab2 = array(6,-1);
$licznik2 = 0;
echo("Tab1: ");

for($i=0; $i<count($tab1);$i++){
  echo $tab1[$i]." ";
    $licznik1++;
}

echo("<br>Tab2: ");
for($i=0; $i<count($tab2);$i++){
  echo $tab2[$i]." ";
    $licznik2++;
}
    
if($licznik1 == $licznik2){
    $wynik = $tab1[0] * $tab2[0] + $tab1[1] * $tab2[1];
    echo("<br>Iloczyn skalarny wynosi: $wynik");
}else echo("<br>BŁĄD");

?>
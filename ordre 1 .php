<?php 
 $chiffre1=rand(-9,9);
 $chiffre2=rand(-9,9);
 $chiffre3=rand(-9,9);

  $min=null;
  $moy=null;
  $max=null;
  if($chiffre1<$chiffre2<$chiffre3){
    $min=$chiffre1;
    $moy=$chiffre2;
    $max=$chiffre3;
  }

  if($chiffre3<=$chiffre2<=$chiffre1){
    $min=$chiffre3;
    $moy=$chiffre2;
    $max=$chiffre1;
  }

  echo "Ordre dĂŠcroissant donne $min,$max,$moy";

?> 
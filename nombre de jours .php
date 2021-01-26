<?ph
$mois=rand(1,12);
$an=rand(1,3000);
if ($an%4==0) {
if ($mois==1 and $mois==3 and $mois==5 and $mois==7 and $mois==8 and $mois==10 and $mois==12) {
echo "mois de $an a 31 jours";
}
if ($mois==2) {
echo "mois2 de $an a 29jours";
}
if ($mois==4 and $mois==6 and $mois==9 and $mois==11) {
echo"mois de $an a 30jours";
}
}else {
if($an%4!=0){
if ($mois==1 and $mois==3 and $mois==5 and $mois==7 and $mois==8 and $mois==10 and $mois==12) {
echo "mois de $an a 31 jours";
}
if ($mois==2) {
echo "mois2 de $an a 28jours";
}
if ($mois==4 and $mois==6 and $mois==9 and $mois==11) {
echo"mois de $an a 30jours";
}
}
?>
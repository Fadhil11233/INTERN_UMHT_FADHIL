<?php 
function Hitungvolume($a,$b,$c){
    $alas=0.5*$a*$b;
    $volume= $alas*$c;
    return $volume;
}
$volume=Hitungvolume(2,4,10);
echo "volume prisma segitiga adalah $volume cm <br>"
?>

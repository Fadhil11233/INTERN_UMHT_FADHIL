<?php
function prima($number) {
    for ($i = 2; $i <= sqrt($number); $i++){
        if ($number % $i == 0){
            return false;
        }
    }
    return true;
}

$angka = 1;

if (prima($angka)){
    echo "$angka adalah bilangan prima";
} else {
    echo "$angka bukan bilangan prima";
}
 ?>
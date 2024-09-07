<?php

$jumlahJamkerja=47;
$jamLembur=$jumlahJamkerja -48;

if($jamLembur <= 0) {
    $upah="tidak ada upah";
} 
elseif($jamLembur >0){
    $upah=(3000*$jamLembur)+(2000*48);
}
 else{
    $upah=(2000*$jumlahJamkerja);
 }


echo"$upah";
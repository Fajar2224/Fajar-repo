<?php
$usia=200;
if($usia>=0 and $usia<=12){
    $status="Anak-anak";
}elseif($usia>=13and$usia<=17){
    $status="Remaja";
}elseif($usia>=18and$usia<=59){
    $status="Dewasa";
}elseif($usia>= 60){
    $status="Lansia";
}

echo"usia anda ".$usia.",Anda termasuk kedalam kategori ".$status;
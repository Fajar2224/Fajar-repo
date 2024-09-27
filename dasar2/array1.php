<?php
$nama=array("Andi","Budi","Candra","Dedi","Emon");
echo $nama[3];
echo'<hr>';

$nama=array("Andi","Budi","Candra","Dedi","Emon");
foreach ($nama as $n){
echo $n.'<br>';
}

echo'<hr>';
$nama=array("Andi","Budi","Candra","Dedi","Emon");
$nama[4]="Zulfa";//merubah data array pada elemen ke-4
foreach ($nama as $n){
echo $n.'<br>';
}
echo'<hr>';

$nama=array("Andi","Budi","Candra","Dedi","Emon");
$nama[]="Maimunah";//menambah data array 
foreach ($nama as $n){
echo $n.'<br>';
}
echo'<hr>';

$nama=array("Andi","Budi","Candra","Dedi","Emon");
unset($nama[1]);//menghapus data array indeks-1
foreach ($nama as $n){
echo $n.'<br>';
}
echo'<hr>';

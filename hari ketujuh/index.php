<?php

//perulangan --> Looping
//inisialisasi variabel perulangan;kondisi perulangan;penjumlahan/pengurangan
for($i=0;$i <=1;$i++){
    echo "ini perulangan ke-$i <br>";
}
echo"<hr>";
echo"<h3>perulangan While</h3>";
$a=0;
while($a<=1){
    echo "ini perulangan ke-$a <br>";
    $a++;
}
echo"<hr>";
echo"<h3>Perulangan Do-While</h3>";
$x=0;
do{
    echo"ini perulanganan ke-$x <br>";
    $x++;
}while ($x<=3);
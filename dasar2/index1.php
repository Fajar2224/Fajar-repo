<?php
$data=array( 
array("nama"=>"Persegi1","Panjang"=>"56", "lebar"=>"23"),
array("nama"=>"Persegi2","Panjang"=>"33", "lebar"=>"21"),
array("nama"=>"Persegi3","Panjang"=>"65", "lebar"=>"42"),
array("nama"=>"Persegi4","Panjang"=>"73", "lebar"=>"29"));

 foreach ($data as $dt => $nilai){
    $data[$dt]["luas"]=$data[$dt]["Panjang"]*$data[$dt]["lebar"];
 }
$jsonData=json_encode($data,JSON_PRETTY_PRINT);
echo "<pre>".$jsonData."</pre>";
 
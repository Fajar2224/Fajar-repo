<?php
function ageCount($nama,$tahun,$kelamin){
    $umur=date("Y")-$tahun;
    echo"Hai $nama, umur kamu $umur tahun, kelamin kamu $kelamin <br>";
}
ageCount("Andi",2009,"lelaki" );
ageCount("Budi",2001,"lelaki");
<?php

include('cek.php');

echo ("Hallo, nama saya Mr. PHP. Saya telah memilih secara random sebuah bilangan bulat. Silakan Anda menebak ya!");
echo ("<form method='get'>
    Bilangan tebakan anda <input type='text' name='tebakan'>
    <input type='submit' name='submit' value='Submit'></form>");

$random = $_COOKIE['acak'];

if(isset($_GET['tebakan'])){
    $angkaTebakan = $_GET['tebakan'];
    if ($angkaTebakan > $random){
        echo ("Waaah… masih salah ya, bilangan tebakan Anda terlalu tinggi.");
    } else if ($angkaTebakan < $random){
        echo ("Waaah… masih salah ya, bilangan tebakan Anda terlalu rendah.");
    } else {
        echo ("Selamat ya… Anda benar, saya telah memilih bilangan $random");

        setcookie("acak", "", time()+3*30*24*3600,"/");
        setcookie("acak", rand(1,100), time()+3*30*24*3600,"/");

        echo ("<br><a href='gameacak.php'>(Ulangi lagi)</a>");
    }
}

echo ("<p><a href='logout.php'>Log Out</a></p>");

?>
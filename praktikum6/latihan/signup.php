<?php
if(isset($_POST['submit'])){
    $filename = "user.dat";
    $myfile = fopen($filename, "a") or die("File error");
    fwrite($myfile, $_POST['username']."|".$_POST['nama']."|".$_POST['password']."\n");
    fclose($myfile);
    echo("<script>window.location.href=('login.html')</script>");
}
?>
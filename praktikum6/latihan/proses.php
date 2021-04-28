<?php

$filename = "user.dat";
$myfile = fopen($filename, "r") or die("file tidak bisa dibuka!");
$dbUser = array();
while(!feof($myfile)){
    $user = explode("|", fgets($myfile));
    array_push($dbUser, $user);
}
fclose($myfile);

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];


    foreach($dbUser as $profile_user){
        if ((trim($profile_user[0]) == $username) && (trim($profile_user[2]) == $password)){

            setcookie("namauser", trim($profile_user[1]), time()+3*30*24*3600,"/");
            $_COOKIE['namauser'] = trim($profile_user[1]);
            setcookie("acak", rand(1,100), time()+3*30*24*3600,"/");
            
            header("Location: gameacak.php");

        }
    }

    echo"<h3>Login gagal</h3>";
    echo"<p>Silahkan <a href='login.html'>login kembali</a></p>";
}


?>
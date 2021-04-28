<?php
setcookie("namauser", "", time()+3*30*24*3600,"/");

header("Location: login.html");
?>
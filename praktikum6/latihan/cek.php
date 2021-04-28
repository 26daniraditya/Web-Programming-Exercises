<?php

if (!isset($_COOKIE['namauser'])){
    echo "<p>Maaf anda tidak memiliki akses ke halaman ini</p>";
    echo "<p>Silahkan <a href=index.html>login</a> terlebih dahulu</p>";

    exit();
}

?>
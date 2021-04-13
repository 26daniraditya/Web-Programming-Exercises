<?php
$namaFile = "datatabung.dat";
$myFile = fopen($namaFile, "r") or die("File tidak bisa dibuka!");
echo "<style>
    h1 {
        text-align:center;
    }th {
        font-size: 25px;
         text-align:center;
    }td{
        font-size: 25px;
         text-align:center;
    }
</style>
";
echo "<h1>DATA UKURAN TABUNG</h1>";
echo "<center><br>";
echo "<table border='1'>";
echo("<tr>
        <th>NAMA TABUNG</th>
        <th>DIAMETER</th>
        <th>TINGGI</th>
        <th>LUAS</th>
    </tr>");
while (!feof($myFile)){
    echo("<tr>");
    $dataTabung = explode(",", fgets($myFile));
    $link = "http://localhost/praktikum5/hitungluas.php?namatabung=$dataTabung[0]&diameter=$dataTabung[1]&tinggi=$dataTabung[2]";
    echo("
        <td>$dataTabung[0]</td>
        <td>$dataTabung[1]</td>
        <td>$dataTabung[2]</td>
        <td><a href=$link target='_blank'>view</a></td>
        ");
    echo("</tr>");
};
echo("</table>");
fclose($myFile);
?>
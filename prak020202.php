<html>
 	<head>TABEL</head>
 	<body>
 		<?php
$baris = 4;
$kolom = 5;
$k = 1;
echo "<table border='1'>";
for($i =0; $i < 4; $i++){
 	echo "<tr></tr>";
 	for ($j = 0; $j < 5; $j++){
 			echo "<td>$k</td>";
 			$k = $k + 1;
 		}
 	} 	
?>
</body>
</html>
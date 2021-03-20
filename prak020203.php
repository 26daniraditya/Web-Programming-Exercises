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
 		if($k % 2 == 0){
 				 echo "<td style=background-color:red;color:white >$k</td>";
 				 $k = $k + 1;
 			}
 			else{
 				echo "<td style=color:red;background-color: white>$k</td>";
 			
 			$k = $k + 1;
 		}
 	} 	
 }
?>
</body>
</html>
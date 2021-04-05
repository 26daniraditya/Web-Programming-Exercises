<?php
function buatBintang($n){
	echo "<pre>";
	for($i=0; $i<$n; $i++){
		for($j=0; $j<$i;$j++){
	echo "*";
}
echo "\n";
	}
	echo "</pre>";
}

buatBintang (7);
buatBintang (5);
?>
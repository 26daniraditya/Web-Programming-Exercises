<?php
function hitungGaji($gol, $masaKerja){
	if($gol=="A"){
	if ($masaKerja <10){
		$gaji=5000000;
	}
	else{
		$gaji=7000000;
	}
}

else if ($gol=="B"){
	if ($masaKerja <10){
		$gaji=6000000;
	}
	else{
		$gaji=8000000;
	}
}
	return $gaji;}
	echo "contoh hitung gaji Gol A 5 Tahun Kerja : ".hitungGaji('A', 5);
	echo ", contoh hitung gaji Gol A 10 Tahun Kerja : ".hitungGaji('A', 10);
	
	echo ", contoh hitung gaji Gol B 5 Tahun Kerja : ".hitungGaji('B', 5);
	echo ", contoh hitung gaji Gol B 10 Tahun Kerja : ".hitungGaji('B', 10);
?>
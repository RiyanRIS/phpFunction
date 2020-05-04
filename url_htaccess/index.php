<?php 
echo "base_url/tes/riyan \n";
if(!isset($_GET['data'])){
	echo "<h1 style='color:red'>KODE SALaaAH</h1>";
}else{
	if ($_GET['data'] == "riyan") {
		include("riyan.html");
	}else{
		echo "<h1 style='color:red'>KODE SALAH</h1>";
	}
}
?>
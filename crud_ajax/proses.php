<?php 
$koneksi = mysqli_connect("localhost","root","","hapus");

if ($_GET['k'] == 'insert') {
	$nama = $_POST['nama'];
	$umur = $_POST['umur'];
	$query = mysqli_query($koneksi,"INSERT INTO `test`(`nama`, `umur`) VALUES ('$nama','$umur')");
	echo json_encode($query);
}elseif($_GET['k'] == 'show') {
	$query = mysqli_query($koneksi,"SELECT * FROM `test`");
	$data = mysqli_fetch_all($query,MYSQLI_ASSOC);
	echo json_encode($data);
}elseif ($_GET['k'] == 'update') {
	$nama = $_POST['nama'];
	$umur = $_POST['umur'];
	$kode = $_POST['kode'];
	$query = mysqli_query($koneksi,"UPDATE `test` SET `nama`='$nama',`umur`='$umur' WHERE `nama`='$kode'");
	echo json_encode($query);
}else if($_GET['k'] == 'delete') {
	$kode = $_POST['kode'];
	$query = mysqli_query($koneksi,"DELETE FROM `test` WHERE `nama` = '$kode'");
	echo json_encode($query);

}

 ?>
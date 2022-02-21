<?php
require_once "../_config/config.php";
if (!isset($_SESSION['user'])) {
	echo "<script>window.location='".base_url('../auth/login.php')."';</script>";
} 

$id_blog = $_GET["id_blog"];
$sql = "SELECT * FROM blog WHERE id_blog='$id_blog'";
$query = mysqli_query($con, $sql) or die (mysqli_error());
$data = mysqli_fetch_array($query);
$patch = '../_asset/upload_gambar/'.$data['gambar'];

if(file_exists($patch)){
	unlink($patch);
};

mysqli_query($con, "DELETE FROM blog WHERE id_blog = '$_GET[id_blog]'") or die (mysqli_error($con));
echo "<script>window.location='data.php';</script>";
?>


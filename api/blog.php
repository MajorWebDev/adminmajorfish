<?php
include('../_config/config.php');

$sql = "SELECT * FROM blog";
$result = mysqli_query($con, $sql);

$array = array();
if (mysqli_num_rows($result) > 0) {
    
    while($row = mysqli_fetch_array($result)) {
        $data = array(
            'id_blog' => $row['id_blog'],
            'gambar' => $row['gambar'],
            'judul' => $row['judul'],
            'pembuat' => $row['pembuat'],
            'isi' => $row['isi'],
            'tanggal' => $row['tanggal'],
        );
        array_push($array, $data);
    }
}
header('Content-Type: application/json');
echo json_encode($array);
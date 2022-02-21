<?php
require_once "../_config/config.php";

if(isset($_POST['add'])) {
    $rand = rand();
    $ekstensi =  array('png','jpg','jpeg','gif');
    $filename = $_FILES['gambar']['name'];
    $ukuran = $_FILES['gambar']['size'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);

    $judul = trim(mysqli_real_escape_string($con, $_POST['judul']));
    $pembuat = trim(mysqli_real_escape_string($con, $_POST['pembuat']));
    $isi = trim(mysqli_real_escape_string($con, $_POST['isi']));
    $tanggal = trim(mysqli_real_escape_string($con, $_POST['tanggal']));

    $pembuat = $_SESSION['user'];

    if(!in_array($ext,$ekstensi) ) {
        header("location:add.php?alert=gagal_ekstensi");
    }else{
        if($ukuran < 1044070){	
            $awal = "post";	
            $xx = $awal.'-'.$rand.'_'.$filename;
            move_uploaded_file($_FILES['gambar']['tmp_name'], '../_asset/upload_gambar/'.$awal.'-'.$rand.'_'.$filename);
            mysqli_query($con, "INSERT INTO blog (gambar, judul, pembuat, isi, tanggal) VALUES ('$xx','$judul','$pembuat','$isi','$tanggal')") or die (mysqli_error($con));
            header("location:add.php?alert=berhasil");
        }else{
            header("location:add.php?alert=gagal_ukuran");
        }
    }
} else if(isset($_POST['edit'])) {
    $id_blog = trim(mysqli_real_escape_string($con, $_POST['id_blog']));
    $filename = $_FILES['gambar']['name'];
    $judul = trim(mysqli_real_escape_string($con, $_POST['judul']));
    $pembuat = trim(mysqli_real_escape_string($con, $_POST['pembuat']));
    $isi = trim(mysqli_real_escape_string($con, $_POST['isi']));
    $tanggal = trim(mysqli_real_escape_string($con, $_POST['tanggal']));

    if($filename != "") {
        $awal = "post";
        $rand = rand();
        $ekstensi =  array('png','jpg','jpeg','gif');
        $filebaru = $_FILES['gambar']['name'];
        $ukuran = $_FILES['gambar']['size'];
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
		
		$sql = "SELECT * FROM blog WHERE id_blog='$id_blog'";
		$query = mysqli_query($con, $sql) or die (mysqli_error());
		$data = mysqli_fetch_array($query);
		$patch = '../_asset/upload_gambar/'.$data['gambar'];
		
        if(!in_array($ext,$ekstensi) ) {
            header("location:edit.php?id_blog=$id_blog&alert=gagal_ekstensi");
        } else{
            if($ukuran < 1044070){	
                $xx = $awal.'-'.$rand.'_'.$filebaru;
                move_uploaded_file($_FILES['gambar']['tmp_name'], '../_asset/upload_gambar/'.$awal.'-'.$rand.'_'.$filebaru);
                mysqli_query($con, "UPDATE blog SET gambar = '$xx', judul = '$judul', pembuat = '$pembuat', isi = '$isi', tanggal = '$tanggal' WHERE id_blog = '$id_blog'") or die (mysqli_error($con));
                header("location:edit.php?id_blog=$id_blog&alert=berhasil");
				
				if(file_exists($patch)){
				unlink($patch);
				}
            } else{
                header("location:edit.php?id_blog=$id_blog&alert=gagal_ukuran");
            }
        }
    } else {
        mysqli_query($con, "UPDATE blog SET judul = '$judul', pembuat = '$pembuat', isi = '$isi', tanggal = '$tanggal' WHERE id_blog = '$id_blog'") or die (mysqli_error($con));
        header("location:edit.php?id_blog=$id_blog&alert=berhasil");
    }
}
?>
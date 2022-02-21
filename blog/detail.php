<?php include_once('../dashboard/_header.php'); ?>
    <?php 
        $id_blog = $_GET["id_blog"];
        $sql = "select * from blog WHERE id_blog = '$id_blog'";
        $res = mysqli_query($con, $sql);
        while ($data = mysqli_fetch_array($res)) {
    ?>

    <div class="box">
        <h1><?= $data["judul"]?></h1>
        <h6>
            By : <?= $data["pembuat"]?>. <small class="text-muted">Upload pada <?=$data["tanggal"]?></small>
        </h6>
        <img src="../_asset/upload_gambar/<?= $data["gambar"]?>" class="img-fluid rounded mx-auto d-block">
        <p><?= $data["isi"]?></p>
    </div>
    
    <?php
            }
    ?>
    <a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
<script src="../_asset/js/jquery.js"></script>
<script src="../_asset/js/bootstrap.min.js"></script>
<?php include_once('../dashboard/_footer.php'); ?>
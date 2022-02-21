<?php include_once('../dashboard/_header.php'); ?>
    <div class="box">
        <h1>Artikel</h1>
        <h4>
            <small>Tambah Artikel</small>
            <div class="float-right">
                <a href="data.php" class="btn btn-warning btn-xs"><i class="fa fa-chevron-left"></i> Kembali</a>
            </div>
        </h4>
        <?php 

            $tz = 'Asia/Jakarta';
            $dt = new DateTime("now", new DateTimeZone($tz));
            $timestamp = $dt->format('Y-m-d G:i:s');

            if(isset($_GET['alert'])){
                if($_GET['alert']=='gagal_ekstensi'){
        ?>
                    <div class="row">
					    <div class="col-lg-12 col-lg-offset-3">
						    <div class="alert alert-danger aler-dismissable" role="alert">
						        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
						        <strong>Peringatan!</strong> <br> Ekstensi Tidak Diperbolehkan
						    </div>
					    </div>
				    </div>							
        <?php
                }elseif($_GET['alert']=="gagal_ukuran"){
        ?>
                    <div class="row">
					    <div class="col-lg-12 col-lg-offset-3">
						    <div class="alert alert-danger aler-dismissable" role="alert">
						        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
						        <strong>Peringatan!</strong> <br> Ukuran File Terlalu Besar
						    </div>
					    </div>
				    </div>							
        <?php
                }elseif($_GET['alert']=="berhasil"){
        ?>
                    <div class="row">
					    <div class="col-lg-12 col-lg-offset-3">
						    <div class="alert alert-success aler-dismissable" role="alert">
						        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
						        <strong>Sukses!</strong> <br> Data Berhasil ditambahkan
						    </div>
					    </div>
				    </div>							
        <?php
                }
            }
        ?>

        <div class="row"  style="margin-top :40px;">
            <div class="col-lg-12 col-lg-offset-3">
                <form action="proses.php" enctype="multipart/form-data" method="post">
                    <div class="form-group">
                        <label for="blog">Gambar</label>
                        <input type="file" name="gambar" class="form-control-file">
                    </div>
                    <div class="form-group">
                        <label for="blog">Judul</label>
                        <input type="text" name="judul" id="judul" class="form-control" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="blog">isi</label>
                        <textarea type="text" name="isi" id="isi" class="ckeditor" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="blog">Tanggal</label>
                        <input type="text" name="tanggal" id="tanggal" value="<?=$timestamp?>" class="form-control" required readonly>
                    </div>
                    <div class="form-group float-right">
                        <input type="submit" name="add" value="Simpan" class="btn btn-success">
                    </div>                            
                </form>
            </div>    
        </div>
    </div>
    <a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
<script src="../_asset/js/jquery.js"></script>
<script src="../_asset/js/bootstrap.min.js"></script>
<?php include_once('../dashboard/_footer.php'); ?>
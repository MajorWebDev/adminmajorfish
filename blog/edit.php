<?php include_once('../dashboard/_header.php'); ?>
    <div class="box">
        <h1>Artikel</h1>
        <h4>
            <small>Edit Artikel</small>
            <div class="float-right">
                <a href="data.php" class="btn btn-warning btn-xs"><i class="fa fa-chevron-left"></i> Kembali</a>
            </div>
        </h4>
        <?php 
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
						        <strong>Sukses!</strong> <br> Data Berhasil diedit
						    </div>
					    </div>
				    </div>							
        <?php
                }
            }
        ?>    
        <?php
            $id = @$_GET['id_blog'];
            $sql_blog = mysqli_query($con, "SELECT * FROM blog WHERE id_blog = '$id'") or die (mysqli_error($con));
            $data = mysqli_fetch_array($sql_blog);
        ?>
        <div class="row"  style="margin-top :40px;">
            <div class="col-lg-12 col-lg-offset-3">
                <form action="proses.php" enctype="multipart/form-data" method="post">
                    <div class="form-group">
                        <label for="blog">Gambar</label> <br>
                        <img src="../_asset/upload_gambar/<?=$data['gambar']?>">
                        <input type="file" name="gambar" class="form-control-file">
                        <em>Abaikan jika tidak merubah gambar produk</em>
                    </div>
                    <div class="form-group">
                        <label for="blog">ID</label>
                        <input type="text" name="id_blog" id="id_blog" class="form-control" value="<?=$data['id_blog']?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="blog">Judul</label>
                        <input type="text" class="form-control" name="judul" id="judul" value="<?=$data['judul']?>" required>
                    </div>
                    <div class="form-group">
                        <label for="blog">Pembuat</label>
                        <input type="text" class="form-control" name="pembuat" id="pembuat" value="<?=$data['pembuat']?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="blog">Isi</label>
                        <textarea type="text" class="ckeditor" name="isi" id="isi" required><?=$data['isi']?></textarea>
                    </div> 
                    <div class="form-group">
                        <label for="blog">Tanggal</label>
                        <input type="text" class="form-control" name="tanggal" id="tanggal" value="<?=$data['tanggal']?>" readonly>
                    </div>
                    <div class="form-group float-right">
                        <input type="submit" name="edit" value="Simpan" class="btn btn-success">
                    </div>
                </form>
            </div>    
        </div>
    </div>
    <a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
<script src="../_asset/js/jquery.js"></script>
<script src="../_asset/js/bootstrap.min.js"></script>
<?php include_once('../dashboard/_footer.php'); ?>
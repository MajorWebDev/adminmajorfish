<?php include_once('../dashboard/_header.php'); ?>
    <div class="box">
        <h1>Ikan</h1>
        <h4>
            <small>Tambah Data Ikan</small>
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
						        <strong>Sukses!</strong> <br> Data Berhasil ditambahkan
						    </div>
					    </div>
				    </div>							
        <?php
                }
            }
        ?>

        <div class="row"  style="margin-top :40px;">
            <div class="col-lg-6 col-lg-offset-3">
                <form action="proses.php" enctype="multipart/form-data" method="post">
                    <div class="form-group">
                        <label for="ikan">Gambar Ikan</label>
                        <input type="file" name="gambar" class="form-control-file" required>
                    </div>
                    <div class="form-group">
                        <label for="ikan">Kategori</label>
                        <select name="kategori" class="form-control">
                            <option value="0">Halfmoon</option>
                            <option value="1">Plakat</option>
                            <option value="2">Giant</option>
                            <option value="3">Dumbo</option>
                            <option value="4">Ear</option>
                            <option value="5">Slayer</option>
                            <option value="6">Alien</option>
                            <option value="7">Crown Tail</option>
                            <option value="8">Double Tail</option>
                            <option value="9">Fancy</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="ikan">Nama Ikan</label>
                        <input type="text" name="nama" id="nama" class="form-control" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="ikan">Deskripsi</label>
                        <textarea type="text" name="deskripsi" id="deskripsi" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="ikan">Harga</label>
                        <input type="text" name="harga" id="harga" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="ikan">Status</label>
                        <select name="status" class="form-control">
                            <option value="Ada">Ada</option>
                            <option value="Habis">Habis</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="ikan">Rating</label>
                        <input type="text" name="rating" id="rating" class="form-control">
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
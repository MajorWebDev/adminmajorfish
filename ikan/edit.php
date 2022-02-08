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
        <?php
            $id = @$_GET['id_ikan'];
            $sql_ikan = mysqli_query($con, "SELECT * FROM ikan WHERE id_ikan = '$id'") or die (mysqli_error($con));
            $data = mysqli_fetch_array($sql_ikan);
        ?>
        <div class="row"  style="margin-top :40px;">
            <div class="col-lg-6 col-lg-offset-3">
                <form action="proses.php" enctype="multipart/form-data" method="post">
                    <div class="form-group">
                        <label for="ikan">Gambar Ikan</label> <br>
                        <img src="../_asset/upload_gambar/<?=$data['gambar']?>" width="50px" height="50px">
                        <input type="file" name="gambar" class="form-control-file">
                        <em>Abaikan jika tidak merubah gambar produk</em>
                    </div>
                    <div class="form-group">
                        <label for="ikan">ID</label>
                        <input type="text" name="id_ikan" id="id_ikan" class="form-control" value="<?=$data['id_ikan']?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="ikan">Kategori</label>
                        <select name="kategori" class="form-control">
                            <?php
                                if ($data['kategori'] == 0) { ?>
                                    <option value="0">Halfmoon</option>
                                    <option value="1">Plakat</option>
                                    <option value="2">Giant</option>
                                    <option value="3">Dumbo</option>
                                    <option value="4">Ear</option>
                                    <option value="5">Slayer</option>
                                    <option value="6">Alien</option>
                                    <option value="7">Crown Tail</option>
                                    <option value="8">Double Tail</option>
                                    <option value="9">Fancy</option> <?php
                                } elseif ($data['kategori'] == 1) { ?>
                                    <option value="1">Plakat</option>
                                    <option value="0">Halfmoon</option>
                                    <option value="2">Giant</option>
                                    <option value="3">Dumbo</option>
                                    <option value="4">Ear</option>
                                    <option value="5">Slayer</option>
                                    <option value="6">Alien</option>
                                    <option value="7">Crown Tail</option>
                                    <option value="8">Double Tail</option>
                                    <option value="9">Fancy</option> <?php
                                } elseif ($data['kategori'] == 2) { ?>
                                    <option value="2">Giant</option>
                                    <option value="0">Halfmoon</option>
                                    <option value="1">Plakat</option>
                                    <option value="3">Dumbo</option>
                                    <option value="4">Ear</option>
                                    <option value="5">Slayer</option>
                                    <option value="6">Alien</option>
                                    <option value="7">Crown Tail</option>
                                    <option value="8">Double Tail</option>
                                    <option value="9">Fancy</option> <?php
                                } elseif ($data['kategori'] == 3) { ?>
                                    <option value="3">Dumbo</option>
                                    <option value="0">Halfmoon</option>
                                    <option value="1">Plakat</option>
                                    <option value="2">Giant</option>                                    
                                    <option value="4">Ear</option>
                                    <option value="5">Slayer</option>
                                    <option value="6">Alien</option>
                                    <option value="7">Crown Tail</option>
                                    <option value="8">Double Tail</option>
                                    <option value="9">Fancy</option> <?php
                                } elseif ($data['kategori'] == 4) { ?>
                                    <option value="4">Ear</option>
                                    <option value="0">Halfmoon</option>
                                    <option value="1">Plakat</option>
                                    <option value="2">Giant</option>
                                    <option value="3">Dumbo</option>
                                    <option value="5">Slayer</option>
                                    <option value="6">Alien</option>
                                    <option value="7">Crown Tail</option>
                                    <option value="8">Double Tail</option>
                                    <option value="9">Fancy</option> <?php
                                } elseif ($data['kategori'] == 5) { ?>
                                    <option value="5">Slayer</option>
                                    <option value="0">Halfmoon</option>
                                    <option value="1">Plakat</option>
                                    <option value="2">Giant</option>
                                    <option value="3">Dumbo</option>
                                    <option value="4">Ear</option>
                                    <option value="6">Alien</option>
                                    <option value="7">Crown Tail</option>
                                    <option value="8">Double Tail</option>
                                    <option value="9">Fancy</option> <?php
                                } elseif ($data['kategori'] == 6) { ?>
                                    <option value="6">Alien</option>
                                    <option value="0">Halfmoon</option>
                                    <option value="1">Plakat</option>
                                    <option value="2">Giant</option>
                                    <option value="3">Dumbo</option>
                                    <option value="4">Ear</option>
                                    <option value="5">Slayer</option>                                    
                                    <option value="7">Crown Tail</option>
                                    <option value="8">Double Tail</option>
                                    <option value="9">Fancy</option> <?php
                                } elseif ($data['kategori'] == 7) { ?>
                                    <option value="7">Crown Tail</option>
                                    <option value="0">Halfmoon</option>
                                    <option value="1">Plakat</option>
                                    <option value="2">Giant</option>
                                    <option value="3">Dumbo</option>
                                    <option value="4">Ear</option>
                                    <option value="5">Slayer</option>
                                    <option value="6">Alien</option>
                                    <option value="8">Double Tail</option>
                                    <option value="9">Fancy</option> <?php
                                } elseif ($data['kategori'] == 8) { ?>
                                    <option value="8">Double Tail</option>
                                    <option value="0">Halfmoon</option>
                                    <option value="1">Plakat</option>
                                    <option value="2">Giant</option>
                                    <option value="3">Dumbo</option>
                                    <option value="4">Ear</option>
                                    <option value="5">Slayer</option>
                                    <option value="6">Alien</option>                                    
                                    <option value="7">Crown Tail</option>                                    
                                    <option value="9">Fancy</option> <?php
                                } else { ?>
                                    <option value="9">Fancy</option>
                                    <option value="0">Halfmoon</option>
                                    <option value="1">Plakat</option>
                                    <option value="2">Giant</option>
                                    <option value="3">Dumbo</option>
                                    <option value="4">Ear</option>
                                    <option value="5">Slayer</option>
                                    <option value="6">Alien</option>                                    
                                    <option value="7">Crown Tail</option>
                                    <option value="8">Double Tail</option> <?php
                                }
                            ?> 
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="ikan">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama" value="<?=$data['nama']?>" required>
                    </div>
                    <div class="form-group">
                        <label for="ikan">Deskripsi</label>
                        <textarea type="text" class="form-control" name="deskripsi" id="deskripsi" required><?=$data['deskripsi']?></textarea>
                    </div> 
                    <div class="form-group">
                        <label for="ikan">Harga</label>
                        <input type="text" class="form-control" name="harga" id="harga" value="<?=$data['harga']?>" required>
                    </div>
                    <div class="form-group">
                        <label for="ikan">Status</label>
                        <select name="status" class="form-control">
                            <?php
                                if ($data['status'] === Ada) { ?>
                                    <option value="Ada">Ada</option>
                                    <option value="Habis">Habis</option> <?php
                                } else { ?>
                                    <option value="Habis">Habis</option>
                                    <option value="Ada">Ada</option> <?php
                                }
                            ?> 
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="ikan">Rating</label>
                        <input type="text" class="form-control" name="rating" id="rating" value="<?=$data['rating']?>" required>
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
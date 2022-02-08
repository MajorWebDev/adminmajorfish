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
                    <button type="button" data-dismiss="alert" aria-hidden="true">Close X</button>
                    <h4>Peringatan !</h4>
                    Ekstensi Tidak Diperbolehkan							
        <?php
                }elseif($_GET['alert']=="gagal_ukuran"){
        ?>
                    <button type="button" data-dismiss="alert" aria-hidden="true">Close X</button>
                    <h4>Peringatan !</h4>
                    Ukuran File terlalu Besar							
        <?php
                }elseif($_GET['alert']=="berhasil"){
        ?>
                    <button type="button" data-dismiss="alert" aria-hidden="true">Close X</button>
                    <h4>Success</h4>
                    Berhasil Disimpan								
        <?php
                }
            }
        ?>

        <div class="row"  style="margin-top :40px;">
            <div class="col-lg-6 col-lg-offset-3">
                <form action="proses.php" enctype="multipart/form-data" method="post">
                    <div class="form-group">
                        <label for="ikan">Gambar Ikan</label>
                        <input type="file" name="gambar" required class="form-control-file">
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
<?php include_once('../dashboard/_footer.php'); ?>
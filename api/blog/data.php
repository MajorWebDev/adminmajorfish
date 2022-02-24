<?php include_once('../dashboard/_header.php'); ?>
    <div class="box">
        <h1>Artikel</h1>
        <h4>
            <small>Data Artikel</small>
            <div class="float-right">
                <a href="" class="btn btn-default btn-xs"><i class="fa fa-refresh"></i></a>
                <a href="add.php" class="btn btn-success btn-xs"><i class="fa fa-plus"></i>Tambah Artikel</a>
            </div>
        </h4>
        <div style="margin-bottom :40px;">
            <form class="form-inline" action="" method="post">
                <div class="form-group">    
                    <input type="text" name="pencarian" class="form-control" placeholder="Pencarian">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary"><span class="fa fa-search" aria-hidden="true">CARI</span></button>
                </div>
            </form>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No. </th>
                        <th>Judul Artikel</th>
                        <th>Pembuat</th>
                        <th>Isi Artikel</th>
                        <th>Tgl Publish</th>
                        <th><i class="fa fa-cog">Pengaturan</i></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $batas = 10;
                        $hal = @$_GET['hal'];
                        if(empty($hal)) {
                        $posisi = 0;
                        $hal = 1;
                    } else {
                        $posisi = ($hal - 1) * $batas;
                    }
                        $no = 1;
                        if($_SERVER['REQUEST_METHOD'] == "POST") {
                            $pencarian = trim(mysqli_real_escape_string($con, $_POST['pencarian']));
                            if($pencarian != '') {
                                $sql = "SELECT * FROM blog WHERE judul LIKE '%$pencarian%'";
                                $query = $sql;
                                $queryJml = $sql;
                            } else {
                                $query = "SELECT * FROM blog LIMIT $posisi, $batas";
                                $queryJml = "SELECT * FROM blog";
                                $no = $posisi + 1;
                            }
                        } else {
                            $query = "SELECT * FROM blog LIMIT $posisi, $batas";
                            $queryJml = "SELECT * FROM blog";
                            $no = $posisi + 1;
                        }
                            
                        $sql_ikan = mysqli_query($con, $query) or die (mysqli_error($con));
                        if(mysqli_num_rows($sql_ikan) > 0) {
                            while($data = mysqli_fetch_array($sql_ikan)) { ?>
                            <tr>
                                <td><?=$no++?></td>
                                <td><?=$data['judul']?></td>
                                <td><?=$data['pembuat']?></td>
                                <td><?=substr($data['isi'],0,100)?>.... <a href="detail.php?id_blog=<?= $data["id_blog"] ?>">Read More</a></td>
                                <td><?=$data['tanggal']?></td>
                                <td class="text-center">
                                <a href="edit.php?id_blog=<?=$data['id_blog']?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></a> 
                                <a href="delete.php?id_blog=<?=$data['id_blog']?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin akan menghapus data?')"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php
                            }
                        } else {
                            echo "<tr><td colspan=\"4\" align=\"center\">Data Tidak Ditemukan!</td></tr>";
                        }
                        ?>
                </tbody>
            </table>
        </div>
        <div class="clearfix">
            <?php
                if(@$_POST['pencarian'] == '') { ?>
                    <div class="float-left">
                        <?php
                            $jml = mysqli_num_rows(mysqli_query($con, $queryJml));
                            echo "Jumlah Data : <b>$jml</b>";                
                        ?>
                    </div>
                    <div class="float-right">
                        <ul class="pagination" style="margin:0">
                            <?php
                                $jml_hal = ceil($jml / $batas);
                                for ($i=1; $i <= $jml_hal; $i++) {
                                    if($i != $hal) {
                                        echo "<li class=\"page-item\"><a class=\"page-link\" href=\"?hal=$i\">$i</a></li>";
                                    } else {
                                        echo "<li class=\"page-item\"><a class=\"page-link\">$i</a></li>";
                                    }
                                }
                            ?>
                        </ul>
                    </div>
                    <?php            
                } else { ?>
                    <div class="float-left">
                        <?php
                            $jml = mysqli_num_rows(mysqli_query($con, $queryJml));
                            echo "Data Hasil Pencarian : <b>$jml</b>";
                        ?>     
                    </div>
                <?php
                }
            ?>
        </div>
    </div>
    <a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
<?php include_once('../dashboard/_footer.php'); ?>


<?php
$nope=$_GET['nope'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM data_siswa WHERE id ='$nope'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
$ambil1=  mysqli_query($koneksi, "SELECT * FROM data_pelajaran") or die ("SQL Edit error");

?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Tambah Data Pinjaman Arsip</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="nip" class="col-sm-3 control-label">Nip</label>
                            <div class="col-sm-9">
								<input type="text" name="nip" value="<?=$data['nip']?>" class="form-control" id="inputEmail3" placeholder="Nip" readonly="true">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">Nama Lengkap</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" value="<?=$data['nama']?>" class="form-control" id="inputEmail3" placeholder="Nama Lengkap" readonly="true">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jk" class="col-sm-3 control-label">Jenis Kelamin</label>
                            <div class="col-sm-9">
                                <input type="text" name="jk" value="<?=$data['jk']?>" class="form-control" id="inputEmail3" placeholder="Jenis Kelamin" readonly="true">
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat" value="<?=$data['alamat']?>" class="form-control" id="inputEmail3" placeholder="Tanggal Lahir" readonly="true">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="mata" class="col-sm-3 control-label">Pelajaran</label>
                               <div class="col-sm-3 ">
                               
                                <select name="mata" class="form-control">

                                <?php
                                    while($data1= mysqli_fetch_array($ambil1)){
                               ?>

                                <option value="<?=$data1['pelajaran']?>" selected"><?php echo $data1['pelajaran']; ?></option>    
                                    <!--ambil data dari database, dan tampilkan kedalam tabel-->

                                 <?php
                                 }
                                 ?>  
                   
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Peminjaman</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=arsip&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Arsip
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
    $k=$_POST['nip'];
	$n=$_POST['nama'];
    $jk=$_POST['jk'];
    $alamat=$_POST['alamat'];
    $mata=$_POST['mata'];
    

    //buat sql
    $ambil3=  mysqli_query($koneksi, "SELECT * FROM data_pelajaran WHERE pelajaran ='$mata'") or die ("SQL pilihan error");
    $data3= mysqli_fetch_array($ambil3);
     
    $kode = $data3['kode'];
    $kode2 = $data3['pelajaran'];
    $kode3 = $data3['Pengajar'];


    $sql="INSERT INTO data_pilihan VALUES ('','$k','$n','$jk','$alamat','$kode','$kode2','$kode3')";
	// $sqlArsip="UPDATE arsip SET status='Dipinjam' WHERE no_perkara='$nope'";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan pilihan Error");
	// $queryArsip=  mysqli_query($koneksi, $sqlArsip) or die ("SQL Simpan Arsip Error"); 
    if ($query){
        echo "<script>window.location.assign('?page=pilihan&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>

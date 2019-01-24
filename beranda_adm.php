<style>
.modal-header {
  font-family: Arial, Helvetica, sans-serif;
  color: white;
  background: linear-gradient(to bottom, #003366 0%, #336699 100%);

}
</style>
<div class="container">
    <div class="row">
        <div class ="col-xs-12">

            <div class="alert alert-info">
                Selamat datang kembali <strong><?=$_SESSION['nama']?></strong>
            </div>
        </div>
    </div>
    <div class="row">
                
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-mortar-board  fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"></div>
                                    <div>Siswa</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left"><a class="btn btn-warning " href="#myModal1" data-toggle="modal" data-target="#myModal1" role="button">Tambah&raquo;</a></span>


                                <span class="pull-right" ><a class="btn btn-primary " href="?page=siswa&actions=tampil">View Details&raquo;</a></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
               
                <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog" style="width:800px">
          <div class="modal-content">
          <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <center><h4 class="modal-title" id="myModalLabel">TAMBAH SISWA</h4></center>
          </div>
          <div class="modal-body">
            <!-- DAFTAR -->
          <div class="panel-body" style="padding-bottom:0px;">
          <form  action="#" method="post" class="form-horizontal">
                        <div class="form-group">
                            <label for="nama_s" class="col-sm-3 control-label">Nama Lengkap</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" class="form-control" id="inputEmail3" placeholder="Nama Lengkap" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nip_s" class="col-sm-3 control-label">Nip</label>
                            <div class="col-sm-9">
                                <input type="text" name="nip" class="form-control" id="inputEmail3" placeholder="Nip (Nomor Induk Pelajar)" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jk" class="col-sm-3 control-label">Jenis Kelamin</label>
                               <div class="col-sm-3 ">
                                <select name="jk" class="form-control">
                                    <option value="Pria">Pria</option>
                                    <option value="Wanita">Wanita</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="alamat_s" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat" class="form-control" id="inputPassword3" placeholder="Alamat" required>
                            </div>
                        </div>
<?php
if (isset($_POST['ss1'])){
    //Ambil data dari form
  $nama_l=$_POST['nama'];
    $nip_s=$_POST['nip'];
     $jk_s=$_POST['jk'];
      $alamat_s=$_POST['alamat'];

 
    
    //buat sql
    $sql="INSERT INTO data_siswa VALUES ('','$nama_l','$nip_s','$jk_s','$alamat_s')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Arsip Error");
    if ($query){
        echo "<script>window.location.assign('?page=siswa&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
          
          <div class="col-sm-13">
          <div class="modal-footer">
           
            <input class='btn btn-outline btn-primary' type='submit' value='DAFTAR' name="ss1" style="float:right; margin-left:5px;" />
          </div>
          </div>
          </form>
          </div>
          </div>
          </div>
          </div>
          </div>

                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-graduation-cap  fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"></div>
                                    <div>Data Mata Pelajaran</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                               <span class="pull-left"><a class="btn btn-warning " href="#myModal2" data-toggle="modal" data-target="#myModal2" role="button">Tambah &raquo;</a></span>
                                <span class="pull-right"><a class="btn btn-primary " href="?page=peminjaman&actions=tampil">View Details&raquo;</a></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
          <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog" style="width:800px">
          <div class="modal-content">
          <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <center><h4 class="modal-title" id="myModalLabel">Mata Pelajaran</h4></center>
          </div>
          <div class="modal-body">
             <!-- DAFTAR -->
          <div class="panel-body" style="padding-bottom:0px;">
          <form method='post' action="" class="form-horizontal">
                        <div class="form-group">
                            <label for="kode" class="col-sm-3 control-label">Kode Pelajaran</label>
                            <div class="col-sm-9">
                                <input type="text" name="kode" class="form-control" id="inputEmail3" placeholder="Kode Pelajaran" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pelajaran" class="col-sm-3 control-label">Mata Pelajaran</label>
                            <div class="col-sm-9">
                                <input type="text" name="pelajaran" class="form-control" id="inputEmail3" placeholder="Mata Pelajaran" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pelajaran" class="col-sm-3 control-label">Guru</label>
                            <div class="col-sm-9">
                                <input type="text" name="pengajar" class="form-control" id="inputEmail3" placeholder="Mata Pelajaran" required>
                            </div>
                        </div>
          <div class="col-sm-13">
          <div class="modal-footer">
            <input class='btn btn-outline btn-primary' type='submit' value='DAFTAR' name="ss2" style="float:right; margin-left:5px;" />
          </div>
          </div>
          </form>
          </div>
          </div>
          </div>
          </div>
          </div>
          <?php
if (isset($_POST['ss2'])){
    //Ambil data dari form
  $kode=$_POST['kode'];
    $pelajaran=$_POST['pelajaran'];
    $pengajar=$_POST['pengajar'];
    
    //buat sql
    $sql="INSERT INTO data_pelajaran VALUES ('','$kode','$pelajaran','$pengajar')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Arsip Error");
    if ($query){
        echo "<script>window.location.assign('?page=peminjaman&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>


<!--                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-folder-open  fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"></div>
                                    <div>Jurusan</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                              <span class="pull-left"><a class="btn btn-warning " href="#myModal3" data-toggle="modal" data-target="#myModal3" role="button">Tambah &raquo;</a></span>
                               <span class="pull-right"><a class="btn btn-primary " href="?page=peminjaman&actions=tampil">View Details&raquo;</a></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
          <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog" style="width:800px">
          <div class="modal-content">
          <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <center><h4 class="modal-title" id="myModalLabel">Jurusan</h4></center>
          </div>
          <div class="modal-body">
                                 DAFTAR 
          <div class="panel-body" style="padding-bottom:0px;">
          <form method='GET' action='Tambah_kelas.php' class="form-horizontal">
                        <div class="form-group">
                            <label for="no_rak" class="col-sm-3 control-label">Kode Jurusan</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_rak" class="form-control" id="inputEmail3" placeholder="Kode Jurusan" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="no_rak" class="col-sm-3 control-label">Jurusan</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_rak" class="form-control" id="inputEmail3" placeholder="Jurusan" required>
                            </div>
                        </div>
          <div class="col-sm-13">
          <input class='btn btn-outline btn-primary' type='submit' value='DAFTAR' style="float:right; margin-left:5px;" />
          </div>
          </form>
          </div>
          </div>
          </div>
          </div>
          </div>
      
    </div>
    </div>  -->

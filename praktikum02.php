<?php
include_once "header.php";
include_once "sidebar.php";
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Praktikum 2</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item"><a href="praktikum03.php">Praktikum-3</a></li>
              <li class="breadcrumb-item"><a href="bmi_tampil.php">Project</a></li>
              <li class="breadcrumb-item active">Web Project</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Form Belanja</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
              <div class="container-fuild d-flex">
                <form class="container mt-4 m-2 mb-2" method="POST" action="praktikum02.php">
                    <div class="form-group row">
                    <label for="name" class="col-2 col-form-label">Customer</label> 
                    <div class="col-7">
                        <input id="name" name="customer" placeholder="Nama Customer" type="text" class="form-control" required="required">
                    </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2">Pilih Produk</label> 
                    <div class="col-7">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="produk" id="radio_0" type="radio" class="custom-control-input" value="TV" required="required"> 
                        <label for="radio_0" class="custom-control-label">TV</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="produk" id="radio_1" type="radio" class="custom-control-input" value="Kulkas" required="required"> 
                        <label for="radio_1" class="custom-control-label">KULKAS</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="produk" id="radio_2" type="radio" class="custom-control-input" value="Mesin Cuci" required="required"> 
                        <label for="radio_2" class="custom-control-label">MESIN CUCI</label>
                    </div>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="number" class="col-2 col-form-label">Jumlah</label> 
                    <div class="col-4">
                        <input id="number" name="jumlah" placeholder="Jumlah" type="text" class="form-control" required="required">
                    </div>
                    </div> 
                    <div class="form-group row">
                    <div class="offset-2 col-7">
                        <button name="submit" type="submit" class="btn btn-success">Kirim</button>
                    </div>
                    </div>
                </form>

                <div class="col-md-3 mt-4">
                    <ul class="list-group"id="list">
                        <li class="list-group-item active" aria-current="true">Daftar Harga</li>
                        <li class="list-group-item">TV : 4.200.000</li>
                        <li class="list-group-item">Kulkas : 3.100.000</li>
                        <li class="list-group-item">Mesin Cuci : 3.800.000</li>
                        <li class="list-group-item active" aria-current="true">Harga Dapat Berubah Setiap Saat</li>
                    </ul>
                </div>
            </div>
            <br>
            <hr>
                <?php
                error_reporting(0); 
                    $proses = $_POST['submit'];
                    $nama_customer = $_POST['customer'];
                    $produk = $_POST['produk'];
                    $jumlah_produk = $_POST['jumlah'];

                    if ($produk == "TV"){
                        $total = $jumlah_produk * 4200000;
                    } elseif($produk == "Kulkas"){
                        $total = $jumlah_produk * 3100000;
                    } elseif($produk == "Mesin Cuci"){
                        $total = $jumlah_produk * 3800000;
                    } else{
                        "Konfirmasi Anda Salah";
                    }

                    echo "Nama Customer : $nama_customer";
                    echo "<br/>Produk Yang Dipilih : $produk";
                    echo "<br/>Jumlah Produk : $jumlah_produk";
                    echo "<br/>Total Harga : Rp.". number_format($total). "-";
                ?>

              </div>

              <!-- /.card-body -->
              <div class="card-footer">
                Wahyudin-0110221140-2TI06
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">From Nilai</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                

              <form method="POST" action="praktikum02.php">
                <div class="container">
                <div class="form-group row">
                <label for="nilai_uts" class="col-4 col-form-label">Nama</label> 
                <div class="col-8">
                <input id="nama" name="nama" placeholder="Masukan nama anda" type="text" class="form-control">
                </div>
                </div>
                <div class="form-group row">
                    <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
                    <div class="col-8">
                    <select id="matkul" name="matkul" class="custom-select">
                        <option value="DDP">Dasar - Dasar Pemrograman</option>
                        <option value="WEB">Pemrograman web</option>
                        <option value="BASDAT">Basis Data</option>
                    </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
                    <div class="col-8">
                    <input id="nilai_uts" name="nilai_uts" placeholder="Masukan nilai uas" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
                    <div class="col-8">
                    <input id="nilai_uas" name="nilai_uas" placeholder="Masukan nilai uas" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas</label> 
                    <div class="col-8">
                    <input id="nilai_tugas" name="nilai_tugas" placeholder="Masukan nilai tugas" type="text" class="form-control">
                    </div>
                </div> 
                <div class="form-group row">
                    <div class="offset-4 col-8">
                    <button name="proses" type="submit" value="simpan" class="btn btn-primary">Submit</button>
                    </div>
                </div>
                </div>
                </form>

                <?php
                // ngambil request data yang kita input
                $proses = $_POST['proses'];
                $nama_siswa = $_POST['nama'];
                $mata_kuliah = $_POST['matkul'];
                $uts = $_POST['nilai_uts'];
                $uas = $_POST['nilai_uas'];
                $tugas = $_POST['nilai_tugas'];
                $total = $uts + $uas + $tugas;
                $alphabet = $total/3;
                if($alphabet <= 55){
                    $lulus = "Anda Tidak Lulus";
                }
                else{
                    $lulus = "Selamat Anda Lulus";
                }
                if($alphabet >= 85){
                    $grade = "A";
                }
                elseif($alphabet >= 70){
                    $grade = "B";
                }
                elseif($alphabet >= 56){
                    $grade = "C";
                }
                elseif($alphabet >= 36){
                    $grade = "D";
                }
                elseif($alphabet >= 10){
                    $grade = "E";
                }
                else{
                    $grade = "I(Tidak Ada Nilai)";
                }
                // Menampilkan data yang kita telah ambil
                echo "Nama : $nama_siswa";
                echo "<br/>Mata Kuliah : $mata_kuliah";
                echo "<br/>Nilai UTS : $uts";
                echo "<br/>NIlai UAS : $uas";
                echo "<br/>Nilai Tugas : $tugas";
                echo "<br/>Grade : $grade";
                echo "<br/>Keterangan : $lulus";
                echo "<br/>Data Telah di $proses";
                ?>
              </div>

              <!-- /.card-body -->
              <div class="card-footer">
                Wahyudin-0110221140-2TI06
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">If Else</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <?php
                    $teman = "zuhdi";

                    if($teman == "febri"){
                        echo "Zuhdi adalah teman saya";

                    }
                    else{
                        echo "Zuhdi bukan teman saya";
                    }
                ?>
              </div>

              <!-- /.card-body -->
              <div class="card-footer">
                Wahyudin-0110221140-2TI06
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->

    </div>
  <!-- /.content-wrapper -->

<?php
include_once "footer.php";
?>
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
            <h1>Praktikum 5</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item"><a href="praktikum07.php">Praktikum-7</a></li>
              <li class="breadcrumb-item"><a href="bmi_tampil.php">Project</a></li>
              <li class="breadcrumb-item active">Praktikum 5</li>
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
                <h3 class="card-title">Account Bank</h3>

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
            class Account{
                public $no_akun;
                public $nama;
                public $saldo;

                function __construct($no_akun,$nama, $saldo){
                    $this->no_akun = $no_akun;
                    $this->nama = $nama;
                    $this->saldo = $saldo;
                }
            }
            ?>

            <?php 
            // require_once "class_account.php";
            $bank1 = new Account("C343", "Ahmad", number_format("6000000",0,".","."));
            $bank2 = new Account("C344", "Budi", number_format("5350000",0,".","."));
            $bank3 = new Account("C345", "Kurniawan", number_format("2500000",0,".","."));

            $ar_bank = [$bank1,$bank2,$bank3];
            ?>
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Akun Bank</title>
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
            </head>
            <body>
            <table class="container table table-striped table-bordered">
            <h2 style="text-align: center;">Account Bank MR.WAY</h2>
            <hr/>
            <p class="container">Ahmad menabung Rp. 1000.000        
                <br> Budi tarik uang Rp. 2.500.000</p>
                <br>
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">No. Akun</th>
                <th scope="col">Pemilik</th>
                <th scope="col">Saldo</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $nomor = 1;
                foreach ($ar_bank as $bank){
                ?>
                <tr>
                    <td scope="row"><?=$nomor?></td>
                    <td><?=$bank->no_akun?></td>
                    <td><?=$bank->nama?></td>
                    <td><?=$bank->saldo?></td>
                </tr>
                <?php 
                $nomor++;
                }  
                ?>
            </tbody>
            </table>
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
                <h3 class="card-title">Class Buah</h3>

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
            // buka class buah
            class Buah {
                // buat property
                public $name;
                protected $color;
                private $berat;

                // buat method
                public function set_color($c){
                    return $this->color = $c;
                }
                public function set_berat($b){
                    return $this->berat = $b;
                }
            }
            // buat objek
            $mangga = new buah();
            echo $mangga -> name = 'Mangga';
            echo '<br/>';
            echo $mangga -> set_color('hijau');
            echo '<br/>';
            echo $mangga -> set_berat('300 kg');
            ?>
            <hr>
            <?php
            class Fruit{
                public $name;
                public $warna;

                public function __construct($name, $warna)
                {
                    $this->name = $name;
                    $this->warna = $warna;
                }
                public function intro(){
                    echo "<br/>Nama aku adalah {$this->name} dan warna aku adalah {$this->warna}";
                }
            }
            class Strawberry extends Fruit{
                public function message(){
                    echo "Aku adalah strawberry atau pisang?";
                }
            }
            $buah = new Strawberry("Strawberry", "Merah");
            $buah->message();
            $buah->intro();
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
                <h3 class="card-title">Class Dispenser</h3>

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
            class Dispenser{
                protected $volume;
                protected $hargaSegelas;
                const volumeGelas = 250;
                public $namaMinuman;

                public function set_volume($v){
                    return $this->volume = $v;
                }
                public function set_hargaSegelas($hs){
                    return $this->hargaSegelas = $hs;
                }
                public function pengurangan($vol){
                    $this->volume = $vol - self::volumeGelas;
                    echo "Hasil volume bernilai ".$this->volume ." " ."ML";
                }
            }
            $air = new Dispenser();
            echo $air -> namaMinuman  = "<h5><b>Minuman Halal ASSHOFWAH</b></h5>";
            echo "<hr/>";
            echo $air -> set_volume("Volume galon nya 1000 ML");
            echo "<br/>";
            echo $air -> set_hargasegelas("Harga segelas Rp. " .number_format("3000",0,".","."));
            echo "<br/>";
            echo "Mr. Way membeli 1 gelas air yang volumenya " . Dispenser::volumeGelas ."  " ." ML";
            echo "<br/>";
            $air->pengurangan(1000);
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
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
            <h1>Project BMI</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item"><a href="praktikum01.php">Praktikum-1</a></li>
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
                <h3 class="card-title">BMI - Form Pasien</h3>

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
                    class Pasien{
                        public $id;
                        public $kode;
                        public $nama;
                        public $tmp_lahir;
                        public $tgl_lahir;
                        public $gender;
                        public $email;

                        public function __construct($id, $kode, $nama, $tmp_lahir, $tgl_lahir, $gender, $email){
                            $this->id = $id;
                            $this->kode = "P" .sprintf("%03d", $this->id);
                            $this->nama = $nama;
                            $this->tmp_lahir = $tmp_lahir;
                            $this->tgl_lahir = $tgl_lahir;
                            $this->gender = $gender;
                            $this->email = $email;
                            
                        }
                    }

                    trait Bmi{
                        public $berat_badan;
                        public $tinggi_badan;

                        public function hasilBMI(){
                            return $this->berat_badan / (($this->tinggi_badan/100)**2);
                        }

                        public function nilai($nilai){
                            if ($nilai <= 18.4){
                                return "Kekurangan Berat Badan";
                            }elseif ($nilai >= 18.5 && $nilai <= 23.9){
                                return "Sehat (Ideal)";
                            }elseif ($nilai >= 24 && $nilai <= 26.9){
                                return "Kelebihan Berat Badan";
                            }elseif ($nilai >= 27 && $nilai <= 29.9){
                                return "Obesitas 1";
                            }elseif ($nilai >= 30){
                                return "Obesitas 2";
                            }
                        }
                    }

                    class BmiPasien extends Pasien{
                        use Bmi;
                        public $bmi;
                        public $tanggal;
                        public $pasien;

                        public function __construct($id, $tanggal, $nama, $tmp_lahir, $tgl_lahir, $gender, $email, $berat_badan, $tinggi_badan){
                            parent::__construct($id, $tanggal, $nama, $tmp_lahir, $tgl_lahir, $gender, $email, $berat_badan, $tinggi_badan);
                            $this->berat_badan = $berat_badan;
                            $this->tinggi_badan = $tinggi_badan;
                            $this->tanggal = date("Y-m-d");
                        }
                    }
                    ?>

                  <form method="POST" action="bmi_tampil.php" class="m-5">
                    <div class="form-group row">
                    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
                    <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-address-card"></i>
                        </div>
                        </div> 
                        <input id="nama" name="nama" placeholder="Masukan Nama Anda" type="text" class="form-control">
                    </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label> 
                    <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-bed"></i>
                        </div>
                        </div> 
                        <input id="tmp_lahir" name="tmp_lahir" placeholder="Masukan Tempat Lahir Anda" type="text" class="form-control">
                    </div>
                    </div>
                </div> 
                    <div class="form-group row">
                    <label for="date" class="col-4 col-form-label">Tanggal Lahir</label> 
                    <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-calendar"></i>
                        </div>
                        </div> 
                        <input id="tanggalLahir" name="tanggalLahir" placeholder="Masukkan Tanggal Lahir Anda" type="date" class="form-control" required="required">
                    </div>
                    </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">Jenis Kelamin</label> 
                        <div class="col-8">
                            <i class="fa fa-male"></i>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="gender" id="gender_0" type="radio" class="custom-control-input" value="Pria"> 
                            <label for="gender_0" class="custom-control-label">Pria</label>
                        </div>
                        <i class="fa fa-female"></i>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="gender" id="gender_1" type="radio" class="custom-control-input" value="Wanita"> 
                            <label for="gender_1" class="custom-control-label">Wanita</label>
                        </div>
                        </div>
                    </div>
                    <div class="form-group row">
                    <label for="weight" class="col-4 col-form-label">Berat Badan</label> 
                    <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-anchor"></i>
                        </div>
                        </div> 
                        <input id="weight" name="weight" placeholder="Masukan Berat Badan Anda" type="text" class="form-control">
                    </div>
                    </div>
                </div> 
                <div class="form-group row">
                    <label for="weight" class="col-4 col-form-label">Tinggi Badan</label> 
                    <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-street-view"></i>
                        </div>
                        </div> 
                        <input id="weight" name="height" placeholder="Masukan Tinggi Badan Anda" type="text" class="form-control">
                    </div>
                    </div>
                </div> 
                <div class="form-group row">
                    <label for="email" class="col-4 col-form-label">Email</label> 
                    <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-envelope"></i>
                        </div>
                        </div> 
                        <input id="email" name="email" placeholder="Masukan Email Anda" type="text" class="form-control">
                    </div>
                    </div>
                </div>  
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                        <button name="submit" type="submit" class="btn btn-primary">Hitung</button>
                        </div>
                    </div>
                </form><hr>     
                 
                <div class="card">
                    <div class="card-title text-center">Data BMI Pasien</div>
                </div>
                <?php
                
                error_reporting(0);
                $pasien = array(
                    1 => array(1, "2022-01-10", "P001", "Ahmad", "Pria", 69.8, 169, 24.7, "Kelebihan Berat Badan"),
                    array(2, "2022-01-10", "P002", "Rina", "Wanita", 53.3, 165, 20.3, "Sehat (Ideal)"),
                    array(3, "2022-01-11", "P003", "Luthfi", "Pria", 45.2, 171, 15.4, "Kekurangan Berat Badan")
                );

                $nama = $_POST['nama'];
                $tempat_lahir = $_POST['location'];
                $gender = $_POST['gender'];
                $tanggal_lahir = $_POST['tanggalLahir'];
                $berat_badan = $_POST['weight'];
                $tinggi_badan = $_POST['height'];
                $email = $_POST['email'];

                $psn_baru = new BmiPasien(count($pasien) + 1, $tanggal, $nama, $tmp_lahir, $tgl_lahir, $gender, $email, $berat_badan, $tinggi_badan);
                $psn_baru->bmi = $psn_baru->hasilBMI();
                array_push($pasien, array(
                $psn_baru->id,
                $psn_baru->tanggal,
                $psn_baru->kode,
                $psn_baru->nama,
                $psn_baru->gender,
                $psn_baru->berat_badan,
                $psn_baru->tinggi_badan,
                $psn_baru->bmi,
                $psn_baru->nilai($psn_baru->bmi)));
                ?>
                <table class="table table-striped table-dark table-center">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal Periksa</th>
                            <th>Kode Pasien</th>
                            <th>Nama Pasien</th>
                            <th>Jenis Kelamin</th>
                            <th>Berat Badan</th>
                            <th>Tinggi Badan</th>
                            <th>Nilai BMI</th>
                            <th>Status BMI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach ($pasien as $obj => $val) {
                                echo "<tr>";
                                    echo "<td>".$val[0]."</td>";
                                    echo "<td>".$val[1]."</td>";
                                    echo "<td>".$val[2]."</td>";
                                    echo "<td>".$val[3]."</td>";
                                    echo "<td>".$val[4]."</td>";
                                    echo "<td>".$val[5]."</td>";
                                    echo "<td>".$val[6]."</td>";
                                    echo "<td>".$val[7]."</td>";
                                    echo "<td>".$val[8]."</td>";
                                echo "</tr>";
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
<!-- /.content -->
</div>
  <!-- /.content-wrapper -->

<?php
include_once "footer.php";
?>
<?php
require_once "BMI.PHP";
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
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
</body>
</html>
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
</body>
</html>
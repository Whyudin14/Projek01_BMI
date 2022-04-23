<?php
require_once 'libfungsi.php';
// ngambil request data yang kita input
$proses = $_POST['proses'];
$nama_siswa = $_POST['nama'];
$mata_kuliah = $_POST['matkul'];
$uts = $_POST['nilai_uts'];
$uas = $_POST['nilai_uas'];
$tugas = $_POST['nilai_tugas'];
$total = $uts + $uas + $tugas;
$_nilai = $total/3;
$hasil_ujian = kelulusan($_nilai);
// Menampilkan Grade menggunakan elseif
$peringkat = grade($_nilai);
// Menampilkan data yang kita telah ambil
echo "Nama : $nama_siswa";
echo "<br/>Mata Kuliah : $mata_kuliah";
echo "<br/>Nilai UTS : $uts";
echo "<br/>NIlai UAS : $uas";
echo "<br/>Nilai Tugas : $tugas";
echo "<br/>Grade : $peringkat";
echo "<br/>Keterangan : $hasil_ujian";
echo "<br/>Data Telah di $proses";
?>
</body>
</html>
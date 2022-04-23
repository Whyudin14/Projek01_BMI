<?php
$ar_buah = ["Pepaya","Mangga","Pisang","Jambu"];
// cetak buah index ke 2
echo "Ini adalah hasil data buah array";
echo "<br/>$ar_buah[2]";
// cetak jumlah buah
echo "<br/>Jumlah buah " .count($ar_buah);
// cetak seluruh buah
echo "<ol>";
foreach ($ar_buah as $buah) {
    echo "<li>$buah</li>";
}
echo "</ol>";
// tambahkan array
$ar_buah[] = "Durian";
// hapus salah satu buah berdasarkan indexnya
unset($ar_buah[1]);
// ubah index ke 2 menjadi manggis
$ar_buah[2] = "Manggis";
echo "<ul>";
foreach ($ar_buah as $k => $v) {
    echo "<li>Buah index ke - $k adalah $v </li>";
}
echo "</ul>";
?>
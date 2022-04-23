<?php
// membuat class manusia
class Manusia{
    // buat property
    var $nama;
    var $warna;

    // buat method atau function
    function tampilkan_nama(){
        return 'Nama saya adalah Wahyudin';
    }

    function warna_kulit(){
        return 'Warna kulit saya berwarna sawo matang';
    }
}
// buat object
$manusia = new Manusia();

echo $manusia -> tampilkan_nama();
echo $manusia -> warna_kulit();
?>
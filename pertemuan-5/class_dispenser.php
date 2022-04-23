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
echo $air -> namaMinuman  = "<h3><b>Minuman Halal ASSHOFWAH</b></h3>";
echo "<hr/>";
echo $air -> set_volume("Volume galon nya 1000 ML");
echo "<br/>";
echo $air -> set_hargasegelas("Harga segelas Rp. " .number_format("3000",0,".","."));
echo "<br/>";
echo "Mr. Way membeli 1 gelas air yang volumenya " . Dispenser::volumeGelas ."  " ." ML";
echo "<br/>";
$air->pengurangan(1000);
?>
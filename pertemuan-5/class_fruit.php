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
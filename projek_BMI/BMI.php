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
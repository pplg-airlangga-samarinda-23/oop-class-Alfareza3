<?php
class Balok
{
    // deklarasikan atribut-atribut kelas Balok
    public $panjang;
    public $lebar;
    public $tinggi;
    
    // definisikan metode konstruktor, setter ,dan getter
    public function __construct($panjang, $lebar, $tinggi){
        $this->panjang = $panjang;
        $this->lebar = $lebar;
        $this->tinggi = $tinggi;
    }
    public function setPanjang($panjang){
        $this->panjang=$panjang;
    }
    public function setLebar($lebar){
        $this->lebar=$lebar;
    }
    public function setTinggi($tinggi){
        $this->tinggi=$tinggi;
    }

    public function getPanjang(){
        return $this->panjang;
    }

    public function getLebar(){
        return $this->lebar;
    }
    public function getTinggi(){
        return $this->tinggi;
    }



    // definisikan metode menghitung volume, luas permukaan, 
    public function hitungLuas(){
        return 2 *($this->panjang * $this->lebar + $this->panjang * $this->lebar + $this->lebar * $this->tinggi);
    }

    public function hitungVolume(){
        return ($this->panjang * $this->lebar * $this->tinggi);
    }
} 
$balok_1 = new Balok(4, 8, 5);
$balok_2 = new Balok(3, 10, 12);

// contoh output: Balok
echo "Balok 1 <br>";
echo "Volume: ". $balok_1->hitungVolume(). "<br>";
echo "Luas: ". $balok_1->hitungLuas(). "<br>";
// Balok 1
// Volume: 160
// Luas Permukaan: 184
echo "Balok 2 <br>";
echo "Volume: ". $balok_2->hitungVolume()."<br>";
echo "Luas: ". $balok_2->hitungLuas();
// Balok 2
// Volume: 360
// Luas Permukaan: 372
?>
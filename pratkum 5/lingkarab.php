<?php
class Lingkaran {
    private $jari;
    const PHI = 3.14;


    function __construct($r) {
        $this->jari = $r;
    }
    function getLuas(){
        return self::PHI * $this->jari * $this->jari;
    }
    function getKeliling(){
        return 2 * self::PHI * $this->jari;
    }
}

// Instance Objeck
$Lingkaran1 = new Lingkaran(10);

echo "Nilai PHI = " . Lingkaran::PHI;
echo "<br>Luas Lingkaran = " . $Lingkaran1->getLuas();
echo "<br>Luas Lingkaran = " . $Lingkaran1->getKeliling();

//Intance Object ke-2
$Lingkaran1 = new Lingkaran (20);
echo "<br>Luas Lingkaran 2 = " . $Lingkaran1->getLuas();
echo "<br>Keliling Lingkaran 2 = " . $Lingkaran1->getKeliling();
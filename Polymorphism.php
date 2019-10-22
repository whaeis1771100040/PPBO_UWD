<?php
print "==================TUGAS POLYMORPHISM==================<br>";
class kendaraan{

private $merk;
private $harga;
private $negara;

function __construct($merk,$harga,$negara){
$this->merk=$merk;
$this->harga=$harga;
$this->negara=$negara;
}

function BacaMerk(){
return $this->merk;
}

function BacaHarga(){
return $this->harga;
}

function BacaNegara(){
return $this->negara;

}
}
$Mobil = new kendaraan("Avansa",100000000,"Jepang");

echo "Merk Kendaraan = ".$Mobil->BacaMerk()."<br>";
echo "Harga Mobil = ".$Mobil->BacaHarga()."<br>";
echo "Asal Negara = ".$Mobil->BacaNegara()."<br>";

print "=================<br>";

$Mobil2 = new kendaraan("Inova",150000000,"Jepang");

echo "Merk Kendaraan = ".$Mobil2->BacaMerk()."<br>";
echo "Harga Mobil = ".$Mobil2->BacaHarga()."<br>";
echo "Asal Negara = ".$Mobil2->BacaNegara()."<br>";

print "=================<br>";

$Mobil3 = new kendaraan("Ferrari",450000000,"Itali");

echo "Merk Kendaraan = ".$Mobil3->BacaMerk()."<br>";
echo "Harga Mobil = ".$Mobil3->BacaHarga()."<br>";
echo "Asal Negara = ".$Mobil3->BacaNegara()."<br>";
?>
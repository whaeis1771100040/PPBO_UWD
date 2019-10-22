<?php
print "==========================CONTOH SINGLE INHERITANCE==========================<br>";
class Bapak{
	var $nama ="Bapak";
	function Bapak($n){
		$this->nama=$n;
	}
	function Hallo(){
		echo "Hallo, saya Mita putri ".$this->nama."<br>";
		echo "Hallo, saya Anfredo ".$this->nama."<br>";
	}
}
class Anak extends Bapak {
}
$test=new Anak("Anak dari Bapak Joko");
$test=new Anak("anak ke 2 dari Bapak Joko");
$test->Hallo();
?>
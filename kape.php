<?php
class mobil{
	private $merk;
	private $harga;
function __construct($merk,$harga,$warna,$tipe){
	$this->merk=$merk;
	$this->harga=$harga;
	$this->warna=$warna;
	$this->tipe=$tipe;
}
function BacaMerk(){
	return $this->merk;
}
function BacaHarga(){
	return $this->harga;
}
function BacaWarna(){
	return $this->warna;
}
function BacaTipe(){
	return $this->tipe;
}
function __destruct(){
echo "Merk dan Harga telah dihapus";
}
}
$mobil = new mobil ("Avanza",250000000,"putih","Tipe Z10R");
echo "Merk mobil=". $mobil ->BacaMerk()."<br>";
echo "Harga mobil=". $mobil ->BacaHarga()."<br>";
echo "Warna mobil=". $mobil ->BacaWarna()."<br>";
echo "Tipe mobil=". $mobil ->BacaTipe()."<br>";
?>
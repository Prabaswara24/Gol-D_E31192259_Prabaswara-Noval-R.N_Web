<?php 
class Tablet{
	
	//private membuat objek/method hanya dapat diakses oleh kelas itu sendiri
	private $merk;
	//public membuat objek/method dapat diakses oleh kelas manapun bahkan dari luar kelas
	public $camera;
	//protected membuat objek/method dapat dikases oleh kelas induk bahkan kelas warisan hasil dari perluasan kelas induk
	protected $memory = "16 GB";
	
	public function Merk($item)
	{
		return $this -> merk = $item;
		return $merk;
	}
}

class Handphone extends Tablet{
	
	private $handphone_baru;
	
	public function beli_handphone()
	{
		$camera = $this -> camera;
		$memory = $this -> memory;
		$handphone_baru = $this -> handphone_baru = "memiliki kualitas kamera sebesar ".$camera." serta memiliki kapasitas memory sebesar ".$memory."";
		return $handphone_baru;
	}
}

$hp = new Handphone();

$merk = $hp -> Merk('OPPO A71');
$hp -> camera = '13 MP';
$coba = $hp -> beli_handphone();
echo $merk." ".$coba;
?>
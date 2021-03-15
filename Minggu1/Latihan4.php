<?php>
//Latihan No.4
class Clothing{
    public  $jenis,
            $bahan,
            $ukuran,
            $jenissablon,
            $harga,
            $total;
    
    public function diskon(){
        $grandtotal = ($this->harga * $this->total);
        $hargaDiskon = $grandtotal;
        if($grandtotal >= 200000 && $grandtotal < 500000){
            $hargaDiskon = $grandtotal - ($grandtotal * 10/100);
        }else if($grandtotal >= 500000){
            $hargaDiskon = $grandtotal - ($grandtotal * 20/100);
        }
        return $hargaDiskon;
    }
    public function bonus(){
        $bonusBarang = 0;
        if($this -> total >= 12 && $this -> total < 24){
            $bonusBarang = 1;
        }else if($this -> total >= 24 ){
            $bonusBarang = 2;
        }
        return $bonusBarang;
    }
    public function tambahHarga(){
        if($this -> ukuran == 'Xl'){
            $tambah = $this -> harga + 5000;
        }else if($this -> ukuran == 'XXl'){
            $tambah = $this -> harga + 5000;
        }else if($this -> ukuran == 'XXXl'){
            $tambah = $this -> harga + 5000;
        }
        return $tambah;
    }
    function __construct($a, $b, $c, $d, $e, $f){
        $this -> jenis = $a;
        $this -> bahan = $b;
        $this -> ukuran = $c;
        $this -> jenissablon = $d;
        $this -> harga = $e;
        $this -> total = $f;
    }
    function Tampilkan(){
        $hasil ="<h2>Latihan no.4</h2>".
                "Jenis Barang: ".$this -> jenis."<br />".
                "Bahan: ".$this -> bahan."<br />".
                "Ukuran: ".$this -> ukuran."<br />".
                "Jenis Sablon: ".$this -> jenissablon."<br />".
                "Harga: Rp.".number_format($this -> harga,2,',','.')."<br />".
                "Total: ".$this -> total."<br />".
                "Harga Total: Rp.".number_format($this -> diskon(),2,',','.')."<br />".
                "Bonus: ".$this -> bonus()." ".$this -> jenis."<hr />";
        return $hasil;
    }
}

$pesan = new Clothing('Kaos', 'Cottom Combed 30s', 'L', 'DTG', 99000, 24);
echo $pesan -> Tampilkan();
        
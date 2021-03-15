<?php
class mobiLengkap{
    public function nonton()
    {
        echo "Tv dihidupkan, Tv Mencari Chanel, Tv Menampilkan gambar";
    }
}
class MobilBMW extends mobiLengkap
{
    public function bmw()
    {
        $this->nonton();
    }
}
class MobilBMWberaksi extends MobilBMW
{
    public function HidupkanMobil()
    {
        echo "Mobil dihidupkan";
    }
    public function MatikanMobil()
    {
        echo "Mobil dimatikan";
    }
    public function ubahGigi()
    {
        echo "Gigi diubah";
    }
    public function message()
    {
        $this->bmw();
        $this->HidupkanMobil();
        $this->MatikanMobil();
        $this->ubahGigi();
    }
}

$car = new MobilBMWberaksi();

$car->message();
?>
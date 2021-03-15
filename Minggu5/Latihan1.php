<?php
interface hitungLuas{
    public function hitungLuasLingkaran();
}

class luasLingkaran implements hitungLuas
{
    public $d;
    public function __construct($d)
    {
        $this->d=$d;
    }
    public function hitungLuasLingkaran()
    {
        return $this->d * $this->d * pi() / 4;
    }
}

$lingkaran = new luasLingkaran(14);

echo $lingkaran->hitungLuasLingkaran();
?>
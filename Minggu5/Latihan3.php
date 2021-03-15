<?php
interface hitungLuas{
    public function hitungLuasSegitiga();
}

class luasSegitiga implements hitungLuas
{
    public $alas;
    public $tinggi;

    public function __construct($alas,$tinggi)
    {
        $this->alas=$alas;
        $this->tinggi=$tinggi;
    }
    public function hitungLuasSegitiga()
    {
        return $this->alas * $this->tinggi / 2;
    }
}

$segitiga = new luasSegitiga(8,3);
echo $segitiga->hitungLuasSegitiga();
?>
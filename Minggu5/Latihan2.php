<?php
interface hitungLuas{
    public function hitungLuasPersegi();
}

class luasPersegi implements hitungLuas
{
    public $sisi;
    public function __construct($sisi)
    {
        $this->sisi=$sisi;
    }
    public function hitungLuasPersegi()
    {
        return $this->sisi * $this->sisi;
    }
}

$persegi = new luasPersegi(4);

echo $persegi->hitungLuasPersegi();
?>
<?php
class celana{
    public $model;
    public $tipe;

    public function __construct($model,$tipe)
    {
        $this->model=$model;
        $this->tipe=$tipe;
    }

    public function pant()
    {
        echo "celana memiliki model : " . $this->model . "dan memiliki tipe : " . $this->tipe;
    }
}
class topi extends celana
{
    public function hat()
    {
        echo "topi memiliki model : " . $this->model;
    }
}
class baju extends topi
{
    public function cloth()
    {
        echo "baju memiliki tipe : " . $this->tipe;
    }
    public function clothes()
    {
        $this->pant();
        $this->hat();
        $this->cloth();
    }
}
$pakaian = new baju("bagus","panjang");

$pakaian->clothes();
?>
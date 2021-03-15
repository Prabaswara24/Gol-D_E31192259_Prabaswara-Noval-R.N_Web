<?php
#file 1
interface shape{
    public function calcArea();
}

#file 2
class Circle implements shape{
    private $radius;

    public function __construct($radius){
        $this->radius=$radius;
    }

    #calcArea calculates the area of circles
    public function calcArea(){
        return $this->radius = $this->radius*pi();
    }
}
#file3
class Rectangle implements shape{
    private $width;
    private $height;

    public function __construct($width, $height){
        $this->width=$width;
        $this->height=$height;
    }

    #calcArea calculates the area of rectangles
    public function calcArea(){
        return $this->width * $this->height;
    }
}

$circ = new Circle(3);
$rect = new Rectangle(3,4);

echo $circ->calcArea();
echo $rect->calcArea();
?>
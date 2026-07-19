<?php
require_once "Shape.php";

class Triangle extends Shape{
    public function AreaTriangle (){
        return ($this->getAncho() * $this->getAlto())/2;
    }
}


?>
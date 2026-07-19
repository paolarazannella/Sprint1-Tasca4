<?php
require_once "Shape.php";

class Rectangle extends Shape{
    public function AreaRec (){
        return ($this->getAncho() * $this->getAlto());
    }
}
?>
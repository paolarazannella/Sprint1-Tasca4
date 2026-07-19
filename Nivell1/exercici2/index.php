<?php

require_once "Triangle.php";
require_once "Rectangle.php";

$triangulo = new Triangle(10, 7);
$rectangulo = new Rectangle(4, 20);

echo "Area del triangulo: " . $triangulo->AreaTriangle();
echo "<br>";
echo "Area del rectangulo: " . $rectangulo->AreaRec();
?>
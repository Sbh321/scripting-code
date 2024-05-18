<?php
class Rectangle {
public $width;
public $height;
public function __construct($width, $height) {
$this->width = $width;
$this->height = $height;
}
public function calculateArea() {
return $this->width * $this->height;
}
}
$rectangle = new Rectangle(5, 10);
echo "Width: " . $rectangle->width . ", Height: " . $rectangle->height . "\n";
echo "Area: " . $rectangle->calculateArea();
?>
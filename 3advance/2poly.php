<?php
class shape
{
public function calcArea()
{
}
}
class rect extends shape
{
private $l;
private $b;
public function __construct($x,$y)
{
$this->l=$x;
$this->b=$y;
}
public function calcArea()
{
echo 'the area of rectangle is '.$this->l*$this->b.'.<br>';
}
}
class square extends shape {
private $l;
public function __construct($x)
{
$this->l=$x;
}
public function calcArea(){
echo 'the area of square is ' .$this->l*$this->l. '.<br>';} }
$r=new rect(10,6);
$r->calcArea();
$s=new square(8);
$s->calcArea();
?>
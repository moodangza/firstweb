<?php
class Fruit {
  public $name;
  protected $color;
  private $weight;
}
class color extends Fruit {
    public function colorname(){
        return 'red';
    }

}

$mango = new Fruit();
$mango->name = 'Mango'; // OK
$fruitcolor = new color();
$fruitcolor->colorname();
echo $mango->name.'สี'.$fruitcolor->colorname();

//$mango->color = 'Yellow'; // ERROR
//$mango->weight = '300'; // ERROR
?>
<?php
// Pemanggilan metode startEngine() tanpa pembuatan objek $car1
class Car
{
    public $brand;

    public function startEngine()
    {
        echo "Engine started!";
    }
}

$car = new Car();
$car -> brand = "Toyota";

$car2 = new Car();
$car2 -> brand = "Honda";

$car -> startEngine();
echo $car2 -> brand;
?>
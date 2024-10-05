<?php
declare(strict_types=1);
class Car {
    public string $brand;
    public string $model;

    public function __construct(
        string $brandName,
        string $modelName
    )
    {
        $this->brand = $brandName;
        $this->model = $modelName;
    }

    public function drive(): string
    {
        return "Cars can drive";
    }

    public function reverse(): string
    {
        return 'Cars can reverse';
    }
}

class ModernCar extends Car
{
    public function autoDrive(): string
    {
        return 'modern car can auto drive';
    }
}

$toyota = new Car('Toyota', 'corolla');
echo $toyota->brand;
echo "<br />";
echo "<br />";
echo "<br />";


$tesla = new ModernCar('tesla', 'model 3');
echo $tesla->brand;
echo "<br />";
echo $tesla->drive();
echo "<br />";
echo $tesla->autoDrive();



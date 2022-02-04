<?php

abstract class Delivery
{
  
    abstract public function getCar(): Product;

    public function getInfoDelivery(): string
    {
       
        $car = $this->getCar();
        $carInfo = $car->getModelCar() . "\n\n" . $car->getCost();

        return $carInfo;
    }
}


class EconomyType extends Delivery
{

    public function getCar(): Product
    {
        return new EconomyCar();
    }
}

class StandartType extends Delivery
{
    public function getCar(): Product
    {
        return new StandartCar();
    }
}
class LuxuryType extends Delivery
{
    public function getCar(): Product
    {
        return new LuxuryCar();
    }
}

interface Product
{
    public function getModelCar(): string;
    public function getCost(): string;

}


class EconomyCar implements Product
{
    public function getModelCar(): string
    {
        return "Модель машины эконом доставки.";
    }
    public function getCost(): string
    {
        return "Цена эконом доставки.";
    }
}

class StandartCar implements Product
{
     public function getModelCar(): string
    {
        return "Модель машины стандартной доставки.";
    }
    public function getCost(): string
    {
        return "Цена стандартной доставки.";
    }
}

class LuxuryCar implements Product
{
    public function getModelCar(): string
    {
        return "Модель машины люкс доставки.";
    }
    public function getCost(): string
    {
        return "Цена люкс доставки.";
    }
}

function clientCode(Delivery $delivery)
{
   
    echo  $delivery->getInfoDelivery();
  
}

clientCode(new EconomyType());

?>
